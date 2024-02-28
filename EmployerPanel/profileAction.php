<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $estd = $_POST['estd'];
    $type = $_POST['type'];
    $website = $_POST['website'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $about = $_POST['about'];
    $service = $_POST['service'];
    $userEmail = $_POST['email'];


    $update = mysqli_query($conn, "UPDATE `registration` SET `firstname`='$company', `byear`='$estd', `type`='$type', `website`='$website', `city`='$city', `street`='$street', `zip`='$zip', `country`='$country', `about`='$about', `service`='$service', `email`='$email', `mobile`='$mobile' WHERE `id` = '$id' ");


if ($update) {
echo "<script>alert('Information Updated Successfully!!')</script>";
echo "<script>location.href='profile.php'</script>";
} else {
echo "<script>alert('Information Updated Failed!!')</script>";
echo "<script>location.href='joblist.php'</script>";
}

}


?>