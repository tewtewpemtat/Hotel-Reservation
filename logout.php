<?php
// Start the session
session_start();
// Unset all of the session variables
$_SESSION = array();
// Destroy the session.
session_destroy();
// Redirect to the login page
echo "<script>alert('Logout Successful!');window.location.href='login.php';</script>";
exit;
?>