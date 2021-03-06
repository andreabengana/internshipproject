<?php 

if(isset($_POST['signup-btn'])){
	require 'db.inc.php';


	$fname = mysqli_real_secape_string($conn, $_POST['fname']);
	$lname = mysqli_real_secape_string($conn, $_POST['lname']);
	$email = mysqli_real_secape_string($conn, $_POST['email']);
	$mfname = mysqli_real_secape_string($conn, $_POST['mfname']);
	$mlname = mysqli_real_secape_string($conn, $_POST['mlname']);
	$username = mysqli_real_secape_string($conn, $_POST['username']);
	$password1 = mysqli_real_secape_string($conn, $_POST['password1']);
	$password2 = mysqli_real_secape_string($conn, $_POST['password2'];
	$position = strtolower($_POST['position']);
		

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
elseif($password1 !== $password2){
	header("Location: ../addemployee.php?passwordsdontmatch");
}
else{
	$sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: ../addemployee.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "ss", $username, $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result = mysqli_stmt_num_rows($stmt);
		if($result > 0){
			header("Location: ../addemployee.php?usernameoremailtaken");
			exit();
		}
		else{
			$sql = "INSERT INTO users (user_uid, user_email, user_password, user_type, user_fname, user_lname, manager_fname, manager_lname) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../addemployee.php?error=sqlerror");
				exit();
			}
			else{
				$hashedpwd = password_hash($password1, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ssssssss", $username, $email, $hashedpwd, $position, $fname, $lname, $mfname, $mlname);
				mysqli_stmt_execute($stmt);
				header("Location: ../addemployee.php?employeeadded");
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