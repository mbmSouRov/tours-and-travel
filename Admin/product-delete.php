
<?php
include('connection_open.php');
$sql = "DELETE FROM product_page WHERE Product_Id='" . $_GET["placeid"] . "'";
if (mysqli_query($link, $sql)) {
    
	header("Location: x-product_page.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
include('connection_close.php');
?>