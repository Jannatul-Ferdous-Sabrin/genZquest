<?php
include '../config.php';

if(isset($_POST['row'])) {
    $Id = $_POST['row'];

    $Data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registration WHERE id = '$Id'"));
    
    header('Content-Type: application/json');
    echo json_encode($Data);
    
}
?>