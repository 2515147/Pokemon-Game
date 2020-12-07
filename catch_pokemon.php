<?php
  include('config.php');

  // receive a message from the client
  $new_pokemon = $_POST['pokemon'];

  if (!file_exists('inventory/'.$_COOKIE['username']) ) {
    mkdir('inventory/'.$_COOKIE['username'], 0777, true);
}

  $holder = 'inventory/' . $_COOKIE['username'] . '/pokemon_inventory.txt';

  $file = fopen( $holder , "a");
  fwrite($file, $new_pokemon.",");
  fclose($file);

  exit();

 ?>
