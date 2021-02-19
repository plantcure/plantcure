<?php

$server_name="localhost";
$user_name="root";
$pass=""; 
$db="plant_cure";
 
$conn=mysqli_connect($server_name,$user_name,$pass,$db);
if(!$conn){
    die('unable to connect');

}



?>