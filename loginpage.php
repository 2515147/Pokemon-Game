<?php
  // before we load the page we need to load in our 'config.php' file
  // this file contains PHP variables that our page will need to access,
  // such as the file path of the 'data' folder
  include('config.php');
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
  </head>
  <body>
    <div id="container">
      <div id="leftcolumn">

      </div>
      <div id="rightcolumn">
        <div id="content">

          <?php

            if ($_GET['loginerror'] == 'yes') { ?>

              <p>Error logging in!</p>

            <?php } ?>
            
          <?php

            // check to see if they are logged in
            if ($_COOKIE['loggedin'] == 'yes') {

              header('Location: final.php');
            }

            else{

            ?>
            <form action="login.php" method="POST">

              Username: <input type="text" name="username">
              <br>
              Password: <input type="text" name="password">
              <input type="submit">

            </form>
            <a href="register.php"> Register </a>
            <?php

          }
           ?>


        </div>
      </div>
    </div>
  </body>
</html>
