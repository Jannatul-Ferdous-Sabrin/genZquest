<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpanel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .sidebar span {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-row flex-wrap">
        <?php include 'sidebar.php' ?>

        <div style="flex: 1;">

            <h2 class="text-center text-info mb-2">
                <?php echo $_SESSION['username']; ?>
            </h2>
            <div class="d-flex row justify-content-center container-fluid">
                <div class="border border-secondary col-lg-5 col-md-12 col-sm-12 rounded m-4">
                    <h4>Admin Dashboard</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">ID</th>
                                <th scope="col" style="width: 20%;">Username</th>
                                <th scope="col" style="width: 20%;">Status</th>
                                <th scope="col" style="width: 20%;">Approved Time</th>
                                <th scope="col" style="width: 15%;">Reject Column</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../config.php';

                            $unregistered = mysqli_query($conn, "SELECT * FROM `registration`");
                            while ($row = mysqli_fetch_array($unregistered)) {
                                echo
                                    "<tr>
                            <th scope='row'>" . $row['id'] . "</th>
                            <td>" . $row['username'] . "</td>
                            <td>" . $row['verify_status'] . "</td>
                            <td>" . ($row['approvedTime'] ? date('Y-m-d H:i:s', strtotime($row['approvedTime'])) : 'Not Approved') . "</td>
                            <td>
                                <form method='POST' action='delete.php' onsubmit='return confirm(\"Are you sure you want to delete this account?\");'>
                                    <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                                    <button type='submit' class='btn btn-outline-warning' name='delete'>Delete</button>
                                </form>
                            </td>
                        </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> 