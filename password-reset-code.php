<?php
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_link($get_name, $get_email, $token)
{
    $mail = new PHPMailer(true); // Passing true enables exceptions

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'jannatulsabrina1067@gmail.com';
        $mail->Password = 'your-gmail-password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // Use 587 for TLS

        // Recipients
        $mail->setFrom('jannatulsabrina1067@gmail.com', $get_name);
        $mail->addAddress($get_email);

        $mail->isHTML(true);
        $mail->Subject = "Reset Password Notification";

        $email_template = "
        <h2>Hello</h2>
        <h4>You are receiving this email because we received a password reset request for your account</h4>
        <br><br>
        <a href='http://localhost/4th-project/password-reset/password-change.php?token=$token&email=$get_email'>Click Me</a>
        ";

        $mail->Body = $email_template;
        $mail->send();
    } catch (Exception $e) {
       
        error_log('Error sending email: ' . $e->getMessage(), 0);

        // Optionally, you can provide user-friendly feedback or take other actions
        $_SESSION['status'] = "Error sending password reset email. Please try again later.";
        header("Location: Password-reset.php");
        exit(0);
    }
}

if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM registration WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE registration SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1 ";
        $update_token_run = mysqli_query($conn, $update_token);
        if ($update_token_run) {
            send_password_link($get_name, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a password reset link";
            header("Location: Password-reset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went Wrong. #1";
            header("Location: Password-reset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: Password-reset.php");
        exit(0);
    }
}
?>
