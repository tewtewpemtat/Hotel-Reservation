<?php include('php/login.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">  
</head>
<body>
	<h2>Login</h2>
	<form method="POST" action="login.php">
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<button type="submit" class = "loginbutton">Login</button>
	</form>
	<p>Don't have an account? <a href="register.php">Register now</a></p>
</body>
</html>
