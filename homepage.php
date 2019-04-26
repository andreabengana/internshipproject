<?php
session_start();;

if (isset($_SESSION['userUid'])) {
echo'
<form action="includes/logout.inc.php" method="POST">
	<button type="submit" class="btn btn-danger" name="logout-btn"> Logout </button>
</form>';
}
else{
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

	
</body>
</html>