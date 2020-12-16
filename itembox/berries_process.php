<?php
$file_path = '/Users/Arbiter/Documents/MAMP/webdev/game';
$berry_chosen = $_POST['berry'];

$data = file_get_contents($file_path . '/' . 'inventory/' . $_COOKIE['username'] . '/berries.txt');
$data = trim($data);
$split_items = explode(",", $data);

if($berry_chosen == 'razz'){
  $split_items[0] = $split_items[0] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . '/'  . 'inventory/' . $_COOKIE['username'] . '/berries.txt', $new_value);
  echo $split_items[0];
}
else if($berry_chosen == 'grazz'){
  $split_items[1] = $split_items[1] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . '/'  . 'inventory/' . $_COOKIE['username'] . '/berries.txt', $new_value);
  echo $split_items[1];
}
else{
  $split_items[2] = $split_items[2] - 1;
  $new_value = implode(",", $split_items);
  file_put_contents($file_path . '/'  . 'inventory/' . $_COOKIE['username'] . '/berries.txt', $new_value);
  echo $split_items[2];
}

exit();
?>
