<?php 
include 'connect.inc';

$sql = "SELECT id, item_name, description, price, image_url, stock FROM store_items";
// echo 'hello';
$result = $conn->query($sql);
// echo 'hello';
?>

<div class="card-container">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row["image_url"] . '" alt="' . $row["item_name"] . '">';
            echo '<h2>' . $row["item_name"] . '</h2>';
            echo '<p>' . $row["description"] . '</p>';
            echo '<p class="price">$' . $row["price"] . '</p>';
            echo '<p class="stock">Stock: ' . $row["stock"] . '</p>';
            echo '<p><button formaction="/cartinsert.php" >Add to Cart</button></p>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
    $conn->close();
    ?>
</div>


