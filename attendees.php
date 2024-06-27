<?php include_once 'includes/head.php'; ?>

<body>
    <?php include_once 'includes/sidebar.php'; ?>
    <?php include_once 'connect.inc'; ?>

    <div class="wrapper">
        <div class="main-content">

            <table class="table_style">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Graduation Year</th>
                    </tr>
                </thead>
                <tbody>
            <?php 

            $q = 'SELECT * FROM attendees';
            $r = mysqli_query($conn,$q);

            while ($row = mysqli_fetch_assoc($r)){

            ?>
                    <tr>
                        <td><?php echo $row['first_name'];?></td>
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['grad_year'];?></td>
                    </tr>
            <?php
            }

            ?>
                </tbody>
            </table>


        </div>
    </div>

</body>