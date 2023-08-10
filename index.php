<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Please login first!')</script>";
  echo "<script>location.href='login.php'</script>";}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>genZquest</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="CSS/style.css">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    .swiper-container {
      width: 100%;
      height: 55vh;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .blur-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2); 
        backdrop-filter: blur(3px); 
    }

    .slide-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
      
    }

  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  </style>

</head>

<body>

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
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-2" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
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
          } else {
            echo "
            <li class='nav-item'>
              <a class='nav-link' href='logout.php'><i class='bi bi-box-arrow-in-right'></i>Logout</a>
            </li>";
          }
          ?>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label>
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('Images/pic1.jpeg');">
            <div class="blur-overlay"></div>
                <div class="jumbotron text-center py-6 slide-content">
                <h1 class="h-font" >Your Bright Future Starts Here Now</h1>
                <p >Find the most exciting startup jobs</p>
                    <form class="form-inline" id="homesearch">
                        <input type="text" class="form-control" size="40" placeholder="Job title or keyword" name="keyword" id="keyword">
                        <button type="button" class="btn btn-danger" style="color: white;">
                            <i class="fas fa-search"></i> Find Job
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>

<!-- Container (About Section) -->

<section id="about">
  <div class="container my-4 py-4">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <img src="Images/img3.svg" alt="img-fluid" class="w-100">
      </div>
      <div class="col-md-6">
        <h1 class="fs-4 mb-0" style="color: rgb(7, 7, 78);">About GenZquest</h1><br>
        <h2 class="display-6 fw-bold">Simplifying job hunting for seekers and optimizing recruitment for employers.</h2>
        <br>
        <p class="lead mb-6">GenZquest offers a platform for job seekers to find jobs that match their qualifications. Job seekers can easily register and create a comprehensive profile, including their educational background. They have the freedom to explore diverse job opportunities and apply seamlessly.</p>
        <button class="btn btn-primary px-4">Read more</button>
      </div>
    </div>
  </div>
</section>

  <!-- CETA SECTION -->
  <section class="ceta">
    <div class="container-fluid py-3 text-center">
      <p style="color: red;">Our Specialization</p>
      <h2>Browse Top Categories</h2>
      <div class="row py-3">
        <div class="col-lg-11 m-auto pt-3">
          <div class="row py-3">
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon1.JPG" class="img-fluid my-3" alt="graphics">
                  <h6 ><a href="graphics.php" >Graphics & Design</a></h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon2.JPG" class="img-fluid my-3" alt="programming">
                  <h6>Programming & Tech</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon3.JPG" class="img-fluid my-3" alt="">
                  <h6>Wordpress</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon4.JPG" class="img-fluid my-3" alt="">
                  <h6>Digital Marketing</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon5.JPG" class="img-fluid my-3" alt="Animation">
                  <h6>Video & Animation</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon6.JPG" class="img-fluid my-3" alt="">
                  <h6>Music and Audio</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon7.JPG" class="img-fluid my-3" alt="">
                  <h6>UI/UX Illustrator</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon8.JPG" class="img-fluid my-3" alt="">
                  <h6>Writing & Translation</h6>
                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>
            <div class="row py-3">
              <div class="col-lg-5 m-auto">
                <button class="btn3">BROWSE ALL SECTORS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

<!-- Carousel wrapper -->
<div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3"><span>Happy</span> Clients</h2>
          </div>
        </div>
</div>
<div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="Images/person1.svg" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Anisur Rahman</h5>
          <p>Full stack web developer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
           Website has everything I wanted , and all adjustments I asked for were done in a timely manner!
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-3">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>                             
        <li><i class="fas fa-star fa-sm"></i></li>                              
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="Images/person3.svg" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">JF Sabrin</h5>
          <p>Graphics Designer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
           Such an incredible platform! However,there is room for improvement as I have encountered some bugs.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-3">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>

    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="Images/person2.svg" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Fariha Chy</h5>
          <p>Graphics Designer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
           A nice website-Learned and Gained many knowledge
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-3">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!--footer -->
  <footer class="bg-dark text-white p-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>Contact Us</h5>
          <p>Email: jannatulsabrina1067@gmail.com</p>
          <p>Phone: +8801783-618103</p>
        </div>
        <div class="col-md-6 d-flex justify-content-between align-items-center">
          <div>
            <ul class="list-unstyled mb-0">
              <li><a href="https://www.facebook.com/sabb.uwu" target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/jf_sabb" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://github.com/Jannatul-Ferdous-Sabrin" target="_blank"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
          <div class="text-center">
            <p class="mb-0">&copy; 2023 genZquest. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--  Bootstrap JS and other scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


<script>
function scrollToSection(sectionClass) {
const section = document.querySelector(sectionClass);
if (section) {
section.scrollIntoView({ behavior: 'smooth' });
}
}

</script>
  
</body>
</html>