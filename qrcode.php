<?php 
include('php/qrcode.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/qrcode.css">
</head>
<body>
<header>                        
      <h1>Payment</h1>
        <a href="index.php" class="admin-link">Home</a>
      </header> 
      <div class="container">
 <div class="container">
    <form action="" method = "POST">
        <div class="row">
                <div class="col">
                     <center><h2 class="title">Pay with PromptPay</h2></center><br>
                <center><img src="https://fp.lnwfile.com/_/fp/_raw/9h/ti/pr.png"  width = "250px" alt="QR Code Promtpay" class="qr-code"></center>
                </div>
        </div>
        <button type="submit" class = "submit-btn" name="check-pay">Check payment status</button>
    </form>
 </div>   
</body>
</html>
