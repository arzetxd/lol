<?php
session_start();
include 'db.php';

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the query
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    // Login failed
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>
