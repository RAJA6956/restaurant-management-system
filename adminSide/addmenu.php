<?php
session_start();
include "../customerSide/config.php";

if(!isset($_SESSION['account_id'])){
header("Location: ../customerSide/login.php");
exit();
}

if(isset($_POST['add'])){

$name = $_POST['name'];
$type = $_POST['type'];
$cat = $_POST['category'];
$price = $_POST['price'];
$desc = $_POST['description'];

$sql = "INSERT INTO menu 
(item_name, item_type, item_category, item_price, item_description)
VALUES 
('$name','$type','$cat','$price','$desc')";

if($conn->query($sql)==TRUE){
echo "Menu Item Added";
}else{
echo "Error";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Menu Item</title>
</head>

<body>

<h2>Add New Menu Item</h2>

<form method="POST">

Item Name<br>
<input type="text" name="name" required><br><br>

Item Type<br>
<input type="text" name="type" required><br><br>

Category<br>
<input type="text" name="category" required><br><br>

Price<br>
<input type="number" name="price" required><br><br>

Description<br>
<input type="text" name="description"><br><br>

<button type="submit" name="add">Add Item</button>

</form>

</body>
</html>