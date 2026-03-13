<?php
session_start();
include "config.php";

if(!isset($_SESSION['email'])){
header("Location: login.php");
}

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Reservations</title>
<style>

body{
font-family: Arial;
margin:0;
}

.navbar{
background-color:#333;
overflow:hidden;
}

.navbar a{
float:left;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
}

.navbar a:hover{
background-color:#ddd;
color:black;
}

.container{
padding:20px;
}

</style>
</head>

<body>
<div class="navbar">

<a href="profile.php">Home</a>
<a href="menu.php">Menu</a>
<a href="reservation.php">Reservation</a>
<a href="myreservation.php">My Reservations</a>
<a href="logout.php">Logout</a>

</div>

<h2>My Reservation History</h2>

<table border="1" cellpadding="10">

<tr>
<th>Name</th>
<th>Table</th>
<th>Date</th>
<th>Time</th>
<th>Guests</th>
<th>Request</th>
<th>Action</th>
</tr>

<?php

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['customer_name']."</td>";
echo "<td>".$row['table_id']."</td>";
echo "<td>".$row['reservation_date']."</td>";
echo "<td>".$row['reservation_time']."</td>";
echo "<td>".$row['head_count']."</td>";
echo "<td>".$row['special_request']."</td>";
echo "<td><a href='cancelreservation.php?id=".$row['reservation_id']."'>Cancel</a></td>";

echo "</tr>";

}

}

?>

</table>

</body>
</html>