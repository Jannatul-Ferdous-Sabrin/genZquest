<?php
if (isset($_POST['login'])) {
    include 'config.php';
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    if ($l_username === 'admin' && $l_pass == 'admin') {
        session_start();
        $_SESSION['username'] = $l_username;
        echo "<script>location.href='AdminPanel/adminhome.php'</script>";
    } else {
        $stmt = $conn->prepare("SELECT * FROM `registration` WHERE username=? AND BINARY `password`=? AND verify_status = '1'");
        $stmt->bind_param("ss", $l_username, $l_pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            session_start();
            $_SESSION['username'] = $l_username;

            // Check if the user is an employer
            if ($row['preference'] === 'employer') {
                echo "<script>location.href='EmployerPanel/employerhome.php'</script>";
            } else {
                echo "<script>location.href='index.php'</script>";
            }
        } else {
            $stmt = $conn->prepare("SELECT * FROM `registration` WHERE username=? AND BINARY password=? AND verify_status = '0'");
            $stmt->bind_param("ss", $l_username, $l_pass);
            $stmt->execute();
            $result1 = $stmt->get_result();

            if ($result1->num_rows > 0) {
                echo "<script>alert('Email not verified!')</script>";
                echo "<script>location.href='login.php'</script>";
            } else {
                echo "<script>alert('Invalid Username & Password!')</script>";
                echo "<script>location.href='login.php'</script>";
            }
        }
    }
} else {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>
