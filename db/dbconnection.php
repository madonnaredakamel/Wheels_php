<?php 

session_start();

$server = "localhost";
$dbName = "Wheels";
$dbUser = "root";
$dbPassword = "";


    $con =  mysqli_connect($server,$dbUser,$dbPassword,$dbName);

    if(!$con){

        die('Error:'.mysqli_connect_error());

    }

?>