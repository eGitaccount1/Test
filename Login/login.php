<!DOCTYPE html>
<html>
<head>
<title>Log In Form</title>
<link rel="stylesheet" href="style.css">
<body>
	<form action="loginDB.php" method="post">
		<?php
			if(isset($_GET['error'])){ ?>
				<p class="error"> <?php echo $_GET['error']; ?> </p>
			
		<?php } ?>

		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"> <br>

		<label>Password</label>
		<input type="Password" name="Password" placeholder="Password"> <br>


		<button type="submit"> Login</button>
	</form>

</body>
</head>
</html>