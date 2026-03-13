<?php
include "config.php";

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Restaurant Menu</title>
</head>

<body>

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