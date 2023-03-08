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
      <a href="#" class="admin-link">Admin</a>
    </header>                       <!-- Header1-->

        <header class="header2">   <!-- Header2-->
             <li><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Contact</a></li>
             <li><a href="#">Reservations</a></li>
             <li><a href="#">Rooms</a></li>
             <li><a href="#">Customers</a></li>
             <li><a href="#">Reports</a></li>
           </ul>
        </header>                   <!-- Header2-->


    <nav>                           <!-- nav -->
        <h1>กุนเเขมร์ Hotel</h1><br>
        <div class="profile">
            <div class="profile-photo">
              <img src="hotel1.jpg" alt="Profile Photo">
            </div>
            <div class="profile-info">
              <h4>JohnDoe.Admin</h4>
              <div class="status">
                <span class="online"></span>
                <p>Online</p> 
              </div>
            </div>
          </div>
      <ul><hr>
        <li><a href="#">Home</a></li>
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

     
    <div class="sidebar">           <!-- content1 -->
      <input class="fsearch" type="search" placeholder="Search....">
      <button ><a href="#"  class="bsearch"> Search  </a></button>
      <form>
        <label for="check-in-date">Check-in date:</label>
        <input type="date" id="check-in-date" name="check-in-date">
        <label for="check-out-date">Check-out date:</label>
        <input type="date" id="check-out-date" name="check-out-date">
        <label for="room-type">Room type:</label>
        
        <select id="room-type" name="room-type">
            
          <option value="single">Single</option>
          <option value="double">Double</option>
       
        </select> <br>
      </form> 


      <section class="hotel-details"> <!-- detail -->
        <div class="card">
          <img src="hotel1.jpg" alt="Hotel Image">
          <div class="card-details">
            <h3 class="hotel-name">กุนเเขมร์ Hotel</h3><br>
            <p class="hotel-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est non magna posuere hendrerit.</p><br>
            <a href="#" class="book-now">Book Now</a>
          </div>
        </div>
      </section> <br>
      
          <section class="hotel-details">
            <div class="card">
              <img src="hotel2.jpg" alt="Hotel Image">
              <div class="card-details">
                <h3 class="hotel-name">เเสงจรัส Hotel</h3>
                <p class="hotel-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est non magna posuere hendrerit.</p>
                <a href="#" class="book-now">Book Now</a>
              </div>
            </div>
          </section> <br>

          <section class="hotel-details">
            <div class="card">
              <img src="hotel3.jpg" alt="Hotel Image">
              <div class="card-details">
                <h3 class="hotel-name">ดํารงเกียรติ Hotel </h3>
                <p class="hotel-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est non magna posuere hendrerit.</p>
                <a href="#" class="book-now">Book Now</a>
              </div>
            </div> <br>

          </section>
          <section class="hotel-details"><!-- detail -->
            <div class="card">
              <img src="hotel1.jpg" alt="Hotel Image">
              <div class="card-details">
                <h3 class="hotel-name">มนตรี Hotel</h3>
                <p class="hotel-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est non magna posuere hendrerit.</p>
                <a href="#" class="book-now">Book Now</a>
              </div>
            </div>
          </section>
          
    
     
    </div>                           <!-- content1 -->

  </body>
</html>
