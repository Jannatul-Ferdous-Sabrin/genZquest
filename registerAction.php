<?php
include "config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function sendMail($recipient, $username, $verificationToken)
{
    // Server settings
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->SMTPAuth = true; // Enable SMTP authentication

    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->Username = 'ferdousjannat0103@gmail.com'; // SMTP username
    $mail->Password = 'xvduhbgpzbgpbarq'; // SMTP password

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // SSL encrypt with port
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Set sender and recipient email address
    $mail->setFrom('from@example.com', 'Admin');
    $mail->addAddress($recipient);

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Email Verification';
    $emailTemplate = "
        <h2>You have created an account successfully</h2>
        <h4>Verify your email address using the below given Link</h4>
        <br><br>
        <a href='http://localhost/genzquest/verifyemail.php?token=$verificationToken'>Verification Link</a>";

    $mail->Body = $emailTemplate;

    // Send the email
    if (!$mail->send()) {
        error_log('Error sending email: ' . $mail->ErrorInfo);
        return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $rUsername = $_POST['r_username'];
    $rPassword = $_POST["r_pass"];
    $rConfirmPassword = $_POST["r_con_pass"];
    $rEmail = $_POST["r_email"];
    $rMobile = $_POST["r_mobile"];
    $rPreference = $_POST["register_option"];
    // Verify token for email verification
    $verifyToken = md5(rand());

    // SQL query to insert data into the database
    $insertQuery = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, `verify_token`, `preference`) 
                    VALUES ('$rUsername','$rEmail','$rMobile','$rPassword','$verifyToken', '$rPreference')";

    // Regular expressions for validation
    $emailPattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])(?=.*[0-9]).+$/";

    // Check for duplicate username and email
    $duplicateUsername = mysqli_query($conn, "SELECT * FROM `registration` WHERE username='$rUsername'");
    $duplicateEmail = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='$rEmail'");

    // Validate email, mobile, and ensure the password matches
    if (!preg_match($emailPattern, $rEmail) || !preg_match($mobilePattern, $rMobile) || !preg_match($passwordPattern, $rPassword)) {
        // Validation failed
        echo "<script>alert('Invalid input. Please try again!')</script>";
        echo "<script>location.href='register.php'</script>";
    } elseif ($rPassword !== $rConfirmPassword) {
        // Password and Confirm Password do not match
        echo "<script>alert('Password and Confirm Password do not match!')</script>";
        echo "<script>location.href='register.php'</script>";
    } elseif (mysqli_num_rows($duplicateUsername) > 0) {
        // Duplicate username
        echo "<script>alert('This username is already taken!')</script>";
        echo "<script>location.href='register.php'</script>";
    } elseif (mysqli_num_rows($duplicateEmail) > 0) {
        // Duplicate email
        echo "<script>alert('This email is already taken!')</script>";
        echo "<script>location.href='register.php'</script>";
    } else {
        // Insert data into the database
        if (mysqli_query($conn, $insertQuery)) {
            // Send email verification
            if (sendMail($rEmail, $rUsername, $verifyToken)) {
                echo "<script>alert('Registration successful! Check your email for verification.')</script>";
                echo "<script>location.href='register.php'</script>";
            } else {
                echo "<script>alert('Error sending verification email.')</script>";
                echo "<script>location.href='register.php'</script>";
            }
        } else {
            // Database insertion failed
            error_log("Failed to insert user data into the database.");
            echo "<script>alert('Registration failed!')</script>";
            echo "<script>location.href='register.php'</script>";
        }
    }
} else {
    // Not accessible directly
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>
