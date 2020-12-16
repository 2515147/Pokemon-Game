<?php
include('config.php');

$pokeball_chosen_variant = $_POST['poke_check'];
$data = file_get_contents($file_path . '/' . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt');
$data = trim($data);
$split_items = explode(",", $data);

if($pokeball_chosen_variant  == 'pokeball'){
  echo $split_items[0];
}
else if($pokeball_chosen_variant  == 'greatball'){
  echo $split_items[1];
}
else if($pokeball_chosen_variant  == 'ultraball'){
  echo $split_items[2];
}
else{
  echo $split_items[3];
}
exit();



 ?>
