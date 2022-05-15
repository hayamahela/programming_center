<?php
include 'user.php';
$user = new User();
session_start();


$conn = $user->connect();

$sql = "DELETE FROM volunteeringrequest WHERE ID =  '" . $_GET["ID"] . "'";

        if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Request has been rejected.');";
    echo "location='request.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr! Request not rejected');";
    echo "location='request.php';</script>";
}    


?>
