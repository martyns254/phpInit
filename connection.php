<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "farmica";

$db = new mysqli($servername, $username, $password, $db_name);
if(!$db){
    die("Connection to DB failed". mysqli_error($db));
}else {
    echo "it works";
} 