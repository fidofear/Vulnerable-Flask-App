<?php
session_start(); // Start a new or resume the existing session

// Replace this with your database connection code
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        // Successful login
        $_SESSION['username'] = $username; // Store the username in the session
        header('Location: dashboard.php'); // Redirect to a protected page (dashboard.php)
        exit;
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}

// Check if the user is already authenticated and redirect them to the dashboard
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}
?>