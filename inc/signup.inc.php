<?php

if(isset($_POST["submit"]))
{
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // Instantiate SignupContr class
  include "../classes/dbc.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-contr.classes.php";
  $signup = new SignupContr($uid, $pwd);

  // Running error handlers and user signup
  $signup->signupUser();

  // Going to back to front page
  header("location: ../index.php?error=none");

}