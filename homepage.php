<?php
session_start();


if(!isset($_SESSION['userUid'])){
  header("Location: login.php");
}
else{
  require 'includes/navbar.inc.php';
  require 'includes/sidebar.inc.php';
}



?>



<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags --> 
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/homepagedesign.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- CSS FOR NAVBAR -->
  <link rel="stylesheet" type="text/css" href="css/sidebardesign.css">
</head>
<body>

</body>
</html>