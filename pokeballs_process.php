<?php

$pokeball_chosen = $_POST['pokeball'];

$data = file_get_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt');
$data = trim($data);
$split_items = explode(",", $data);

if($pokeball_chosen == 'pokeball'){
  $split_items[0] = $split_items[0] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt', $new_value);
  echo $split_items[0];
}
else if($pokeball_chosen == 'greatball'){
  $split_items[1] = $split_items[1] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt', $new_value);
  echo $split_items[1];
}
else if($pokeball_chosen == 'ultraball'){
  $split_items[2] = $split_items[2] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt', $new_value);
  echo $split_items[2];
}
else{
  $split_items[3] = $split_items[3] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt', $new_value);
  echo $split_items[3];
}

exit();

?>