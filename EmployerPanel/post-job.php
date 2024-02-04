<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

<?php require('header.php'); ?>



         <div class="col-lg-9">
                <div class="container d-flex justify-content-center mt-5">
                 
                    <form id="postJobAction.php" METHOD="POST">
            <div>
                <h2 class="mb-4">Post a Job</h2>
            </div>
            <div class="col-12 form-group">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" required>
                </div>

                <div class="">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="" style="width: 14rem;">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" name="city" required="">
                        <option value="">Choose...</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chottogram">Chottogram</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Barishal">Barishal</option>
                    </select>
                </div>

                <div class="">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="workExperience">Work Experience</label>
                    <input type="text" class="form-control" id="workExperience" name="workExperience" required>
                </div>

                <div class="">
                    <label for="employmentDuration">Duration of Employment</label>
                    <input type="text" class="form-control" id="employmentDuration" name="employmentDuration" required>
                </div>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Job Description" id="jobDescription" style="height: 100px"></textarea>
                <label for="jobDescription">Job Description</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Qualifications" id="qualifications" style="height: 100px"></textarea>
                <label for="qualifications">Qualifications</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Additional Information" id="additionalInformation" style="height: 100px"></textarea>
                <label for="additionalInformation">Additional Information</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Post Job</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>