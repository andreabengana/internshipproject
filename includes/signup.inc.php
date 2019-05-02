<?php 

include 'ChromePHP.php';

if(isset($_POST['signup-btn'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mfname = $_POST['mfname'];
	$mlname = $_POST['mlname'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$position = $_POST['position'];
		

if(empty($fname) || empty($lname) || empty($email) || empty($mfname) || empty($mlname) || empty($username) || empty($password1) || 
	empty($password2)){
	header("Location: ../addemployee.php?emptyfield");
}
else{
	ChromePHP::log('fool');
}
}



?>