<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process the form data
    $fname = $_POST["FNAME"];
    $lname = $_POST["LNAME"];
    $sex = $_POST["optionsRadios"];
    $dob = $_POST["DOB"];
    $telno = $_POST["TELNO"];
    $street = $_POST["street"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];
    $email = $_POST["EMAILADDRESS"];
    $degreeFile = $_FILES["DEGREE"];


 

    // SQL query to insert data into the applyform table
    $sql = "INSERT INTO applyform (FNAME, LNAME, optionsRadios, DOB, TELNO, street, zip, country, EMAILADDRESS, DEGREE) 
    VALUES ('$fname', '$lname', '$sex', '$dob', '$telno', '$street', '$zip', '$country', '$email', '$degreeFile')";

// Execute the query
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
?>
