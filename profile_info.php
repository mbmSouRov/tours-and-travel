
<?php
session_start();

include('connection_open.php');


if(isset($_COOKIE['user_id']))
{
$user_id = $_COOKIE['user_id'];
$sql = 'SELECT * FROM user WHERE user_id='.$user_id;
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);
if($noOfRows)
{
  while ($row=mysqli_fetch_assoc($result))
  {
    $name=$row['user_name'];
    $email=$row['user_email'];
    $phone=$row['user_phone']; 
    }     
  }
 } 

         //header('Location:profile_editpage.php');

include('connection_close.php');



?>


<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       
       <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="css/profile_stylesheet.css">
        
	     <title>PROFILE | FORM</title>
	</head>
    <body> 


      <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"> <img src="images/logo2.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml">
              <li class="nav-item ">
                <a class="nav-link" href="private_page1.php">ProductPages <span class="sr-only"></span></a>
              </li>
            </ul>
          </div>
        </nav>  
      </section>
	   <div class="container">
        <div class="row">
        <div class="col-md-12">

              <div class="jumbotron">
                <h1>Profile</h1>
              </div>
               <table>
                <tbody>
                <thead>
                    <tr>
                        <td>
                           <div class="form-group mb-4">
                          <label><p>Name</p></label>
                         <div class = "field" />
                          <?php echo $name; ?> </td> 
                      </tr>
                       <tr>
                        
                        <td>
                           <div class="form-group mb-4">
                          <label><p>Email</p></label>
                         <div class = "field" />
                          <?php echo $email; ?>
                           </td> 
                      </tr>
                       <tr>
                        
                        <td>
                           <div class="form-group mb-4">
                          <label><p>Phone</p></label>
                         <div class = "field" />
                          <?php echo $phone; ?> 
                        </td> 
                      </tr>
                </thead>
        
        </tbody>
        </table>

                <div class="form-group mb-3">
          <a href="profile_editpage.php"><input type="submit" name="submit" value="Edit" class="btn"/></a>
          </div>
        </div>
    </div>
  </div> 
	</body>	
</html>	