<?php 
include("database.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$course = $_POST['course'];
$date = $_POST['date'];

$update = sprintf("UPDATE `data` SET `name`='$name',`email`='$email',`contact`='$contact',`course`='$course',`date`='$date' WHERE `id`='$id'");

$result = $connect->query($update);

if ($result) { 
   return header('location:/report.php');
    echo 'data is updated!!';
}else{
    echo 'error'. $connect->error;
    die();
}
?>