
<?php 

include 'includes/session_check.php';

session_start();



include_once 'includes/head.php';



?>


<body class="entry">
    <?php 
        include 'includes/intro.php';
    ?>
    <div class="signin">
        <h2>Login</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $q = "SELECT * FROM user WHERE username = '$username'";
            // echo 'sdafadsf';
            $r = mysqli_query($conn, $q);
            // echo 'ajdhfa';

            if ($r->num_rows > 0) {
                //echo 'sadf';
                $user = mysqli_fetch_assoc($r);
                //echo $user;
                //echo $password;

                $options = [
                    'cost' => 12
                ];

                $newpass = password_hash($_POST['password'], PASSWORD_BCRYPT,$options);
                //echo $newpass;

                if (password_verify($password, $user['password_hash'])) {
                    $_SESSION['user_id'] = $user['id'];
                    //echo $user['password_hash'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['permissions'] = $user['permiss'];
                    //echo $_SESSION['permissions'];
                    
                    header("Location: index.php");
                } else {
                    echo "<p>Invalid username or password.</p>";

                }
            } else {
                // echo 'dsfasdf';
                echo "<p>Invalid username or password.</p>";
            }
            // echo 'dasdfasdf';
        }
        ?>

        <form method="post" action="" >
            <input type="text" name="username" required placeholder="Username"><br>
            <input type="password" name="password" required placeholder="Password"><br>
            <button type="submit">Login</button>
        </form>

        <a href="register.php" class="register-btn">Register</a>
    </div>
</body>