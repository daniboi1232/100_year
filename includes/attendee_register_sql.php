<!-- Using the same class as the booking page as it is the same style -->
<div class="booking-container">
    <h1>Register as an Attendee</h1>

    <?php
    include 'connect.inc';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $grad_year = $_POST['grad_year'];
        $attending = $_POST['attending'];

        // Validate input
        $errors = array();

        // First name validation
        if (empty($name) || strlen($name) < 1 || strlen($name) > 50) {
            $errors[] = 'First name must be between 1 and 50 characters';
        }

        // Last name validation
        if (empty($lname) || strlen($lname) < 1 || strlen($lname) > 50) {
            $errors[] = 'Last name must be between 1 and 50 characters';
        }

        // Email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email address';
        }

        // Phone number validation
        if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
            $errors[] = 'Phone number must be between 10 and 15 digits and only contain numbers';
        }

        // Graduation year validation
        if (!is_numeric($grad_year) || $grad_year < 1900 || $grad_year > 2100) {
            $errors[] = 'Graduation year must be a valid year between 1900 and 2100';
        }

        // Attending validation
        if (!is_numeric($attending) || $attending < 1) {
            $errors[] = 'Number of personnel attending must be a positive integer';
        }

        if (count($errors) > 0) {
            echo '<ul>';
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul>';
        } else {
            // SQL to insert data into the attendees table
            $sql = "INSERT INTO attendees (first_name, last_name, email, phone_number, grad_year, attending) VALUES ('$name', '$lname', '$email', '$phone', '$grad_year', '$attending')";

            if ($conn->query($sql) === TRUE) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
    ?>


    <form action="" method="POST">
        <label for="name">First Name</label>
        <input type="text" id="fname" name="fname" required>
        
        <label for="name">Last Name</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="grad_year">Graduation Year</label>
        <input type="number" id="grad_year" name="grad_year" required>

        <label for="attending">Personell Attending</label>
        <input type="number" id="attending" name="attending" required>

        <input type="submit" value="Register" class="reg-book-btn" >
    </form>
</div>
