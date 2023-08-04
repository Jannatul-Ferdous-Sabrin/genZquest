<?php
if (isset($_POST['login'])) {
    include 'config.php';
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn, "SELECT * FROM `registration` WHERE username='$l_username' AND `password`='$l_pass'");

    if (!$result) {
        echo "Query execution failed: " . mysqli_error($conn);
    } else {
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['username'] = $l_username;
            echo "<script>location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Invalid username and password!')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    }
}
?>
