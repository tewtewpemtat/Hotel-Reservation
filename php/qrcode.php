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


// fetch the price for the given room and hotel

if(isset($_POST['check-pay'])){
    $status = 'Payment Successful';
    $paytype = 'Promtpay';

    // fetch the price for the given room and hotel
    $stmt = $conn->prepare("SELECT Price FROM room WHERE Number = ? AND Hotel = ?");
    $stmt->execute([$roomID, $hotel]);
    $price = $stmt->fetchColumn();

    // update reservation status to "ชำระเงินสำเร็จ"
    $stmt = $conn->prepare("UPDATE reservation SET Status = ? WHERE RoomID = ? AND Hotel = ?");
    $stmt->execute([$status, $roomID, $hotel]);

    // insert data into database
    $sql = "INSERT INTO payment (Name, Amount, Paytype, Hotel, Room, Status) 
            VALUES (:name, :amount, :paytype, :hotel, :room, :status)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $username);
    $stmt->bindParam(':amount', $price);
    $stmt->bindParam(':paytype', $paytype);
    $stmt->bindParam(':hotel', $hotel);
    $stmt->bindParam(':room', $roomID);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    // redirect back to booking form
    header("Location: success.php");
    exit();
}

?>