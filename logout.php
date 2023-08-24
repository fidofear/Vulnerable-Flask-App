<?php
session_start(); // Start or resume the session

// Destroy the session to log the user out
session_destroy();

// Redirect the user back to the login page
header('Location: login.html');
exit;
?>