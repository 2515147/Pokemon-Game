<?php

  // grab the username & password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // open up the 'teacheraccounts.txt' file
  include('config.php');
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

  // var_dump($loginInfo);

  // see if the supplied info matches what's in the file
  for($k = 0; $k < sizeof($loginInfo) ; $k++){
    if ($username == $loginInfo[$k][0] && $password == $loginInfo[$k][1]) {
      // if everything is OK we will drop a cookie on their computer
      setcookie('loggedin', 'yes');
      // setcookie('firstname', $loginInfo[$k][2]);
      // setcookie('lastname', $loginInfo[$k][3]);
      setcookie('username', $loginInfo[$k][0]);
      header('Location: final.php');
      exit();
    }
  }
  header('Location: final.php?loginerror=yes');
  exit();

 ?>
