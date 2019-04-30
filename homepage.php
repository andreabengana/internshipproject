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
</head>
<body>

<?php


if($_SESSION['usertype'] == 'admin'){
  //wag buburahin to
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

  echo '<div class="text-center">
        <a href="signup.php" class="btn btn-success"> Add Employee </a>
        </div>
    ';
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