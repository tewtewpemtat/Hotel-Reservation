<?php
	session_start();
	if (!isset($_SESSION['email'])) {
		header("Location: login.php");
		exit;
	}

    $_SESSION['hotel_name'] = $_GET['hotel_name'];
    $conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
    $email = $_SESSION['email'];
    $stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    $username = $user['username'];
    

    $hotel_name = $_SESSION['hotel_name'];
    $conn2 = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
    $sql2 = "SELECT * FROM room WHERE Hotel = :hotel_name AND status = 'available'";    
    $stmt2 = $conn2->prepare($sql2);
    $stmt2->bindParam(':hotel_name', $hotel_name, PDO::PARAM_STR);
    $stmt2->execute();

?>
    