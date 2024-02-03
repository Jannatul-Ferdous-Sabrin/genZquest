<?php

// Mark All As Read Notification
if (isset($_GET['notificationreset'])) {
    $notificationSeen = mysqli_query($conn, "UPDATE `notification` SET `ADMINSEEN`='1'");
}

$notificationQuery = mysqli_query($conn, "SELECT * FROM `notification` WHERE `status` = '0'");
$notificationUnseenQuery = mysqli_query($conn, "SELECT * FROM `notification` WHERE `status` = '0' AND ADMINSEEN = '0'");
$unseenNum = mysqli_num_rows($notificationUnseenQuery);

?>

<header class="py-3 mb-3 border-bottom">
    <div class="d-flex justify-content-end container-fluid d-grid gap-3">
        <div class="dropdown">
            <a class="me-2 link-body-emphasis text-decoration-none hidden-arrow" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?php echo $unseenNum ?>
                </span>
            </a>
            <div>
                <ul class="dropdown-menu text-small shadow p-2" style="width: 25rem;">
                    <?php
                    while ($notificationData = mysqli_fetch_assoc($notificationQuery)) {
                        $companyName = $notificationData['COMPANYNAME'];
                        $companyQuery = mysqli_query($conn, "SELECT COMPANYLOGO FROM company WHERE COMPANYNAME ='$companyName'");
                        $companyLogo = mysqli_fetch_assoc($companyQuery);
                        echo "
                        <a class='text-decoration-none link-body-emphasis' href='edit-job.php?id=" . $notificationData['JOBID'] . "'>
                            <li class='rounded' style='background-color: " . ($notificationData['ADMINSEEN'] == 0 ? "#f8f9fa" : "") . "'>
                                <div class='d-flex'>
                                    <img src='" . $companyLogo['COMPANYLOGO'] . "'
                                        alt='profile' width='50' height='50' class='rounded-circle me-3'>
                                    <div>
                                        <span class='fs-6 mb-0 fw-bold'>" . $notificationData['COMPANYNAME'] . "</span>
                                        <span> has recently posted a job</span>
                                        <p class='mt-0 text-secondary'>" . $notificationData['DATEPOSTED'] . "</p>
                                    </div>
                                </div>
                                <hr>
                            </li>
                        </a>
                        ";

                    }
                    ?>
                    <a class="text-decoration-none text-dark" href="?notificationreset=1">
                        <li class="d-flex justify-content-center">Mark All As Read</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="ms-3 vr"></div>
        <div class="d-flex">
            <div>
                <p class="text-body-secondary">admin</p>
            </div>
            <div class="ms-3 flex-shrink-0 dropdown">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/124907468?s=400&u=250d6918fb6787cb7362d114df25ea5b94963fef&v=4"
                        alt="profile" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="profile-admin.php">My Profile</a></li> 
                    <li>
                        <hr class="dropdown-divider">
                    <li><a class="dropdown-item" href="../index.php">Go to Homepage</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>

    </div>
</header>