<?php

include '../config.php';

if (isset($_POST['editJob'])) {
    $jobid = $_POST['jobid'];
    $companyid = $_POST['companyid'];
    $companyname = $_POST['companyname'];
    $category = $_POST['category'];
    $jobTitle = $_POST['jobTitle'];
    $employee = $_POST['employee'];
    $salaries = $_POST['salaries'];
    $duration = $_POST['duration'];
    $exp = $_POST['exp'];
    $jobdes = $_POST['jobdes'];
    $gender = $_POST['gender'];
    $sector = $_POST['sector'];
    $jobstatus = $_POST['jobstatus'];
    $status = $_POST['status'];

    $update = mysqli_query($conn, "UPDATE `job` SET `JOBID`='$jobid',`COMPANYID`='$companyid',`COMPANYNAME`='$companyname',`CATEGORY`='$category',
        `JOBTITLE`='$jobTitle',`REQ_NO_EMPLOYEES`='$employee',`SALARIES`='$salaries',`DURATION_EMPLOYMENT`='$duration',
        `WORK_EXPERIENCE`='$exp',`JOBDESCRIPTION`='$jobdes',`PREFEREDSEX`='$gender',`SECTOR_VACANCY`='$sector',`JOBSTATUS`='$jobstatus',
        `status`= '$status' WHERE `JOBID`='$jobid'");

    if ($update) {
        echo "<script>alert('Information Updated Successfully!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    } else {
        echo "<script>alert('Information Updated Failed!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    }

}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM job WHERE JOBID='$id'");

    if($deleteQuery) {
        echo "<script>alert('Information Deleted Successfully!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    } else {
        echo "<script>alert('Deletion Failed!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    }

}

if(isset($_POST['employeeEdit'])) {
    

}

else {
    echo "<script>alert('Not Accessible')</script>";
    echo "<script>location.href='joblist.php'</script>";
}
?>