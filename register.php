<?php
require 'config/config.php'; // Include your database connection
require_once 'config/Database.php';

$conn = Database::connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if keys exist before using them
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    // Validate inputs
    if (empty($username) || empty($password)) {
        var_dump($_POST);
        die("All fields are required.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert into database using prepared statement
    $sql = "INSERT INTO admin (username, hashed_password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$username, $hashed_password])) {
        echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
