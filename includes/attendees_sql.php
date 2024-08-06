<div class="wrapper">
        <div class="main-content">

            <table class="attendees_table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
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
                        <td><?php echo $row['phone_number'];?></td>
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
