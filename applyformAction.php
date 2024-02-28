<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $applicants = $_POST['applicants'];
    $jobtitle = $_POST['jobtitle'];
    $companyname = $_POST['companyname'];
    $dob = $_POST["DOB"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $degree = $_FILES["degree"]["name"];
    $country = $_POST["country"];

    // Validate and process the form data

    // Uploads files
    $filename = $_FILES['degree']['name'];
    $temp_file = $_FILES['degree']['tmp_name'];
    $file_size = $_FILES['degree']['size'];

    $destination = 'uploads/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($extension, ['pdf', 'doc', 'docx'])) {
        echo "File extension must be .pdf, .doc, or .docx";
    } elseif ($file_size > 1000000) { // File shouldn't be larger than 1 Megabyte
        echo "File size too large!";
    } else {
        // Move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($temp_file, $destination)) {
            // SQL query to insert data into the applicant table
            $sql = "INSERT INTO applicants (fname, lname, DOB, contact,  email, degree, country, applicants, jobtitle, companyname) 
                    VALUES ('$fname', '$lname', '$dob', '$contact',  '$email', '$filename', '$country','$applicants','$jobtitle','$companyname')";

            // Execute the query
            $result = mysqli_query($conn, $sql);

            if ($result) {
                  // Redirect to submission confirmation page
        header("Location: submissionconfirm.php");
        exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to upload file.";
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>