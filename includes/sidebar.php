  <!-- Sidebar -->
  <div class="sidebar">
    <a class="navbar-brand" href="#">
      <img src="images/100yearlogo.png" alt="Logo" style="width: 150%; max-width: 300px;"> <!-- Adjust the width as needed -->
    </a>
    <nav class="nav flex-column">
      <a class="nav-link active" href="index.php">Home</a>
      <a class="nav-link" href="attendees.php">Current Attendees</a>
      <a class="nav-link" href="booking.php">Book A Seat</a>
      <a class="nav-link" href="#">Contact</a>
      <a class="nav-link" href="#">Contact</a>
      <a class="nav-link" href="#">Contact</a>
      <a class="nav-link" href="#">Contact</a>
      <a class="nav-link" href="#">Contact</a>
    </nav>
    <?php 
    include './includes/session_check.php';
    ?>
    <div class="logout_button">
      <form action="logout.php" method="POST">
        <input type="submit" name="expire_session" value="Log Out">
      </form>
    </div>
    <div class="sidebar-bottom">
        <div class="contact-bar">
            <div class="contact-info">
                <p>For Inquires - Contact Us</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@example.com</p>
            </div>                
            <div class="sidebar-image">
                <img src="images/newlogo.png" alt="CAS Logo" class="cas-logo" >
            </div>
        </div>
    </div>
</div>