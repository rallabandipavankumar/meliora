<?php
session_start(); // Start session if not already started

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login page or any other appropriate page
header("Location: userlogin1.html");
exit;
?>
