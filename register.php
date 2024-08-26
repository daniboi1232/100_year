<?php 
include_once 'includes/head.php'; 
?>
<body class="entry">
    <div class="signin">
            <h2>Register</h2>
            <?php

            include_once 'connect.inc';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $ver_pass = $_POST['ver_pass'];
                $pass = $_POST['pass'];

                if (strlen($pass) < 7) {
                    echo 'Password must be at least 7 characters long.';
                } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{7,}$/', $pass)) {
                    echo nl2br ("Password must contain at least: \n One lowercase letter, \n One uppercase letter, \n and One digit.");
                } elseif ($ver_pass != $pass) {
                    echo 'Passwords do not match';
                } else {


                    $options = [
                        'cost' => 12
                    ];

                    $username = $_POST['username'];
                    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
                    $email = $_POST['email'];

                    // Activation Token
                    $a = md5(uniqid(rand(), true));

                    // Time for activation expiry
                    $now = time();
                    $thirtyMinutes = $now + (30 * 60);
                    $date_thirtyminutes = date('Y-m-d H:i:s', $thirtyMinutes);

                    $sql = "INSERT INTO user (`username`,`email`, `token`, `activation_expiry`, `email_confirmation`, `password_hash`) VALUES ('$username','$email', '$a', '$date_thirtyminutes', '0', '$password')";
                    echo $sql;
                    if ($r = mysqli_query($conn, $sql) === TRUE) {
                        echo "Registration successful.";
                        sleep(2);
                        header("Location: login.php");

                    } else {
                        echo 'adfssadf';
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                
            }
            ?>

            <form method="post" action="">
                <input  type="text" name="username" required placeholder="Username">
                <br>
                <input  type="email" name="email" required placeholder="Email">
                <br> 
                <input  type="password" name="pass" required placeholder="Password">
                <br>
                <input  type="password" name="ver_pass" required placeholder="Verify Password">
                <br>
                <button type="submit">Register</button>
            </form>
            <p><a href="login.php" class="login-btn">Login</a></p>
    </div>
</body>