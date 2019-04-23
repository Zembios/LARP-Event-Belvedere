<?php
  session_start();
  header("Location: ../index.php");
  if(isset($_POST['btnlogin']))
  {
    if($_POST['username'] != '' && $_POST['password'] != ''){
      $_SESSION['loggedIn'] = true;
    }
  }
?>
