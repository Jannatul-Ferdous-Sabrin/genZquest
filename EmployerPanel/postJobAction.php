<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $rFirstname = $_POST['r_fname'];
    $rLastname = $_POST['r_lname'];
    $rUsername = $_POST['r_username'];
    $rPassword = $_POST["r_pass"];
    $rConfirmPassword = $_POST["r_con_pass"];
    $rEmail = $_POST["r_email"];
    $rMobile = $_POST["r_mobile"];
    $rPreference = $_POST["register_option"];

    // SQL query to insert data into the database (without password hashing)
    $insertQuery = "INSERT INTO `job`(``,`lastname`,`username`, `email`, `mobile`, `password`, `verify_token`, `preference`) 
                    VALUES ('$rFirstname','$rLastname','$rUsername','$rEmail','$rMobile','$rPassword','$verifyToken', '$rPreference')";

}
?>