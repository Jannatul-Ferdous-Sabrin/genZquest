<?php

session_start();
session_unset();
session_destroy();

echo "<script>alert('Successfully Logged Out')</script>";
echo "<script>location.href='login.php'</script>";

?>