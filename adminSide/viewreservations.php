<?php
session_start();
include "../customerSide/config.php";

if(!isset($_SESSION['account_id'])){
header("Location: ../customerSide/login.php");
exit();
}

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Reservations</title>
</head>

<body>

<h2>Customer Reservations</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Table</th>
<th>Date</th>
<th>Time</th>
<th>Guests</th>
<th>Request</th>
</tr>

<?php

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['reservation_id']."</td>";
echo "<td>".$row['customer_name']."</td>";
echo "<td>".$row['table_id']."</td>";
echo "<td>".$row['reservation_date']."</td>";
echo "<td>".$row['reservation_time']."</td>";
echo "<td>".$row['head_count']."</td>";
echo "<td>".$row['special_request']."</td>";

echo "</tr>";

}

}
?>

</table>

</body>
</html>