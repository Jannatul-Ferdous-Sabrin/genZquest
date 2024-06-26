<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>genZquest Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white px-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="../index.php">genZquest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="../index.php">Posted Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="../contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="applicants.php">
                            <i class="fa-solid fa-circle-check text-success me-1"></i>
                            Confirm Applicants
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active me-2" href="post-job.php">Post New Job</a>
                    </li>

                </ul>
            </div>
            

            <div class="d-flex">
                <div>
                    <p class="text-body-dark">Employer</p>
                </div>
                <div class="flex-shrink-0 dropdown position-static">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://avatars.githubusercontent.com/u/69327775?v=4" alt="profile" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow dropdown-menu-end ">
                        <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>