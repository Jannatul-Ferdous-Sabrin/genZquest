<?php
include '../config.php';
$id = $_GET['id'];
$jobQuery = mysqli_query($conn, "SELECT * FROM job WHERE JOBID = '$id'");
$row = mysqli_fetch_array($jobQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .sidebar span {
            color: #fff;
        }
        
        
    </style>
</head>

<body>
    <div class="d-flex flex-nowrap">
        <?php include 'sidebar.php'; ?>


        <!-- Form -->
        <div class="" style="width: 100%;">
            <?php include 'adminheader.php'; ?>

            <div>
                <form action="adminAction.php" METHOD="POST">
                    <div class="d-flex justify-content-start mt-3 mx-5 fw-bold fs-5">
                        <p>JOB Post Date:</p>
                        <span class="ms-4 fw-bold fs-5">
                            <?php echo $row['DATEPOSTED']; ?>
                        </span>
                    </div>

                    <!-- Form Div -->
                    <div class="border border-secondary-subtle shadow-lg rounded mx-5">

                        <!-- Job Id -->
                        <div class="d-flex mt-4">
                            <div class="col-lg-3 ms-5">
                                <p>JOB ID</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="jobid"
                                    value="<?php echo $row['JOBID']; ?>">
                            </div>
                        </div>


                        <!-- Company Id -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>COMPANYID</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="companyid"
                                    value="<?php echo $row['COMPANYID']; ?>">
                            </div>
                        </div>

                        <!-- Company Name -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>COMPANYNAME</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="companyname"
                                    value="<?php echo $row['COMPANYNAME']; ?>">
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>CATEGORY</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="category"
                                    value="<?php echo $row['CATEGORY']; ?>">
                            </div>
                        </div>


                        <!-- Job Title -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>JOBTITLE</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="jobTitle"
                                    value="<?php echo $row['JOBTITLE']; ?>">
                            </div>
                        </div>

                        <!-- REQ_NO_EMPLOYEES -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>REQ_NO_EMPLOYEES</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="employee"
                                    value="<?php echo $row['REQ_NO_EMPLOYEES']; ?>">
                            </div>
                        </div>


                        <!-- Salaries -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>SALARIES</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="salaries"
                                    value="<?php echo $row['SALARIES']; ?>">
                            </div>
                        </div>

                

                        <!-- DURATION_EMPLOYMENT -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>DURATION_EMPLOYMENT</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="duration"
                                    value="<?php echo $row['DURATION_EMPLOYMENT']; ?>">
                            </div>
                        </div>


                        
                        <!-- WORK_EXPERIENCE -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>WORK_EXPERIENCE</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="exp"
                                    value="<?php echo $row['WORK_EXPERIENCE']; ?>">
                            </div>
                        </div>


                        
                        <!-- Job Description -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>JOBDESCRIPTION</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="jobdes"
                                    value="<?php echo $row['JOBDESCRIPTION']; ?>">
                            </div>
                        </div>


                        
                        <!-- Preferedsex -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>PREFEREDSEX</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="gender"
                                    value="<?php echo $row['PREFEREDSEX']; ?>">
                            </div>
                        </div>


                        
                        <!-- Vacancy -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>SECTOR_VACANCY</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5">
                                <input type="text" class="form-control" name="sector"
                                    value="<?php echo $row['SECTOR_VACANCY']; ?>">
                            </div>
                        </div>


                        
                        <!-- Job Status -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>JOBTYPE</p>
                            </div>

                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="col-lg-4 ms-5 mb-3">
                                <input type="text" class="form-control" name="jobstatus"
                                    value="<?php echo $row['JOBSTATUS']; ?>">
                            </div>
                        </div>


                        
                        <!-- Verified Status -->
                        <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>STATUS</p>
                            </div>
                            <i class="fa-solid fa-caret-right mt-2"></i>
                            <div class="d-flex ms-4 mt-1">
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" <?php echo ($row['status'] == 1 ? "checked" : "") ?>>Active
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="0" <?php echo ($row['status'] == 0 ? "checked" : "") ?>>Closed
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-2">
                        <button class="btn btn-outline-success" name="editJob" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>