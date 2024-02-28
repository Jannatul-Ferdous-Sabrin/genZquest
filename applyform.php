<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Form</title>

    <style>
        body {
            background: linear-gradient(90deg, wheat, #8282e7);
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

        form {
            width: 100%;
        }

        label {
            font-size: 15px;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            width: 100%;
        }

        input:focus {
            outline-color: royalblue;
        }

        .button-container {
            display: flex;
            margin-top: 10px;
        }

        .button {
            background: #8282e7;
            color: white;
            border-color: #8282e7;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 0;
            display: inline-block;
            text-align: center;
        }

        .textarea-control {
            grid-column: 1 / span 2;
        }

        @media (max-width: 460px) {
            .textarea-control {
                grid-column: 1 / span 1;
            }
        }
    </style>

    <script>
        function validateContactNumber() {
            var contactNumber = document.getElementById('contact').value;
            console.log('Entered Contact Number:', contactNumber); // Log the entered phone number

            // Regular expression to match Bangladesh phone number format
            var bdPhoneNumberRegex = /^(\+88)?01[3-9]\d{8}$/;

            if (!bdPhoneNumberRegex.test(contactNumber)) {
                alert('Invalid Bangladesh phone number: ' + contactNumber);
                return false;
            }

            return true;
        }
    </script>

</head>

<body>
    <div class="container mt-4">
        <h2>Applicant Form</h2>
        <form action="applyformAction.php" method="post" enctype="multipart/form-data" onsubmit="return validateContactNumber();">
            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="applicants">Firstname</label>
                    <input class="form-control" type="text" id="applicants" name="applicants" placeholder="First" required>
                </div>

                <div class="">
                    <label for="lname">Lastname</label>
                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Lastname" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="contact">Contact No :</label>
                    <input class="form-control" type="tel" id="contact" name="contact" placeholder="Contact No." required>
                </div>

                <div class="">
                    <label for="email">Email Address:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email Address">
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="street">City</label>
                    <input class="form-control" type="text" placeholder="Enter Your city" id="street" name="street" required>
                </div>

                <div class="">
                    <label for="country">Country</label>
                    <input class="form-control" type="text" placeholder="Enter Your country" id="country" name="country" required>
                </div>
            </div>

            <div class="textarea-control gap-5 mt-4">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="45" rows="3" placeholder="Enter Address"></textarea>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="DOB">Date of Birth:</label>
                    <input class="form-control" type="date" id="DOB" name="DOB" placeholder="Date of Birth" required>
                </div>

                <div class="">
                    <label for="degree">Educational Attainment:</label>
                    <input class="form-control" type="file" id="degree" name="degree" accept=".pdf, .doc, .docx" />
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">By signing up, you agree to our <a href="#">terms and conditions</a>.</label>
            </div>

            <div class="button-container ">
                <button type="submit" class="btn btn-main btn-next-tab button">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>