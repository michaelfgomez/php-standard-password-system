<?php
//Handle registration form
$firstname = "";
$lastname = "";
$email = "";
$email2 = "";
$password = "";
$password2 = "";
$error_array = array();

if(isset($_POST['register_button'])){
	//cleanup
	$firstname = strip_tags($_POST['register_firstname']); //strip html tags
	$firstname = str_replace(" ", "", $firstname); // remove spaces
	$firstname = ucfirst(strtolower($firstname)); // use lowercase and capitalize first letter 

	$lastname = strip_tags($_POST['register_lastname']); //strip html tags
	$lastname = str_replace(" ", "", $lastname); // remove spaces
	$lastname = ucfirst(strtolower($lastname)); // use lowercase and capitalize first letter 

	$email = strip_tags($_POST['register_email']); //strip html tags
	$email = str_replace(" ", "", $email); // remove spaces
	$email = ucfirst(strtolower($email)); // use lowercase and capitalize first letter 

	$email2 = strip_tags($_POST['register_email2']); //strip html tags
	$email2 = str_replace(" ", "", $email2); // remove spaces
	$email2 = ucfirst(strtolower($email2)); // use lowercase and capitalize first letter 

	$password = strip_tags($_POST['register_password']); //strip html tags

	$password2 = strip_tags($_POST['register_password2']); //strip html tags

	//handle the form
	if($email == $email2){
		//check if email is in valid format
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
			//check if email alredy exists
			$email_check = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
			//count
			$num_emails = mysqli_num_rows($email_check);
			//compare
			if($num_emails > 0){
				array_push($error_array, "Email already in use<br>");
			}
		} else {
			array_push($error_array, "Email invalid format<br>");
		}
	} else {
		array_push($error_array, "Emails do not match<br>");
	}

	//check strings of user input
	if(strlen($firstname) > 60 || strlen($firstname) < 2){
		array_push($error_array, "Your first name must be between 2 and 60 characters<br>");
	}
	if(strlen($lastname) > 60 || strlen($lastname) < 2){
		array_push($error_array, "Your last name must be between 2 and 60 characters<br>");
	}
	if($password != $password2){
		array_push($error_array, "Your passwords do not match<br>");
	} else {
		if(preg_match('/[^A-Za-z0-9]/', $password)){
			array_push($error_array, "Your password can only contain english characters or numbers<br>");
		}
	}
	if(strlen($password > 60 || strlen($password) < 5)){
		array_push($error_array, "Your passwords must be between 5 and 60 characters<br>");
	}

	if(empty($error_array)){
		//encrypt password with hash
		$password = password_hash($password, PASSWORD_DEFAULT);

		//insert values to database
		$query = mysqli_query($con, "INSERT INTO users VALUES('','$firstname','$lastname','$email','$password')");

		array_push($error_array, "<span style='color: #14C800;'>Successfully registered! Click the link below to login</span><br>");

	}

}
?>