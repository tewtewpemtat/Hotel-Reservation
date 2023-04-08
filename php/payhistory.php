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

// retrieve payment history data for the user
$stmt = $conn->prepare("SELECT * FROM payment WHERE Name = ?");
$stmt->execute([$username]);
$payment = $stmt->fetchAll();
?>