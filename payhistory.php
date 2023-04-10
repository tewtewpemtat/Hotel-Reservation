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
        <p>No payment history.</p>
        <?php else: ?>
        <h1><center>Payment History</center></h1><br>
        <?php foreach($payment as $payment_item): ?>
        <div class="booking-details">
            <ul>
                <li><span>Name:</span> <?php echo $payment_item['Name']; ?></li>
                <li><span>Roomprice:</span> <?php echo $payment_item['Amount']; ?></li>
                <li><span>Payment method:</span> <?php echo $payment_item['Paytype']; ?></li>
                <li><span>Hotel:</span> <?php echo $payment_item['Hotel']; ?></li>
                <li><span>RoomNo.:</span> <?php echo $payment_item['Room']; ?></li>
                <li><span>Status:</span> <?php echo $payment_item['Status']; ?></li>
            </ul>
        </div><br>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
