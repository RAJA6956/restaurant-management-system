<?php
include "config.php";

if(isset($_POST['register'])){

$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO accounts (email, register_date, phone_number, password)
VALUES ('$email', CURDATE(), '$phone', '$password')";

if($conn->query($sql)==TRUE){
echo "Registration Successful";
}else{
echo "Error: ".$conn->error;
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Registration</title>
</head>

<body>

<h2>Customer Registration</h2>

<form method="POST">

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Phone Number</label><br>
<input type="text" name="phone" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<button type="submit" name="register">Register</button>

</form>

</body>
</html>