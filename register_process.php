<?php
$username = $_POST['user'];
$password = $_POST['pass'];

include('config.php');
if(!$username || !$password){
    header('Location: loginpage.php?registererror=missing_register');
    exit();
}
if(strlen($username) < 5 || strlen($password) < 6){
    header('Location: loginpage.php?registererror=minimum_error');
    exit();
}
$data = file_get_contents($file_path . '/accounts.txt');
$data = trim($data);
$split_items = explode("\n", $data);
// var_dump($split_items);
$loginInfo = array();

for($i = 0; $i < sizeof($split_items); $i++){
  $tempArray = array();
  $currentArray = explode(",", $split_items[$i]);
  for($j = 0; $j < sizeof($currentArray); $j++){
    $tempArray[] = $currentArray[$j];
  }
  // var_dump($currentArray);
  $loginInfo[] = $tempArray;
}


for($k = 0; $k < sizeof($loginInfo) ; $k++){
  if ($username == $loginInfo[$k][0]) {
    header('Location: loginpage.php?loginerror=taken');
    exit();
  }
}
file_put_contents($file_path.'/accounts.txt', $username . ',' . $password . "\n", FILE_APPEND);

// $pokeballsArray = $array('100,10,10,10,250');
// $berriesArray = $array('2','2','2');
mkdir($file_path .'/inventory' . '/'.$username, 0777, true);
file_put_contents($file_path .'/inventory' . '/' .$username.'/berries.txt', '2,2,2');
file_put_contents($file_path .'/inventory'. '/'  . $username.'/pokeballs.txt',  '100,10,10,10,250');

// if (is_dir($file_path .'/inventory/'.$_COOKIE['username']) ) {
//   mkdir('inventory/'.$_COOKIE['username'], 0777, true);
//   // mkdir('inventory/'.$_COOKIE['username'].'/berries.txt', 0777, true);
//   // mkdir('inventory/'.$_COOKIE['username'].'/pokeballs.txt', 0777, true);
//   // file_put_contents('inventory/'.$_COOKIE['username'].'/berries.txt', $berriesArray);
//   // file_put_contents('inventory/'.$_COOKIE['username'].'/pokeballs.txt', $pokeballsArray);
// }



header('Location: loginpage.php?newaccount=yes');
exit();

?>
