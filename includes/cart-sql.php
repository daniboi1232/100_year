<?php
include_once 'connect.inc';

// echo 'hello world';
// Get user ID from session
$user_id = $_SESSION['user_id'];

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
                <?php 
                echo $item['item_name']; 
                //echo "Hello Workd";
                ?>
                
            </td>
            <td>
                <form action="update_cart_quantity.php" method="post">
                    <input type="number" name="quantity" value="<?php echo $item['item_quantity']; ?>" />
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>" />
                    <button type="submit">Update</button>
                </form>
            </td>
            <td>
                <?php echo $item['item_price']; ?>
            </td>
            <td>
                <?php echo $item['item_price'] * $item['item_quantity']; ?>
            </td>
            <td><form action="remove_from_cart.php" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>" />
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Total: $<?php echo $cart_total; ?> NZD</td>
        </tr>
    </table>

</body>