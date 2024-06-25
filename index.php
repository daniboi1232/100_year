<?php include_once 'includes/head.php' ?>
<body>
  <!-- Sidebar -->
  <?php include_once 'includes/sidebar.php'; ?>

  <!-- Main Content Wrapper -->

  <div class="wrapper">
    <div class="main-content">

      <!-- Hero Section -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">

          <h1 class="display-4">Welcome to kuajkdhfkajsdf</h1>
          <p class="lead">jdfakjhsdlkfjashldkjfhlaskjdhflad.</p>
        </div>
      </div>

      <div class="image-container">
        <img src="https://via.placeholder.com/1000x600" alt="Sample Image">
        <div class="overlay-text">
            <h3>Overlay Text</h3>
            <p>This is the overlay text on the image</p>
        </div>
      </div>
      <!-- Content Section -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <h2>Main Content</h2>
            <p>Main Content Main Content Main Content Main Content Main Content Main Content</p>
          </div>
        </div>
      </div>

      <!-- Push footer to the bottom -->
      <div class="flex-grow-1"></div>
      <?php include 'includes/slideshow3.php';?>
    </div>
  </div>
  
  <!-- Footer -->
  <footer class="footer bg-light text-center">
    <div class="container">
      <span class="text-muted">&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</span>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
