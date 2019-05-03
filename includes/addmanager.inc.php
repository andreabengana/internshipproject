<?php 

if(isset($_POST['signup-btn'])){
	require 'db.inc.php';


	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password1 = mysqli_real_escape_string($conn, $_POST['password1']);
	$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
	$position = strtolower($_POST['position']);
		

if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password1) || empty($password2)){
	header("Location: ../addmanager.php?emptyfield");
	exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../addmanager.php?invalide-mail&username");
	exit();

}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../addmanager.php?invalide-mail");
	exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../addmanager.php?invalidusername");
	exit();
}
elseif($password1 !== $password2){
	header("Location: ../addmanager.php?passwordsdontmatch");
}
else{
	$sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: ../addmanager.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "ss", $username, $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result = mysqli_stmt_num_rows($stmt);
		if($result > 0){
			header("Location: ../addmanager.php?usernameoremailtaken");
			exit();
		}
		else{
			$sql = "INSERT INTO users (user_uid, user_email, user_password, user_type, user_fname, user_lname) VALUES (?, ?, ?, ?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../addmanager.php?error=sqlerror");
				exit();
			}
			else{
				$hashedpwd = password_hash($password1, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $hashedpwd, $position, $fname, $lname);
				mysqli_stmt_execute($stmt);
				header("Location: ../addmanager.php?manageradded");
				exit();
			}
		}
	}	
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
	header("Location: login.php");
}



?>