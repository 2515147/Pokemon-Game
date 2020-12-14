<?php
  include ('uploadconfig.php');

  $f = $_FILES['filename'];

  if ( $f ) {
    $filetype = 'unknown';
    if ($f['type'] === 'image/jpeg') {
      $filetype = 'jpg';
    }
    else if ($f['type'] === 'image/png') {
      $filetype = 'png';
    }
    else if ($f['type'] === 'image/gif') {
      $filetype = 'gif';
    }

    if ($filetype === 'unknown') {
      print "filetype";
      exit();
    }

    else {

      $t = time();
      $u = uniqid();
      $filename = $t . '_' . $u . '.' . $filetype;
      move_uploaded_file($f['tmp_name'], $path.'/'.$filename);

      print "success";
      exit();
    }
  }

  else {
    print "nofile";
    exit();
  }

?>
