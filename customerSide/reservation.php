<?php
session_start();
include "config.php";

if(isset($_POST['reserve'])){

$name = $_POST['name'];
$table = $_POST['table'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];
$request = $_POST['request'];

$sql = "INSERT INTO reservations 
(customer_name, table_id, reservation_time, reservation_date, head_count, special_request)
VALUES 
('$name','$table','$time','$date','$people','$request')";

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

Customer Name<br>
<input type="text" name="name" required><br><br>

Table ID<br>
<input type="number" name="table" required><br><br>

Reservation Date<br>
<input type="date" name="date" required><br><br>

Reservation Time<br>
<input type="time" name="time" required><br><br>

Number of People<br>
<input type="number" name="people" required><br><br>

Special Request<br>
<input type="text" name="request"><br><br>

<button type="submit" name="reserve">Reserve Table</button>

</form>

</body>
</html>