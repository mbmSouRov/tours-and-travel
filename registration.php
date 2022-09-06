<?php
include('connection_open.php');
$errors=array();
$name="";
$phone="";
$email="";
$password="";
$re_password="";
 date_default_timezone_set('ASIA/DHAKA');
 $created_date=date('Y-m-d H:i:s');

	if(isset($_POST['submit']))
{
     $name=$_POST['user_name'];
     $phone=$_POST['user_phone'];
     $email=$_POST['user_email'];
     $password=$_POST['user_password'];
     $re_password=$_POST['user_re-password'];

     $sqlCheck="SELECT* FROM user WHERE user_email='$email'";
     $resultCheck=mysqli_query($link,$sqlCheck);
     $noOfRows=mysqli_num_rows($resultCheck);


      if($noOfRows>0)
      {
       array_push($errors,"Already Register With This Email");
       } 

      else
      {
  
    if(empty($name))
{
	array_push($errors,"Name Required");
}
if(empty($phone))
{
	array_push($errors,"Phone Number is Required");
}
if(empty($email))
{
	array_push($errors,"Email Required");
}

if(empty($password))
{
	array_push($errors,"Password is Required");
}
if(empty($re_password))
{
	array_push($errors," Re-type Password is needed");
}

if($password != $re_password)
{
	array_push($errors,"Two password do not match");
}

if(count($errors)==0)
{
	$password=md5($re_password);
$sqlInsert="INSERT INTO user(user_name,user_email,user_phone,user_password,status,created_date,updated_date)
Values('$name','$email','$phone','$password',2,'$created_date','$created_date')";
$resultInsert=mysqli_query($link,$sqlInsert);
header('Location:registration.php');
}
}
}
if(isset($_POST['sign_in']))
{
header('Location:login1.php');
}

include('connection_close.php');

?>



<!DOCTYPE html>
<html>
	<head>
		<title> Registration </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/registration.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<section id="nav-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"> <img src="images/logo2.png"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="product_page_new.html">Products</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" href="aboutus.php">About US</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="teampage.php">Team</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contract.php">Contact</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#">Login/Register</a>
							</li> -->
						</ul>
					</div>
				</nav>
			</section>
		</header>
		
		
		<div class="container">
			
			<div class = "row">
				
					

						

						<div class="col-md-2"></div>
						<div class="col-md-5">
						<form action="" method="POST">
							<h2 class="text-center">Sign up</h2>
							<?php include('errors.php'); ?>
							<label class ="label control-label">Name</label>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="user_name" placeholder="Name" value="<?php echo $name; ?>">
							</div>
							<label class ="label control-label">E-mail</label>
							<div class="form-group mb-3">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" name="user_email" placeholder="E-mail" value="<?php echo $email; ?>">
							</div>
							<label class ="label control-label">Contact</label>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="user_phone" placeholder="Contact"value="<?php echo $phone; ?>">
							</div>
							<label class ="label control-label">Password</label>
							<div class="form-group mb-3">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" name="user_password" placeholder="Password">
							</div>
							<label class ="label control-label">Re-type Password</label>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="user_re-password" placeholder="Re-type Password">
							</div>
							<div class="form-group mb-3">
								<input type="submit" name="submit" value="submit" class="btn btn-success"/>
							</div>
							<div class="col-md-6">
								<p class="text-center"> Already register?</p>
								<input type="submit" name="sign_in" value="Sign-in" class="btn btn-success"/>
								
							</div>
						</div>
				
			</div>
		</div>
			
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
							
</body>
</html>