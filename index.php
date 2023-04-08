<?php 
include('php/index.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>                        
      <h1>Hotel Reservation</h1>
        <a href="logout.php" class="admin-link">Logout</a>
      </header> 
      <nav>                           <!-- nav -->
        <div class="profile">
        <div class="profile">
              <div class="profile">
              <center><h4>Hello <?php echo "$username";?></h4><center>
              </div>
            </div>
      <ul><hr>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="payhistory.php">Payment History</a></li>
            </ul>
          </li>
      </ul>
    </nav>      
    <div class="all">                   
      <div class="sidebar" > 
        <!-- content1 -->
        <form action="#" method="GET">
          <input type="search" placeholder="Search...." name="q">
          <button type="submit" class="bsearch">Search</button>
          <br>
          <br>
          <label for="province">Province:</label>
          <select name="province" id="province">
            <option value="none">None</option>
            <?php
              $sql = "SELECT DISTINCT province FROM hotel";
              foreach ($conn->query($sql) as $row) {
                echo "<option value='" . $row['province'] . "'>" . $row['province'] . "</option>";
              }
            ?>
          </select>
          <label for="district">District:</label>
          <select name="district" id="district">
            <option value="none">None</option>
            <?php
              $sql = "SELECT DISTINCT district FROM hotel";
              foreach ($conn->query($sql) as $row) {
                echo "<option value='" . $row['district'] . "'>" . $row['district'] . "</option>";
              }
            ?>
          </select>
          <button type="submit" class="bsearch">Go</button>
        </form>
      <?php
      
      if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result ->fetch(PDO::FETCH_ASSOC)) {
          // Display the data here
          echo "<section class='hotel-details'>";
          echo "<div class='card'>";
          echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Hotel Image'>";
          echo "<div class='card-details'>";
          echo "<h3 class='hotel-name'>" . $row['name'] . "</h3>";
          echo "<p class='hotel-description'>" . $row['address'] . ", " . $row['province'] . ", " . $row['district'] . "</p>";
          echo "<p class='hotel-availability'>Contact: " . $row['contact'] . "</p>";
		      echo "<p class='hotel-availability'>Number of Rooms: " . $row['numberofrooms'] . "</p>"; 
          echo "<a href='room.php?hotel_name=" . urlencode($row['name']) . "' class='book-now'>View Rooms</a>";
          echo "</div></div></section>";
        }
      } else {
        echo "<p>No results found.</p>";
      }
      ?>	  
    </div>
 </div>                        
  </body>
</html>