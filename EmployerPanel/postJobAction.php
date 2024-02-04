<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $jobTitle = $_POST['jobTitle'];
    $JOBID = $_POST['JOBID'];
    $JOBSTATUS= $_POST['JOBSTATUS'];
    $companyName = $_POST['companyName'];
    $category = $_POST['category'];
    $workExperience= $_POST["workExperience"];
    $employmentDuration = $_POST["employmentDuration"];
    $jobDescription = $_POST["jobDescription "];
    $qualifications = $_POST["qualifications"];
   

    // SQL query to insert data into the database (without password hashing)
    $insertQuery = "INSERT INTO `job`(`JOBTITLE`,`JOBID`,`JOBSTATUS`,`COMPANYNAME`, `CATEGORY`, `WORK_EXPERIENCE`, `DURATION_EMPLOYMENT`, `JOBDESCRIPTION`, `QUALIFICATION`) 
                    VALUES ('$jobTitle','$JOBID','$JOBSTATUS','$companyName','$category','$workExperience','$employmentDuration','$jobDescription',
                    '$qualifications')";

// Execute the query
$result = mysqli_query($conn, $insertQuery);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
?>

