<?php 
include('php/creditcard.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/creditcard.css">
</head>
<body>
<header>                        
      <h1>Payment</h1>
        <a href="index.php" class="admin-link">HOME</a>
      </header> 
<div class="container">
<form action="" method="POST">
        <div class="row">
            <div class="col">
                <center><h3 class="title">Contact and address</h3></center>
                <div class="inputBox">
                    <span>First and last name :</span>
                    <input type="text" placeholder="John Deo" name = "name"  required >
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com"  required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Room - Street - Locality" required>
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="ฺBangkok" required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Country :</span>
                        <input type="text" placeholder="Thailand" required>
                    </div>
                    <div class="inputBox">
                        <span>Postal code :</span>
                        <input type="text" placeholder="395669" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <center><h3 class="title">Pay by credit card</h3></center>
                <div class="inputBox">
                    <span>Cards accepted :</span>
                    <img src="Image/card_img.png"  alt="">
                </div>
                <div class="inputBox">
                    <span>Name on card :</span>
                    <input type="text" placeholder="MR. JOHN DEO" required>
                </div>
                <div class="inputBox">
                    <span>Card number :</span>
                    <input type="text" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>Expiration month :</span>
                    <input type="text" placeholder="05" required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Expiration year :</span>
                        <input type="text" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV code :</span>
                        <input type="text" placeholder="033" required>
                    </div>
                </div>
        </div>
        <button type="submit" class = "submit-btn" name="pay-now">Payment</button>
    </form>
</div>    
</body>
</html>