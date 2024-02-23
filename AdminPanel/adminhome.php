<?php
session_start();
include '../config.php';
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
    exit();
}

//Count number of rows from DB query
$employeeNo = mysqli_num_rows(mysqli_query($conn, "SELECT preference FROM registration WHERE preference ='employee'"));
$employerNo = mysqli_num_rows(mysqli_query($conn, "SELECT preference FROM registration WHERE preference ='employer'"));
$verifieduser = mysqli_num_rows(mysqli_query($conn, "SELECT verify_status FROM registration WHERE verify_status ='1'"));
$authcomp = mysqli_num_rows(mysqli_query($conn, "SELECT COMPANYSTATUS FROM company WHERE COMPANYSTATUS = '1'"));
$activejob = mysqli_num_rows(mysqli_query($conn, "SELECT `status` FROM job WHERE `status` = '1'"));
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    <div class="d-flex flex-row flex-nowrap">
        <?php include 'sidebar.php' ?>

        <div style="width: 100%;">
            <?php include 'adminheader.php'; ?>
            <h4 class="ms-5 fw-bold" style="color: #3498db;">ADMIN DASHBOARD</h4>
        
            <!-- Dashboard Section -->
            <div class="d-flex flex-row flex-wrap m-5">
                
                <!-- Card Section -->
                <div class="card col-lg-3 me-5">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-primary" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-primary card-title">Total Employer</h5>
                                <p class="card-text"><i class="fa-solid fa-users me-2"></i><?php echo $employerNo; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card col-lg-3 me-5">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-warning" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-warning card-title">Total Employees</h5>
                                <p class="card-text"><i class="fa-solid fa-users-gear me-2"></i><?php echo $employeeNo; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 me-5">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-danger" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-danger card-title">Verified Users</h5>
                                <p class="card-text"><i class="fa-solid fa-user-check me-2"></i><?php echo $verifieduser; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-lg-3 me-5 mt-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-success" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-success card-title">Authorized Companies</h5>
                                <p class="card-text"><i class="fa-solid fa-building-circle-arrow-right me-2"></i><?php echo $authcomp;?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-lg-3 me-4 mt-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-info" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-info card-title">Active Jobs</h5>
                                <p class="card-text"><i class="fas fa-calendar-check me-2"></i><?php echo $activejob;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

         <!--Bootstrap JavaScript functionality-->
         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>