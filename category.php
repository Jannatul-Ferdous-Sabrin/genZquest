<?php
require_once('config.php'); // Include the database configuration

// Define the base URL of your website
define('web_root', 'http://localhost/genzquest/'); // Change this to your actual base URL

// Initialize the category variable
$category = isset($_GET['search']) ? $_GET['search'] : '';

// SQL query to retrieve job listings based on the category
$sql = "SELECT * FROM `job` j WHERE j.`CATEGORY` = '" . $category . "' ORDER BY j.`DATEPOSTED` DESC";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
?>


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
<link href="CSS/style.css" rel="stylesheet">
<style>

.apply-button {
background: #8282e7;
    color: white;
    border-color: #8282e7;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
}

 *{
    font-family: 'Poppins', sans-serif; 
 }

 .h-font{
    font-family: 'Merienda', cursive;
 }
 body {
    background: linear-gradient(90deg, #8AAAE5, wheat);
}
 .job-listing {
       
       padding: 50px;
       margin: 50px 50px;
      
       border: 1px solid rgba(255, 255, 255, 0.3);
       background: white;
       box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
       border-radius: 40px;
   }
  
</style>
<body>
<?php require('include/header.php'); ?>

<section id="content">
    <div class="container content">
        <h2 class="text-center py-5 m-auto" style="color:#1E395E;">Hiring Now</h2>
        <b style="color:white">
      
Unlock Your Potential with Work Your Way.</b>
<br>
<b style="color:white"> 
We're here to redefine success, making earning easier, better, and setting a new standard for excellence.
</b>
        <?php
        // Fetch and display job listings
        while ($row = $result->fetch_assoc()) {
        ?>
        <div class="job-listing">
        <div>
            <h3 class="job-title"><?php echo $row['JOBTITLE']; ?></h3>
            </div>
        
        <div class="job-details"style="color:black">
            <p>Date Posted: <?php echo date_format(date_create($row['DATEPOSTED']), 'M d, Y'); ?>    & <?php echo $row['JOBSTATUS'];?></p>
            <p>Qualification/Work Experience:</p>
            <p><?php echo $row['WORK_EXPERIENCE']; ?></p>
            <p>Job Description:</p>
            <p><?php echo $row['JOBDESCRIPTION']; ?></p>
            <p>Experience Requirement : <?php echo $row['KEYWORD']; ?></p>
            <p>Employer: <?php echo $row['COMPANYNAME']; ?></p>
         
            <p> DURATION EMPLOYMENT: <?php echo $row['DURATION_EMPLOYMENT']; ?></p>
           

            <!-- Add the link to view job details with JOBID included in the URL -->
            <a href="http://localhost/genzquest/jobapplication.php?search=<?php echo $row['JOBID']; ?>" class="btn btn-main btn-next-tab apply-button">Apply Now</a>


          

        </div>
    </div>
        <?php
        }
        ?>
    </div>
</section>

<!-- Add your HTML footer content here -->

</body>
</html>

<?php
// Free the result set
$result->free_result();
} else {
// Handle query error
echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>








		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>





</body>
</html>