<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programming_center";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

?>