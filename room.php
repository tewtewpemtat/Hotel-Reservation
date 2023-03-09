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
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="menu-item-has-children">
              <li><a href="#">Reservations</a></li>
              <li><a href="#">Rooms</a></li>
              <li><a href="#">Customers</a></li>
              <li><a href="#">Reports</a></li>
            </ul>
          </li>
      </ul>
    </nav>                           <!-- nav -->

     
    <div class="sidebar">  
      <form>
        <label for="bed-type">Bedtype:</label>
        <select id="boom-type" name="boom-type">
         <option value="none1">None</option>
          <option value="bedsingle">Single</option>
          <option value="beddouble">Double</option>
        </select>
        <label for="price-type">Price:</label>
        <select id="price-type" name="price-type">
         <option value="none2">None</option>
          <option value="lowprice">LowPrice</option>
          <option value="highprice">HighPrice</option>
        </select><br><br>
        <label for="check-in-date">Check-in date:</label>
        <input type="date" id="check-in-date" name="check-in-date">
        <label for="check-out-date">Check-out date:</label>
        <input type="date" id="check-out-date" name="check-out-date">
        <label for="room-type">Roomtype:</label>
        <select id="room-type" name="room-type">
         <option value="none3">None</option>
          <option value="roomsingle">Single</option>
          <option value="roomdouble">Double</option>
        </select> <br>
        </div>
      </form> 
        
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
        echo "<p class='room-price'>Price: $" . $row['Price'] . " Per/Day</p>";
        echo "<a href='#' class='book-now'>Book Now</a>";
        echo "</div></div></section>";
         }
        } else {
     echo "<p>No results found.</p>";
    }
?>                      <!-- content1 -->
  </body>
</html>
