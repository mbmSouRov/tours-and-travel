<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dhaka_details.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<section id="nav-bar">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				   <a class="navbar-brand" href="index.php"> <img src="images/logo2.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Menu
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="profile_info.php">Profile</a>
				          <a class="dropdown-item" href="wishlist.php">Wishlist</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="logout.php">Logout</a>
				        </div>
				      </li>
				    </ul>
						    <?php
								session_start();
								include 'connection_open.php';
								if(isset($_COOKIE['user_id']))
								{
									$user_id = $_COOKIE['user_id'];
									$sql = 'SELECT * FROM user WHERE user_id='.$user_id;
									$result = mysqli_query($link,$sql);

									if(mysqli_num_rows($result))
									{
										$row = mysqli_fetch_assoc($result);

										echo $row['user_name'];

										$sqlUpdate = 'UPDATE user set status=2 WHERE user_id='.$user_id;
	         							$resultupdate = mysqli_query($link,$sqlUpdate);

	         							if($resultupdate)
											{
											// echo'<script type="text/javascript">alert("update")</script>';
											}
											else
											{
											  echo'<script type="text/javascript">alert("NOT update")</script>';

											}
									}
									
								}
								else
								{
									// echo'<script type="text/javascript">alert("Session Expired,Please Log In Again")</script>';
									header('location:login1.php');
									// echo "Time Expired,Log In again";
								}
							?>
						
					
				  </div>
				</nav>	
			</section>
			
		<div style="padding-top: 50px ">
			<div class="col-md-12 text-center ">
            <h4>Cox's Bazar</h4>
            <h1 class="blog "><strong>Details</strong></h1>
			</div>
		</div>
		
		
		
	<div class="container">	
        <div class="row ">		
       
      
        
  
<?php


include('connection_open.php');


$sql='SELECT * FROM cox_details';
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php

   $image=$row['images'];
   $places=$row['place_name'];
   $code=$row['features'];
   $price=$row['product_price'];
   $types=$row['type'];

  ?>  
            <div class = "col-md-5">
              
					<a href="https://www.google.com/">
                        <img class="img-fluid " img src="images/<?php echo  $image;?>" width="400" height="170">
					</a>
			</div>								
                    
			<div class="col-md-7">
                
					<h2><?php echo $places;?></h2>
					<p><b>Features:</b></p><?php echo $code;?></p>
					<p class="price">Package Price <br> <b><?php echo $price;?></b> <br></p>
					<p><b> Type:</b> <?php echo $types;?></p>
					<div class="btn btn-outline-success">
						<a href="booking.php?coxhotelid=<?php echo $row['coxhotel_id']; ?>">Book</a>
					</div>	
                        
			</div>		
			
	<div class="container">	
        <div class="row ">
		</div>
	</div>
			
	<?php
   }

include('connection_close.php');

?>

        </div>
    </div>
	
	
			
			
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>