<?php
require 'config.php';
require 'register_handler.php';
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
		<?php
			if(in_array("Your first name must be between 2 and 60 characters<br>", $error_array)){
				echo "Your first name must be between 2 and 60 characters<br>";
			}
		?>
		<input type="text" name="register_lastname" placeholder="Enter last name" required>
		<br>
		<?php
			if(in_array("Your last name must be between 2 and 60 characters<br>", $error_array)){
				echo "Your last name must be between 2 and 60 characters<br>";
			}
		?>
		<input type="email" name="register_email" placeholder="Enter email" required>
		<br>

		<input type="email" name="register_email2" placeholder="Confirm email" required>
		<br>
		<?php
			if(in_array("Email already in use<br>", $error_array))
				echo "Email already in use<br>";
			else if(in_array("Email invalid format<br>", $error_array))
				echo "Email invalid format<br>";
			else if(in_array("Emails do not match<br>", $error_array))
				echo "Emails do not match<br>";
		?>
		<input type="password" name="register_password" placeholder="Enter password" required>
		<br>
		<input type="password" name="register_password2" placeholder="Confirm password" required>
		<br>
		<?php
			if(in_array("Your passwords do not match<br>", $error_array))
				echo "Your passwords do not match<br>";
			else if(in_array("Your password can only contain english characters or numbers<br>", $error_array))
				echo "Your password can only contain english characters or numbers<br>";
			else if(in_array("Your passwords must be between 5 and 60 characters<br>", $error_array))
				echo "Your passwords must be between 5 and 60 characters<br>";
		?>
		<input type="submit" name="register_button" value="Register">
		<br>
		<?php if(in_array("<span style='color: #14C800;'>Successfully registered! Click the link below to login</span><br>", $error_array)) 
				echo "<span style='color: #14C800;'>Successfully registered! Click the link below to login</span><br>"; 
		?>
	</form>

	<p>Already have an account? Login <a href="login_form.php">here</a></p>

</body>
</html>