<?php
include '../config.php';


//joblist fetch from DB
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




// Delete row of applicants
if (isset($_GET['deleteApplicant'])) {
    $id = $_GET['deleteApplicant'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM applicants WHERE id='$id'");

    if ($deleteQuery) {
        echo "<script>alert('Information Deleted Successfully!!')</script>";
        echo "<script>location.href='applicants.php'</script>";
    } else {
        echo "<script>alert('Deletion Failed!!')</script>";
        echo "<script>location.href='applicants.php'</script>";
    }
}






//Delete row of joblist
if (isset($_GET['deleteJobid'])) {
    $id = $_GET['deleteJobid'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM job WHERE JOBID='$id'");

    if ($deleteQuery) {
        echo "<script>alert('Information Deleted Successfully!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    } else {
        echo "<script>alert('Deletion Failed!!')</script>";
        echo "<script>location.href='joblist.php'</script>";
    }
}


//Delete row of Employees
if (isset($_GET['deleteuserid'])) {
    $id = $_GET['deleteuserid'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM registration WHERE id='$id'");

    if ($deleteQuery) {
        echo "<script>alert('Information Deleted Successfully!!')</script>";
        echo "<script>location.href='employee.php'</script>";
    } else {
        echo "<script>alert('Deletion Failed!!')</script>";
        echo "<script>location.href='employee.php'</script>";
    }
}



//Edit Employer & Employee Information 
if (isset($_POST['userEdit'])) {
    $id = $_POST['id'];
    $verify = $_POST['verify'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];


    $update = mysqli_query($conn, "UPDATE `registration` SET `verify_status`='$verify',`firstname`='$fname',`lastname`='$lname',
        `username`='$username',`mobile`='$mob',`email`='$email' WHERE `id`='$id'");

    if ($update) {
        echo "<script>alert('Information Updated Successfully!!')</script>";
        echo "<script>location.href='employee.php'</script>";
    } else {
        echo "<script>alert('Information Updated Failed!!')</script>";
        echo "<script>location.href='employee.php'</script>";

        echo mysqli_error($conn);
    }
}


// Update Admin Profile Picture
if (isset($_POST['uploadBtn'])) {
    $photo = $_FILES['profilePic'];

    $imageLocation = $_FILES['profilePic']['tmp_name'];
    $imageName = $_FILES['profilePic']['name'];
    $imageDestination = "../profilePicture/" . $imageName;
    move_uploaded_file($imageLocation, $imageDestination);

    $pictureUpload = mysqli_query($conn, "UPDATE `registration` SET `profilePicture`='$imageDestination' WHERE username='admin'");
    echo "<script>location.href='profile-admin.php'</script>";
}



//applicants information fetch 

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
}




//job vacancy add
if (isset($_POST['addJob'])) {

    $jobTitle = $_POST['jobTitle'];
    $REQ_NO_EMPLOYEES = $_POST['REQ_NO_EMPLOYEES'];
    $SALARIES = $_POST['SALARIES'];
    $companyName = $_POST['companyName'];
    $category = $_POST['category'];
    $workExperience = $_POST["workExperience"];
    $employmentDuration = $_POST["employmentDuration"];
    $KEYWORD = $_POST["KEYWORD"];
    $jobDescription = $_POST["jobDescription"];
    $qualifications = $_POST["qualifications"];


    // SQL query to insert data into the database (without password hashing)
    $insertQuery = "INSERT INTO `job`(`JOBTITLE`,`REQ_NO_EMPLOYEES`,`SALARIES`,`COMPANYNAME`, `CATEGORY`, `WORK_EXPERIENCE`, `DURATION_EMPLOYMENT`,`KEYWORD`, `JOBDESCRIPTION`, `QUALIFICATION`) 
                    VALUES ('$jobTitle','$REQ_NO_EMPLOYEES','$SALARIES','$companyName','$category','$workExperience','$employmentDuration','$KEYWORD','$jobDescription', '$qualifications')";

    // Execute the query
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        echo "Data inserted successfully!";

        $notificationAddQuery = "INSERT INTO `notification` (`COMPANYNAME`) VALUES ('$companyName')";
        $notificationAdd = mysqli_query($conn, $notificationAddQuery);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "<script>alert('Not Accessible')</script>";
    echo "<script>location.href='joblist.php'</script>";
}
?>