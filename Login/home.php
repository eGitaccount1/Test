<?php 
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['password'])){

?>

<!DOCTYPE html>
<html>
<head>
<title>Log In Form</title>
<link rel="stylesheet" href="style.css">
<body>
	<h1>Hello, <?php echo $_SESSION['user']; ?></h1><br>
	<a href="logout.php">Logout</a>

</body>
</head>
</html>

<?php
}else{
	header("Location: login.php");
	exit();
}
?>