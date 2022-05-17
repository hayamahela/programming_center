<?php
    include('newuser.php');
$user = new User();
session_start(); 

$conn = $user->connect();

//$query = "select * from `volunteeringrequest` where `ID` = '".$_GET["ID"]."'";
$query = "select * from `workshoprequest`";

    $sql = $user->add_workshop($query);
    $sql2 = $user->delete_workshop_req($query);


    if($sql){
        echo "<script> alert('Request accepted');</script>";

    }else{
                echo "<script> alert('error');</script>";
    }
    
?>