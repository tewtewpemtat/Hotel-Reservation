<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}

// Start the session and store user information
// Handle the login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate form data
    if(empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
    } else {
		$conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
        // Check if user exists in the database
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute(array(':email'=>$email, ':password'=>$password));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($user) {
            // User found, redirect to home page or dashboard
            echo "<script>alert('Invalid email or password.');</script>";
            header("Location:index.php");
        } else {
            // User not found, show error message
            echo "<script>alert('Invalid email or password.');</script>";
        }
    }
    $_SESSION['email'] = $email;
}

?>