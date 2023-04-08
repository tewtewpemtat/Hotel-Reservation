<?php 
include('php/payment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="css/payment.css">
</head>
<body>
  <header>                        
    <h1>Payment</h1>
    <a href="index.php" class="admin-link">Home</a>
  </header>
  <div class="container">
    <form action="" method="post">
      <center><h2>เลือกรูปแบบการชำระเงิน</h2></center>
      <div class="row">
        <div class="col">
          <input type="radio" id="credit-card" name="payment-method" value="credit-card">
          <label for="credit-card">ชำระด้วยบัตรเครดิต</label><br>
          <img src="Image/card_img.png" class="Img" alt="">
        </div>
        <div class="col">
          <input type="radio" id="promptpay" name="payment-method" value="promptpay">
          <label for="promptpay">ชำระด้วยพร้อมเพย์</label><br>
          <img src="Image/promptpay.png" class="Img" alt="">
        </div>
      </div> 
      <div class="row">
        <input type="submit" class="btn" value="ยืนยันการชำระเงิน">
      </div> 
    </form>
  </div>
</body>
</html>