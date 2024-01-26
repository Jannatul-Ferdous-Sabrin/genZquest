<?php
session_start();
include '../config.php';
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
    exit();
}

$clientcollapse = 1;
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

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
            <div class="d-flex row justify-content-center container-fluid">
                <div class="border border-secondary col-lg-8 col-md-12 col-sm-12 rounded m-4">
                    <h4>List of Employers</h4>
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">ID</th>
                                <th scope="col" style="width: 20%;">Username</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col" style="width: 20%;">Mobile</th>
                                <th scope="col" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            

                            $employerList = mysqli_query($conn, "SELECT * FROM `registration` WHERE `preference`='employer'");
                            while ($row = mysqli_fetch_array($employerList)) {
                                echo
                                    "<tr>
                                            <th scope='row'>" . $row['id'] . "</th>
                                            <td>" . $row['username'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $row['mobile'] . "</td>
                                            <td>
                                                <div class='d-flex'>
                                                    <form method='POST' action='edit.php'>
                                                        <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                                                        <button type='submit' class='btn btn-outline-success me-3' name='edit'>Edit</button>
                                                    </form>
                                                    <form method='POST' action='delete.php'>
                                                        <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                                                        <button type='submit' class='btn btn-outline-danger' name='delete'>Delete</button>
                                                    </form>
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
        // DataTable
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>