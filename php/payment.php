<?php
session_start();
if (!isset($_GET['roomID']) && !isset($_GET['hotel'])) {
    header("Location: index.php");
    exit;
}

$roomID = $_GET['roomID'];
$hotel = $_GET['hotel'];
$total = $_GET['total'];

if(isset($_POST['payment-method'])) {
    $payment_method = $_POST['payment-method'];
    if($payment_method == 'credit-card') {
        $_SESSION['roomID'] = $roomID;
        $_SESSION['hotel'] = $hotel;
        $_SESSION['price'] = $total;
        header("Location: creditcard.php");
        exit();
    } else if($payment_method == 'promptpay') {
        $_SESSION['roomID'] = $roomID;
        $_SESSION['hotel'] = $hotel;
        $_SESSION['price'] = $total;
        header("Location: qrcode.php");
        exit();
    }
}
?>