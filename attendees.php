<?php include_once 'includes/head.php'; ?>

<body>
    <?php include_once 'includes/sidebar.php'; ?>
    <?php include_once 'connect.inc'; ?>

<?php  

$q = 'SELECT * FROM attendees';
$r = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($r);
var_dump($row);

if($row){

}


?>


</body>