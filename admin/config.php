<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "register";
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
  die("Can't Connect to db");
}
?>