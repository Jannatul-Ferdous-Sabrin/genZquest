<?php
$serverName = "localhost";                     
$userName = "root";
$password = "";
$dbName = "genzq";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn){
    die("connection failed!!". mysqli_connect_error());
}
// else{
//     echo "Connection was successful";  
// }
?>
   