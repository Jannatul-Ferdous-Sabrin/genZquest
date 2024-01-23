<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
    exit();
}
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

            <!-- Dashboard Section -->
            <div class="d-flex flex-row flex-wrap m-5">
                <!-- Card Section -->
                <div class="card col-lg-3 me-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-primary" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-primary card-title">Total Client1</h5>
                                <p class="card-text"><i class="fa-solid fa-user-tie me-2"></i>DB Data</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 me-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-primary" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-primary card-title">Total Client2</h5>
                                <p class="card-text"><i class="fa-solid fa-user-tie me-2"></i>DB Data</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 me-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-primary" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-primary card-title">Total Client3</h5>
                                <p class="card-text"><i class="fa-solid fa-user-tie me-2"></i>DB Data</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-lg-3 me-4 mt-4">
                    <div class="row g-0">
                        <div class="rounded-start text-bg-primary" style="width: 1rem;">
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="text-primary card-title">Total Client4</h5>
                                <p class="card-text"><i class="fa-solid fa-user-tie me-2"></i>DB Data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>