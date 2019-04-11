<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="jobseeker";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

if ($conn->connect_error) {
    die("Connection failed: ");
    
} 
?>