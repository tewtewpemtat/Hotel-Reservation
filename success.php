<?php
session_start();
if (!isset($_SESSION['success'])) {
    header("Location: index.php");
    exit;
}
  unset($_SESSION['success']);
?>
<html>
  <head>
  <link rel="stylesheet" href="css/success.css">
  </head>
    <body>
    <header>                        
      <h1>Payment</h1>
        <a href="index.php" class="admin-link">Home</a>
    </header>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div><br>
      <h1>Payment successful</h1> <br>
      <center><p>Thank you for your payment</p><p>Enjoy your stay at the hotel</p></center>
    </body>
</html>