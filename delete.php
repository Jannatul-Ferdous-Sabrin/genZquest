 <?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

   
    $delete_query = "DELETE FROM registration WHERE id = '$user_id'";
    $result = mysqli_query($conn, $delete_query);

    if ($result) {
        header("Location: adminhome.php"); 
    } else {
        echo "Error deleting user account: " . mysqli_error($conn);
    }
}
?> 

