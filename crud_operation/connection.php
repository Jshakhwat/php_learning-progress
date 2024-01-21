<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "crud_operation";

$conn = new mysqli($host_name,$user_name,$password,$db_name);

if ($conn-> connect_error){
    die("connection failed");
}

