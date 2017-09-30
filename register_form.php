<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="register_form.php" method="post">
		<input type="text" name="register_firstname" placeholder="Enter first name" required>
		<br>
		<input type="text" name="register_lastname" placeholder="Enter last name" required>
		<br>
		<input type="email" name="register_email" placeholder="Enter email" required>
		<br>
		<input type="email" name="register_email2" placeholder="Confirm email" required>
		<br>
		<input type="password" name="register_password" placeholder="Enter password" required>
		<br>
		<input type="password" name="register_password2" placeholder="Confirm password" required>
		<br>
		<input type="submit" name="register_button" value="Register">
		<br>
	</form>

	<p>Already have an account? Login <a href="login_form.php">here</a></p>

</body>
</html>