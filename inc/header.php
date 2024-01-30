<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">genZquest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <?php
          
          if (!isset($_SESSION['username'])) {
            echo "
            <li class='nav-item'>
              <a class='nav-link' href='register.php'><i class='bi bi-person'></i> Register</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='login.php'><i class='bi bi-box-arrow-in-right'></i> Login</a>
            </li>
          ";
          }
           else {
            echo "
            <li class='nav-item'>
              <a class='nav-link' href='logout.php'><i class='bi bi-box-arrow-in-right'></i>Logout</a>
            </li>";
          }
          ?>
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
        <li><a class="dropdown-item" href="category.php?search=DigitalMarketing">Digital Marketing  Jobs</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="category.php?search=WritingTranslation">Writing & Translation Jobs</a></li>
    
    </ul>
      </li>

  
  
        <!-- <ul class="nav navbar-nav navbar-right">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person"></i> Register
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="jobseeker/register_user.php">Jobseeker</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="employer/register_emp.php">Employer</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
  </li>
</ul>        -->
      </ul>
      <!-- <form class="d-flex" action="search.php" method="POST">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
    <button class="btn btn-outline-success" type="submit">Search</form> -->
    <form class="d-flex" action="search.php" method="POST">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" style="width: 200px; padding: 0.375rem 0.75rem;">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>


      <!-- <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search by Job Title">
        <button type="submit">Search</button>
    </form> -->
    </div>
  </div>
</nav>