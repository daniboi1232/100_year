<div class="booking-container">
    <h1>Book a Seminar</h1>

    <?php
    include 'connect.inc';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $activities = $_POST['seminars'];

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

        // Activities validation
        if (empty($activities)) {
            $errors[] = 'Please select at least one seminar';
        }

        if (count($errors) > 0) {
            echo '<ul>';
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul>';
        } else {

            // PUT IN A SECTION THAT CHECKS IF THEY HAVE ALREADY BOOKED INTO AN ACTIVITY
            $q = "SELECT * FROM activity_signups WHERE attendees_id = (SELECT id FROM attendees WHERE first_name = '$name' AND phone_number = '$phone')";
            $r = mysqli_query($conn, $q);
            if (mysqli_num_rows($r) > 0) {
                echo 'You have already booked into an activity.'."\n".'Please Call or Email to change your booking.';
                exit;
            }


            // Convert the seminars array to a comma-separated string
            // But first, get the activity IDs from the database
            $activity_names = array();
            foreach ($activities as $activity_name) {
                $q = "SELECT activity_name FROM activities WHERE activity_name = '$activity_name'";
                $r = mysqli_query($conn, $q);
                $row = mysqli_fetch_assoc($r);
                $activity_names[] = $row['activity_name'];
            }

            $activities_list = implode(", ", $activity_names);

            // To get attendee id for the insert
            $q1 = "SELECT id FROM attendees WHERE first_name = '$name' AND phone_number = '$phone'";

            $r = mysqli_query($conn,$q1);

            if ($row = mysqli_fetch_assoc($r)) {
                $attendees_id = $row['id'];
            } else {
                echo 'Please Register Prior To Signing Up For Activities';
                exit;
            }

            // SQL to insert data into the seminar bookings table
            $sql = "INSERT INTO activity_signups (attendees_id,activities) VALUES ('$attendees_id', '$activities_list')";

            if ($conn->query($sql) === TRUE) {
                echo "Booking successful!";

                // Send email notification
                $subject = "Seminar Booking Confirmation";
                $message = "Dear $name $lname,\n\nYou have successfully booked the following seminars:\n\n $activities_list\n\nThank you for registering!\n\nBest regards,\nDaniel Bell";
                $headers = "From: danielbell1928@gmail.com" . "\r\n" .
                    "Reply-To: danielbell1928@gmail.com" . "\r\n" .
                    "MIME-Version: 1.0" . "\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                mail($email, $subject, $message, $headers);

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
    ?>


    <form action="booking.php" method="POST">
        <label for="name">First Name</label>
        <input type="text" id="fname" name="fname" required>
        
        <label for="name">Last Name</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>

        <label>Select Seminars</label>
        <div class="checkbox-group">
            <?php
            $q = "SELECT * FROM activities";
            $r = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($r)) {
                echo '<label><input type="checkbox" name="seminars[]" value="' . $row['activity_name'] . '"> ' . $row['activity_name'] . '</label>';
            }
            ?>
        </div>

        <input type="submit" value="Book Now" class="reg-book-btn">
    </form>
</div>