<!-- Sidebar -->
<?php 
include_once 'includes/head.php'
?>
<div class="sidebar">
  <a class="navbar-brand" href="#">
    <img src="images/100yearlogo.png" alt="Logo" style="width: 150%; max-width: 300px;"> <!-- Adjust the width as needed -->
  </a>
  <nav class="nav flex-column">
    <div class="sidebar-links">
      <a class="nav-link active" href="index.php">Home</a>
      <a class="nav-link" href="attendees.php">Current Attendees</a>
      <a class="nav-link" href="booking.php">Event Booking</a>
      <div class="store-dropdown">
        
        <a class="nav-link store-dropdown-toggle" href="store-directory.php" id="navbarDropdown">
          Store
        </a>
        <div class="store-dropdown-menu" aria-labelledby="navbarDropdown"">
          <a class="store-dropdown-item" href="merch.php">Merchandise</a>
          <a class="store-dropdown-item" href="cart.php">Cart</a>
        </div>
      </div>
      
      <div class="logout_button_2">
        <form action="logout.php" method="POST">
          <input type="submit" name="expire_session" value="Log Out">
        </form>
      </div>
    </div>
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
              <p>Phone: (03) 352 9173</p>
              <p>Email: centenary@cas.school.nz</p>
          </div>                
          <div class="sidebar-image">
              <img src="images/newlogo.png" alt="CAS Logo" class="cas-logo" >
          </div>
      </div>
  </div>
</div>
