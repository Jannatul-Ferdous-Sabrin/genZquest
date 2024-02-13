<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process the form data
    $fname = $_POST["FNAME"];
    $lname = $_POST["LNAME"];
    $address = $_POST["ADDRESS"];
    $sex = $_POST["optionsRadios"];
    $dob = $_POST["DOB"];
    $birthplace = $_POST["BIRTHPLACE"];
    $telno = $_POST["TELNO"];
    $civilstatus = $_POST["CIVILSTATUS"];
    $email = $_POST["EMAILADDRESS"];
    $username = $_POST["USERNAME"];
    $password = $_POST["PASS"];
    $degreeFile = $_FILES["DEGREE"];

    // Example: Save data to a database or perform other actions
    // ...

    // Example: Upload the file
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($degreeFile["name"]);

    if (move_uploaded_file($degreeFile["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($degreeFile["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Redirect to a thank you page or any other appropriate action
    // header("Location: thank_you_page.php");
    // exit();
} else {
    // Redirect back to the form if accessed directly without a POST request
    header("Location: form.php");
    exit();
}
?>