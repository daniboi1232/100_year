<?php

// reporting errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once 'connect.inc';

echo 'Connected to database: ' . $conn->host_info;

// echo 'hello world';
// Get user ID from session
$user_id = $_SESSION['user_id'];

echo 'User ID: ' . $_SESSION['user_id'];
// echo $_SESSION['user_id'];
// echo $user_id;

// Retrieve cart items from database
$q = "SELECT * FROM cart WHERE user_id = '$user_id'";
$r = $conn->query($q);
// echo $r;

// echo $r;
// $row = mysqli_fetch_assoc($result);


// Store cart items in an array
$cart_items = array();
while ($row = mysqli_fetch_assoc($r)) {
    $cart_items[] = $row;
}


// Calculate cart total
$cart_total = 0;
foreach ($cart_items as $item) {
    $cart_total += $item['item_price'] * $item['item_quantity'];
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
        <?php foreach ($cart_items as $item) { ?>
        <tr>
            <td>
                <?php echo $item['item_name']; ?>
            </td>
            <td>
                <input type="number" id="quantity-<?php echo $item['item_id']; ?>" value="<?php echo $item['item_quantity']; ?>" />
                <button class="cart-btn" onclick="updateQuantity(<?php echo $item['item_id']; ?>, <?php echo $user_id; ?>)">Update</button>
            </td>
            <td>
                <?php echo $item['item_price']; ?>
            </td>
            <td>
                <?php echo $item['item_price'] * $item['item_quantity']; ?>
            </td>
            <td>
                <button class="cart-btn" onclick="removeFromCart(<?php echo $item['item_id']; ?>, <?php echo $user_id; ?>)">Remove</button>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Total: $<?php echo $cart_total; ?> NZD</td>
        </tr>
    </table>

    <script>
        function updateQuantity(itemId, userId) {
            var quantity = document.getElementById('quantity-' + itemId).value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'includes/update_cart_quantity.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Update the cart total and item quantity dynamically
                    // You can use JavaScript to update the HTML elements
                    console.log('Quantity updated successfully!');
                } else {
                    console.log('Error updating quantity: ' + xhr.statusText);
                }
            };
            xhr.send('item_id=' + itemId + '&quantity=' + quantity + '&user_id=' + userId);
        }

        function removeFromCart(itemId, userId) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'includes/remove_from_cart.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Remove the item from the cart dynamically
                    // You can use JavaScript to remove the HTML elements
                    console.log('Item removed successfully!');
                } else {
                    console.log('Error removing item: ' + xhr.statusText);
                }
            };
            xhr.send('item_id=' + itemId + '&user_id=' + userId);
        }
    </script>
</body>