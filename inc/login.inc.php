<?php

if(isset($_POST["submit"]))
{
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];  

  // Instantiate LoginContr class
  include "../classes/dbc.classes.php";
  include "../classes/login.classes.php";
  include "../classes/login-contr.classes.php";
  $login = new LoginContr($uid, $pwd);

  // Running error handlers and user login
  $login->loginUser();

  // Going to admin page
  header("location: ../admin.php?error=none");

}