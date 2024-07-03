<?php
include 'session_check.php';

echo "Welcome, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>