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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/homepagedesign.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- CSS FOR NAVBAR -->
  <link rel="stylesheet" type="text/css" href="css/sidebardesign.css">
</head>
<body>

<?php

if($_SESSION['usertype'] == 'admin'){
  //wag buburahin to, pang output to ng mga staff if ever
  /*require 'includes/db.inc.php';

  $managerfname = $_SESSION['fname'];
  $managerlname = $_SESSION['lname'];
  echo"<br>";
  echo"<br>";


   $sql = "SELECT * FROM users WHERE manager_fname=? AND manager_lname=?;";
   $stmt = mysqli_stmt_init($conn);
   mysqli_stmt_prepare($stmt, $sql);
   mysqli_stmt_bind_param($stmt, "ss", $managerfname, $managerlname);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   while($row = mysqli_fetch_assoc($result)){
    echo $row['user_lname'].", ".$row['user_fname']."<br>";
   }*/

   echo
   '<div class="d-flex" id="wrapper"  >
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading sticky-top"> Welcome! '.'<b>'.$_SESSION['fname'].'</b></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="addemployee.php" class="list-group-item list-group-item-action bg-light">Add New Employee</a>
        <a href="signup.php" class="list-group-item list-group-item-action bg-light">Add New Manager</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">View Staff Members</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        <a href="includes/logout.inc.php" class="list-group-item list-group-item-action bg-danger" style="color: white">Logout</a>
      </div>
    </div>';
}
elseif($_SESSION['usertype'] == 'staff'){

  echo
  '<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> Welcome! '.'<b>'.$_SESSION['fname'].'</b></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Templates</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">My Projects</a>
        <a href="includes/logout.inc.php" class="list-group-item list-group-item-action bg-danger" style="color:">Logout</a>
      </div>
    </div>'
;
}


?>
</body>
</html>