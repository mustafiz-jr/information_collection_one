<?php
include("database.php");

$insertData = sprintf("INSERT INTO `data` (`name`,`email`,`contact`,`course`,`date`) VALUES ('%s','%s','%s','%s','%s')",
$_POST['name'],
$_POST['email'],
$_POST['contact'],
$_POST['course'],
$_POST['date']
);

$result = $connect->query($insertData);

if ($result) {
    echo("data is inserted!");
    return header("location: /report.php");
}else{
    echo('something is wrong!'. $connect->errno);
  die();
}

?>