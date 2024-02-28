<?php
session_start();
include('../config.php');
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];

// Fetch user information from the database
$sql = "SELECT * FROM `registration` WHERE `username` = '$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();

} else {
    die("User data not found in the database");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
        }

        body {
            background-color: #c2caf2;
        }
    </style>
</head>

<body>

    <?php require('header.php'); ?>

    <div class="container d-flex justify-content-center mt-5">

        <form action="profileAction.php" method="POST" enctype="multipart/form-data">
            <div>
                <h2 class="container d-flex justify-content-center mb-5">Profile</h2>
            </div>

            <!-- <div class="d-flex flex-row flex-nowrap">
                <?php include 'sidebar.php' ?>
            </div> -->

            <div class="form-group">
                <label for="title">Company Name</label>
                <input type="text" placeholder="Enter Your Company Name" class="form-control" id="title" name="company"
                    value="<?php echo $row['firstname']; ?>" readonly>
            </div>


            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="estd">Established In</label>
                    <input type="text" placeholder="2021, 2022, 2023, 2024" class="form-control" id="estd" name="estd"
                        value="<?php echo $row['byear']; ?>" required>
                </div>

                <div class="">
                    <label for="type">Type</label>
                    <input type="text" placeholder="Ex: It, Travel" class="form-control" id="type" name="type"
                        value="<?php echo $row['type']; ?>" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="website">Website</label>
                    <input type="text" placeholder="Enter Your Website" class="form-control" id="website" name="website"
                        value="<?php echo $row['website']; ?>" required>
                </div>

                <div class="">
                    <label for="city">City/Town</label>
                    <input type="text" placeholder="Enter Your City" class="form-control" id="city" name="city"
                        value="<?php echo $row['city']; ?>" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="street">Street</label>
                    <input type="text" placeholder="Enter Your Street" class="form-control" id="street" name="street"
                        value="<?php echo $row['street']; ?>" required>
                </div>

                <div class="">
                    <label for="zip">Zip Code</label>
                    <input type="text" placeholder="Enter Your Zip Code" class="form-control" id="zip" name="zip"
                        value="<?php echo $row['zip']; ?>" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="country">Country</label>
                    <input type="text" placeholder="Bangladesh" class="form-control" id="country" name="country"
                        value="<?php echo $row['country']; ?>" required>
                </div>

                <div class="">
                    <label for="mobile">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="mobile"
                        name="mobile" value="<?php echo $row['mobile']; ?>" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter Your Email" class="form-control" id="email" name="email"
                        value="<?php echo $row['email']; ?>" readonly>
                </div>
            </div>


            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Company Background" id="about" style="height: 100px"
                    name="about"><?php echo $row['about']; ?></textarea>
                <label for="companyBackground">Company Background</label>
            </div>


            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Service" id="service" style="height: 100px"
                    name="service"><?php echo $row['service']; ?></textarea>
                <label for="service">Serivce</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-4">Save & Changes</button>

            <div class="d-flex gap-5 mt-4">


                <div class="">
                    <label for="">Company Logo</label>
                    <input type="file" class="form-control" name="profilePicture">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-4">Save & Changes</button>

        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
</body >
</html >