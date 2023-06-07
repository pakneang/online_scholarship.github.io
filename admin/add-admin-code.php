<?php
require_once('config.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $user_type = $_POST['user_type'];
  $phone = $_POST['phone'];
  $insert = "INSERT INTO tb_loginadmin (username,	password,	user_type,	phone)  VALUES('$username',	'$password',	'$user_type',	'$phone') ";
  $insert_run = mysqli_query($conn, $insert);
  if ($insert_run) {
    $_SESSION['add-success'] = "Insert data is successfully";
    header("location: admin_dashboard.php");
    exit();
  } else {
    $_SESSION['add-not-success'] = "Insert data is not successfully";
    header("location: admin_dashboard.php");
    exit();
  }
}

?>