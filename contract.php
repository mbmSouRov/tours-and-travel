<?php
include('connection_open.php');
$errors=array();
$name="";
$phone="";
$email="";
$message="";
 date_default_timezone_set('ASIA/DHAKA');
 $created_date=date('Y-m-d H:i:s');

	if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $message=$_POST['message'];
  
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

if(empty($message))
{
	array_push($errors,"Write some thing");
}


   if(count($errors)==0)
  {
	
   $sqlInsert="INSERT INTO contract(name,email,phone,message,text_time)
   Values('$name','$email','$phone','$message','$created_date')";

     $resultInsert=mysqli_query($link,$sqlInsert);
   }
}


include('connection_close.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/contract.css">
</head>
<body>
	<section id="nav-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="index.php"> <img src="images/logo2.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fa fa-bars" aria-hidden="true"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="product_page_new.php">Experience</a>
				      </li>
				      <!-- <li class="nav-item">
				        <a class="nav-link" href="#">About US</a>
				      </li> -->
				      <li class="nav-item">
				        <a class="nav-link" href="teampage.php">Team</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="contract.php">Contact</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="login1.php">Login/Register</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</section>


	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">

				<h2>Contact Us</h2>
                
				<?php include('errors.php'); ?>
				<form action="" method="POST">
				<input type="text" class="field" name="name"  placeholder="Your Name"">
				<input type="text" class="field" name="email" placeholder="Your Email">
				<input type="text" class="field" name="phone"placeholder="Phone">

				<textarea placeholder="Message" class="field" name="message" >
				</textarea>

            
				<input type="submit" name="submit" value="submit" class="btn"/>
			</form>
			</div>

		</div>
	</div>
</body>
</html>