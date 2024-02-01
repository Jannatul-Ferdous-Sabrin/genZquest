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
    <div class="container d-flex justify-content-center mt-5">
        <form id="jobForm">
            <div>
                <h2 class="mb-4">Post a Job</h2>
            </div>
            <div class="col-12 form-group">
                <label for="title">Job Id</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>

                <div class="">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="" style="width: 14rem;">
                    <label for="country" class="form-label">City</label>
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
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>

                <div class="">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="" id=""
                    style="height: 100px"></textarea>
                <label for="Job Description">sabb</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="" id=""
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">sabb</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="" id=""
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">sabb</label>
            </div>

            <button type="button" class="btn btn-primary mt-4" onclick="postJob()">Post Job</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function postJob() {
            var formData = new FormData(document.getElementById('jobForm'));


            fetch('post-job-process.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Job posted successfully!');

                    } else {
                        alert('Error posting job. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>