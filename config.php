<?php 

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "userregistration_db";

//creating connection 

$conn = mysqli_connect($hostName,$userName,$password,$databaseName)
 or die("failed to connect to database");

?>
