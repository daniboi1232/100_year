<?php
if (isset($_SESSION['user_id'])) {
    session_destroy();
} else {
    session_start();
}




if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>