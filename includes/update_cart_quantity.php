<?php
include_once 'connect.inc';

$item_id = $_POST['item_id'];
$user_id = $_POST['user_id'];
$quantity = $_POST['quantity'];

// Update quantity in database
$q = "UPDATE cart SET item_quantity = '$quantity' WHERE item_id = '$item_id' AND user_id = '$user_id'";
$r = $conn->query($q);

if (!$r) {
    echo "Error updating quantity: " . $conn->error;
} else {
    echo "Quantity updated successfully!";
}
?>