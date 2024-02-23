<?php
// profileAction.php

// Include the database configuration
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve form data
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];

    $image = $_POST["image"];
    $miscell = $_POST['miscell'];
    $mobile = $_POST['mobile'];
    $about = $_POST['about'];
    $userEmail = $_POST['email']; // Retrieve user email directly from the form data

    // Perform any additional validation or processing as needed

    $updateSql = "UPDATE `registration` SET 
                  `firstname` = '$firstname',
                  `lastname` = '$lastname',
                  `image` = '$image',
                
                  `miscell` = '$miscell',
                  `mobile` = '$mobile',
                  `about` = '$about'
                  WHERE `email` = '$userEmail'";

    if ($conn->query($updateSql) === TRUE) {
        echo "Profile updated successfully!";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted through POST, redirect to the form page
    header("Location: profile.php");
    exit();
}
?>