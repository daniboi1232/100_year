<?php

// reporting errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'connect.inc';

if (isset($_POST['update'])) {
    $item_id = $_POST['item_id'];
    $user_id = $_POST['user_id'];
    $quantity = $_POST['quantity'];

    // Update quantity in database
    $q = "UPDATE cart SET item_quantity = '$quantity' WHERE item_id = '$item_id' AND user_id = '$user_id'";
    $conn->query($q);

    // Redirect to same page to refresh the cart
    header('Location: cart.php');
    exit;
} elseif (isset($_POST['delete'])) {
    $item_id = $_POST['item_id'];
    $user_id = $_POST['user_id'];

    // Delete item from cart in database
    $q = "DELETE FROM cart WHERE item_id = '$item_id' AND user_id = '$user_id'";
    $conn->query($q);

    // Redirect to same page to refresh the cart
    header('Location: cart.php');
    exit;
} 



// echo 'Connected to database: ' . $conn->host_info;

// echo 'hello world';
// Get user ID from session
$user_id = $_SESSION['user_id'];

// echo 'User ID: ' . $_SESSION['user_id'];
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

<body class="cart">
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
            <form action="" method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <td>
                    <?php echo $item['item_name']; ?>
                </td>
                <td>
                    <input type="number" name="quantity" class="cart-inp" value="<?php echo $item['item_quantity'];?>" />
                    <button type="submit" name="update" class="cart-btn" >Update</button>
                </td>
                <td>
                    <?php echo $item['item_price']; ?>
                </td>
                <td>
                    <?php echo $item['item_price'] * $item['item_quantity']; ?>
                </td>
            </form>
            <form action="" method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <td>
                    <button type="submit" name="delete" class="cart-btn">Remove</button>
                </td>
            </form>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Total: $<?php echo $cart_total; ?> NZD</td>
        </tr>
    </table>
</body>