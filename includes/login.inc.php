<?php


if(isset($_POST['loginbtn'])){

require 'db.inc.php';

$mailuid = $_POST['uid'];
$password = $_POST['password'];

if(empty($mailuid) || empty($password)){
	header("Location: ../login.php?emptyfields");
	exit();
}

else{
	$sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../login.php?sqlerror");	
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)){
			if(!$row['user_pwd'] === $password){
				header("Location: ../login.php?invalidpassword");
			}
			else{
				session_start();
				$_SESSION['userUid'] = $row['user_uid'];

				header("Location: ../homepage.php");
			}
		}
		else{
			header("Location:  ../login.php?nouser");
		}
	}
}

}
else{
	header("Location: ../login.php");
	exit();
}