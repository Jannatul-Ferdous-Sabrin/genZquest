<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .custom-password-input {
            width: 100%;
            outline: 0;
            font-size: 24px;
            color: #555;
            padding-right: 40px;
            transition: border-color 0.3s ease;
        }
        .custom-password-input:focus {
            border-color: #103cbe;
        }
        #eyeicon {
            position: absolute;
            right: 23rem;
            top: 20rem;
            width: 30px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="Images/login1.svg" class="img-fluid" style="width: 500px;">
                </div>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Welcome back!</h2>
                        <p>We are happy to have you again.</p>
                    </div>
                    <form action="loginAction.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="l_username">
                        </div>
                        <div class="mb-3 d-flex">
                            <input type="password" class="form-control form-control-lg bg-light fs-6 custom-password-input" placeholder="Password" name="l_pass">
                            <img src="Images/eye-close.png" id="eyeicon">
                        </div>
                        <div class="mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="login">Login</button>
                        </div>
                        <div class="row">
                            <small>Don't have an account? <a href="register.php">Sign Up</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        let eyeicon = document.getElementById("eyeicon");
        let password = document.querySelector('input[name="l_pass"]');
        eyeicon.addEventListener("click", function () {
            if (password.type === "password") {
                password.type = "text";
                eyeicon.src = "Images/eye-open.png";
            } else {
                password.type = "password";
                eyeicon.src = "Images/eye-close.png";
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
