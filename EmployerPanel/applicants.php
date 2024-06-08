<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='../login.php'</script>";
    exit();
}

include '../config.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
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


        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid rgba(255, 2, 0, 0, 0.1);
            border-radius: 40px, rgba(055, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px;
        }
    </style>
</head>

<body>

    <!-- Form -->

    <div class="" style="width: 100%;">
        <?php include 'header.php'; ?>

        <div style="flex: 1;">
            <div class="d-flex row justify-content-center container-fluid">
                <div class="border-secondary col-lg-12 col-md-12 col-sm-12 rounded m-4">
                    <h4 class="mb-4 fw-bold" style="color: #3498db;">Applicant Details</h4>

                    <table class="border container table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">ID</th>
                                <th scope="col" style="width: 15%;">Profile</th>
                                <th scope="col" style="width: 10%;">Applicants</th>
                                <th scope="col" style="width: 15%;">Mobile</th>
                                <th scope="col" style="width: 20%;">Job Title</th>
                                <th scope="col" style="width: 15%;">Company </th>
                                <th scope="col" style="width: 20%;">Applied Date</th>
                                <th scope="col" style="width: 15%;">Comments</th>
                                <th scope="col" style="width: 10%;">Action</th>
                                <th scope="col" style="width: 20%;">Application Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $applicants = mysqli_query($conn, "SELECT * FROM `applicants`");
                            while ($row = mysqli_fetch_array($applicants)) {
                                echo "
                         
                                <tr>
                                <td scope='row'>" . $row['id'] . "</td>
                                    <td>
                                        <div class='d-flex align-items-center'>
                                            <img src='" . $row['profile'] . "' alt='logo' style='width: 45px; height: 45px' class='rounded-circle'/>
                                        </div>
                                    </td>
                                    <td>" . $row['applicants'] . "</td>
                                    <td>" . $row['contact'] . "</td>
                                    <td>" . $row['jobtitle'] . "</td>
                                    <td>" . $row['companyname'] . "</td>
                                    <td>" . $row['applieddate'] . "</td>
                                    <td>" . $row['comments'] . "</td>
                                   
                                    <td>
                                             <div class='d-flex'>
                                        <form method='POST' action='delete.php'>
                                            <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                                            <button type='button' class='btn btn-outline-danger' onclick='openDelete(" . $row['id'] . ")' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                                Delete
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td><span class='badge text-bg-" . ($row['status'] == 0 ? "warning" : "success") . "'>" . ($row['status'] == 0 ? "Pending" : "Approved") . "</span></td>
                                
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
                        <button type="button" class="btn btn-success" onclick="deleteID()">Yes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
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

            // DataTable initialization
            $(document).ready(function () {
                $('#datatable').DataTable();
            });
;-[]\\
            var deleterow;

            function openDelete(row) {
                deleterow = row;
                console.log("5");
                $("#id").text(row);
            }

            function deleteID() {
                window.location.href = "applicantAction.php?deleteApplicant=" + deleterow;
            }
        </script>
    </div>
</body>

</html>