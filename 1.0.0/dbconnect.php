<?php

$servername = "localhost";
$username = "theuser";
$password = "Nfz4Qk4GiAGmQkv";
$database = "databasetwn";

//Create Connection
$conn = new mysqli($servername, $username, $password, $database);

//Check Connection

if ($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
} else {
    // echo "Connected Successfully";
}
?>