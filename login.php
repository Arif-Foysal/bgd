<?php
session_start();
require_once 'config/Database.php'; // Ensure this file exists and is correct

$conn = Database::connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    if (empty($username) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    try {
        $stmt = $conn->prepare("SELECT id, hashed_password FROM admin WHERE username = :username");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($password, $admin["hashed_password"])) {
            $_SESSION["admin_id"] = $admin["id"];
            $_SESSION["admin_username"] = $username;
            header("Location: admin_dashboard.php");
            exit;
        } else {
            echo "Invalid username or password.";
        }
    } catch (PDOException $e) {
        echo "Login failed: " . $e->getMessage();
    }
}
