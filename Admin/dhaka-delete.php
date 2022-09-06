<?php
include('connection_open.php');
$sql = "DELETE FROM dhaka_details WHERE id='" . $_GET["placeid"] . "'";
if (mysqli_query($link, $sql)) {
    
	header("Location: x-dhaka_details.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
include('connection_close.php');
?>