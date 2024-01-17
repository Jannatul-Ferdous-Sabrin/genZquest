<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include '../config.php';

$companyDetails = mysqli_query($conn, "SELECT * FROM `company`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

    <style>
        .sidebar span {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-row flex-wrap">
        <?php include 'sidebar.php' ?>

        <div style="flex: 1;">
            <div class="d-flex row justify-content-center container-fluid">
                <div class=" border-secondary col-lg-12 col-md-12 col-sm-12 rounded m-4">
                    <h4>List of Companies</h4>
                    <br>

                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">COMPANYID</th>
                                <th scope="col" style="width: 20%;">COMPANYNAME</th>
                                <th scope="col" style="width: 20%;">COMPANYADDRESS</th>
                                <th scope="col" style="width: 20%;">COMPANYCONTACTNO</th>
                                <th scope="col" style="width: 15%;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($companyDetails)) {
                            ?>
                                <tr>
                                    <th scope='row'><?= $row['COMPANYID'] ?></th>
                                    <td><?= $row['COMPANYNAME'] ?></td>
                                    <td><?= $row['COMPANYADDRESS'] ?></td>
                                    <td><?= $row['COMPANYCONTACTNO'] ?></td>
                                    <td>
                                        <div class='d-flex'>
                                            <form method='POST' action='edit-company.php'>
                                                <input type='hidden' name='company_id' value='<?= $row['COMPANYID'] ?>'>
                                                <button type='submit' class='btn btn-outline-success me-3' name='edit'>Edit</button>
                                            </form>
                                            <form method='POST' action=''>
                                                <input type='hidden' name='company_id' value='<?= $row['COMPANYID'] ?>'>
                                                <button type='submit' class='btn btn-outline-danger' name='delete'>Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php
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
        // DataTable Initialization
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>
