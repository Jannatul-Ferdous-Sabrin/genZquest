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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

    <style>
        .sidebar span {
            color: #fff;
        }

        /* Edit Form */
        .editForm {
            position: absolute;
            top: 10%;
            left: 30%;
            background-color: #fff;
            visibility: hidden;
            transform: scale(0.1);
            transition: all 0.3s;
            z-index: 100;
        }
        .openForm {
            visibility: visible;
            transform: scale(1);
        }

        /* Blur */
        #blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99;
            display: none;
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>
    <div class="d-flex flex-row flex-nowrap">
        <?php include 'sidebar.php' ?>

        <div style="width: 100%;">
            <?php include 'adminheader.php'; ?>
            <div class="d-flex row justify-content-center container-fluid">
                <div class=" border-secondary col-lg-12 col-md-12 col-sm-12 rounded m-4">
                    <h4>List of Employers</h4>
                    <br>
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">ID</th>
                                <th scope="col" style="width: 20%;">Username</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col" style="width: 20%;">Mobile</th>
                                <th scope="col" style="width: 15%;">Verified?</th>
                                <th scope="col" style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $employerList = mysqli_query($conn, "SELECT * FROM `registration` WHERE `preference`='employer'");
                            while ($row = mysqli_fetch_array($employerList)) 
                            {
                                echo
                                    "<tr>
                                            <th scope='row'>" . $row['id'] . "</th>
                                            <td>" . $row['username'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $row['mobile'] . "</td>
                                            <td><span class='badge text-bg-" . ($row['verify_status'] == 0 ? "danger" : "success") . "'>" . ($row['verify_status'] == 0 ? "No" : "Yes") . "</span></td>

                                            
                                            <td>
                                                <div class='d-flex'>
                                                   
                                                    <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                                                    <button type='button' class='btn btn-outline-success me-3'
                                                    onclick='openForm(" . $row['id'] . ")' name='edit'>Edit</button>
                                                    
                                                    <button type='button' class='btn btn-outline-danger' onclick='openDelete(" . $row['id'] . ")' data-bs-toggle='modal' data-bs-target='#exampleModal'>
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

        <!-- Blurred Background -->
        <div id="blur"></div>

        <!-- Edit Form -->
        <div class="editForm col-lg-5" id="editForm">
            <form action="edit-jobAction.php" METHOD="POST">
                <!-- Form Div -->
                <div class="border border-secondary-subtle shadow-lg rounded">
                    <div class="d-flex justify-content-between">
                        
                        <div>

                        </div>
                        <div>
                            <div class="d-flex justify-content-center">
                            <img src="" alt="profile" width="80" height="80" id="profilePic"
                                    class="mt-2 rounded-circle">
                            </div>
                        </div>
                        <div>
                            <a onclick="closeForm()"><i class="pe-auto fa-solid fa-xmark m-3"></i></a>
                        </div>
                    </div>
       
                    <div class="d-flex gap-3 mt-4">
                        <div class="ms-5">
                            <p class="m-0 p-0">Id</p>
                            <input type="text" class="form-control" id="employerID" name="id" 
                            value="<?php echo $row['id']; ?>">
                        </div>

                        <div class=" ms-5">
                            <p class="m-0 p-0">Verify Status</p>
                            <input type="text" class="form-control" id="employerstatus" name="verify" 
                            value="<?php echo $row['verify_status']; ?>">
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-4">
                        <div class=" ms-5">
                            <p class="m-0 p-0">First Name</p>
                            <input type="text" class="form-control" id="employerfirstname" name="fname" 
                            value="<?php echo $row['firstname']; ?>">
                        </div>

                        <div class=" ms-5">
                            <p class="m-0 p-0">Last Name</p>
                            <input type="text" class="form-control" id="employerlastname" name="lname" 
                            value="<?php echo $row['lastname']; ?>">
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-4">
                        <div class=" ms-5">
                            <p class="m-0 p-0">Username</p>
                            <input type="text" class="form-control" id="employerusername" name="username"
                            value="<?php echo $row['username']; ?>">
                        </div>

                        <div class=" ms-5">
                            <p class="m-0 p-0">Mobile</p>
                            <input type="text" class="form-control" id="employermobile" name="mob"
                            value="<?php echo $row['mobile']; ?>">
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-4 ">
                        <div class="col-8 ms-5">
                            <p class="m-0 p-0">Email</p>
                            <input type="text" class="form-control" id="employeremail" name="email"
                            value="<?php echo $row['email']; ?>">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-5">
                        <button type="submit" name="userEdit" class="btn btn-outline-primary">Update</button>
                    </div>
                </div>
            </form>
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

        function openForm(row) {
            console.log("3");
            $.ajax({
                type: "POST",
                url: "dataFetch.php",
                data: { row: row },
                success: function (employer) {
                    console.log("1");
                    if (employer && employer.error) {
                        console.error("Error From Server: ", employer.error);
                    } else {
                        console.log("Employer Data: ", employer);

                        $('#employerID').val(employer.id);
                        $('#employerstatus').val(employer.verify_status);
                        $('#employerfirstname').val(employer.firstname);
                        $('#employerlastname').val(employer.lastname);
                        $('#employermobile').val(employer.mobile);
                        $('#employeremail').val(employer.email);
                        $('#employerusername').val(employer.username);
                        $('#profilePic').attr('src', employer.profilePicture);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: ", status, error);
                }
            });

            let editForm = document.getElementById("editForm");
            let blur = document.getElementById("blur");

            blur.style.display = "block";
            editForm.classList.add("openForm");
        }

        function closeForm() {
            let editForm = document.getElementById("editForm");
            let blur = document.getElementById("blur");

            blur.style.display = "none";
            editForm.classList.remove("openForm");
        }

        var deleterow;
        function openDelete(row) {
            deleterow = row;
            $("#id").text(row);
        }

        function deleteID() {
            window.location.href = "edit-jobAction.php?deleteuserid=" + deleterow;
        }
    </script>
</body>

</html>