<?php
//include_once 'connect.inc';

// echo 'hello world';
// Get user ID from session
$user_id = $_SESSION['user_id'];

// echo $_SESSION['user_id'];
// echo $user_id;

// Retrieve cart items from database
$query = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);

// Calculate cart total
$cart_total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $cart_total += $row['item_price'] * $row['item_quantity'];
}
// echo 'hello world';
?>

<body>
    <h1>Cart</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['item_name']; ?></td>
            <td>
                <input type="number" value="<?php echo $row['item_quantity']; ?>" />
                <button onclick="update_quantity(<?php echo $user_id; ?>, <?php echo $row['item_id']; ?>, this.value)">Update</button>
            </td>
            <td><?php echo $row['item_price']; ?></td>
            <td><?php echo $row['item_price'] * $row['item_quantity']; ?></td>
            <td><button onclick="remove_from_cart(<?php echo $user_id; ?>, <?php echo $row['item_id']; ?>)">Remove</button></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Total: <?php echo $cart_total; ?></td>
        </tr>
    </table>

    <script>
        function update_quantity(user_id, item_id, new_quantity) {
            // Send AJAX request to update cart quantity
            // ...
        }

        function remove_from_cart(user_id, item_id) {
            // Send AJAX request to remove item from cart
            // ...
        }
    </script>
</body>