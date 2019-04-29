<?php
session_start();
require 'includes/navbar.inc.php';

if (!isset($_SESSION['userUid'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
  <!-- RICO GARCIA GUMAWA NITO TIBAY TIBAY -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/homepagedesign.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<?php


echo "<h1> Welcome!</h1>".$_SESSION['lname'].", ".$_SESSION['fname'];
if($_SESSION['usertype'] == 'admin'){
  $managerfname = $_SESSION['mfname'];
  $managerlname = $_SESSION['mlname'];





;
}
elseif($_SESSION['usertype'] == 'staff'){

  $managerfname = $_SESSION['mfname'];
  $managerlname = $_SESSION['mlname'];
  echo'
<br><label for="table1"><h3> Managers Details </h3></label>
<table class="table table-borderless table-light col-lg-6" id="table1">
  <thead>
    <tr>     
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>'.$managerfname.'</td>
      <td>'.$managerlname.'</td>
    </tr>
  </tbody>
</table>
';
}



?>
</body>
</html>