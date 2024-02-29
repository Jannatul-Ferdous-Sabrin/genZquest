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

    <!-- Bootstrap CSS -->
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
    <div class="d-flex flex-nowrap">
        <?php include 'sidebar.php' ?>

        <!-- Form -->
        <div class="" style="width: 100%;">
            <?php include 'adminheader.php'; ?>
            <div style="flex: 1;">         
                <div class="d-flex row justify-content-center container-fluid">
                    <div class=" border-secondary col-lg-10 col-md-10 col-sm-10 rounded m-4">
                        <h4 class="mb-4">List of Companies</h4>

                        <table class="border table table-striped" id="datatable">
                            <thead class="bg-light">
                                <tr>
                                    <th>COMPANYLOGO</th>
                                    <th>COMPANYTYPE</th>
                                    <th>COMPANYADDRESS</th>
                                    <th>COMPANYSTATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($companyDetails)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo $row['COMPANYLOGO'] ?>" alt="logo"
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">
                                                        <?php echo $row['COMPANYNAME']; ?>
                                                    </p>
                                                    <p class="text-muted mb-1">
                                                        <?php echo $row['COMPANYEMAIL']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $row['COMPANYTYPE'] ?>
                                            <p class="text-muted mb-1">
                                                <?php echo $row['COMPANYDEPARTMENT']; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <span class="company-address">
                                                <?php echo $row['COMPANYADDRESS']; ?>
                                            </span>
                                        </td>

                                        <td>
                                            <span
                                                class='badge text-bg-<?php echo ($row['COMPANYSTATUS'] == 0 ? "danger" : "success"); ?>'>
                                                <?php echo ($row['COMPANYSTATUS'] == 0 ? "Unauthorized" : "Authorized"); ?>
                                            </span>
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