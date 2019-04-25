<?php


if(isset($_POST['loginbtn'])){

require 'db.inc.php';

$mailuid = $_POST['uid'];
$password = $_POST['password'];

if(empty($mailuid) || empty($password)){
	header("Location: ../login.php?emptyfields");
	exit();
}


}
else{
	header("Location: ../login.php");
	exit();
}