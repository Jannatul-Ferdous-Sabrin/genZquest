<!-- Fontawesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<div class="flex-shrink-0 p-3 sidebar"
    style="width: 280px; min-height: 100vh; max-height: auto; background-color: #222e3c;">


    <a href="adminhome.php"
        class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <span class="ms-5 fs-4 fw-bolder text-white">genZquest</span>
    </a>


    <!-- Sidebar Navigation List -->
    <ul class="list-unstyled ps-0">


        <!-- Dashboard --> 
        <li class="mb-2">
            <a href="adminhome.php">
                <button class="btn fw-semibold fs-5 text-white" data-bs-toggle="collapse"
                    data-bs-target="#home-collapse" aria-expanded="false">
                    <i class="fa-solid fa-chart-pie me-2"></i>
                    <span>Dashboard</span>
                </button>
            </a>
        </li>

        <li class="border-top my-3"></li>
        
        <!-- Manage Users Section -->
        <li class="mb-2">
            <button class="btn fw-semibold fs-5 text-white" data-bs-toggle="collapse"
                data-bs-target="#dashboard-collapse" aria-expanded="false">
                <i class="fa-solid fa-user-group me-2"></i>
                <span>Manage Users</span>
            </button>
            <div class="collapse <?php if (isset($clientcollapse))
                echo "show" ?>" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5">
                        <li><a href="employer.php"
                                class="link-body-emphasis text-decoration-none rounded "><span>Employer</span></a></li>
                        <li><a href="employee.php"
                                class="link-body-emphasis text-decoration-none rounded"><span>Employee</span></a></li>
                    </ul>
                </div>
            </li>


            <!-- Job vacancy Section -->
            <li class="mb-2">
                <a href="joblist.php" class="btn btn-toggle fw-semibold fs-5 text-white">
                    <i class="fa-solid fa-building me-3"></i>
                    <span>Job Vacancy</span>
                </a>
            </li>


            <!-- company details -->
            <li class="mb-2">
                <a href="companydetails.php" class="btn fw-semibold fs-5 text-white">
                    <i class="fa-solid fa-book-tanakh me-2"></i>
                    <span>Company Details</span>
                </a>
            </li>

            <!-- Applicants Approval -->
            <li class="mb-2">
                <a href="applicants.php" class="btn fw-semibold fs-5 text-white">
                <i class="fa-solid fa-users-rectangle me-2"></i>
                    <span>Applicants</span>
                </a>
            </li>
            <li class="border-top my-3"></li>

            <!-- Admin Query -->
            <li class="mb-2">
                <a href="profile-admin.php" class="btn fw-semibold fs-5 text-white">
                <i class="fa-solid fa-user-tie me-2"></i>
                    <span>Admin Query</span>
                </a>
            </li>
        </ul>
    </div>