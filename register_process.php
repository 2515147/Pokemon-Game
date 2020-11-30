<?php
$username = $_POST['user'];
$password = $_POST['pass'];

include('config.php');
if(!$username || !$password){
    header('Location: loginpage.php?loginerror=missing_register');
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
header('Location: loginpage.php?newaccount=yes');
exit();

?>
