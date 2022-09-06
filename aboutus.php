<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<!--=----------------------------------------------Upper Navigation --------------------------------->
	<section id="nav-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="index.php"> <img src="images/logo2.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fa fa-bars" aria-hidden="true"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

		<!-------------------------------------------- Image And Details --------------------------------------->


	<section class="about">

		<div>
			<img src="images/img3.png" class="bottom-img">
		</div>
		<h3 class="text-center">ABOUT US</h3>
		<div class="container">
			<div class="row">
						<table class="text-center" width="100%" border="0.5" cellpadding="10" cellspacing="10" >
							<thead>
								<tr>
									<th ></th>
									<th ></th>
									<th ></th>
								</tr>
							</thead>
							<?php
								include 'connection_open.php';

								$sql=' SELECT * FROM aboutus ';
								$result = mysqli_query($link,$sql) or die(mysqli_error($link));
								$noOfRows = mysqli_num_rows($result);

								if($noOfRows){
									while ($row = mysqli_fetch_assoc($result)) {
										?>
											<tr class="text-center">
												<td> 
													<?php 
														echo $row['id'];
														echo ".";
													 ?> 
												</td>
												<td> 
													<?php 
														echo $row['details'];
													 ?> 
												</td>
												<td>
													<?php 
														echo '<img src = "data:image;base64,'.base64_encode($row['image']).'" alt="Image" style=" height=30px; width=30px ">';
													?>
												</td>
											</tr>
										<?php

									}
								}

							include 'connection_close.php';
							?>	
					</table>
			</div>
		</div>
		<div>
					<img src="img/img2.png" class="bottom-img">
				</div>
	</section>

	<!------------------------------------------ Show Off Page ------------------------------------>
	<div class="ShowOff">


		<p class="aboutus-title">WE ARE A LOCAL TOURISM MARKETPLACE IN BANGLADESH</p>
		<p class="aboutus-details">"At ToursNTravel we always seek to design unique experiences & authentic tours to travel lovers as well as creating sustainable livelihood for the local communities & empower them with tourism."</p>
		<div class="container">
			<div class="row">
				<div class="helpClass col-md-6">
					<p class="colorfulNeeded">NEED HELP?</p>
					<p>Call Us </p>
					<p class="colorfulNeeded1">+01874628178</p>
					<p>Email Us at </p>
					<p class="colorfulNeeded1">mewmeaw@gmail.com</p>
				</div>
				<div class="helpClass col-md-6">
					<p class="colorfulNeeded">COMPANY</p>
					<p><a class="colorfulNeeded1" href="aboutus.php">About Us</a></p>
					<p><a class="colorfulNeeded1" href="#">Work With Us</a></p>
					<p><a class="colorfulNeeded1" href="#">Terms & Conditions</a></p>
					<p><a class="colorfulNeeded1" href="#">Refund & Return Policy</a></p>
					<p><a class="colorfulNeeded1" href="#">privacy Policy and Cookies</a></p>
				</div>
			</div>
			<div class="container3 text-center">
					<div class="row">
						<div class="col-sm-12">
							<p>Follow Us</p>
							<a href="https://www.facebook.com/mewmeaw69" target="blank" ><img src="img/facebook2.png"></a>
							<img src="img/twitter.png">
							<img src="img/linkedin.png">
						</div>
					</div>					
				</div>
		</div>
	</div>
	<!------------------------------------------------------------ Last Page---------------------------------------------------------->
			
	<div class="container ">
			<div class="row4 ">
				<p >Copyright © 2016-2020 Tours And Travel Commission Cookies & Privacy Policy</p>
			</div>
	</div>


<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>