<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <title>Table | FORM</title>

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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_page_new.php">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About US</a>
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
        <div class="title">
            <h2 style="text-align:center"> Teampage </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table hover">
                <thead>
                 
                        <th>Id</th>
                        <th>Name</th>
                        <th>Profile</th>
                        </th>
               
                </thead>
        
        <tbody>
        
        
  
<?php


include('connection_open.php');


$sql='SELECT * FROM teampage';
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php
    $id=$row['team_member_id'];
   $name=$row['member_name'];
    $image=$row['images'];

  ?>
  <tr>
    <td> <?php echo $id;?></td>
       <td> <?php echo $name;?></td>
         <td>  <img src="img/<?php echo  $image;?>"style ="width:100px;height: 100px"></td>
</tr>

  <?php
    }
       
    
 

         //header('Location:profile_editpage.php');

include('connection_close.php');



?>

    </tbody>
            </table>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>