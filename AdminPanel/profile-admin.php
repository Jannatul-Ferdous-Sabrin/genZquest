<?php

include '../config.php';


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
                    <div class="m-3 text-bg-primary" style="height: 15rem; width: 10rem;">
                        <img src="../Images/admin.jpeg" class="img-fluid" alt=""
                            style="object-fit: cover; height: 100%;">
                    </div>
                    <!-- Info Container -->
                    <div>
                        <div class="my-3 me-5 text-bg-dark" style="height: 5rem; width: 20rem;">
                            <p>Name</p>
                            <span>Preference</span>
                        </div>
                        <div>
                            <div>
                                <span>Position: </span>
                                <span class="ms-4">....</span>
                            </div>
                            <div>
                                <span>Experience: </span>
                                <span class="ms-4">....</span>
                            </div>
                            <div>
                                <span>Email:</span>
                                <span class="ms-4">....</span>
                            </div>
                            <div>
                                <span>Phone: </span>
                                <span class="ms-4">....</span>
                            </div>
                        </div>
                    </div>

                    <div class="me-5"></div>
                </div>
            </div>
            <!-- About Me -->
            <div class="mx-4">
                <p class="fs-4" style="color: #eb8634;">About Me</p>
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
                <p class="fs-4" style="color: #eb8634;">Skills</p>
                <div>
                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-primary">
                            HTML5
                        </div>
                        <div class="mt-2 col-3 alert alert-danger">
                            CSS3
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            JavaScript
                        </div>
                    </div>

                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-primary">
                            PHP
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            MySQL
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            MERN
                        </div>
                    </div>
                    <div class="d-flex gap-5">
                        <div class="mt-2 col-3 alert alert-primary">
                            Testing and Debugging
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            Problem Solving
                        </div>
                        <div class="mt-2 col-3 alert alert-primary">
                            SEO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Education Section -->
    <div class="mx-4">
        <p class="fs-4" style="color: #eb8634;">Education</p>
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













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>