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
    <div class= "container">
      <h3><i>Username</i> - Character information</h3>
      <div class="preferences">
      <h4>Choose preferred role: </h4>
      <form>
        <input type="checkbox" name="role1" value="Role 1">Role 1
        <input type="checkbox" name="role2" value="Role 2">Role 2
        <input type="checkbox" name="role3" value="Role 3">Role 3
      </form>
      <h4>Intensity of political game: </h4>
      <form>
        <input type="radio" name="intensity" value="Low"> Low
        <input type="radio" name="intensity" value="Medium"> Medium
        <input type="radio" name="intensity" value="High"> High<br>
      </form>
      <h4>Extra remarks or preferences:</h4>
      <textarea name="extrapreferences" cols="85" rows="8" placeholder="Your message, max. 400 characters"></textarea><br> <br>
      <input type="submit" name="btnsubmitpreferences" value="Submit">
      </div>
    </div>
