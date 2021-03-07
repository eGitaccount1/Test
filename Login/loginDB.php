<?php 
session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['Password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname	 = validate($_POST['uname']);
	$pass = validate($_POST['Password']);

	if(empty($uname)){
		header("Location: login.php?error=User Name is required");
		exit();
	}else if(empty($pass)){
		header("Location: login.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user='$uname' AND password = '$pass'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);	
			if($row['user'] === $uname && $row['password'] === $pass){
				$_SESSION['user'] = $row['user'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['password'] = $row['password'];
				header("Location: home.php");
				exit();
			
			}else{
			header("Location: login.php?error=Incorrect username or password");
			exit();
		}

		}else{
			header("Location: login.php?error=Incorrect username or password");
			exit();
		}
	}
}
else{
	header("Location: login.php");
	exit();
}




?>
