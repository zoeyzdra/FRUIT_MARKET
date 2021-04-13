<?php
$servername = "localhost:3306";
$username = "cchs_zzdravkov";
$password = "eagles";
$dbname = "cchs_zzdravkov";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection Failed!". $conn->connect_error);
}
?>

