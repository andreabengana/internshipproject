<?php

$serverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$database = "user_db";

$conn = mysqli_connect($serverName, $dbuserName, $dbpassword, $database);


if(!$conn){
	die("Connection failed");
}