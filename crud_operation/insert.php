<?php
include "connection.php";
$user_name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] === "POST"){
$sql = "INSERT INTO form (user_name,email,pass) VALUES('$user_name','$email','$password')";

        if ($conn->query($sql)){
        echo "insert successful";
}
}




?>