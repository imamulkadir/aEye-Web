<?php
  require 'header.php';
 ?>
 <head>
	<title>aEye</title>
	<link rel="stylesheet" href="signup.css">
</head>
 <main>
   <div class="loginBox">
		<img src="img\user.png" class="user">
		<h2>Sign up to aEye</h2>
		<form action="includes/signup.inc.php" method="post">
      <p>Username</p>
			<input type="text" name="" placeholder="Enter Username Here">
			<p>Email</p>
			<input type="text" name="" placeholder="Enter Email Here">
			<p>Password</p>
			<input type="Password" name="" placeholder="********">
      <p>Confirm Password</p>
			<input type="Password" name="" placeholder="********">
			<input type="submit" name="" value="Sign In">
			<a href="#">Forgot Password?</a>

		</form>


	</div>
 </main>

<?php
  require 'footer.php';
?>
