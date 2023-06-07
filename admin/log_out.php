<?php 
        session_start();
        unset($_SESSION['login_username']);
        unset($_SESSION['login_password']);
        unset($_SESSION['login_user_type']);
        header("location:login_admin.php");
        exit();
?>
