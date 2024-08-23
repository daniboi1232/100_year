<?php
// Include the database connection file
include_once 'connect.inc';

// Get the request data
$user_id = $_POST['user_id'];
$item_id = $_POST['item_id'];
$new_quantity = $_POST['new_quantity'];

// Update the cart quantity in the database
$query = "UPDATE cart SET item_quantity = '$new_quantity' WHERE user_id = '$user_id' AND item_id = '$item_id'";
mysqli_query($conn, $query);

// Calculate the new cart total
$query = "SELECT SUM(item_price * item_quantity) AS cart_total FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$cart_total = $row['cart_total'];

// Return the new cart total
echo $cart_total;
?>