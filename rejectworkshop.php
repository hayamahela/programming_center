<?php
include('newuser.php');
$user = new User();
session_start();

$conn = $user->connect();

//$sql = "DELETE FROM workshoprequest WHERE ID =  '" . $_GET["ID"] . "'";
$query = "select * from `workshoprequest`";

    $sql2 = $user->delete_workshop_req($query);


        if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Request has been rejected.');";
    echo "location='newworkshop.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr! Request not rejected');";
    echo "location='newworkshop.php';</script>";
}    


?>