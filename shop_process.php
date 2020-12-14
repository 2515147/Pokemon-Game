<?php

$item = $_POST['inv_item'];
$cost = $_POST['inv_cost'];
$index = $_POST['inv_index'];
$amount = $_POST['inv_amount'];

$data = file_get_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt');
$data = trim($data);
$dataBerry = file_get_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/berries.txt');
$dataBerry = trim($dataBerry);
$split_items = explode(",", $data);
$split_items2 = explode(",", $dataBerry);

$difference = $split_items[4]-$cost;

if ($difference >= 0){
  $split_items[4] = $split_items[4]-$cost;
  if (strpos($item, 'ball') !== false) {
    //if it does contain the word ball
    $split_items[$index] += $amount;
    $new_value = implode(",", $split_items);
    file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt', $new_value);
    echo $split_items[$index];
    exit();
  }
  else{
    //if it does not contain the word ball
    $split_items2[$index] += $amount;
    $new_value = implode(",", $split_items2);
    file_put_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/berries.txt', $new_value);
    echo $split_items2[$index];
    exit();
  }

}
else{
  //else the item we are buying is too expensive, error of some kind
  header('HTTP/1.1 500 Internal Server Error');
  exit();
}
