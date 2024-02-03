<?php
require_once('config.php');

define('web_root', 'http://localhost/genzquest/');

$category = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM `company` c, `job` j WHERE c.`COMPANYID` = j.`COMPANYID` AND CATEGORY = '$category' ORDER BY DATEPOSTED DESC";
$result = $conn->query($sql);

if ($result) {
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
        <link href="CSS/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

            * {
                font-family: 'Poppins', sans-serif;
            }

            .h-font {
                font-family: 'Merienda', cursive;
            }
        </style>
    </head>

    <body>
       

        <section id="content">
            <div class="container content">
                <h2 class="text-center py-5 m-auto" style="color:rgba(130,130,231);">Hiring Now</h2>
                <?php
                // Fetch and display job listings
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="job-listing">
                        <div>
                            <h3 class="job-title">
                                <?php echo $row['JOBTITLE']; ?>
                            </h3>
                        </div>

                        <div class="job-details">
                            <p>Date Posted:
                                <?php echo date_format(date_create($row['DATEPOSTED']), 'M d, Y'); ?>
                            </p>
                            <p>Qualification/Work Experience:</p>
                            <p>
                                <?php echo $row['WORK_EXPERIENCE']; ?>
                            </p>
                            <p>Job Description:</p>
                            <p>
                                <?php echo $row['JOBDESCRIPTION']; ?>
                            </p>
                            <p>Experience Requirement :
                                <?php echo $row['keyword']; ?>
                            </p>
                            <p>Employer:
                                <?php echo $row['COMPANYNAME']; ?>
                            </p>
                            <p>Location:
                                <?php echo $row['COMPANYADDRESS']; ?>
                            </p>

                            <a href="http://localhost/genquest/jobapplication.php?search=<?php echo $row['JOBID']; ?>"
                                class="btn btn-main btn-next-tab apply-button">Apply Now</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>
    </body>

    </html>

    <?php
    $result->free_result();
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>





</body>

</html>