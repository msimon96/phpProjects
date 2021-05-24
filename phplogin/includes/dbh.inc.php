<?php
//dbconnection - dbpassword is whatever password is set or empty if none set
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpauthensys";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// Issue connection failed error message -> Kill connnection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
