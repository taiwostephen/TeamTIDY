<?php

include 'dbconfig.php';

$username = $_POST['username'];
$password = $_POST['password'];




//$hashed_pass = password_hash($password,PASSWORD_DEFAULT);

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        
    header("location: welcome.php");
    }
}else{
     header("location: welcome.php");
}
?>