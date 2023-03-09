<?php 
include('php/register.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">      
</head>
<body>

	<form method="POST" action="">
		<label>Email:</label>
	    <input type="email" name="email" required><br><br>
	    
	    <label>Username:</label>
	    <input type="text" name="username" required><br><br>
	    
	    <label>Password:</label>
	    <input type="password" name="password" required><br><br>
	    
	    <label>Contact:</label>
	    <input type="tel" name="contact" required><br><br>
	    
	    <div class="button-container">
        <button type="submit" class="button">Confirm</button>
        <a href="login.php" class="button">Login</a>
        </div>
</form>
</body>
</html>
