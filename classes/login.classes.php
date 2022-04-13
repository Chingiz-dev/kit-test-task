<?php

class Login extends Dbc {

  protected function getUser($uid, $pwd) {
    
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ?;');

    if(!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    if($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../index.php?error=usernotfound");
      exit();
    }

    $userInfo = $stmt->fetchall(PDO::FETCH_ASSOC);
    $checkedPwd = password_verify($pwd, $userInfo[0]["users_pwd"]);

    if(!$checkedPwd) {
      $stmt = null;
      header("location: ../index.php?error=passwordincorrect");
      exit();
    } else {
      session_start();
      $_SESSION["userid"] = $userInfo[0]["users_id"];
      $_SESSION["useruid"] = $userInfo[0]["users_uid"];
      
      $stmt = null;
    }
    
  }

}