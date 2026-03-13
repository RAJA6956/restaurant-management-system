<?php
session_start();

if(!isset($_SESSION['account_id'])){
header("Location: ../customerSide/login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
font-family: Arial;
margin:0;
}

.navbar{
background-color:#222;
overflow:hidden;
}

.navbar a{
float:left;
color:white;
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

<a href="dashboard.php">Home</a>
<a href="viewmenu.php">View Menu</a>
<a href="addmenu.php">Add Menu Item</a>
<a href="viewreservations.php">Reservations</a>
<a href="../customerSide/logout.php">Logout</a>

</div>

<div class="container">

<h2>Admin Panel</h2>

<p>Welcome Administrator</p>

</div>

</body>
</html>