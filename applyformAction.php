<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process the form data
    $fname = mysqli_real_escape_string($conn, $_POST["FNAME"]);
    $lname = mysqli_real_escape_string($conn, $_POST["LNAME"]);
    $dob = mysqli_real_escape_string($conn, $_POST["DOB"]);
    $telno = mysqli_real_escape_string($conn, $_POST["TELNO"]);
    $street = mysqli_real_escape_string($conn, $_POST["STREET"]);
    $country = mysqli_real_escape_string($conn, $_POST["COUNTRY"]);
    $email = mysqli_real_escape_string($conn, $_POST["EMAILADDRESS"]);
    
    // Check if "DEGREE" key is set in $_FILES
    $degreeFile = isset($_FILES["DEGREE"]) ? $_FILES["DEGREE"] : null;

    // File upload directory
    $uploadDirectory = "cv/";

    // File name with a timestamp to avoid collision
    $degreeFileName = null;
    if ($degreeFile && $degreeFile["error"] == UPLOAD_ERR_OK) {
        $originalFileName = basename($degreeFile["name"]);
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $degreeFileName = "degree_" . time() . "." . $extension;
        $uploadFilePath = $uploadDirectory . $degreeFileName;

        // Move the uploaded file to the specified folder
        if (!move_uploaded_file($degreeFile["tmp_name"], $uploadFilePath)) {
            die("Error uploading file.");
        }
    }

    // SQL query to insert data into the applyform table
    $sql = "INSERT INTO applyform (FNAME, LNAME, DOB, TELNO, STREET,COUNTRY, EMAILADDRESS, DEGREE) 
            VALUES ('$fname', '$lname', '$dob', '$telno', '$street', '$country', '$email', '$degreeFileName')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Redirect to submission confirmation page
        header("Location: submissionconfirm.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>