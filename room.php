<?php include('php/room.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Reservation</title>
    <link rel="stylesheet" type="text/css" href="css/room.css">  
  </head>
  <body>
    <header>                        <!-- Header1-->
      <h1>Hotel Reservation</h1>
      <a href="logout.php" class="admin-link">Logout</a>
    </header>                       <!-- Header1-->

    <nav>                           <!-- nav -->
        <h1><?php echo $_SESSION['hotel_name'];?> Hotel </h1>
        <div class="profile">
              <h4>Hello <?php echo "$username";?></h4>
            </div>
          </div>
      <ul><hr>
          <li><a href="index.php">Home</a></li>
          <li class="menu-item-has-children">
              <li><a href="reservation.php">Reservation</a></li>
              <li><a href="payhistory.php">Payment History</a></li>
            </ul>
          </li>
      </ul>
    </nav>                           <!-- nav -->

     
    <div class="sidebar">  
    <form method="POST" action="">
    <label for="room-type">Room Type:</label>
    <select name="room-type" id="room-type">
        <option value="">None</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
    </select>
    <label for="bed-type">Bed Type:</label>
    <select name="bed-type" id="bed-type">
        <option value="">None</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
    </select>
    <button type="submit" name="submit">Go</button>
</form>
</div>

        
<?php
    if ($stmt2->rowCount() > 0) {
        while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        echo "<section class='room-details'>";
        echo "<div class='card'>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row['Image']) . "' alt='Room Image'>";
        echo "<div class='card-details'>";
        echo "<h3 class='room-type'>Room " . $row['Number'] . "</h3>";
        echo "<p class='room-description'>Roomtype: " . $row['Roomtype'] . "</p>";
        echo "<p class='room-description'>Bedtype: " . $row['Bedtype'] . "</p>";
        echo "<p class='room-availability'>Status: " . $row['Status'] . "</p>";
        echo "<p class='room-price'>Price: " . $row['Price'] . "฿ ต่อคืน</p>";
        echo "<a href='booking.php?Number=" . $row['Number']. "' class='book-now'>Book Now</a>";
        echo "</div></div></section>";
         }
        } else {
     echo "<h5>ไม่พบห้องว่าง</h5>";
    }

?>                      <!-- content1 -->
  </body>
</html>
