<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["FNAME"];
    $lname = $_POST["LNAME"];
    $dob = $_POST["DOB"];
    $telno = $_POST["TELNO"];
  
    $email = $_POST["EMAILADDRESS"];
    $degreeFile = $_FILES["DEGREE"]["name"];
    $country = $_POST["country"];

    // Validate and process the form data

    // Uploads files
    $filename = $_FILES['DEGREE']['name'];
    $temp_file = $_FILES['DEGREE']['tmp_name'];
    $file_size = $_FILES['DEGREE']['size'];

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
            $sql = "INSERT INTO applicants (fname, lname, DOB, contact,  email, degree, country) 
                    VALUES ('$fname', '$lname', '$dob', '$telno',  '$email', '$filename', '$country')";

            // Execute the query
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data inserted successfully!";
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