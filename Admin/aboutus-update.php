<?php
include('connection_open.php');
$sql = "UPDATE aboutus set details='" . $_GET["membername"] . "'";
if (mysqli_query($link, $sql)) {
	header("Location: x-aboutus.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
include('connection_close.php');
?>