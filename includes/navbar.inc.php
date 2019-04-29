<?php

if(!isset($_SESSION['userUid'])){
	header("Location: ../login.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">	
</head>
<body>
	
   <!--Made with love by Gerald Anderson -->
   
	<!--Bootsrap 4 	-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://andersonbpoinc.com/">
  	<img src="resources/agbilogo.png" style="height:50px; width: 50px;">
  </a>
 <form class="form-inline" action="includes/logout.inc.php" method="POST">
  <button type="submit" id="logout-btn" name="logout-btn" class="btn btn-outline-danger">Logout</button>
</form>
</nav>

</body>
</html>