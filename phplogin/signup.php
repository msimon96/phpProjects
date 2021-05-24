<?php
  include_once 'header.php';
?>

    <section class="signup-form">
      <h2>Sign Up</h2>
      <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Full Name...">
          <input type="text" name="email" placeholder="Email...">
          <input type="text" name="uid" placeholder="Username...">
          <input type="password" name="pwd" placeholder="Password...">
          <input type="password" name="pwdrepeat" placeholder="Enter Password Again...">
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
      <!-- Error Handlers -->
      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "invalidUid") {
            echo "<p>Choose a proper username!</p>";
          }
          else if ($_GET["error"] == "invalidEmail") {
            echo "<p>Enter a proper email!</p>";
          }
          else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords Don't Match!</p>";
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, please try again!</p>";
          }
          else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already exist!</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<p>You have successfully signed up!</p>";
          }
        }
       ?>
    </section>


<?php
  include_once 'footer.php';
?>
