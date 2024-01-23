<div class="flex-shrink-0 p-3 sidebar" style="width: 280px; height: 55rem; background-color: #222e3c;">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4 fw-bolder">Admin Panel</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <a href="adminhome.php">
                <button
                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fw-semibold fs-5"
                    data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    <span>Dashboard</span>
                </button></a>

        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fw-semibold fs-5"
                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                <span>User Details</span>
            </button>
            <div class="collapse <?php if(isset($clientcollapse)) echo "show" ?>" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                    <li><a href="employer.php"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span>Employer
                                </span></a>
                    </li>
                    <li><a href="employee.php"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span>Employee
                                </span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <a href="joblist.php"
                class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fw-semibold fs-5">
                <span>Job Vacancy</span>
            </a>
        </li>

        <ul class="list-unstyled">
            <li class="mb-1">
                <a href="companydetails.php"
                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fw-semibold fs-5">
                    <span>Company Details</span>
                </a>
            </li>
        </ul>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fw-semibold fs-5"
                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false"><span>
                    Manage Users</span>
            </button>
        </li>
    </ul>
</div>