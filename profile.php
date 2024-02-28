<?php
// Start the session if not started already
session_start();

// Include the database configuration file
include('config.php');

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or handle the case where the user is not logged in
    header("Location: login.php"); // Replace with your login page URL
    exit();
}
$username = $_SESSION['username'];

// Fetch user information from the database
$sql = "SELECT * FROM `registration` WHERE `username` = '$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
} else {
    // Handle the case where user data is not found in the database
    // You can redirect to an error page or take appropriate action
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
.upload{
  width: 125px;
  position: relative;
  margin: auto;
}

.upload img{
  border-radius: 50%;
  border: 8px solid #ffffff;
}

.upload .round{
  position: absolute;
  bottom: 0;
  right: 0;
  background: #8282e7;
  width: 32px;
  height: 32px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
}
.upload .round input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
}




    </style>
</head>

<body>

<?php require('include/header.php'); ?>

<div class="container d-flex justify-content-center mt-5">
    <form action="profileAction.php" method="POST" enctype="multipart/form-data">


            <div>
            <h2 class="mb-4 text-center">Profile</h2>
            <div class="upload">
        <?php
        
        $image = $user["image"];
        ?>
        <img src="pic/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>">
        <div class="round">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
      </div>

            </div>
            

        <h4 class="mb-4 text-center"> <?php echo $username; ?></h4>

        <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="FNAME">Firstname</label>
                    <input class="form-control" type="text" id="FNAME" name="fname" placeholder="Firstname" required
                        value="<?php echo $user['firstname']; ?>">
                </div>

                <div class="">
                    <label for="LNAME">Lastname</label>
                    <input class="form-control" type="text" id="LNAME" name="lname" placeholder="Lastname" required
                        value="<?php echo $user['lastname']; ?>">
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                
            <div class="">
    <label for="DEGREE">Educational Level:</label>
    <select class="form-control" id="DEGREE" name="degree">
        <option value="" disabled selected hidden>Choose Educational Level</option>
        <option value="High School">High School</option>
        <option value="Associate's Degree">Associate's Degree</option>
        <option value="Bachelor's Degree">Bachelor's Degree</option>
        <option value="Master's Degree">Master's Degree</option>
        <option value="Doctorate">Doctorate</option>
    </select>
</div>
                <div class="">
                    <label for="EMAILADDRESS">Email Address:</label>
                    <input class="form-control" type="email" id="EMAILADDRESS" name="email" placeholder="Email Address"required
                        value="<?php echo $user['email']; ?>">
                </div>
            </div>

          



            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="miscell" class="form-label">Skills</label>
                    <input type="text" placeholder="skills" class="form-control" id="miscell" name="miscell" required
                        value="<?php echo $user['miscell']; ?>">
                </div>

                <div class="col-md-6">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="mobile"
                        name="mobile" required value="<?php echo $user['mobile']; ?>">
                </div>
            </div>

            <div class="mb-3 form-floating">
                <textarea class="form-control" placeholder="Bio " id="about" style="height: 100px"
                    name="about"></textarea>
                <label for="aboutme">Bio</label>
            </div>

            <button type="submit" class="btn btn-main btn-next-tab update-button">Update</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    document.getElementById("image").onchange = function(){
        document.getElementById("form").submit();
    };
</script>
</body>

</html>