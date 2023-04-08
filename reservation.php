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
        <p>ไม่มีรายละเอียดการจองห้องพัก</p>
    <?php else: ?>
        <h1><center>รายละเอียดการจองโรงแรม</center></h1><br>
        <form method="POST">
            <?php foreach($reservation as $reservation): ?>
              <div class="booking-details">
        <ul>
            <li><span>ชื่อ:</span> <?php echo $reservation['Name']; ?></li>
            <li><span>วันที่เช็คอิน:</span> <?php echo $reservation['CheckInDate']; ?></li>
            <li><span>วันที่เช็คเอาท์:</span> <?php echo $reservation['CheckOutDate']; ?></li>
            <li><span>หมายเลขห้องพัก:</span> <?php echo $reservation['RoomID']; ?></li>
            <li><span>โรงแรม:</span> <?php echo $reservation['Hotel']; ?></li>
            <li><span>สถานะ:</span> <?php echo $reservation['Status']; ?></li>
        </ul>
    </div>

    <div class="booking-actions">
    <a href="payment.php?roomID=<?php echo $reservation['RoomID']; ?>&hotel=<?php echo $reservation['Hotel']; ?>" class="btn">ชำระเงิน</a>
        <button type="submit" class="btn" name="cancel" onclick="return confirm('คุณต้องการยกเลิกการจองห้องพักนี้ใช่หรือไม่?')" value="submit">
            ยกเลิกการจอง
        </button>
        <input type="hidden" name="roomID" value="<?php echo $reservation['RoomID']; ?>">
        <input type="hidden" name="hotel" value="<?php echo $reservation['Hotel']; ?>">
    </div>
            <?php endforeach; ?>
        </form>  
    <?php endif; ?>
</div>
      </form>  
</body>
</html>
</div>
</body>
</html>