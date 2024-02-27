<?php
session_start();
include '../config.php';
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='../login.php'</script>";
}

$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registration WHERE username = '{$_SESSION['username']}'"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
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
            <div class="text-bg-white mx-5 my-5 rounded-3">
                <div class="d-flex justify-content-around">

                    <!-- Image Container -->
                    <div class="m-3" style="height: 15rem; width: 15rem;">
                        <img src="<?php echo $row['profilePicture']; ?>" class="img-fluid" alt=""
                            style="object-fit: cover; height: 100%; width: 100%; border-radius: 50%;">
                        <form id="fileForm" action="adminAction.php" method="post" enctype="multipart/form-data">
                            <div class="d-flex justify-content-center">
                                <input type="file" id="upload" name="profilePic" hidden>
                                <label class="text-bg-dark p-2 rounded" for="upload">
                                    <i class='fa-solid fa-pen-to-square'></i>
                                </label>
                                <input type="hidden" name="uploadBtn" value="1">
                            </div>
                        </form>
                    </div>



                    <!-- Info Container -->
                    <div>
                        <div class="my-3 p-1 rounded me-5 text-bg-light" style="height: 5rem; width: 23rem;">
                            <h4 class="ms-4">Jannatul Ferdous (Sabrin)</h4>
                            <span class="ms-4">Backend Developer </span>
                        </div>
                        <div>
                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Position: </span>
                                </div>

                                <span class="ms-4">Admin</span>
                            </div>
                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Experience: </span>
                                </div>
                                <span class="ms-4">2 Years</span>
                            </div>

                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Email:</span>
                                </div>
                                <span class="ms-4">jannatulsabrina1067@gmail.com</span>
                            </div>
                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Phone: </span>
                                </div>
                                <span class="ms-4">+8801763-618101</span>
                            </div>

                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Office Hours: </span>
                                </div>
                                <span class="ms-4">9:00-5:00 pm (Mon-Sat)</span>
                            </div>
                        </div>
                    </div>

                    <div class="me-5"></div>
                </div>
            </div>
            <!-- services integrations -->
            <div class="mx-4">
                <p class="fs-4" style="color: #d16912; font-weight: bold;">Services Integrations</p>
                <p>Dedicated Website Administrator with 2 year of experience in
                    maintaining websites connections,company records,
                    and drafting relevant documents.Ensuring optimal performance and user
                    satisfaction. Proficient in content management systems, website analytics,
                    and troubleshooting issues. Demonstrates strong attention to detail,
                    problem solving skills.</p>
            </div>

            <!-- Skill Section -->
            <div class="mx-4">
                <p class="fs-4" style="color: #d16912; font-weight: bold;">Skills</p>
                <div>
                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-success">
                            HTML5
                        </div>
                        <div class="mt-2 col-3 alert alert-danger">
                            CSS3
                        </div>
                        <div class="mt-2 col-3 alert alert-info">
                            JavaScript
                        </div>
                    </div>

                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-warning">
                            PHP
                        </div>
                        <div class="mt-2 col-3 alert alert-info">
                            MySQL
                        </div>
                        <div class="mt-2 col-3 alert alert-warning">
                            MERN
                        </div>
                    </div>
                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-secondary">
                            Testing and Debugging
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            Problem Solving
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            SEO
                        </div>
                    </div>



                    <!-- Education Section -->
                    <div class="mx-1">
                        <p class="fs-4" style="color: #d16912; font-weight:bold;">Education</p>
                        <p>Bachelor of Computer Science and Engineering at
                            Leading University, Sylhet, IN
                            January 2020 - January 2024
                            Relevant Coursework: Web
                            Programming. Database Management,
                            Information Architecture, Web Design.
                            Mobile App Development. Cloud
                            Computing. UX/UI Design, Network
                            Security, System Administration, and
                            Project Management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!--Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

        <!--Custom Script-->
    <script>
        $(document).ready(function () {
            $('#upload').on('change', function () {
                $('#fileForm').submit();
            });
        });
    </script>
</body>

</html>