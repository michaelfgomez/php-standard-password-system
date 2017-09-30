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
	$firstname = strip_tags(isset($_POST['register_firstname'])); //strip html tags
	$firstname = str_replace(" ", "", $firstname); // remove spaces
	$firstname = ucfirst(strtolower($firstname)); // use lowercase and capitalize first letter 

	$lastname = strip_tags(isset($_POST['register_lastname'])); //strip html tags
	$lastname = str_replace(" ", "", $lastname); // remove spaces
	$lastname = ucfirst(strtolower($lastname)); // use lowercase and capitalize first letter 

	$email = strip_tags(isset($_POST['register_email'])); //strip html tags
	$email = str_replace(" ", "", $email); // remove spaces
	$email = ucfirst(strtolower($email)); // use lowercase and capitalize first letter 

	$email2 = strip_tags(isset($_POST['register_email2'])); //strip html tags
	$email2 = str_replace(" ", "", $email2); // remove spaces
	$email2 = ucfirst(strtolower($email2)); // use lowercase and capitalize first letter 

	$password = strip_tags(isset($_POST['register_password'])); //strip html tags

}
?>