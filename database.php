<?php
$servername = "localhost";
$username =  "root";
$password = "";
$database = "caballero756";

$conn = new mysqli($servername, $username, $password, $database);

if($conn -> connect_error){
    die("Connection Field: " . $conn -> connect_error);
}





?>