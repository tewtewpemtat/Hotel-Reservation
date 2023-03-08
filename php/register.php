<?php
	session_start();
	if (isset($_SESSION['email'])) {
		header("Location: index.php");
		exit;
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // Retrieve form data
		$email = $_POST['email'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $contact = $_POST['contact'];
	    
	    // Validate form data
	    if(empty($username) || empty($email) || empty($password) || empty($contact)) {
            echo "<script>alert('Please fill in all required fields.');</script>";
	    } else {
	        // Perform database connection and insert new user
	        $conn = new PDO("mysql:host=localhost;dbname=hotelreservation;charset=utf8","root","");
	        $query = "INSERT INTO user (email, username, password, contact) VALUES (:email, :username, :password, :contact)";
	        $stmt = $conn->prepare($query);
	        try {
	            $result = $stmt->execute(array(':username'=>$username, ':password'=>$password, ':email'=>$email, ':contact'=>$contact));
	            if($result) {
                    echo "<script>alert('User registered successfully!');</script>";
	            } else {
                    echo "<script>alert('An error occurred while registering. Please try again later.');</script>";
	            }
	        } catch(PDOException $e) {
	            if($e->getCode() == '23000') {
                    echo "<script>alert('Email already exists. Please choose a different email.');</script>";
	            } else {
                    echo "<script>alert('An error occurred while registering. Please try again later.');</script>";
	            }
	        }
	    }
	}
	?>