<?php 
include('php/reservation.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER</title>
    <link rel="stylesheet" href="css/reservation.css">
</head>
<body>
      <header>                        
      <h1>Reservation</h1>
        <a href="logout.php" class="admin-link">Logout</a>
      </header> 
      <nav>                           <!-- nav -->
        <div class="profile">
              <div class="profile">
              <center><h4>Hello <?php echo "$username";?></h4><center>
              </div>
            </div>
      <ul><hr>
          <li><a href="index.php">Home</a></li>
          <li><a href="payhistory.php">Payment History</a></li>
            </ul>
          </li>
      </ul>
    </nav>  
    <div class="container">
    <?php if(empty($reservation)): ?>
        <p>No reservation details.</p>
    <?php else: ?>
        <h1><center>Reservation Details</center></h1><br>
        <form method="POST">
            <?php foreach($reservation as $reservation): ?>
              <div class="booking-details">
        <ul>
            <li><span>Name:</span> <?php echo $reservation['Name']; ?></li>
            <li><span>CheckInDate:</span> <?php echo $reservation['CheckInDate']; ?></li>
            <li><span>CheckOutDate:</span> <?php echo $reservation['CheckOutDate']; ?></li>
            <li><span>RoomNo.:</span> <?php echo $reservation['RoomID']; ?></li>
            <li><span>Hotel:</span> <?php echo $reservation['Hotel']; ?></li>
            <li><span>Total Price:</span> <?php echo $reservation['Total']; ?></li>
            <li><span>Status:</span> <?php echo $reservation['Status']; ?></li>
        </ul>
    </div>
    <div class="booking-actions">
    <a href="payment.php?roomID=<?php echo $reservation['RoomID']; ?>&hotel=<?php echo $reservation['Hotel']; ?>&total=<?php echo $reservation['Total']; ?>" class="btn">Payment</a>
        <button type="submit" class="btn2" name="cancel" onclick="return confirm('Do you want to cancel this room reservation?')" value="submit">
            Cancel
        </button>
        <input type="hidden" name="roomID" value="<?php echo $reservation['RoomID']; ?>">
        <input type="hidden" name="hotel" value="<?php echo $reservation['Hotel']; ?>">
        <input type="hidden" name="price" value="<?php echo $reservation['Total']; ?>">
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    </form>  
</body>
</html>
</div>
</body>
</html>