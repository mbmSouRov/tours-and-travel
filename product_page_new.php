<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/product_page.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<section id="nav-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="index.php"> <img src="img/logo2.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fa fa-bars" aria-hidden="true"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				      </li>
					  <!-- <li class="nav-item">
				        <a class="nav-link" href="#">Products</a>
				      </li> -->
				      <li class="nav-item">
				        <a class="nav-link" href="aboutus.php">About US</a>
				      </li>
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
			
		<div style="padding-top: 50px ">
			<div class="col-md-12 text-center ">
            <h4>OUR</h4>
            <h1 class="blog "><strong>Products</strong></h1>
			</div>
		</div>
			
			
	
	<div class="container">	
        <div class="row ">		
       
      
        
  
<?php


include('connection_open.php');


$sql='SELECT * FROM product_page';
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php

   $description=$row['Description'];
    $place=$row['Places'];

  ?>
  
            <div class="col-md-4 thumbnail ">
                <a class="thumbnail ">

                    <div class="shadow ">
					<a href="login1.php">
                        <img src="images/<?php echo  $place;?>" width="400" height="170">
					</a>
						<p style="text-align: center; font-size:20px; color: white;">  <?php echo $description;?></p>					
                    </div>
                </a>
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