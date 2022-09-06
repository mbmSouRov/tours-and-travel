
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
    $address=$row['address']; 
    }     
  }
 } 
 

if(isset($_POST['submit']))
{

  $name=$_POST['user_name'];
  $phone=$_POST['user_phone'];
  $address=$row['address']; 

  date_default_timezone_set('ASIA/DHAKA');
  $updated_date=date('Y-m-d, H:i:s');

$sqlUpdate="UPDATE user set user_name='$name', user_phone='$phone', address='$address',updated_date='$updated_date' WHERE user_id=1";

$resultupdate = mysqli_query($link,$sqlUpdate);
   if($resultupdate)
{
echo'<script type="text/javascript">alert("update")</script>';
}
else
{
  echo'<script type="text/javascript">alert("NOT update")</script>';

}
}


include('connection_close.php');
?>


<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile-edit_stylesheet.css">
       <title>Profile| Edit</title>
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
                <a class="nav-link" href="profile_info.php">ProfileInfo<span class="sr-only"></span></a>
              </li>
              
            </ul>
          </div>
        </nav>  
      </section>

      <div class="container">
        <div class="row">
        <div class="col-md-12">
        <form action="" method="POST">
              <div class="jumbotron">
                <h1>Edit Your Profile</h1>
              </div>
                <div class="form-group mb-3">

            <label><p>Name</p></label>
                    <input type="text" name="user_name" value="<?php echo $name; ?>" placeholder="Edit Your Name" class="field" required/>      
        </div>
        <div class="form-group mb-3">
            <label>Phone Number</label>
           <input type="text" name="user_phone" value="<?php echo $phone; ?>" placeholder="Edit Your Phone Number" class="field" required/>     
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
           <input type="text" name="user_password" value="<?php echo $address; ?>" placeholder="Edit Your Address" class="field" required/>     
        </div>
                <div class="form-group mb-3">
            <input type="submit" name="submit" value="submit" class="btn"/>
          </div>
        </form>
        </div>
    </div>
  </div>
  </body> 
</html> 

