<?php 
$server="localhost";
$user = "root";
$pass = "";
$databse = "info_one";

$connect = new mysqli($server, $user, $pass, $databse);

if($connect->connect_error){
    die("error" . $connect->connect_error);
}
?>