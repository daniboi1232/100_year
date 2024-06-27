<?php include_once 'includes/head.php'; ?>

<div class="wrapper">
        <div class="main-content">
            <?php

            include_once 'connect.inc';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $email = $_POST['email'];

                $sql = "INSERT INTO users (username, password_hash, email) VALUES ('$username', '$password', '$email')";

                if ($conn->query($sql) === TRUE) {
                    echo "Registration successful.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>

            <form method="post" action="login.php">
                Username: <input type="text" name="username" required><br>
                Password: <input type="password" name="password" required><br>
                Email: <input type="email" name="email" required><br>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>