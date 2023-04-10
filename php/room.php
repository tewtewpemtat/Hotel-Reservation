<?php
session_start();
if (!isset($_GET['hotel_name'])) {
    header("Location: index.php");
    exit;
  }
$_SESSION['hotel_name'] = $_GET['hotel_name'];
$hotel_name = $_SESSION['hotel_name'];
  
$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
$username = $user['username'];

$sql2 = "SELECT * FROM room WHERE Hotel = :hotel_name AND status = 'available'";
$stmt2 = $conn->prepare($sql2);
    if (!isset($_POST['submit'])) { 
        $stmt2 = $conn->prepare("SELECT * FROM room WHERE Hotel = :hotel_name AND status = 'available'");
        $stmt2->bindParam(':hotel_name', $hotel_name, PDO::PARAM_STR);
        $stmt2->execute();
    } else {
        $room_type = $_POST['room-type'];
        $bed_type = $_POST['bed-type'];
        $sql2 = "SELECT * FROM room WHERE Hotel = :hotel_name AND status = 'available'";
    if ($room_type !== '') {
      $sql2 .= " AND Roomtype = :room_type";
    }
    if ($bed_type !== '') {
      $sql2 .= " AND Bedtype = :bed_type";
    }
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bindParam(':hotel_name', $hotel_name, PDO::PARAM_STR);
    if ($room_type !== '') {
      $stmt2->bindParam(':room_type', $room_type, PDO::PARAM_STR);
    }
    if ($bed_type !== '') {
      $stmt2->bindParam(':bed_type', $bed_type, PDO::PARAM_STR);
    }
    $stmt2->execute();
  }
$_SESSION['username'] = $username;
$_SESSION['hotel_name'] = $hotel_name;
?>
