<?php


// Include the database configuration
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve form data
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $miscell = $_POST['miscell'];
    $mobile = $_POST['mobile'];
    $about = $_POST['about'];
    $userEmail = $_POST['email']; 

    // Handle file upload
    if (isset($_FILES["image"])) {
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $destination = 'pic/' . $imageName;

        $extension = pathinfo($imageName, PATHINFO_EXTENSION);

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            echo "File extension must be 'jpg', 'jpeg', 'png'";
        } elseif ($imageSize > 1200000) { // File shouldn't be larger than 1 Megabyte
            echo "File size too large!";
        } else {
            // Move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($tmpName, $destination)) {
                // Update the image column in the database
                $updateImageSql = "UPDATE `registration` SET `image` = '$imageName' WHERE `email` = '$userEmail'";
                mysqli_query($conn, $updateImageSql);
                echo "<script>alert('Image updated successfully');</script>";
            } else {
                echo "<script>alert('Error moving uploaded file');</script>";
            }
        }
    }

    // Update other fields in the database
    $updateSql = "UPDATE `registration` SET 
                  `firstname` = '$firstname',
                  `lastname` = '$lastname',
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