<?php
include '../config.php';

if (isset($_POST['addapplicants'])) {
  

    $applicants = $_POST['applicants'];
    $contact = $_POST['contact'];
    $jobtitle = $_POST['jobtitle'];
    $companyname = $_POST['companyname'];
    $applieddate = $_POST['applieddate'];
    $comments = $_POST['comments'];
    $profile = $_POST['profile'];
    $status = $_POST['status'];
  

    $update = mysqli_query($conn, "UPDATE `applicants` SET `applicants`='$applicants',`contact`='$contact',`jobtitle`='$jobtitle',`companyname`='$companyname',
        `applieddate`='$applieddate',`comments`='$comments',
        `WORK_EXPERIENCE`='$exp',`JOBSTATUS`='$jobstatus',
        `profile`= '$profile',`status`='$status' WHERE `applicants`='$applicants'");

    if ($update) {
        echo "<script>alert('Information Updated Successfully!!')</script>";
        echo "<script>location.href='applicants.php'</script>";
    } else {
        echo "<script>alert('Information Updated Failed!!')</script>";
        echo "<script>location.href='applicants.php'</script>";
    }

}