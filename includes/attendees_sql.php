<div class="wrapper">
    <div class="main-content">
        <form action="" method="get" class="search-form" >
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" placeholder="Search Category...">
            <select name="category">
                <option value="first_name">First Name</option>
                <option value="last_name">Last Name</option>
                <option value="phone_number">Phone Number</option>
                <option value="email">Email</option>
                <option value="grad_year">Graduation Year</option>
            </select>
            <input type="submit" value="Search">
        </form>

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
            $search = '';
            $category = '';
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = $_GET['search'];
                $category = $_GET['category'];
            }

            $q = 'SELECT * FROM attendees';
            if (!empty($search)) {
                $q .= ' WHERE ' . $category . ' LIKE ?';
            }

            $stmt = mysqli_prepare($conn, $q);
            if (!empty($search)) {
                $search = '%' . $search . '%';
                mysqli_stmt_bind_param($stmt, 's', $search);
            }
            mysqli_stmt_execute($stmt);
            $r = mysqli_stmt_get_result($stmt);

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