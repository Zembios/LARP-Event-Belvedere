<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <div class="logInFormContainer">
      <div class="loginTitle">Register</div>
      <form class="logInForm" action="index.php" method="post">
        <input type="text" name="username" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="password" name="password" value="" placeholder="Confirm Password">
        <input type="submit" name="btnlogin" value="Register">
      </form>
      <a href="login.php">Already have an account?Log in!</a>
    </div>
  </body>
</html>
