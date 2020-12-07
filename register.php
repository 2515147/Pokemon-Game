<?php
  if ($_GET['loginerror'] == 'taken') {
?>
<p>Username taken</p>
<?php } 
?>


<form action="register_process.php" method="POST">
  <input type="text" placeholder="Enter Username" name="user">
  <input type="text" placeholder="Enter Password" name="pass">
  <input type="submit">
</form>
