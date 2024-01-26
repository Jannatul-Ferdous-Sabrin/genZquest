<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
    exit();
}

include '../config.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joblist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <style>
        .sidebar span {
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-nowrap">
        <?php include 'sidebar.php' ?>

        <!-- Form -->

        <div class="" style="width: 100%;">
            <?php include 'adminheader.php'; ?>


            <div style="flex: 1;">
                <div class="d-flex row justify-content-center container-fluid">
                    <div class="border-secondary col-lg-12 col-md-12 col-sm-12 rounded m-4">
                        <h4>List of vacancies</h4>
                        <br>
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 15%;">JOBID</th>
                                    <th scope="col" style="width: 20%;">COMPANYID</th>
                                    <th scope="col" style="width: 20%;">CATEGORY</th>
                                    <th scope="col" style="width: 20%;">OCCUPATIONTITLE</th>
                                    <th scope="col" style="width: 15%;">JOB STATUS</th>
                                    <th scope="col" style="width: 15%;">ACTION</th>


                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $unregistered = mysqli_query($conn, "SELECT * FROM `job`");
                                while ($row = mysqli_fetch_array($unregistered)) {
                                    echo
                                        "<tr>
                                        <th scope='row'>" . $row['JOBID'] . "</th>
                                        <td>" . $row['COMPANYID'] . "</td>
                                        <td>" . $row['CATEGORY'] . "</td>
                                        <td>" . $row['OCCUPATIONTITLE'] . "</td>
                                        <td><span class='badge text-bg-" . ($row['status'] == 0 ? "danger" : "success") . "'>" . ($row['status'] == 0 ? " Declined" : "Allowed") . "</span></td>
                                        <td>                                            
                                            <div class='d-flex'>
                                                <a href='edit-job.php?id=" . $row['JOBID'] . "'><button class='btn btn-outline-warning me-3'>Details</button></a>
                                                <a href='edit-jobAction.php?deleteid=" . $row['JOBID'] . "'><button class='btn btn-outline-danger'>Delete</button></a>
                                            </div>
                                        </td>
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS and DataTables JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

        <script>
            //DataTable
            $(document).ready(function () {
                $('#datatable').DataTable();
            })
        </script>
</body>

</html>