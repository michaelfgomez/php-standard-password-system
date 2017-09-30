<?php
	ob_start();
	$con = mysqli_connect("localhost","root","","php-std-password-system");
	if(mysqli_connect_errno()){
		echo "Failed connection: " . mysqli_connect_errno(); 
	}
?>