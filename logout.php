<?php
  include('config.php');
  setcookie('username', '', time()-3600);
  setcookie('loggedin', '', time()-3600);
  header('Location: loginpage.php');
 ?>
