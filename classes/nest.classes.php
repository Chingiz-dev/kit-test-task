<?php

class Nest extends Dbc {

  protected function getNest() {
    
    $stmt = $this->connect()->prepare('SELECT * FROM nests;');

    if(!$stmt->execute()) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    if($stmt->rowCount() == 0) {
      $stmt = null;
     return 0;
    }

    $nests = $stmt->fetchall(PDO::FETCH_ASSOC);
    // $checkedPwd = password_verify($pwd, $nest[0]["users_pwd"]);
    return $nests;

   
    $stmt = null;
  }

  protected function setNest($nestParent, $nestTitle, $nestDesc) {
    
    $stmt = $this->connect()->prepare('INSERT INTO nests (nest_parent, nest_title, nest_desc) VALUES (?, ?, ?);');

    if(!$stmt->execute(array($nestParent, $nestTitle, $nestDesc))) {
      $stmt = null;
      header("location: ../admin.php?error=sqlfail");
      exit();
    }

    $stmt = null;
  }

  protected function changeNest($nestId, $nestParent, $nestTitle, $nestDesc) {
    
    $stmt = $this->connect()->prepare('UPDATE nests SET nest_parent = ?, nest_title = ?, nest_desc = ? WHERE nest_id = ?;');

    if(!$stmt->execute(array($nestParent, $nestTitle, $nestDesc, $nestId))) {
      $stmt = null;
      header("location: ../admin.php?error=updateFail");
      exit();
    }

    $stmt = null;
  }

  protected function removeNest($nestId) {
    
    $stmt = $this->connect()->prepare('DELETE FROM nests WHERE nest_id = ?;');

    if(!$stmt->execute(array($nestId))) {
      $stmt = null;
      header("location: ../admin.php?error=updateFail");
      exit();
    }

    $stmt = null;
  }

  protected function getNestsByParent($nestId) {
    
    $stmt = $this->connect()->prepare('SELECT nest_id FROM nests WHERE nest_parent = ?;');

    if(!$stmt->execute(array($nestId))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    if($stmt->rowCount() == 0) {
      $stmt = null;
     return 0;
    }

    $nests = $stmt->fetchall(PDO::FETCH_ASSOC);
    // $checkedPwd = password_verify($pwd, $nest[0]["users_pwd"]);
    return $nests;

   
    $stmt = null;
  }

}