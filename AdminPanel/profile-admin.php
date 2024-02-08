<?php
session_start();

include '../config.php';

if(!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='../login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
            <div class="text-bg-secondary mx-4 my-5 rounded-3">
                <!--  -->
                <div class="d-flex justify-content-around">
                    <!-- Image Container -->
                    <!-- Image Container -->
                    <div class="m-3 text-bg-primary"
                        style="height: 15rem; width: 10rem; overflow: hidden; border-radius: 50%;">
                        <img src="../Images/pic1.jpeg" class="img-fluid rounded-circle" alt=""
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </div>

                    <!-- Info Container -->
                    <div>
                        <div class="my-3 me-5 text-bg-light" style="height: 5rem; width: 20rem;">
                            <h4 class="ms-4">Jannatul Ferdous Sabrin</h4>
                            <span class="ms-4">administrator</span>
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
                                <span class="ms-4">+8801783-618103</span>
                            </div>

                            <div class="d-flex">
                                <div class="col-3">
                                    <span>Office Hours: </span>
                                </div>
                                <span class="ms-4">9:00-5:00 pm  (Mon-Sat)</span>
                            </div>
                        </div>
                    </div>

                    <div class="me-5"></div>
                </div>
            </div>
            <!-- About Me -->
            <div class="mx-4">
                <p class="fs-4" style="color: #d16912; font-weight: bold;">About Me</p>
                <p>Dedicated Website Administrator with 1 year of experience in managing
                    and maintaining websites, ensuring optimal performance and user
                    satisfaction. Proficient in content management systems, website analytics,
                    and troubleshooting issues. Demonstrates strong attention to detail,
                    problem solving skills, and a commitment to delivering an exceptional
                    online experience. Eager to contribute and continue growing in the field of
                    website administration.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>