<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
$username = $user['username'];

// Fetch reservation data for the user
$reservation_stmt = $conn->prepare("SELECT * FROM reservation WHERE Name = ? AND Status = 'รอชำระเงิน'");
$reservation_stmt->execute([$username]);
$reservation = $reservation_stmt->fetchAll();

if (isset($_POST['cancel'])) {
  $roomID = $_POST['roomID'];
  $hotel = $_POST['hotel'];


  // Update room status to available
  $update_stmt = $conn->prepare("UPDATE room SET status = 'Available' WHERE Number = ? AND Hotel = ?");
  $update_stmt->execute([$roomID, $hotel]);

  // Delete reservation
  $delete_stmt = $conn->prepare("DELETE FROM reservation WHERE RoomID = ? AND Hotel = ? AND Name = ?");
  $delete_stmt->execute([$roomID, $hotel, $username]);
  
  header("Location: cancel.php");
  exit;

}


?>