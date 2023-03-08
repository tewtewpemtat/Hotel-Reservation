<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
if(isset($_GET['q'])) {
    $search_query = $_GET['q'];
    $sql = "SELECT id, name, address, province, contact, image, numberofrooms FROM hotel WHERE name LIKE '%$search_query%'";
  } else {
    $sql = "SELECT id, name, address, province, contact, image, numberofrooms FROM hotel";
  }
    $conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
    $result = $conn->query($sql);
?>
