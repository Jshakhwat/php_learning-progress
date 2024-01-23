<?php
include 'connection.php';
$id = $_POST['user_id'];
// echo $id;
$user_name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if($_SERVER["REQUEST_METHOD"] === "POST"){
$sql =  "UPDATE form SET user_name = '$user_name', email = '$email', pass = '$password' WHERE id = '$id' ";
        if ($conn-> query($sql)){
            header ('Location: http://localhost/php/crud_operation/display.php');
        }
}

?>
