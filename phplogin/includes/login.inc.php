<?php

if (isset($_POST["submit"])) {

  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

//error handle if fields empty
  if (emptyInputLogin($username, $pwd) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }
//checks user against database and then logs user in
  loginUser($conn, $username, $pwd);
}
//else return to the login page
else {
  header("location: ../login.php");
  exit();
}
