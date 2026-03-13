<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){

$row = $result->fetch_assoc();
$_SESSION['account_id'] = $row['account_id'];
$_SESSION['email'] = $row['email'];
/* check staff role */
$aid = $row['account_id'];

$checkrole = $conn->query("SELECT role FROM staffs WHERE account_id='$aid'");

if($checkrole->num_rows > 0){

$r = $checkrole->fetch_assoc();

if($r['role'] == 'Admin'){
header("Location: ../adminSide/dashboard.php");
exit();
}

}
header("Location: profile.php");
exit();

}else{
echo "Invalid Email or Password";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>
</head>

<body>

<h2>Customer Login</h2>

<form method="POST">

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<button type="submit" name="login">Login</button>

</form>

</body>
</html>