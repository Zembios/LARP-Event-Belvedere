<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="styles/styles- matei.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <div class= "container">
      <h3>Contact Us</h3>
      <form class="contact">
          <h4>Your Email</h4>
          <input type="text" name="email" size="93" maxlength="30" /> <br>
          <h4>Type of Request</h4>
          <select name="requests">
          <option value="feedback">Feedback</option>
          <option value="petition">Suggest a petition</option>
          <option value="changecharpreferences">Change character preferences</option>
          <option value="refund">Refund/ Cancel participation to event</option>
          <option value="miscellaneous">Miscellaneous</option>
          </select>
          <h4>Your Message</h4>
          <textarea name="comments" cols="85" rows="8" placeholder="Your message, max. 300 characters"></textarea><br> <br>
          <input type="submit" name="btncontact" value="Send Message">
      </form>
    </div>
  </body>
</html>
