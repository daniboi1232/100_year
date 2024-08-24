<?php
include_once 'connect.inc';

$item_id = 1; // Replace with a valid item ID
$user_id = 1; // Replace with a valid user ID
$quantity = 2; // Replace with a valid quantity

// Update quantity in database
$q = "UPDATE cart SET item_quantity = '$quantity' WHERE item_id = '$item_id' AND user_id = '$user_id'";
$r = $conn->query($q);

if (!$r) {
    echo "Error updating quantity: " . $conn->error;
} else {
    echo "Quantity updated successfully!";
}
?>