<?php include_once 'includes/head.php'; ?>

<body>
    <?php 
    include_once 'includes/sidebar.php';
    include_once 'connect.inc';

    if (isset($_SESSION['permissions']) && $_SESSION['permissions'] == '1') {
        include 'includes/attendees_sql.php';
    } else {
        include 'includes/permission_denied.php';
    } 
    
    include_once 'footer.php'; ?>

</body>