<?php
include "config.php";

$id = $_GET['id'];

/* first delete bill */
$conn->query("DELETE FROM bills WHERE reservation_id='$id'");

/* then delete reservation */
$sql = "DELETE FROM reservations WHERE reservation_id='$id'";

if($conn->query($sql)==TRUE){
header("Location: myreservation.php");
}else{
echo "Error deleting";
}
?>