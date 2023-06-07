<?php
    session_start();
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "db_system";

    $conn = mysqli_connect($server_name, $username, $password, $database);
    if(!$conn){
        die("Connection erorr.).mysqli_error()");
    }else{
    echo "connection is successfully";
    }
?>