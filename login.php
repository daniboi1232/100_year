
<?php 
session_start();

include_once 'includes/head.php';



?>
<body class="entry">
    <div class="signin">
        <h2>Login</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $q = "SELECT * FROM users WHERE username = '$username'";
            echo 'sdafadsf';
            $r = mysqli_query($conn, $q);
            echo 'ajdhfa';

            if ($r->num_rows > 0) {
                echo 'sadf';
                $user = mysqli_fetch_assoc($r);

                if (password_verify($password, $user['password_hash'])) {
                    $_SESSION['user_id'] = $user['id'];
                    echo $user['password_hash'];
                    $_SESSION['username'] = $user['username'];
                    header("Location: index.php");
                } else {
                    echo "<p>Invalid username or password.</p>";

                }
            } else {
                echo 'dsfasdf';
                echo "<p>Invalid username or password.</p>";
            }
            echo 'dasdfasdf';
        }
        ?>

        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>

        <p><a href="register.php">Register</a></p>
    </div>
</body>