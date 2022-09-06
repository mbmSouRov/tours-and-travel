
<?php

include('..//connection_open.php');

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

 $sqlInsert="INSERT INTO teampage(member_name,images)
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
            <li>Teampage</li>
            <li><a href="x-aboutus.php">About US</li></a>
            <li><a href="x-product_page.php">Product Page</li></a>
            <li>Hotel</li>
            <li>CONTACTS</li>
        </ul>
    </div>
  
  
       <div class="title">
            <h2 style="text-align:center"> Teampage </h2>
  <form action="" method="POST" enctype="multipart/form-data" align="center">
    

    <input type="text" name="team-member" placeholder="Enter Name" required>
    <input type="file" name="picture" required>
    <input type ="submit" name="add">
  </div>


      <div class="container">
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table hover">
                <thead>
                 
                        <th>Id</th>
                        <th>Name</th>
                        <th>Profile</th>
                        <th>Delete</th>
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
    $member_id=$row['team_member_id'];
   $name=$row['member_name'];
    $image=$row['images'];

  ?>
  <tr>
    <td> <?php echo $member_id;?></td>
       <td> <?php echo $name;?></td>
         <td> 
          <img src="img/<?php echo  $image;?>"style ="width:100px;height: 100px">
        </div>
        </td>

        <td><a href="teampage-delete.php?memberid=<?php echo $row["team_member_id"]; ?>">Delete</a></td>
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
    </form>

    </body>
</html>