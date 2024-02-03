
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">genZquest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="./index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="./contact.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jobs category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="category.php?search=Technology">Technology Jobs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="category.php?search=Engineer">Engineering Jobs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="category.php?search=Graphics">Graphics & Design Jobs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="category.php?search=DigitalMarketing">Digital Marketing Jobs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="category.php?search=WritingTranslation">Writing & Translation Jobs</a></li>
          </ul>
        </li>
        <?php
        $username = $_SESSION['username'];
        $userData = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registration WHERE username = '$username'"));
        if ($userData['preference'] == 'employer') {
          echo "<li class='nav-item'>
                  <a class='nav-link me-2' href='EmployerPanel/post-job.php'>Create Job</a>
                </li>";
        }
        ?>
        <?php
        if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
                  <a class='nav-link' href='register.php'><i class='bi bi-person'></i> Register</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='login.php'><i class='bi bi-box-arrow-in-right'></i> Login</a>
                </li>";
        } else {
          echo "<li class='nav-item'>
                  <a class='nav-link' href='logout.php'><i class='bi bi-box-arrow-in-right'></i>Logout</a>
                </li>";
        }
        ?>
      </ul>
      <form class="d-flex" action="search.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
          style="width: 200px; padding: 0.375rem 0.75rem;">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-LlYA1EnLs1JlGDeSfDE+t9z9s7l5WWE+h/6UJ5jPLfi5TCKZ4IFQqBcZHDO26zgP" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-XSmMXYGiAWEC2thTOgBt7L/zy9oBqCy+lX4xg4GUrwrMfU9qlC2Iq8wb2R1EX6dE" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
