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
    background: linear-gradient(90deg, wheat,#8282e7);
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 40px;
}
.post-job-heading {
    color: #6b0c6b; 
}

    </style>
</head>

<body>

    <?php require('header.php'); ?>

    <div class="container d-flex justify-content-center mt-5">
        <form action="postJobAction.php" method="POST">
            <div>
                <h2 class="mb-4 text-center  post-job-heading">Post a Job</h2>
            </div>
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="jobTitle" placeholder="Job Title" required>
            </div>


            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="JOBID">Job Id</label>
                    <input type="number" class="form-control" id="JOBID" name="JOBID" placeholder="Job Id" required>
                </div>

                <div class="">
                    <label for="JOBSTATUS">Job Status</label>
                    <input type="text" class="form-control" id="JOBSTATUS" name="JOBSTATUS" placeholder="Job Status" required>
                </div>
            </div>



            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name" required>
                </div>

                <div class="">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
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
                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="workExperience">Work Experience</label>
                    <input type="text" class="form-control" id="workExperience" name="workExperience" placeholder="work Experience"required>
                </div>

                <div class="">
                    <label for="employmentDuration">Duration of Employment</label>
                    <input type="text" class="form-control" id="employmentDuration" name="employmentDuration"placeholder="Category" required>
                </div>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Job Description" id="jobDescription" style="height: 100px"
                    name="jobDescription"></textarea>
                <label for="jobDescription">Job Description</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Qualifications" id="qualifications" style="height: 100px"
                    name="qualifications"></textarea>
                <label for="qualifications">Qualifications</label>
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