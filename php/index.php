<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
$sql = "SELECT id, name, address, province, district, contact, image, numberofrooms FROM hotel";
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT username FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
$username = $user['username'];
if(isset($_GET['q'])) {
    $search_query = $_GET['q'];
    $sql .= " WHERE name LIKE '%$search_query%'";
} else {
    $sql = "SELECT id, name, address, province, district, contact, image, numberofrooms FROM hotel";
}
if(isset($_GET['province']) && $_GET['province'] !== 'none' && isset($_GET['district']) && $_GET['district'] !== 'none') {
    $province = $_GET['province'];
    $district = $_GET['district'];
    $sql .= " AND province = '$province' AND district = '$district'";
} elseif(isset($_GET['province']) && $_GET['province'] !== 'none') {
    $province = $_GET['province'];
    $sql .= " AND province = '$province'";
} elseif(isset($_GET['district']) && $_GET['district'] !== 'none') {
    $district = $_GET['district'];
    $sql .= " AND district = '$district'";
}
$result = $conn->query($sql);
?>
