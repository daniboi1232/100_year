<?php 
include_once 'includes/head.php'; 
?>
<body class="entry">
    <div class="signin">
            <h2>Register</h2>
            <?php

            include_once 'connect.inc';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $email = $_POST['email'];

                $sql = "INSERT INTO users (username, password_hash, email) VALUES ('$username', '$password', '$email')";
                //echo $sql;
                if ($r = mysqli_query($conn, $sql) === TRUE) {
                    echo "Registration successful.";
                    sleep(2);
                    header("Location: login.php");

                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>

            <form method="post" action="">
                Username: <input type="text" name="username" required><br>
                Password: <input type="password" name="password" required><br>
                Email: <input type="email" name="email" required><br>
                <button type="submit">Register</button>
            </form>
            <p><a href="login.php">Login</a></p>
    </div>
</body>