<?php
if (isset($_POST['login'])) {
    include 'config.php';
    $l_username = $_POST['l_username'];                      //recover username,pass values from submitted form
    $l_pass = $_POST['l_pass'];                        

    if ($l_username === 'admin' && $l_pass == 'admin') {                  //hardcoded
        session_start();
        $_SESSION['username'] = $l_username;
        echo "<script>location.href='adminhome.php'</script>";
    } else {
        $result = mysqli_query($conn, "SELECT * FROM `registration` WHERE username='$l_username' AND BINARY `password`='$l_pass' AND verify_status = '1'");
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['username'] = $l_username;
            echo "<script>location.href='index.php'</script>";
        } else {
            $result1 = mysqli_query($conn, "SELECT * FROM `registration` 
                WHERE username = '$l_username' AND BINARY password = '$l_pass' AND verify_status = '0'");
            if (mysqli_num_rows($result1) > 0) {
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