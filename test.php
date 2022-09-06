
<?php

include('connection_open.php');

if(isset($_POST['submit']))
{

   $phone=($_POST['x']);
   $name=($_POST['user_name']);

   $sqlInsert="INSERT INTO X VALUES('$phone','$name')";

   $resultInsert=mysqli_query($link,$sqlInsert);

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

      <div class="container">
        <div class="row">
        <div class="col-md-12">
        <form action="" method="POST">
              <div class="jumbotron">
                <h1>Edit Your Profile</h1>
              </div>
                <div class="form-group mb-3">

            <label><p>ID</p></label>
                    <input type="text" name="x"  placeholder="Edit Your id" class="field" required/>      
        </div>
        <div class="form-group mb-3">
            <label>Name</label>
           <input type="text" name="user_name"  placeholder="Edit Your name" class="field" required/>     
        </div>

                <div class="form-group mb-3">
            <input type="submit" name="submit" value="submit" class="btn btn-success"/>
          </div>
        </form>
        </div>
    </div>
  </div>
  </body> 
</html> 


