

<?php
$errors=array();
include('connection_open.php');

$user_id = $_COOKIE['user_id'];
// $sql="SELECT * FROM user WHERE user_id=1";
$sql='SELECT * FROM user WHERE user_id='.$user_id;
$result= mysqli_query($link,$sql);

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

  $sql = "SELECT * FROM cox_details WHERE coxhotel_id='" . $_GET["coxhotelid"] . "'";
  $result= mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);
if($noOfRows)
{
  while ($row=mysqli_fetch_assoc($result))
  {
    $hotelname=$row['place_name'];
    $price=$row['product_price'];
    $quality=$row['type'];
  }  
  }

include('connection_close.php');


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/booking.css">
  </head>
  <body>
      <form action="" method="POST">
    <div class="container">
      <div class="contact-box">
          <div class="left">
            <form action="" method="POST">
              <table>
                <tbody>
                  <thead>
                    <tr>
                      <td>
                        <div class="form-group mb-4">
                           <label><h5>Name</h5></label>
                          <div class = "field" name="xname" />
                          <?php echo $name; ?> </td>
                        </tr>
                        <tr>
                          
                          <td>
                            <div class="form-group mb-4">
                               <label><h5>Email</h5></label>
                              <div class = "field" name="xemail"/>
                                <?php echo $email; ?>
                              </td>
                            </tr>
                            <tr>
                              
                              <td>
                                <div class="form-group mb-4">
                                   <label><h5>Phone</h5></label>
                                  <div class = "field" name="xphone"/>
                                    <?php echo $phone; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-group mb-4">
                                       <label><h5>Hotel</h5></label>
                                      <div class = "field" name="hotelname"/>
                                      <?php echo $hotelname; ?> </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>
                                        <div class="form-group mb-4">
                                           <label><h5>Price</h5></label>
                                          <div class = "field" name="price"/>
                                            <?php echo $price; ?>
                                          </td>
                                        </tr>
                                        <tr>
                                          
                                          <td>
                                            <div class="form-group mb-4">
                                              <label><h5>Phone</h5></label>
                                              <div class = "field" name="quality"/>
                                                <?php echo $quality; ?>
                                              </td>
                                            </tr>
                                            
                                          </thead>
                                          
                                        </tbody>
                                      </table>
                                    </form>
                                  </div>
                                  <div class="right">
                                    <form action="" method="POST">
                                      
                                      <?php include('errors.php'); ?>
                                      
                                      <div class="field">
                                        <label><p>Check-In</p></label>
                                        <input type="datetime-local" class="field" name="checkin" required>
                                      </div>
                                      <div class="field">
                                        <label><p>Check-Out</p></label>
                                        <input type="datetime-local" class="field" name="checkout" required>
                                      </div>
                                      <input type="text" class="field" name="emergency-contract" placeholder="Emergency-Contract">
                                      <textarea class="field" name="message" placeholder="Message"  >
                                      </textarea>
                                      
                                      <input type="submit" name="book" value="Book" class="btn"/>
                                    </form>
                                  </div>
                                </div>
                              </div>
      
                            </form>
                            </body>
                          </html>
 <?php
include('connection_open.php');
$errors=array();
// $name="";
// $phone="";
// $email="";
$emergency="";
$message="";
  if(isset($_POST['book']))
{
     $name;
     $email;
     $phone;     
     $hotelname;
     $price;
     $quality;
     $checkin=$_POST['checkin'];
     $checkout=$_POST['checkout'];
     $emergency=$_POST['emergency-contract'];
     $message=$_POST['message'];

    if(empty($checkin))
{
  array_push($errors,"CheckIn Time Required");
}
if(empty($checkout))
{
  array_push($errors,"CheckOut Time Required");
}

   if(count($errors)==0)
  {
  
   $sqlInsert="INSERT INTO booking(member_id,member_name,member_email,member_phone,hotel_name,price,quality, checkin,checkout,emergency,message)
   Values(1,'$name','$email','$phone','$hotelname','$price','$quality','$checkin','$checkout','$emergency','$message')";
   // echo $sqlInsert;die;

     $resultInsert=mysqli_query($link,$sqlInsert) or die(mysqli_error($link));
     // print_r($resultInsert);
}
}
 

include('connection_close.php');
?>
                          



