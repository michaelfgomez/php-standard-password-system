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
		<input type="submit" name="login_button" value="Login">
		<br>
	</form>

	<p>Don't have an account yet? Register <a href="register_form.php">here</a></p>

</body>
</html>