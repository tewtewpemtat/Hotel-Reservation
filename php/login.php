<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
    } else {
		$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute(array(':email'=>$email, ':password'=>$password));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user) {
            $_SESSION['email'] = $email;
            echo "<script>alert('Login Successful!');window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid email or password.');</script>";
        }
    }
}

?>