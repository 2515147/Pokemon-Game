<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pokemon</title>
  <link rel="stylesheet" href="login/loginstyle.css">

</head>
<body>

<!-- DISCLAIMER: This JS/CSS for the login page used in this project is used for educational purposes only. Rights and ownership goes to their rightful owners. Certain modifications were made to the JS/CSS Please refer to ../login/license-->


<?php
include('config.php');
// check to see if they are logged in
if ($_COOKIE['loggedin'] == 'yes') {

  header('Location: final.php');
}

else if($_GET['loginerror'] == 'yes'){

?>
	<div class="form-structor">

		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<p>Inccorect username or password, please try again.</p>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
<script  src="login/loginscript.js"></script>
 <?php
	}else if($_GET['loginerror'] == 'taken'){

?>
	<div class="form-structor">

		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<p>Username already taken, please try again.</p>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
	<script  src="login/loginscript.js"></script>
 <?php
 	}else if($_GET['registererror'] == 'missing_register'){

?>
	<div class="form-structor">

		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<p>Missing field in registration, please try again.</p>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
	<script  src="login/loginscript.js"></script>
 <?php
  	}else if($_GET['registererror'] == 'minimum_error'){

?>
	<div class="form-structor">

		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<p>Username must be at least 5 characters and password must be at least 6 characters</p>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
	<script  src="login/loginscript.js"></script>
 <?php
  	}else if($_GET['newaccount'] == 'yes'){

?>
	<div class="form-structor">

		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<p>Successfully registered, please login</p>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
	<script  src="login/loginscript.js"></script>
 <?php
	}else{
?>
	<div class="form-structor">
		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<div class="form-holder">
			<form action="register_process.php" method="POST">
				<input type="text" name="user" class="input" placeholder="Username"/>
				<input type="password" name="pass" class="input" placeholder="Password"/>
			</div>
			<button class="submit-btn">Sign up</button>
			</form>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
				<form action="login.php" method="POST">
					<input type="text" name="username" class="input" placeholder="Username"/>
					<input type="password" name="password" class="input" placeholder="Password"/>
				</div>
				<button class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
	<script  src="login/loginscript.js"></script>
<?php
	}
  ?>

</body>
</html>
