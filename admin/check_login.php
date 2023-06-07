<?php
      // check login 
      if(!isset($_SESSION['login_username']) && !isset($_SESSION['login_password']) && !isset($_SESSION['login_user_type'])){
        header("location:../admin/index.php");
        exit();
    }
?>