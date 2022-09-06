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
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="#"> <img src="images/logo2.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fa fa-bars" aria-hidden="true"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
					  <li class="nav-item">
				        <a class="nav-link" href="#">Products</a>
						
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#about-us">About US</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Team</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Contact</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Login/Register</a>
				      </li>
				    </ul>
				  </div>
				</nav>	
			</section>
			
		<div style="padding-top: 50px ">
			<div class="col-md-12 text-center ">
            <h4>Dhaka</h4>
            <h1 class="blog "><strong>Details</strong></h1>
			</div>
		</div>
		
		
		
	<div class="container">	
        <div class="row ">		
       
      
        
  
<?php


include('connection_open.php');


$sql='SELECT * FROM dhaka_details';
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php

   $image=$row['images'];
   $places=$row['place_name'];
   $code=$row['product_code'];
   $price=$row['product_price'];
   $available=$row['availability'];
   $types=$row['type'];

  ?>
  
            <div class = "col-md-5">
                

                    
					<a href="https://www.google.com/">
                        <img class="img-fluid "  <img src="images/<?php echo  $image;?>" width="400" height="170">
					</a>
			</div>								
                    
			<div class="col-md-7">
                
					<h2><?php echo $places;?></h2>
					<p><b>Product Code:</b><?php echo $code;?></p>
					<p class="price">Package Price <br> <?php echo $price;?> <br></p>
					<p><b> Availability:</b><?php echo $available;?></p>	
					<p><b> Type:</b> <?php echo $types;?></p>
					<div class="form-group mb-3">
						<input type="submit" name="submit" value="BOOK NOW!" class="btn btn-success"/>
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