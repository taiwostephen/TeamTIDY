<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'team_tidy';


$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>






