<?php 
include('php/creditcard.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/creditcard.css">

</head>
<body>
<header>                        
      <h1>Payment</h1>
        <a href="index.php" class="admin-link">HOME</a>
      </header> 
      <div class="container">
<div class="container">
<center><h4>Hello <?php echo $roomID;?></h4><center>
<form action="" method="POST">

        <div class="row">

            <div class="col">

                <center><h3 class="title">ชื่อ-ที่อยู่สำหรับการติดต่อ</h3></center>

                <div class="inputBox">
                    <span>ชื่อ-นามสกุล :</span>
                    <input type="text" placeholder="John Deo" name = "name"  required >
                </div>
                <div class="inputBox">
                    <span>อีเมล :</span>
                    <input type="email" placeholder="example@example.com"  required>
                </div>
                <div class="inputBox">
                    <span>ที่อยู่ :</span>
                    <input type="text" placeholder="Room - Street - Locality" required>
                </div>
                <div class="inputBox">
                    <span>เมือง :</span>
                    <input type="text" placeholder="ฺBangkok" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>ประเทศ :</span>
                        <input type="text" placeholder="Thailand" required>
                    </div>
                    <div class="inputBox">
                        <span>รหัสไปรษณีย์ :</span>
                        <input type="text" placeholder="395669" required>
                    </div>
                </div>

            </div>

            <div class="col">
                <center><h3 class="title">ชำระเงินด้วยบัตรเครดิต</h3></center>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="Image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>ชื่อ-นามสกุล ที่เเสดงบนบัตร :</span>
                    <input type="text" placeholder="MR. JOHN DEO" required>
                </div>
                <div class="inputBox">
                    <span>หมายเลขบัตร :</span>
                    <input type="text" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>เดือนหมดอายุ:</span>
                    <input type="text" placeholder="05" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>วันหมดอายุ :</span>
                        <input type="text" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>รหัสหลังบัตร 3 หลัก :</span>
                        <input type="text" placeholder="033" required>
                    </div>
                </div>

            
        </div>
        <button type="submit" class = "submit-btn" name="pay-now">ชำระเงิน</button>
    </form>
</div>    
</body>
</html>