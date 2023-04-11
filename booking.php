<?php 
include('php/booking.php');
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="css/booking.css">
  </head>
  <body>
    <header>
      <h1>Booking</h1>
      <a href="logout.php" class="admin-link">Logout</a>
    </header>
    <div class="booking-form">
      <h2>Booking Information</h2>
   <form action="" method="post">
   <div class="form-group">
    <label for="check-in-date">Check-in Date:</label>
    <input type="date" name="check_in_date" id="check-in-date" required>
   </div>
   <div class="form-group">
    <label for="check-out-date">Check-out Date:</label>
    <input type="date" name="check_out_date" id="check-out-date" required>
   </div>
   <button type="submit" name="book-now">Book Now</button>
   <a href="room.php?hotel_name=<?php echo $hotel_name; ?>" class="back-button">Back</a>
   </form>
  </div>
</body>
</html>
