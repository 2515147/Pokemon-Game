<?php
$pokeball_chosen_variant = $_POST['poke_check'];
$data = file_get_contents($file_path . 'inventory/' . $_COOKIE['username'] . '/pokeballs.txt');
$data = trim($data);
$split_items = explode(",", $data);

echo $split_items;

exit();


 ?>
