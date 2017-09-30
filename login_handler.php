<?php
//declare error variable
$error_array = array();

//handle form
if(isset($_POST['login_button'])){
	$email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL); //sanitize email
	$password = $_POST['login_password']; //set user input to $password var
	$password_check_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	if(mysqli_num_rows($password_check_query) == 1){
		while($row = mysqli_fetch_array($password_check_query)){
			if(password_verify($password, $row['password'])){
				//return true
				header("Location: index.php");
				exit();
			} else {
				array_push($error_array, "Password is incorrect<br>");
			}
		}
	} else {
		array_push($error_array, "Email or password is incorrect<br>");
	}
}
?>