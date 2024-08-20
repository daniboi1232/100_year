<?php 
include 'connect.inc';

$sql = "SELECT id, item_name, description, price, image_url FROM store_items";
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
            echo '<form action="/cartinsert.php" method="post">';
            echo '<input type="hidden" name="item_id" value="' . $row["id"] . '">';
            echo '<input type="hidden" name="item_name" value="' . $row["item_name"] . '">';
            echo '<input type="hidden" name="price" value="' . $row["price"] . '">';
            echo '<button type="submit">Add to Cart</button>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
    $conn->close();
    ?>
</div>
