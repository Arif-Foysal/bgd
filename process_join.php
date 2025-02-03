<?php
require 'config/config.php'; // Include your database connection
require_once 'config/Database.php';

$conn = Database::connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $division = $_POST['division'];
    $district = $_POST['district'];

    // Check if preference is set, otherwise default to 'none'
    $preference = isset($_POST['preference']) ? (is_array($_POST['preference']) ? implode(',', $_POST['preference']) : $_POST['preference']) : 'none';

    try {
        $stmt = $conn->prepare("INSERT INTO join_requests (full_name, gender, dob, mobile, email, division, district, preference) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$fullName, $gender, $dob, $mobile, $email, $division, $district, $preference]);

        header("Location: join_success.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
