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
      <div class="loginTitle">LOG IN</div>
      <form class="logInForm" action="includes/login.inc.php" method="post">
        <input type="text" name="username" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="submit" name="btnlogin" value="Log In">
      </form>
      <a href="register.php">Have no account yet?Register!</a>
    </div>
  </body>
</html>
