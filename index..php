<?php
session_start();
include("dbconnection.php");
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $passssword=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM employees WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>log in</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/login1.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Wendy+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	</head>
	<body>
		<section class="con">
			<div class="overlay">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-md-8 p-3 mt-5">
							<h2 class="text-center display-3">Log in</h2>
						</div>
					</div>
					<div class="row h-50 justify-content-center">
						<div class="col-md-8 main-con p-3 justify-content-center">
							<form class="form-horizontal" action="" method="POST">
								<div class="form-group row justify-content-center" >
								<div class="col-md-10 mb-5">
									<div class="wrapper">
										<input type="text" name="username" id="username" class="in" placeholder="Username">
										 <span class="underline"></span>
										</div>

								</div>
								</div>
								<div class="form-group row">
								<div class="col-md-10 offset-md-1 mb-5">
									<div class="wrapper">
									<input type="password" name="password" id="pw" class="in" placeholder="Password">
										<span class="underline"></span>

									</div>

								</div>
								</div>

								<div class="form-group row justify-content-center">
									<div class="col-md-6">
										<button type="submit" class="btn btn-primary btn-block">Log in</button>

									</div>

								</div>

							</form>


							<p class="text-center t"> All rights reserved ; 2018</p>
						</div>
					</div>
				</div>
		</section>
		
	</body>
	<!-- Scripts in case you need them :P -->
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<!-- Tether -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>