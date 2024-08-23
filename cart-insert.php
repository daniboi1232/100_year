<?php include_once 'includes/head.php' ?>

<body>
    <?php include_once 'includes/sidebar.php'; ?>
    <?php include_once 'connect.inc'; ?>

    <div class="wrapper">
        <div class="main-content">
            <?php 
                include_once 'includes/cart-insert-sql.php';
            ?>
        </div>
    </div>

</body>
