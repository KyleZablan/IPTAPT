<?php

$host = 'localhost';
$username = 'root'; 
$password = '';     
$dbname = 'itelec2'; 


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields.";
        exit();
    }

    
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); 

    
    if ($stmt->execute()) {
        echo "<script>alert('Thank you for contacting us. Your message has been sent.'); window.location.href = '../admin/contact.php';</script>";
    
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>
