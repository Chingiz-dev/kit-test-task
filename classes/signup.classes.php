<?php

class Signup extends Dbc {

  protected function setUser($uid, $pwd) {
    
    $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd) VALUES (?, ?);');

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    if(!$stmt->execute(array($uid, $hashedPwd))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    $stmt = null;
  }

  protected function checkUser($uid) {
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ?;');

    if(!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location: ../index.php?error=chekuserfailed");
      exit();
    }

    $resultCheck = true;
    if($stmt->rowCount() > 0) {
      $resultCheck = false;  
    }

    return $resultCheck;
  }

}