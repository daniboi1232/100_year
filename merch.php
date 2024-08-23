<?php
ob_start(); // Start output buffering
include_once 'includes/merch_sql.php';
$merch_sql_output = ob_get_contents(); // Capture the output
ob_end_clean(); // End output buffering
?>

<?php include_once 'includes/head.php' ?>

<body>
    <?php include_once 'includes/sidebar.php'; ?>
    <?php include_once 'connect.inc'; ?>

    <div class="wrapper">
        <div class="main-content">
        <?php 
            echo $merch_sql_output; // Display the captured output 
        ?>


</div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>