<?php
include "config.php";

$_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$_email_pattern = "/(cse|eee|ce)_\d{10}@lus\.ac\.bd/";
$r_username = $_POST['r_username'];
$r_pass = $_POST["r_pass"];
$r_con_pass = $_POST["r_con_pass"];
$r_email = $_POST["r_email"];
$r_mobile = $_POST["r_mobile"];

$insert_query = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`) 
 VALUES ('$r_username','$r_email','$r_mobile','$r_pass')";

$duplicate_username = mysqli_query($conn, "SELECT * FROM `registration` WHERE username='$r_username'");
$duplicate_email = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='$r_email'");

 

if (!preg_match($_email_pattern, $r_email)) {
    echo "<script>alert('Use Only LUS Email!!')</script>";
    echo "<script>location.href='register.php'</script>";                        //redirect
} else if (!preg_match($_mobile_pattern, $r_mobile)) {
    echo "<script>alert('Use BD Mobile Number!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if ($r_pass !==$r_con_pass) {
    echo "<script>alert('Pass and con-pass do not match!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else 
{
    if (!mysqli_query($conn, $insert_query)) {
        echo "<script>alert('Not Inserted!!')</script>";
        echo "<script>location.href='register.php'</script>";
    } else {
        echo "<script>alert('Successfully Registered!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }  
}




