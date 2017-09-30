<?php
require 'config.php';
require 'login_handler.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action=login_form.php method="post">
		<input type="email" name="login_email" placeholder="Enter email" required>
		<br>
		<input type="password" name="login_password" placeholder="Enter password" required>
		<br>
		<?php
			if(in_array("Password is incorrect<br>", $error_array)){
				echo "Password is incorrect<br>";
			}
		?>
		<input type="submit" name="login_button" value="Login">
		<br>
		<?php if(in_array("Email or password is incorrect<br>", $error_array)){
				echo "Email or password is incorrect<br>"; 
			} 	
		?>
	</form>

	<p>Don't have an account yet? Register <a href="register_form.php">here</a></p>

</body>
</html>