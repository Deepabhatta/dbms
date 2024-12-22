<?php
// db_connect.php - Database connection file

// Database connection using new credentials
$conn = new mysqli("localhost", "newuser", "newpassword123", "payroll_db");

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Optional: you can remove this in production
    echo "Connection successful!";
}
?>
