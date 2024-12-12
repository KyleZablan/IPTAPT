<?php
// Database configuration
$host = 'localhost'; // your database host
$username = 'root';  // your database username
$password = '';      // your database password
$dbname = 'itelec2'; // your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check for a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simple validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields.";
        exit();
    }

    // Prepare SQL query to insert form data into the contact_form table
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); // "sss" means three string parameters

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Thank you for contacting us. Your message has been sent.'); window.location.href = '../admin/contact.php';</script>";
    
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
