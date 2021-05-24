<?php
  session_start();
  include_once 'includes/functions.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>PHP Authentication</title>
    <meta name="description" content="Basic PHP Authentication Programming">
    <meta name="keywords" content="HTML,CSS,PHP,MySQL">
    <meta name="author" content="Mario Simon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="discover.php">About Us</a></li>
          <li><a href="blog.php">Find Blogs</a></li>
          <!-- If else in order to show logged in user vs user not logged in -->
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign Up</a></li>";
              echo "<li><a href='login.php'>Log In</a></li>";
            }
           ?>
        </ul>
      </div>
    </nav>

  <div class="wrapper">
