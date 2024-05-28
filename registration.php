<?php
session_start();
if (isset($_POST['submitForm'])) {
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "farmica";

$db = new mysqli($servername, $username, $password, $db_name);
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $sql = "INSERT INTO tbl_user(name, message, email) VALUES ('$name', '$message','$email')";

    $result = mysqli_query($db, $sql);
    if($result = TRUE) {
        echo "Registration successful";
    }else {
        echo "Error: ". $sql . mysqli_error($db);
    }

}

