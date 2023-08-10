<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="style.css" >
<style>
*{
    font-family: 'Poppins', sans-serif; 
 }

 .h-font{
    font-family: 'Merienda', cursive;
 }

 .banner-container {
    position: relative;
    width: 100%;
    height: 45vh; 
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
    backdrop-filter: blur(3px); /* Adjust the blur amount as needed */
}
.banner-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
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
          <a class="nav-link active me-2" aria-current="page" href="./index.php">Home</a>
        </li>

         <li class="nav-item">
        <a class="nav-link me-2" href="./index.php">About</a>
      </li>
       <li class="nav-item">
          <a class="nav-link me-2" href="./contact.php">Contact Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="./signup.php" > <i class="bi bi-person"></i>Register</a>
        </li>

         <li class="nav-item">
         <a class="nav-link" href="./login.php"><i class="bi bi-person-circle"></i> Login</a>
  </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid px-lg-4 mt-4">
    <div class="banner-container" style="background-image: url('Images/pic1.jpeg');">
        <div class="blur-overlay" ></div>
        <div class="jumbotron text-center py-6 banner-content">
            <h1 class="h-font">Graphics & Design</h1>
            <p>Designs to make you stand out.</p>
          

        </div>
    </div>
</div>
<div class="container">
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 my-3 ">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo.webp" alt="Logo &amp; Brand Identity" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">Logo &amp; Brand Identity</h3>
          <h5 class="mb-4 logo-style">Logo design</h5>
          
          <div class="feature mb-3 logo-style">Brand Style Guide</div>
          <div class="feature mb-3 logo-style">Business Cards & stationery</div>
          <div class="feature mb-3 logo-style">Fonts & Typography</div>
        </div>
         </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo2.webp" alt="Web &amp; App Design" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">Web  &amp; App Design"</h3>
          <h5 class="mb-4 logo-style">Website Design </h5>
          
          <div class="feature mb-3 logo-style">App Design </div>
          <div class="feature mb-3 logo-style">UX Design </div>
          <div class="feature mb-3 logo-style"> Icon Design</div>
        </div>
      
         </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo3.webp" alt="Visual Design" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">Visual Design</h3>
          <h5 class="mb-4 logo-style">Image Editing</h5>
          
          <div class="feature mb-3 logo-style">Presentation Design</div>
          <div class="feature mb-3 logo-style">Resume Design</div>
          <div class="feature mb-3 logo-style">Infographic design</div>
        </div>
        
         </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo4.webp" alt="Product  &amp; Gaming" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">Product-Gaming</h3>
          <h5 class="mb-4 logo-style">product Design</h5>
          
          <div class="feature mb-3 logo-style">Game Art</div>
          <div class="feature mb-3 logo-style">Character Modeling </div>
          <div class="feature mb-3 logo-style">Graphics for Streamers</div>
</div>
         </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo5.webp" alt="3D Design" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">3D Design</h3>
          <h5 class="mb-4 logo-style">3D Industrial Design </h5>
          
          <div class="feature mb-3 logo-style">3D Fashion & Garment </div>
          <div class="feature mb-3 logo-style">3D Jewelry Design</div>
          <div class="feature mb-3 logo-style"> 3D Architecture</div>
        </div>
         </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img class="img-wrapper" src="Images/logo3.webp" alt="Art &amp; Illustration" class="card-img-top">
             <div class="card-body">
             <h3 class="text-display-5 title-wrapper ">Art & Illustration</h3>
          <h5 class="mb-4 logo-style">Illustration</h5>
          
          <div class="feature mb-3 logo-style">AI Artists</div>
          <div class="feature mb-3 logo-style">Cartoons & Comics </div>
          <div class="feature mb-3 logo-style">Pattern Design</div>
        </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>