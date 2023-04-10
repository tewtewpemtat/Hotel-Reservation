<?php
session_start();
if(!isset($_SESSION['roomID']) || !isset($_SESSION['hotel'])) {
    header("Location: reservation.php");
    exit;
}
$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
$username = $user['username'];
$roomID = $_SESSION['roomID'];
$hotel = $_SESSION['hotel'];
$total = $_SESSION['price'];

if(isset($_POST['pay-now'])){
    $status = 'Payment Successful';
    $paytype = 'Creditcard';

    $stmt = $conn->prepare("UPDATE reservation SET Status = ? WHERE RoomID = ? AND Hotel = ?");
    $stmt->execute([$status, $roomID, $hotel]);

    $sql = "INSERT INTO payment (Name, Amount, Paytype, Hotel, Room, Status) 
            VALUES (:name, :amount, :paytype, :hotel, :room, :status)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $username);
    $stmt->bindParam(':amount', $total);
    $stmt->bindParam(':paytype', $paytype);
    $stmt->bindParam(':hotel', $hotel);
    $stmt->bindParam(':room', $roomID);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    $_SESSION['success'] = "success";
    header("Location: success.php");
    exit();
}
?>