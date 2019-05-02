<?php 



if(isset($_POST['signup-btn'])){
	require 'db.inc.php';


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
	exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../addemployee.php?invalide-mail&username");
	exit();

}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../addemployee.php?invalide-mail");
	exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../addemployee.php?invalidusername");
	exit();
}
elseif($password !== $password2){
	header("Location: ../addemployee.php?passwordsdontmatch");
}
else{
	$sql = "SELECT user_uid FROM users WHERE user_uid=?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: ../addemployee.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result = mysqli_stmt_num_rows($stmt);
		if($result > 0){
			header("Location: ../addemployee.php?usernametaken");
			exit();
		}
		else{
			$sql = "INSERT INTO users ";
		}	
	}	
}
}



?>