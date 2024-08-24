<?php
include_once 'connect.inc';

$item_id = $_POST['item_id'];
$user_id = $_POST['user_id'];

// Remove item from cart in database
$q = "DELETE FROM cart WHERE item_id = '$item_id' AND user_id = '$user_id'";
$r = $conn->query($q);

if (!$r) {
    echo "Error removing item: " . $conn->error;
} else {
    echo "Item removed successfully!";
}
?>