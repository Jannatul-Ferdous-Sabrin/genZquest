<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
       

        .update-button {
            background: #8282e7;
            color: white;
            border-color: #8282e7;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 0;
            display: inline-block;
            text-align: center;
        }
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
    background: linear-gradient(90deg, pink, wheat);
}
 


    </style>
</head>

<body>

    <?php require('include/header.php'); ?>

    <div class="container d-flex justify-content-center mt-5">
        <form action="profileAction.php" method="POST">
            <div>
            <h2 class="mb-4 text-center">Profile</h2>

            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="FNAME">Firstname</label>
                    <input class="form-control" type="text" id="FNAME" name="fname" placeholder="Firstname" required>
                </div>

                <div class="">
                    <label for="LNAME">Lastname</label>
                    <input class="form-control" type="text" id="LNAME" name="lname" placeholder="Lastname" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="DEGREE">Educational Level:</label>
                    <input class="form-control" type="text" id="DEGREE" name="degree" placeholder="Educational Level">
                </div>

                <div class="">
                    <label for="EMAILADDRESS">Email Address:</label>
                    <input class="form-control" type="email" id="EMAILADDRESS" name="email" placeholder="Email Address">
                </div>
            </div>

            <div class=" mt-4">
                <label for="DOB">Date of Birth:</label>
                <input class="form-control" type="date" id="DOB" name="bdate" placeholder="Date of Birth" required>
            </div>

            <div class="row mb-3 mt-4">
                <div class="col-md-6">
                    <label for="city" class="form-label">City/Town</label>
                    <input type="text" placeholder="Enter Your City" class="form-control" id="city" name="city" required>
                </div>

                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" required="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="street" class="form-label">Street</label>
                    <input type="text" placeholder="Enter Your Street" class="form-control" id="street" name="street"
                        required>
                </div>

                <div class="col-md-6">
                    <label for="zip" class="form-label">Zip Code</label>
                    <input type="text" placeholder="Enter Your Zip Code" class="form-control" id="zip" name="zip"
                        required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" placeholder="Country" class="form-control" id="country" name="country" required>
                </div>

                <div class="col-md-6">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="mobile"
                        name="mobile" required>
                </div>
            </div>

            <div class="mb-3 form-floating">
                <textarea class="form-control" placeholder="About me" id="about" style="height: 100px"
                    name="about"></textarea>
                <label for="aboutme">About me</label>
            </div>

            <button type="submit" class="btn btn-main btn-next-tab update-button">Update</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>