<?php
include 'connect.inc';

// Get the posted values
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id'];

// Insert into orders table
$sql = "INSERT INTO orders (attendee_id, item_id, item_name, price) VALUES ('$user_id', '$item_id', '$item_name', '$price')";
if ($conn->query($sql) === TRUE) {
    echo "Product added to cart successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>