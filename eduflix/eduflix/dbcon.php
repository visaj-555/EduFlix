<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'eduflix';

	$con = mysqli_connect($host, $user, $password, $database) or die("error" . mysqli_error($conn));
?>
