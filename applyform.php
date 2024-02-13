
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


        /* Improved styling for sex option */
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
                <div class="sex-group">
                    <span class="sex-label">Sex:</span>
                    <div class="sex-radio">
                        <label>
                            <input id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female
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
                <label for="TELNO">Contact No.:</label>
                <input class="form-control" type="text" id="TELNO" name="TELNO" placeholder="Contact No." required>
            </div>
            <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input type="text" placeholder="Enter Your Street" class="form-control" id="street" name="street"
                        required>
                </div>

                <div class="form-group">
                    <label for="zip" class="form-label">Zip Code</label>
                    <input type="text" placeholder="Enter Your Zip Code" class="form-control" id="zip" name="zip"
                        required>
                </div>
            
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" placeholder="Country" class="form-control" id="country" name="country"
                        required>
                </div>


           
            <div class="form-group">
                <label for="EMAILADDRESS">Email Address:</label>
                <input class="form-control" type="email" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address">
            </div>
            
            <div class="form-group">
                <label for="DEGREE">Educational Attainment:</label>
                 <input class="form-control" type="file" id="DEGREE" name="DEGREE" accept=".pdf, .doc, .docx" />
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