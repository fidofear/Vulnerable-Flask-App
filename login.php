<?php
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
        echo "Login successful for $username!";
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}
?>