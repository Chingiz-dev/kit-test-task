<?php

class SignupContr extends Signup {

  private $uid;
  private $pwd;

  public function __construct($uid, $pwd) {
    $this->uid = $uid;
    $this->pwd = $pwd;
  }

  public function signupUser() {
    if($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyinput");
      exit();
    }
    if($this->invalidUid() == false) {
      header("location: ../index.php?error=username");
      exit();
    }
    if($this->uidTakenCheck() == false) {
      header("location: ../index.php?error=usertaken");
      exit();
    }

    $this->setUser($this->uid, $this->pwd);
  }

  private function emptyInput() {
    $result = true;
    if(empty($this->uid) || empty($this->pwd)) {
      $result = false;
    } 
    return $result;
  }

  private function invalidUid() {
    $result = true;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    }
    return $result;
  }

  private function invalidEmail() {
    $result = true;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    }
    return $result;
  }
 
  private function passMatch() {
    $result = true;
    if($this->pwd != $this->pwd) {
      $result = false;
    }
    return $result;
  } 
  
  private function uidTakenCheck() {
    $result = true;
    if(!$this->checkUser($this->uid)) {
      $result = false;
    }
    return $result;
  }

}