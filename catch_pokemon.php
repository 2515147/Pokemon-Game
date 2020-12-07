<?php
  include('config.php');

  // receive a message from the client
  $new_pokemon = $_POST['pokemon'];

  $holder = 'inventory/' . $_COOKIE['username'] . 'Inventory.txt';

  $file = fopen( $holder , "a");
  fwrite($file, $new_pokemon.",");
  fclose($file);

  exit();

 ?>
