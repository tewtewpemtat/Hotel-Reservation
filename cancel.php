<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}?>
<html>
  <head>
    <link rel="stylesheet" href="css/cancel.css">
  </head>
    <body>
    <header>                        
      <h1>Reservation</h1>
        <a href="index.php" class="admin-link">HOME</a>
      </header> 
      <div class="card">
      <img src="image/succesfull.jpg" alt="" width = 270px >
      <h1>Cancellation Successful</h1> <br>
        <center><p>Transaction Completed</p><p>Have a nice day</p></center>
      </div><br>
    </body>
</html> 