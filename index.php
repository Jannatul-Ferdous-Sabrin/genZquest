<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="CSS/style.css" >

    <style>
        *{
            font-family: 'Poppins', sans-serif; 
        }
        .h-font{
            font-family: 'Merienda', cursive;  
        }
        .swiper-container {
            width: 100%;
            height: 50vh; 
         } 

         .swiper-slide {
            background-size: cover;
            background-position: center;
        } 

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">genZquest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


        <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="bi bi-person"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label> 
    </form>
        </div>
  </div>
</nav>
  

<!-- Carousel/slides -->
 <div class="container-fluid px-lg-4 mt-4"> 
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="Images/pic1.jpg" class="w-100 d-block"></div>
        <div class="swiper-slide"><img src="Images/pic2.jpg" class="w-100 d-block"></div>
        <div class="swiper-slide"><img src="Images/pic3.jpg" class="w-100 d-block"></div>
        <div class="swiper-slide"><img src="Images/pic4.jpg" class="w-100 d-block"></div>
        <div class="swiper-slide"><img src="Images/pic5.jpg" class="w-100 d-block"></div>
</div>
</div>
</div>

<div class="jumbotron text-center" style="max-width: 800px; margin: 0 auto; padding: 80px; background-color: transparent;">
    <h3 class="h-font">Your Bright Future Starts Here Now</h3>
    <p>Finding the Most Exciting Startup Jobs</p>
    
    <form>
        <div class="input-group">
            <input type="text" class="form-control" style="width: 60%;" placeholder="Job title or keyword" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Find Job</button>
            </div>
        </div>
    </form>
</div>



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
            <h6>Graphics & Design</h6>
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
            <h6>Lifestyle</h6>
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
         
        <div class="row py-5">
          <div class="col-lg-5 m-auto">
            <button class="btn3" >BROWSE ALL SECTORS</button>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>


<!DOCTYPE html>
<html>
<head>
    <title>Your Website</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Your website content here -->

<footer class="bg-dark text-white p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Contact Us</h4>
                <p>Email: sabb@example.com</p>
                <p>Phone: +8801777777777</p>
            </div>
            <div class="col-md-6 d-flex justify-content-between align-items-center">
                <div>
                    <ul class="list-unstyled mb-0">
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
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

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
    });
</script>
</body>
</html>



























