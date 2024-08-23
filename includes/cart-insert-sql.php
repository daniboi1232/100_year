<!-- <h1>Hello World</h1> -->

<?php
include_once 'connect.inc';

// Get Session values
$user_id = $_SESSION['user_id'];

//echo $user_id;

// Get Posted Values
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$quantity = 1;

// echo $item_id;
// echo $item_name;
// echo $price;
// echo $quantity;


// Insert into orders table
$q = "INSERT INTO cart (`user_id`, `item_id`, `item_name`, `item_price`, `item_quantity`) VALUES ('$user_id', '$item_id', '$item_name', '$price', '$quantity')";

// $q = "INSERT INTO cart (`user_id`, `item_id`, `item_name`, `price`, `quantity`) VALUES ('1', '1', 'T-Shirt', 20.00, '$quantity')";

//testing the query
// echo $q;

// $result = $conn->query($q);

//testing if it worked
// echo 'askdfjhad';


if ($conn->query($q) === TRUE) {
    echo "Product added to cart successfully!";
    ?>
    <body>
        <button id="redirect-button">Redirecting to cart in 5 seconds...</button>
        <script>
            var button = document.getElementById('redirect-button');
            var count = 5;
            var interval = setInterval(function() {
                button.textContent = 'Redirecting to cart in ' + count + ' seconds...';
                count--;
                if (count === 0) {
                    clearInterval(interval);
                    window.location.href = 'cart.php';
                }
            }, 1000);
        </script>
    </body>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<body>



</body>