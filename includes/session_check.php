<?php
session_start();

echo $_SESSION;
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>