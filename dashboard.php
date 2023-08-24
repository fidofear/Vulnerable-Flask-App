<?php
session_start(); // Start or resume the session

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Redirect to the login page if not authenticated
    exit;
}

// If the user is authenticated, welcome them
$loggedInUser = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $loggedInUser; ?>!</h2>
    <p>This is your dashboard. You can put any content here that is relevant to the logged-in user.</p>
    
    <!-- Add a logout button to end the session -->
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
