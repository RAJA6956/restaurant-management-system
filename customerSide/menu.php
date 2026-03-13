<?php
include "config.php";

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Restaurant Menu</title>
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
<h2>Restaurant Menu</h2>

<table border="1" cellpadding="10">

<tr>
<th>Item Name</th>
<th>Category</th>
<th>Price</th>
<th>Description</th>
</tr>

<?php

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['item_name']."</td>";
echo "<td>".$row['item_category']."</td>";
echo "<td>$".$row['item_price']."</td>";
echo "<td>".$row['item_description']."</td>";

echo "</tr>";

}

}

?>

</table>

</body>
</html>