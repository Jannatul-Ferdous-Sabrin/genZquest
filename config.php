<?php
$serverName = "localhost";                     
$userName = "root";
$password = "";
$dbName = "genzq";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn){
    die("connection failed!!". mysqli_connect_error());
}

$sql = "SELECT * FROM `company` c, `job` j WHERE c.`COMPANYID` = j.`COMPANYID` ORDER BY DATEPOSTED DESC";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch and display job listings
    while ($row = $result->fetch_assoc()) {
    }

    // Free the result set
    $result->free_result();
} else {
    // Handle query error
    echo "Error: " . $conn->error;
}


?>
   
























  