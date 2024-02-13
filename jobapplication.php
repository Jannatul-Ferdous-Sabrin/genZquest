<?php
require_once('config.php'); // Include the database configuration

// Define the base URL of your website
define('web_root', 'http://localhost/genzquest/'); // Change this to your actual base URL

// Check if a job ID is provided in the URL
if (isset($_GET['search'])) {
    $jobid = $_GET['search'];

    // SQL query to retrieve job details based on the JOBID
    $sql = "SELECT * FROM `company` c, `job` j WHERE c.`COMPANYID` = j.`COMPANYID` AND j.JOBID = " . $jobid;

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Fetch and display job details
        while ($row = $result->fetch_assoc()) {
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
        

        .form-container {
            width: 50%;
            padding: 20px;
            float: left; /* Position on the left side */
        }

        .job-details-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 48%; /* Adjust the width as needed */
            float: left; /* Position on the left side */
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <?php require('include/header.php'); ?>
    <section id="content">
        
        <div class="form-container">
                    <?php require('applyform.php'); ?>
                </div>
            <div class="job-details-container">
        <h3 class="" style="font-weight: bold;">Job Details</h3>
            <h2><?php echo $row['JOBTITLE']; ?></h2>
            <p>Date Posted: <?php echo date_format(date_create($row['DATEPOSTED']), 'M d, Y'); ?></p>

            <!-- Display other job details here -->
            <ul>
                <li>Required No. of Employees: <?php echo $row['REQ_NO_EMPLOYEES']; ?></li>
                <li>Salary: <?php echo number_format($row['SALARIES'], 2); ?></li>
                <li>Duration of Employment: <?php echo $row['DURATION_EMPLOYMENT']; ?></li>
              
            </ul>

            <p>Qualification/Work Experience:</p>
            <ul style="list-style: none;">
                <li><?php echo $row['WORK_EXPERIENCE']; ?></li>
            </ul>

            <p>Job Description:</p>
            <ul style="list-style: none;">
                <li><?php echo $row['JOBDESCRIPTION']; ?></li>
            </ul>
            <p>Experience Requirement : <?php echo $row['keyword']; ?></p>
        </div>
    </section>
    
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>

            <?php
        }
        $result->free_result();
    } else {
        // Handle query error
        echo "Error: " . $conn->error;
    }
} else {
    echo "Job ID is not specified.";
    // Handle the case where no Job ID is specified.
}

// Close the database connection
$conn->close();
?>