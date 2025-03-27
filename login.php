<?php
session_start();

// Demo credentials (in a real app, use a database with hashed passwords)
$valid_username = "demo";
$valid_password_hash = password_hash("password123", PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    // Simulate database check with demo credentials
    if ($username === $valid_username && password_verify($password, $valid_password_hash)) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>