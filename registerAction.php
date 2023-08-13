<?php
include "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function sendmail($r_email, $r_username, $verify_token)
{
    //Server settings
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP();                       //Send using SMTP
    $mail->SMTPAuth = true;                //Enable SMTP authentication

    $mail->Host = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->Username = 'ferdousjannat0103@gmail.com';      //SMTP username
    $mail->Password = 'xvduhbgpzbgpbarq';                 //SMTP password      

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,                             //Sets options for SMTP conne
            'verify_peer_name' => false,                        //disable peer veri
            'allow_self_signed' => true
        )
    );

    //SSl encryt w port
    $mail->SMTPSecure = 'ssl';                                 
    $mail->Port = 465;

     //set sender and recipient email address
    $mail->setFrom('from@example.com', 'Admin');
    $mail->addAddress($r_email);                                

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Email Verification';
    $email_template = "
         <h2>You have create an account successfully</h2>
         <h4>Verify your email address using the below given Link</h4>
         <br><br>
         <a href='http://localhost/genzquest/verifyemail.php?token=$verify_token'>Verification Link</a>";

    $mail->Body = $email_template;
    $mail->send();
    echo 'Message has been sent';
}

if (isset($_POST['submit'])) {
    $r_username = $_POST['r_username'];
    $r_pass = $_POST["r_pass"];
    $r_con_pass = $_POST["r_con_pass"];
    $r_email = $_POST["r_email"];
    $r_mobile = $_POST["r_mobile"];
    $verify_token = md5(rand());

    $insert_query = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, `verify_token`) 
     VALUES ('$r_username','$r_email','$r_mobile','$r_pass','$verify_token')";

    $duplicate_username = mysqli_query($conn, "SELECT * FROM `registration` WHERE username='$r_username'");
    $duplicate_email = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='$r_email'");

  
    $email_pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $_password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/\-|])(?=.*[0-9]).+$/";



    // Validate email and mobile, and ensure password matches
    if (!preg_match($email_pattern, $r_email)) {
        echo "<script>alert('Invalid Email. Please Try Again!!')</script>";
        echo "<script>location.href='register.php'</script>";
    } else if (!preg_match($_mobile_pattern, $r_mobile)) {
        echo "<script>alert('Use BD Mobile Number!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }else if (!preg_match($_password_pattern, $r_pass)) {
        echo "<script>alert('1 Uppercase 1 Lowercase 1 Special Character & 1 digits Password..!!')</script>";
        echo "<script>location.href='register.php'</script>";
    
    } else if ($r_pass !== $r_con_pass) {
        echo "<script>alert('Password and Confirm Password do not match!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    
    // else if (mysqli_num_rows($duplicate_username) > 0) { 
    //     echo "<script>alert('This Username is already taken..!!')</script>";
    //     echo "<script>location.href='register.php'</script>";
    // } else if (mysqli_num_rows($duplicate_email) > 0) { 
    //     echo "<script>alert('This email is already taken..!!')</script>";
    //     echo "<script>location.href='register.php'</script>";
    // } 

    
    else 
    {

    if (!mysqli_query($conn, $insert_query)) {
        error_log("Failed to insert user data into the database.");
        echo "<script>alert('Registration failed!')</script>";
        echo "<script>location.href='register.php'</script>";
    } else {
        sendmail("$r_email", "$r_username", "$verify_token");
        echo "<script>alert('Registration Success!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    }
} else {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>