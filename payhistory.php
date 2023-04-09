<?php 
include('php/payhistory.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
    <link rel="stylesheet" href="css/payhistory.css">
</head>
<body>
    <header>                        
        <h1>Payment History</h1>
        <a href="logout.php" class="admin-link">Logout</a>
    </header> 
    <nav>                           
        <div class="profile">
            <center><h4>Hello <?php echo "$username";?></h4></center>
        </div>
        <hr>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="reservation.php">Reservation</a></li>
        </ul>
    </nav>  
    <div class="container">
        <?php if (empty($payment)): ?>
        <p>ไม่มีประวัติการชำระเงิน</p>
        <?php else: ?>
        <h1><center>ประวัติการชำระเงิน</center></h1><br>
        <?php foreach($payment as $payment_item): ?>
        <div class="booking-details">
            <ul>
                <li><span>ชื่อ:</span> <?php echo $payment_item['Name']; ?></li>
                <li><span>ราคาห้อง:</span> <?php echo $payment_item['Amount']; ?></li>
                <li><span>ประเภทการชำระเงิน:</span> <?php echo $payment_item['Paytype']; ?></li>
                <li><span>โรงแรม:</span> <?php echo $payment_item['Hotel']; ?></li>
                <li><span>ห้อง:</span> <?php echo $payment_item['Room']; ?></li>
                <li><span>สถานะ:</span> <?php echo $payment_item['Status']; ?></li>
            </ul>
        </div><br>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
