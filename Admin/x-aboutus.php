<?php

include('connection_open.php');

if(isset($_POST['add']))
{
  $name=$_POST['team-member'];
  $picture=$_FILES['picture'];

   $picture_name=$picture['name'];
   $temp=$picture['tmp_name'];

   $type=explode(".",$picture_name);
   $pic =strtolower(end($type));
   $match=array("png","jpg","jpqg","jfif");

   if(in_array($pic, $match))
   {

    $location="img/".$picture_name;
    move_uploaded_file($temp,$location);

 $sqlInsert="INSERT INTO aboutus(member_name,images)
Values('$name','$picture_name')";
$resultInsert=mysqli_query($link,$sqlInsert);
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
    <link href="css/admin.css" rel="stylesheet" />
       <title>Admin</title>
    </head>
    <body>
         
<div class="col-md-12 text-center">
        <div class="text">Admin</div>
        </div>
        </div>
  
        <ul>
            <li><a href="admin-panel.php">HOMEPAGE</li></a>
            <li><a href="x-teampage.php">Teampage</li></a>
            <li>About us</li>
            <li><a href="x-product_page.php">Product Page</li></a>
            <li>Hotel</li>
            <li>CONTACTS</li>
        </ul>
    </div>
  
  
       <div class="title">
            <h2 style="text-align:center"> ABOUT_US </h2>
  <form action="" method="POST" enctype="multipart/form-data" align="center">
    

    <input type="text" name="team-member" placeholder="Enter Features" required>
    <input type="file" name="picture" required>
    <input type ="submit" name="add">
  </div>


      <div class="container">
        
        <div class="table-responsive">
            <table class="text-center" width="100%" border="0.5" cellpadding="10" cellspacing="10" >
              <thead>
                <tr>
                  <th ></th>
                  <th ></th>
                  <th ></th>
                </tr>
              </thead>
        
        <tbody> 
<?php

include('connection_open.php');


$sql='SELECT * FROM aboutus';
$result = mysqli_query($link,$sql);
$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php
    $member_id=$row['id'];
    $name=$row['details'];
    $image=$row['image'];

  ?>
  <tr>
    <td><input type="text" name="user_name" value="<?php echo $name; ?>" placeholder="Edit Your Name" class="field" required/> </td>
     <td><a href="aboutus-update.php?membername=<?php echo $row["details"]; ?>">Update</a></td>    
  </tr>
  <?php
    }
include('connection_close.php');

?>

    </tbody>
            </table>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </form>

    </body>
</html>