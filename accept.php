<?php
    include('newuser.php');
$user = new User();
session_start(); 

$conn = $user->connect();

//$query = "select * from `volunteeringrequest` where `ID` = '".$_GET["ID"]."'";
$query = "select * from `volunteeringrequest`";

    $sql = $user->add_volunteer($query);
    $sql2 = $user->delete_volunteer($query);


    if($sql){
        echo "<script> alert('Request accepted');</script>";
    }else{
                echo "<script> alert('error');</script>";
    }
    
?>
<br/><br/>
