<?php
if (!isset($_GET['roomID']) && isset($_GET['hotel'])) {
    header("Location: index.php");
    exit;
}

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$roomID = $_GET['roomID'];
$hotel = $_GET['hotel'];


if(isset($_POST['payment-method'])) {
    $payment_method = $_POST['payment-method'];
    if($payment_method == 'credit-card') {
        $_SESSION['roomID'] = $roomID;
        $_SESSION['hotel'] = $hotel;
        header("Location: creditcard.php");
        exit();
    } else if($payment_method == 'promptpay') {
        $_SESSION['roomID'] = $roomID;
        $_SESSION['hotel'] = $hotel;
        header("Location: qrcode.php");
        exit();
    }
}

?> 