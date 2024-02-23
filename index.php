<?php
require('config.php');
session_start();

if (!isset($_SESSION['username'])) {
  echo "<script>alert('Please login first!')</script>";
  echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>genZquest Jobs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    h6 {
      color: black;
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
      backdrop-filter: blur(3px);
    }

    .banner-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
    }

    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle;
    }

    .job-col:hover {
      cursor: pointer;
      box-shadow: -3px 3px 23px -12px rgba(0, 0, 0, 0.75);
      -webkit-box-shadow: -3px 3px 23px -12px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -3px 3px 23px -12px rgba(0, 0, 0, 0.75);
    }
  </style>
</head>

<body>

  <?php require('include/header.php'); ?>

  <div class="container-fluid px-lg-4 mt-4">
    <div class="banner-container" style="background-image: url('Images/pic1.jpeg');">
      <div class="blur-overlay"></div>
      <div class="jumbotron text-center py-6 banner-content">
        <h1 class="h-font">Your Bright Future Starts Here Now</h1>
        <p>Finding your next job or career on genZquest Jobs</p>

        <form class="form-inline" id="homesearch" action="search.php" method="POST">
          <input type="text" class="form-control" size="40" placeholder="Job title or keyword" name="keyword"
            id="keyword">
          <button type="submit" class="btn btn-danger" style="color: white;">
            <i class="fas fa-search"></i> Find Job
          </button>
        </form>
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
          <h2 class="display-6 fw-bold">Simplifying job hunting for seekers and optimizing recruitment for employers.
          </h2>
          <br>
          <p class="lead mb-6">GenZquest offers a platform for job seekers to find jobs that match their
            qualifications. Job seekers can easily register and create a comprehensive profile, including their
            educational background. They have the freedom to explore diverse job opportunities and apply seamlessly.
          </p>
          <br>
          <button class="btn btn-outline-primary px-4" onclick="scrollToSection('.ceta')">Get in Touch</button>
        </div>
      </div>
    </div>
  </section>

  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 latest-job margin-bottom-20">
          <h1 class="text-center">Latest Jobs</h1>

          <br>
          <?php
          // Fetch the job listings based on miscell
          $sql = "SELECT * FROM `company` c, `job` j, `registration` r 
                        WHERE c.`COMPANYID` = j.`COMPANYID` 
                        ORDER BY r.`miscell` = j.`keyword` DESC, DATEPOSTED DESC 
                        LIMIT 4"; // Limit to 4 latest jobs
          
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $jobCount = 0;
            echo '<div class="container">'; // Start a container for rows
          
            while ($row = $result->fetch_assoc()) {
              if ($jobCount % 2 == 0) {
                echo '<div class="row">'; // Start a new row after every 2 jobs
              }
              ?>
              <div class="col-md-6">
                <div class="attachment-block clearfix">
                  <?php
                  // Check if the job has an image (replace 'IMAGEURL' with your actual column name)
                  if (!empty($row['IMAGEURL'])) {
                    ?>
                    <img class="attachment-img" src="<?php echo $row['IMAGEURL']; ?>" alt="Attachment Image"
                      style="width: 150px; height: 80px;">
                    <?php
                  } else {
                    ?>

                    <!-- Placeholder image if no image is available -->
                    <img class="attachment-img" src="Images/logo.webp" alt="Placeholder Image"
                      style="width: 150px; height: 80px;">
                    <?php
                  }
                  ?>
                  <div class="attachment-pushed">
                    <h4 class="attachment-heading">
                      <a href="http://localhost/genzquest/jobapplication.php?search=<?php echo $row['JOBID']; ?>"
                        style="text-decoration: none; color: black; font-weight: bold;">
                        <?php echo $row['JOBTITLE']; ?>
                      </a>

                      <span class="attachment-heading pull-right" style=" font-weight: 400;">$
                        <?php echo $row['SALARIES']; ?>
                      </span>

                    </h4>

                    <div class="attachment-text" style=" font-weight: 400;">
                      <div>
                        <p>
                          <?php echo $row['COMPANYNAME']; ?>
                          <?php echo $row['keyword']; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              if ($jobCount % 2 == 1 || $jobCount == $result->num_rows - 1) {
                echo '</div>'; // Close the row after every 2 jobs or at the end
              }

              $jobCount++;
            }

            echo '</div>'; // Close the container
          } else {
            echo "No jobs found.";
          }
          ?>
        </div>
      </div>
    </div>
  </section>




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
                  <h6><a href="category.php?search=Graphics">Graphics & Design</a></h6>

                  <h6 style="color: red;"></h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon2.JPG" class="img-fluid my-3" alt="Programming & Tech">
                  <h6><a href="category.php?search=Technology">Programming & Tech</a></h6>
                </div>
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon3.JPG" class="img-fluid my-3" alt="Business">
                  <h6><a href="category.php?search=Business">Business</a></h6>
                </div>
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon4.JPG" class="img-fluid my-3" alt="Data">
                  <h6><a href="category.php?search=Data">Data</a></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row py-3">

            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon5.JPG" class="img-fluid my-3" alt="Video & Animation">
                  <h6><a href="category.php?search=VideoAnimation">Video & Animation</a></h6>
                </div>
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon6.jpg" class="img-fluid my-3" alt="Digital Marketing">
                  <h6><a href="category.php?search=DigitalMarketing">Digital Marketing</a></h6>
                </div>
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon7.JPG" class="img-fluid my-3" alt="Lifestyle">
                  <h6><a href="category.php?search=Lifestyle">Lifestyle</a></h6>
                </div>
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card py-3">
                <div class="card-body">
                  <img src="Images/icon8.JPG" class="img-fluid my-3" alt="Writing & Translation">
                  <h6><a href="category.php?search=WritingTranslation">Writing & Translation</a></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row py-5">
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
        <img class="rounded-circle shadow-1-strong mb-4" src="Images/person1.svg" alt="avatar" style="width: 150px;" />
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
        <img class="rounded-circle shadow-1-strong mb-4" src="Images/person3.svg" alt="avatar" style="width: 150px;" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">JF Sabrin</h5>
            <p>Software Engineer</p>
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
        <img class="rounded-circle shadow-1-strong mb-4" src="Images/person2.svg" alt="avatar" style="width: 150px;" />
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

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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
              <li><a href="https://github.com/Jannatul-Ferdous-Sabrin" target="_blank"><i class="fab fa-github"></i></a>
              </li>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


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






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>



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