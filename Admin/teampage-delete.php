
<?php
include('connection_open.php');
$sql = "DELETE FROM teampage WHERE team_member_id='" . $_GET["memberid"] . "'";
if (mysqli_query($link, $sql)) {
    
	header("Location: x-teampage.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
include('connection_close.php');
?>