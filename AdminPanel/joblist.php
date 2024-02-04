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
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                                    <th scope="col" style="width: 20%;">JOBTITLE</th>
                                    <th scope="col" style="width: 15%;">JOB STATUS</th>
                                    <th scope="col" style="width: 15%;">DETAILS</th>


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
                                        <td>" . $row['JOBTITLE'] . "</td>
                                        <td><span class='badge text-bg-" . ($row['status'] == 0 ? "danger" : "success") . "'>" . ($row['status'] == 0 ? " Closed" : "Active") . "</span></td>
                                        <td>                                            
                                            <div class='d-flex'>
                                                <a href='edit-job.php?id=" . $row['JOBID'] . "'><button class='btn btn-outline-primary me-3'><i class='fa-solid fa-pen-to-square'></i></button></a>
                                                <button type='button' class='btn btn-outline-danger' onclick='openDelete(" . $row['JOBID'] . ")' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                                    Delete
                                                </button>
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

            <!-- Delete Form -->
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                            <span id="id"></span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are You Sure You Want To Delete?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="deleteID()">Yes</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                        </div>
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

            var deleterow;
            function openDelete(row) {
                deleterow = row;
                console.log("1");
                $("#id").text(row);
            }

            function deleteID() {
                window.location.href = "edit-jobAction.php?deleteJobid=" + deleterow;
            }
        </script>
</body>

</html>