<?php  





?>


<?php include_once 'includes/head.php' ?>
<body>
  <!-- Sidebar -->
  <?php include_once 'includes/sidebar.php'; ?>

  <!-- Main Content Wrapper -->

  <div class="wrapper">
    <div class="main-content">
      <div class="z-index-just">
        <!-- Hero Section -->
        <div class="jumbotron jumbotron-fluid text-center">
          <div class="container">

            <h1 class="display-4">Celebrating 100 Years of Excellence</h1>
            <p class="lead">A century of innovation, perseverance, and achievement.</p>
            <?php 
              // echo $_SESSION['user_id'];
            ?>
          </div>
        </div>

        <div class="image-container">
          <img src="./images/page-images/oldphoto.png" alt="Sample Image">
          <div class="overlay-text">
              <h3>A Legacy of Success</h3>
              <p>100 years of making a difference in our community.</p>
          </div>
        </div>
        <!-- Content Section -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="content-section">

                <h2>A Century of Milestones</h2>
                <p>From humble beginnings to a century of growth and achievement, we celebrate our rich history and look forward to a bright future.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Timeline Section -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Our Journey Through the Years</h2>
              <div class="timeline">
                <div class="timeline-item">
                  <h3>1920s</h3>
                  <p>Our organization was founded with a mission to make a difference in our community.</p>
                </div>
                <div class="timeline-item">
                  <h3>1950s</h3>
                  <p>We expanded our services to reach more people and make a greater impact.</p>
                </div>
                <div class="timeline-item">
                  <h3>1980s</h3>
                  <p>We introduced new programs and initiatives to address emerging needs in our community.</p>
                </div>
                <div class="timeline-item">
                  <h3>2000s</h3>
                  <p>We continued to grow and evolve, embracing new technologies and strategies to enhance our services.</p>
                </div>
                <div class="timeline-item">
                  <h3>2020s</h3>
                  <p>We celebrate our 100th anniversary and look forward to a bright future of continued service and innovation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonials Section -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>What Our Community Says About Us</h2>
              <div class="testimonials">
                <div class="testimonial">
                  <p>"I've been involved with this organization for over 20 years and have seen firsthand the positive impact they've had on our community."</p>
                  <h3>John Doe</h3>
                </div>
                <div class="testimonial">
                  <p>"Their dedication to serving others is inspiring and a testament to the power of compassion and kindness."</p>
                  <h3>Jane Smith</h3>
                </div>
                <div class="testimonial">
                  <p>"I've been a beneficiary of their services and can attest to the life-changing impact they've had on my life."</p>
                  <h3>Bob Johnson</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Call to Action Section -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="join_us">

                <h2>Head to the Event Booking page to Join Us in Celebrating 100 Years of Excellence</h2>
                <p>Learn more about our history, mission, and services, and find out how you can get involved and make a difference in our community.</p>
              
              '</div>
            </div>
          </div>
        </div>

        <!-- Push footer to the bottom -->
        <div class="flex-grow-1"></div>
        <?php include 'includes/slideshow3.php';?>
        </div>
    </div>
  </div>

  
  <!-- Footer -->
  <?php include_once 'includes/footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>