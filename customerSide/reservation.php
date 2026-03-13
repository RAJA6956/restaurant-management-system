<?php
session_start();
include "config.php";

if(isset($_POST['reserve'])){

$name = $_POST['name'];
$table_id = $_POST['table_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$head = $_POST['head'];
$request = $_POST['request'];

$sql = "INSERT INTO reservations 
(customer_name, table_id, reservation_time, reservation_date, head_count, special_request)
VALUES 
('$name','$table_id','$time','$date','$head','$request')";

if($conn->query($sql)==TRUE){
echo "Reservation Successful";
}else{
echo "Error: ".$conn->error;
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Table Reservation</title>
</head>

<body>

<h2>Restaurant Table Reservation</h2>

<form method="POST">

<label>Customer Name</label><br>
<input type="text" name="name" required><br><br>

<label>Table ID</label><br>
<input type="number" name="table_id" required><br><br>

<label>Reservation Date</label><br>
<input type="date" name="date" required><br><br>

<label>Reservation Time</label><br>
<input type="time" name="time" required><br><br>

<label>Number of Guests</label><br>
<input type="number" name="head" required><br><br>

<label>Special Request</label><br>
<input type="text" name="request"><br><br>

<button type="submit" name="reserve">Reserve Table</button>

</form>

</body>
</html>