<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate login credentials
    $sql = "SELECT * FROM members WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        session_start();
        $_SESSION['email'] = $email;
        header("Location: dashboard.php"); // Redirect to dashboard or member page
    } else {
        echo "Invalid email or password. Please try again.";
    }
}

$conn->close();
?>
