
<?php

include('connection_open.php');

if(isset($_POST['add']))
{	

   $place=$_POST['placename'];
   $code=$_POST['productcode'];
   $price=$_POST['productprice'];
   $availability=$_POST['product_availability'];
   $type1=$_POST['product_type'];
   
   
   $picture=$_FILES['picture'];
   $picture_name=$picture['name'];
   $temp=$picture['tmp_name'];

   $type=explode(".",$picture_name);
   $pic =strtolower(end($type));
   $match=array("png","jpg","jpqg","jfif");

   if(in_array($pic, $match))
   {

    $location="images/".$picture_name;
    move_uploaded_file($temp,$location);

  $sqlInsert="INSERT INTO dhaka_details(images,place_name,product_code,product_price,availability,type)
  Values('$picture_name','$place','$code','$price','$availability','$type1')";
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
            <li>Product Page</li>
            <li>Hotel</li>
            <li>CONTACTS</li>
        </ul>
    </div>
  
  
    <div class="title">
            <h2 style="text-align:center"> Dhaka Details </h2>
	<form action="" method="POST" enctype="multipart/form-data" align="center">
    
	<input type="file" name="picture" required>
    <input type="text" name="placename" placeholder="Place Name" required>
	<input type="text" name="productcode" placeholder="Product Code" required>
	<input type="text" name="productprice" placeholder="Product Price" required>
	<input type="text" name="product_availability" placeholder="Availability" required>
	<input type="text" name="product_type" placeholder="Type" required>
    <input type ="submit" name="add">
	</div>


      <div class="container">
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table hover">
                <thead>
                 
                        <th>Id</th>
                        <th>Picture</th>
                        <th>Place Name</th>
            						<th>Product Code</th>
            						<th>Product Price</th>
            						<th>Availability</th>
            						<th>Type</th>
                        <th>Delete</th>
                        </th>
               
                </thead>
        
        <tbody>
        
        
  
<?php


include('connection_open.php');


$sql='SELECT * FROM dhaka_details';
$result = mysqli_query($link,$sql);

$noOfRows=mysqli_num_rows($result);

  while ($row=mysqli_fetch_assoc($result))
  {
    ?>

  <?php
  $Product_Id=$row['id'];
	$image=$row['images'];
	$Place_Name=$row['place_name'];
	$Product_Code=$row['product_code'];
	$Product_Price=$row['product_price'];
	$Product_Availability=$row['availability'];
	$Product_Type=$row['type'];

  ?>
  <tr>
    <td> <?php echo  $Product_Id;?></td>
	<td> 
      <img src="images/<?php echo  $image;?>"style ="width:100px;height: 100px">
  </td>
		
	<td> <?php echo $Place_Name;?></td>
  <td> <?php echo $Product_Code;?></td>
	<td> <?php echo $Product_Price;?></td>
	<td> <?php echo $Product_Availability;?></td>
	<td> <?php echo $Product_Type;?></td>
	<td><a href="dhaka-delete.php?placeid=<?php echo $row['id']; ?>">Delete</a></td>
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