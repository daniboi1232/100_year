<div class="booking-container">
    <h1>Book a Seminar</h1>

    <?php
    include 'connect.inc';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $activities = $_POST['activities'];
        
        //echo 'hello';

        // Convert the seminars array to a comma-separated string
        //$activities_list = implode(", ", $activities);

        //echo 'hello';
        // To get attendee id for the insert
        $q1 = "SELECT id FROM attendees WHERE first_name = '$name' AND phone_number = '$phone'";

        $r = mysqli_query($conn,$q1);
        //echo "hello";
        //echo $r;  
        if ($row = mysqli_fetch_assoc($r)>0){
            echo $row;
            $attendees_id = $row;
        } else {
            echo 'Please Register Prior To Signing Up For Activities';
        }               

        // SQL to insert data into the seminar bookings table
        $sql = "INSERT INTO activity_signups (attendees_id,activities) VALUES ('$attendees_id', '$activities_list')";

        if ($conn->query($sql) === TRUE) {
            echo "Booking successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
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
            <!-- Populate this with available seminars from the database -->
            <label><input type="checkbox" name="seminars[]" value="seminar1"> </label>
            <label><input type="checkbox" name="seminars[]" value="seminar2"> Seminar 2</label>
            <label><input type="checkbox" name="seminars[]" value="seminar3"> Seminar 3</label>
        </div>

        <input type="submit" value="Book Now">
    </form>
</div>