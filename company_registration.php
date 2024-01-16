<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:#103cbe;">
                <div class="featured-image mb-3">
                    <img src="Images/reg.svg" class="img-fluid" style="width: 500px;">
                </div>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-2">
                        <h2>Create New Account</h2>
                        <p>Thanks for choosing us!</p>
                    </div>
                     <div class="mb-3">
                            <!-- Add company-specific fields here -->
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Company Name" name="company_name">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control bg-light fs-6" placeholder="Company Address" name="company_address" rows="2" required></textarea>
                        </div>
                        <div class="mb-3">
                         <input class="form-control form-control-lg bg-light fs-6" type="text" name="website" placeholder="Company Website" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Company Username" name="r_username" required>
                        </div>
                        <div class="mb-3">
                            <input type="Email" class="form-control form-control-lg bg-light fs-6" placeholder="Company Email" name="r_email">
                        </div>
                        <div class="mb-3">
                       <textarea class="form-control form-control-lg bg-light fs-6"  rows="3" name="aboutme" placeholder="Brief info about your company"></textarea>
                       </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Contact no" name="r_mobile">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="r_pass">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" name="r_con_pass">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="submit">Register</button>
                        </div>
                        <div class="row">
                            <small>Already have an account? <a href="login.php">Login</a></small>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>


                      