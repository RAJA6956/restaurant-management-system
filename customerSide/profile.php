<?php
session_start();

if(!isset($_SESSION['account_id'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Profile</title>
</head>

<body>

<h2>Welcome</h2>

<p>You are logged in as:</p>

<p><?php echo $_SESSION['email']; ?></p>

<a href="logout.php">Logout</a>

</body>
</html>