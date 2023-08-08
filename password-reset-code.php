<?php
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_link($get_name, $get_email, $token)
{
    $mail = new PHPMailer(true); // Passing true 

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'jannatulsabrina1067@gmail.com';
        $mail->Password = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; 
    
        $mail->setFrom('jannatulsabrina1067@gmail.com', 'Your App Name'); // Change 'Your App Name' to an appropriate sender name
        $mail->addAddress($get_email);

        $mail->isHTML(true);
        $mail->Subject = "Reset Password Notification";

        $email_template = "
        <h2>Hello $get_name</h2>
        <h4>You are receiving this email because we received a password reset request for your account</h4>
        <br><br>
        <a href='http://localhost/4th-project/password-reset/password-change.php?token=$token&email=$get_email'>Click Me</a>
        ";

        $mail->Body = $email_template;
        $mail->send();
    } catch (Exception $e) {
       
        error_log('Error sending email: ' . $e->getMessage(), 0);

        $_SESSION['status'] = "Error sending password reset email. Please try again later.";
        header("Location: Password-reset.php");
        exit(0);
    }
}

if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT username, email FROM registration WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_assoc($check_email_run);
        $get_name = $row['username'];
        $get_email = $row['email'];

        $update_token = "UPDATE registration SET verify_token = '$token' WHERE email = '$get_email'";
        $update_token_run = mysqli_query($conn, $update_token);
        if ($update_token_run) {
            send_password_link($get_username, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a password reset link";
            header("Location: Password-reset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong. #1";
            header("Location: Password-reset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: Password-reset.php");
        exit(0);
    }
}

if(isset($_POST['password_update']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $token = mysqli_real_escape_string($conn, $_POST['password_token']);

    if (!empty($token) && !empty($new_password) && !empty($confirm_password)) {
        $check_token = "SELECT verify_token FROM registration WHERE verify_token='$token' LIMIT 1";
        $check_token_run = mysqli_query($conn, $check_token);

        if (mysqli_num_rows($check_token_run) > 0) {
            // Perform password update here
            // Update the password in your database for the provided email
            // After successful update, redirect the user or set a success message
        } else {
            $_SESSION['status'] = "Invalid Token";
            header("Location: Password-change.php?token=$token&email=$email");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All fields are mandatory";
        header("Location: Password-change.php?token=$token&email=$email");
        exit(0);
    }
} else {
    $_SESSION['status'] = "No Token Available";
    header("Location: Password-reset.php");
    exit(0);
}
?>
