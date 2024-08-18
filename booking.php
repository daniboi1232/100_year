<?php include_once 'includes/head.php' ?>

<body>
    <?php include_once 'includes/sidebar.php'; ?>

    <div class="wrapper">
        <div class="main-content">
            <div class="booking-flex">
                <?php 
                include_once 'includes/attendee_register_sql.php';
                include_once 'includes/session_booking_sql.php';
                ?>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>


