<?php
// logout.php
session_start();
session_unset();
session_destroy();
unset($_SESSION);

if (!isset($_SESSION)) {
    echo "destroyed";
    header("Location: login.php");
}  else {
    echo "not destroyed";
}



exit;
?>