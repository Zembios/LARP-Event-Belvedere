<div class="nav-top">
  <div class="navLeft"><a href="index.php">Home</a></div>
  <div class="title"><a href="index.php">Belvedere</a></div>
  <?php
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
      echo '<div class="navRight">
              <div class="usrEmail"><a href="preferences.php">randomemail@email.com</a></div>
              <div class="line">|</div>
              <div class="contactus"><a href="contact.php">Contact Us</a></div>
              <div class="line">|</div>
              <div class="logout"><a href="includes/logout.inc.php">Log Out</a></div>
            </div>';
    }
    else{
      echo '<div class="navRight">
              <div class="logout"><a href="login.php">Log In</a></div>
            </div>';
    }
  ?>
</div>
