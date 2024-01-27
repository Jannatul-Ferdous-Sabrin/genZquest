<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <style>
        .custom-password-input {
            width: 100%;
            outline: 0;
            font-size: 24px;
            padding-right: 40px;
            transition: border-color 0.9s ease;
        }

        .custom-password-input:focus {
            border-color: #103cbe;
        }

        #eyeicon {
            position: absolute;
            right: 0.7rem;
            top: 0.7rem;
            width: 30px;
            cursor: pointer;
        }

        #eyeiconConfirm {
            position: absolute;
            right: 0.7rem;
            top: 0.7rem;
            width: 30px;
            cursor: pointer;
        }

        .register-options {
        margin-bottom: 20px;
    }

    .register-options label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .register-options .form-check {
        display: inline-block;
        margin-right: 20px; /* Adjust the spacing between the buttons */
    }

    .register-options .form-check input {
        margin-right: 5px;
    }
</style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background:#103cbe;">
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
                    <form action="registerAction.php" method="POST">

                    <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Firstname"
                                name="r_fname">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Lastname"
                                name="r_lname">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username"
                                name="r_username">
                        </div>
                        <div class="mb-3">
                            <input type="Email" class="form-control form-control-lg bg-light fs-6" placeholder="Email"
                                name="r_email">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Mobile"
                                name="r_mobile">
                        </div>

                        <div class="mb-3 d-flex position-relative">
                            <input type="password"
                                class="form-control form-control-lg bg-light fs-6 custom-password-input"
                                placeholder="Password" name="r_pass">
                            <img src="Images/eye-close.png" id="eyeicon">
                        </div>

                        <div class="mb-3 d-flex position-relative">
                            <input type="password"
                                class="form-control form-control-lg bg-light fs-6 custom-password-input"
                                placeholder="Confirm Password" name="r_con_pass">
                            <img src="Images/eye-close.png" id="eyeiconConfirm">
                        </div>



                        <div class="mb-3 register-options">
                            <label>Register As:</label>
                            <div class="form-check">
                                <input type="radio" name="register_option" value="employer" checked> Employer
                            </div>
                            <div class="form-check">
                                <input type="radio" name="register_option" value="employee"> Employee
                            </div>
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
    <script>
        let eyeicon = document.getElementById("eyeicon");
        let password = document.querySelector('input[name="r_pass"]');
        eyeicon.addEventListener("click", function () {
            if (password.type === "password") {
                password.type = "text";
                eyeicon.src = "Images/eye-open.png";
            } else {
                password.type = "password";
                eyeicon.src = "Images/eye-close.png";
            }
        });

        let eyeiconConfirm = document.getElementById("eyeiconConfirm");
        let passwordConfirm = document.querySelector('input[name="r_con_pass"]');
        eyeiconConfirm.addEventListener("click", function () {
            if (passwordConfirm.type === "password") {
                passwordConfirm.type = "text";
                eyeiconConfirm.src = "Images/eye-open.png";
            } else {
                passwordConfirm.type = "password";
                eyeiconConfirm.src = "Images/eye-close.png";
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>