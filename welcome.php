<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>