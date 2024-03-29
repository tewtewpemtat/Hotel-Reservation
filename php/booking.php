<?php
session_start();
if (!isset($_GET['Number'])) {
    header("Location: index.php");
    exit;
}
$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
$sql = "SELECT id, name, address, province, district, contact, image, numberofrooms FROM hotel";
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
$username = $user['username'];
$roomNumber = $_GET['Number'];
$username = $_SESSION['username'];
$hotel_name = $_SESSION['hotel_name'];

if(isset($_POST['book-now'])){
    $name = $username;
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $status = 'Unavailable';
    $status2 = 'Pending payment';

    $sql = "UPDATE room SET Status = :status WHERE Number = :room_number AND Hotel = :hotel_name";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':room_number', $roomNumber);
    $stmt->bindParam(':hotel_name', $hotel_name);
    $stmt->execute();
  
    $sql = "INSERT INTO reservation (Name, CheckInDate, CheckOutDate, RoomID, Hotel, Status) 
            VALUES (:name, :check_in_date, :check_out_date, :room_number, :hotel_name, :status)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':check_in_date', $check_in_date);
    $stmt->bindParam(':check_out_date', $check_out_date);
    $stmt->bindParam(':room_number', $roomNumber);
    $stmt->bindParam(':hotel_name', $hotel_name);
    $stmt->bindParam(':status', $status2);
    $stmt->execute();

    $check_in_date = new DateTime($_POST['check_in_date']);
    $check_out_date = new DateTime($_POST['check_out_date']);
    $diff = $check_out_date->diff($check_in_date);
    $num_nights = $diff->days;
    $sql = "SELECT Price FROM room WHERE Number = :room_number AND Hotel = :hotel_name";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':room_number', $roomNumber);
    $stmt->bindParam(':hotel_name', $hotel_name);
    $stmt->execute();
    $price = $stmt->fetch()['Price'];
    $total_price = $num_nights * $price;
    
    $sql = "UPDATE reservation SET total = :total WHERE RoomID = :room_number AND Hotel = :hotel_name";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':total', $total_price);
    $stmt->bindParam(':room_number', $roomNumber);
    $stmt->bindParam(':hotel_name', $hotel_name);
    $stmt->execute();
    
    $_SESSION['price'] = $total_price;
    header("Location: reservation.php");
    exit();
}
?>
