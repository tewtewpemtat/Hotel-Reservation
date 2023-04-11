<?php
session_start();
$_SESSION = array();
session_destroy();
echo "<script>alert('Logout Successful!');window.location.href='login.php';</script>";
exit;
?> 