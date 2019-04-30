<?php
session_start();

if(!isset($_SESSION['userUid'])){
  header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sign Up! </title>   		
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/signupdesign.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Go Back</a><h2 style="color: white;">Add Employee</h2>
			</div>
			<div class="card-body">
						<form id="form1" action="includes/signup.inc.php" method="POST">
							<label for="row1"><h3> Tell me more about yourself! </h3></label>
  							<div class="form-row" id="row1">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">First Name</label>
      								<input type="text" class="form-control" id="inputfirstname" placeholder="Juan" name="fname">
    							</div>
    							<div class="form-group col-md-6">
     								 <label for="inputlastname">Last Name</label>
     								 <input type="text" class="form-control" id="inputlastname" placeholder="dela Cruz" name="lname">
    							</div>
  							</div>
  								<div class="form-group">
  									<label for="inputemail"> Email </label>
  									<input type="text" name="email" class="form-control" placeholder="someone@example.com">
  							</div>
  							<label for="row2"><h3>Who's your Manager?</h3></label>
  							<div class="form-row" id="row2">
  								<div class="form-group col-md-6">
      								<label for="inputmfirstname">Manager's First Name</label>
      								<input type="text" class="form-control" id="inputmfirstname" placeholder="John Mark" name="mfname">
    							</div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Last Name</label>
      								<input type="text" class="form-control" id="inputmlname" placeholder="Causing" name="mlname">
    							</div>
  							</div>
  							<label for="row3"><h3>Account Details</h3></label>
  							<div class="form-row" id="row3">
									<div class="form-group col-md-12">
  										<label for="username"> Username </label>
  										<input type="text" name="username" id="username" class="form-control" placeholder="rocketwarrior">
									</div>
									<div class="form-group col-md-6">
  										<label for="password1"> Password </label>
  										<input type="password" name="password1" id="password1" class="form-control">
									</div>
									<div class="form-group col-md-6">
  										<label for="password2"> Repeat Password </label>
  										<input type="password" name="password2" id="password2" class="form-control">
									</div>
  							</div>
  							<label for="position">Sign Up as</label>
  							<input type="text"  class="form-control col-md-12" id="position" name="position" value="Employee" disabled>
 								<br>
 								<button type="submit" class="btn btn-lg btn-success btn-block" name="signup-btn">Add Employee</button>
						</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>