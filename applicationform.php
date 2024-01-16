<?php
require_once('config.php');

define('web_root', 'http://localhost/genzquest/');

if (isset($_GET['search'])) {
    $jobid = $_GET['search'];

    $sql = "SELECT * FROM `company` c, `job` j WHERE c.`COMPANYID` = j.`COMPANYID` AND j.JOBID = " . $jobid;

    $result = $conn->query($sql);

    if ($result) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link
                    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
                    rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
                <link href="CSS/style.css" rel="stylesheet">
                <style>
                    .form-container {
                        width: 50%;
                        padding: 20px;
                        float: left;
                    }

                    .job-details-container {
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        padding: 20px;
                        margin: 10px;
                        width: 48%;
                        float: left;
                        box-sizing: border-box;
                    }
                </style>
            </head>

            <body>
                <?php require('inc/header.php'); ?>

                <div class="form-container">
                    
                    <?php include 'applicantform.php'; ?>
                </div>
                <div lc3 class="" style="font-weight: bold;">Job Details</h3>
                    <h2>
                        <?php echo $row['OCCUPATIONTITLE']; ?>
                    </h2>
                    <p>Date Posted:
                        <?php echo date_format(date_create($row['DATEPOSTED']), 'M d, Y'); ?>
                    </p>
                    <ul>
                        <li>Required No. of Employees:
                            <?php echo $row['REQ_NO_EMPLOYEES']; ?>
                        </li>
                        <li>Salary:
                            <?php echo number_format($row['SALARIES'], 2); ?>
                        </li>
                        <li>Duration of Employment:
                            <?php echo $row['DURATION_EMPLOYMENT']; ?>
                        </li>
                    </ul>
                    <p>Qualification/Work Experience:</p>
                    <ul style="list-style: none;">
                        <li>
                            <?php echo $row['QUALIFICATION_WORKEXPERIENCE']; ?>
                        </li>
                    </ul>

                    <p>Job Description:</p>
                    <ul style="list-style: none;">
                        <li>
                            <?php echo $row['JOBDESCRIPTION']; ?>
                        </li>
                    </ul>
                    <p>Experience Requirement :
                        <?php echo $row['keyword']; ?>
                    </p>
                </div>
                </section>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            </body>
            </html>
            <?php
        }
        $result->free_result();
    } else {
      
        echo "Error: " . $conn->error;
    }
} else {
    echo "Job ID is not specified.";
}
$conn->close();
?>