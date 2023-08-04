<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="registerAction.php" method="post">
                    <div class="mb-3">
                        <h3>Register Form</h3>
                    </div>
                    <div class="mb-3">
                        Username :
                        <input type="text" class="form-control" name="r_username" required>
                    </div>
                    <div class="mb-3">
                        Email :
                        <input type="email" class="form-control" name="r_email" required>
                    </div>
                    <div class="mb-3">
                        Mobile :
                        <input type="tel" class="form-control" name="r_mobile" required>
                    </div>
                    <div class="mb-3">
                        Password :
                        <input type="password" class="form-control" name="r_pass" required>
                    </div>
                    <div class="mb-3">
                        Confirm Password :
                        <input type="password" class="form-control" name="r_con_pass" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-12" name="submit">Register</button>
                    <a href="login.php">Login here</a>
                </form>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>
