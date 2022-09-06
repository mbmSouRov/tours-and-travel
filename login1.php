<?php
session_start();
include('connection_open.php');

$errors=array();

if(isset($_POST['LOGIN']))
{
   $email=$_POST['EMAIL'];
   $password=$_POST['PASSWORD'];

   if(empty($email))
   {
	array_push($errors,"Email Required");
   }
   if(empty($password))
    {
	array_push($errors,"Password is Required");
    }

    if(count($errors)==0)
     {
	  $password=md5($password);
 
     $sqlCheck="SELECT* FROM user WHERE user_email='$email' AND user_password='$password'";
     $resultCheck=mysqli_query($link,$sqlCheck);
     $noOfRows=mysqli_num_rows($resultCheck);
         if($noOfRows==1)
         {
         	
	         while ($row = mysqli_fetch_assoc($resultCheck)){
	         		if ($row['status'] == 1) {
			         	$user_data = array
						(
							"id" => $row['user_id'],
							"name" => $row['user_name'],
							"email" => $row['user_email'],
							"status" => $row['status']
						);
						setcookie('user_id',$row['user_id'],time()+30,'/');		
			          	header('Location:private_page1.php');
	      		}
	      		elseif ($row['status'] == 2) {
	      			# code...
	      			$user_data = array
						(
							"id" => $row['user_id'],
							"name" => $row['user_name'],
							"email" => $row['user_email'],
							"status" => $row['status']
						);
						setcookie('user_id',$row['user_id'],time()+3600,'/');		
			          	header('Location:private_page1.php');
	      			// echo "status wrong";
	      		}
	      	}	

         } 
         else
         {
	     array_push($errors,"Enter your Correct Email and password");
         }

    }

}

if (isset($_POST['sign_up']))
{
	header('Location:registration.php');
}

include('connection_close.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
				        <a class="nav-link" href="product_page_new.php">Products</a>
						
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
				<div class ="col-md-5">
				<form action =" " method="post">
					<h1 class="text-center">Login</h1>
					<?php include('errors.php'); ?>
					
					<label class = "label control-label">E-mail</label>
					
					<div class ="input-group">	
						<input type="text" class="form-control" name="EMAIL" placeholder="Email" >
						<!-- value="<?php echo $email; ?>" -->
					</div>
					
					<label class = "label control-label">Password</label>
					<div class ="input-group">
						
						<input type="Password" class="form-control" name="PASSWORD" placeholder="Password">
					</div>

					<div class="col-md-6">
                   <input type="submit" name="LOGIN" value="Login" class="btn btn-success"/>
                   </div>
					
                   <div class="col-md-6">
                   	  <p class="text-center"> Not a member yet? </p>
                   <input type="submit" name="sign_up" value="Sign-up" class="btn btn-success"/>
                 
                   </div>
					
						
					</form>	
						
				</div>
			</div>
		</div>
		
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>	
</html>		