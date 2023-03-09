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
	<div class="all">                   
    <div class="sidebar" > 
      <!-- content1 -->
      <form action="#" method="GET">
        <input type="search" placeholder="Search...." name="q">
        <button type="submit" class="bsearch">Search</button>
        <select id="" name="">
         <option value="">Province</option>
          <option value=""></option>
          <option value=""></option> 
          </select>
        <select id="" name="">
         <option value="">District</option>
          <option value=""></option>
          <option value=""></option>
        </select>
      </form>
        
      <?php
      if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          // Display the data here
          echo "<section class='hotel-details'>";
          echo "<div class='card'>";
          echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Hotel Image'>";
          echo "<div class='card-details'>";
          echo "<h3 class='hotel-name'>" . $row['name'] . "</h3>";
          echo "<p class='hotel-description'>" . $row['address'] . ", " . $row['province'] . "</p>";
		  echo "<p class='hotel-availability'>Number of Rooms: " . $row['numberofrooms'] . "</p>";
          echo "<a href='room.php?hotel_name=" . urlencode($row['name']) . "' class='book-now'>View Rooms</a>";
          echo "</div></div></section>";
        }
      } else {
        echo "<p>No results found.</p>";
      }
      ?>	  


     
    </div>
 </div>                              <!-- content1 -->
  </body>
</html>
