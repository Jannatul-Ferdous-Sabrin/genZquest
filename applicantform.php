<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Form</title>

    <style>
        .container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .terms {
            font-size: 0.8rem;
            color: #ccc;
        }

        .sex-group {
            display: flex;
            justify-content: space-between;
        }

        .sex-label {
            margin-right: 10px;
        }

        .sex-radio {
            display: flex;
            align-items: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Applicant Form</h2>
        <form action="process_application.php" method="post">
            <div class="form-group">
                <label for="FNAME">Firstname:</label>
                <input class="form-control" type="text" id="FNAME" name="FNAME" placeholder="Firstname" required>
            </div>
            <div class="form-group">
                <label for="LNAME">Lastname:</label>
                <input class="form-control" type="text" id="LNAME" name="LNAME" placeholder="Lastname" required>
            </div>
            <div class="form-group">
                <label for="MNAME">Middle Name:</label>
                <input class="form-control" type="text" id="MNAME" name="MNAME" placeholder="Middle Name">
            </div>
            <div class="form-group">
                <label for="ADDRESS">Address:</label>
                <textarea class="form-control" id="ADDRESS" name="ADDRESS" placeholder="Address" required></textarea>
            </div>

            <div class="form-group">
                <div class="sex-group">
                    <span class="sex-label">Sex:</span>
                    <div class="sex-radio">
                        <label>
                            <input id="optionsRadios1" checked="True" name="optionsRadios" type="radio"
                                value="Female">Female
                        </label>
                        <label>
                            <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male">Male
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="DOB">Date of Birth:</label>
                <input class="form-control" type="date" id="DOB" name="DOB" placeholder="Date of Birth" required>
            </div>
            <div class="form-group">
                <label for="BIRTHPLACE">Place of Birth:</label>
                <textarea class="form-control" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Place of Birth"
                    required></textarea>
            </div>
            <div class="form-group">
                <label for="TELNO">Contact No.:</label>
                <input class="form-control" type="text" id="TELNO" name="TELNO" placeholder="Contact No." required>
            </div>
            <div class="form-group">
                <label for="CIVILSTATUS">Civil Status:</label>
                <select class="form-control" id="CIVILSTATUS" name="CIVILSTATUS">
                    <option value="none">Select</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widow">Widow</option>
                </select>
            </div>


            <div class="form-group">
                <label for="EMAILADDRESS">Email Address:</label>
                <input class="form-control" type="email" id="EMAILADDRESS" name="EMAILADDRESS"
                    placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="USERNAME">Username:</label>
                <input class="form-control" type="text" id="USERNAME" name="USERNAME" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="PASS">Password:</label>
                <input class="form-control" type="password" id="PASS" name="PASS" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="DEGREE">Educational Attainment:</label>
                <input class="form-control" type="text" id="DEGREE" name="DEGREE" placeholder="Educational Attainment">
            </div>
            <div class="form-group">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">By signing up, you agree to our <a href="#">terms and conditions</a>.</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>