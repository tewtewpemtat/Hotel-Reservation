<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}?>
<html>
  <head>
    <link rel="stylesheet" href="css/cancel.css">
  </head>
    <body>
    <header>                        
      <h1>Reservation</h1>
    
        <a href="index.php" class="admin-link">กลับหน้าหลัก</a>
      </header> 
      <div class="card">
      <img src="image/succesfull.jpg" alt="" width = 270px >
      <h1>ยกเลิกการจองสำเร็จ</h1> <br>
        <center><p>  การดำเนินการเสร็จสิ้น </p><p>ขอให้เป็นวันที่ดี</p></center>
      </div><br>
       
    </body>
</html>