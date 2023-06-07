<?php
include("config.php");
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete ="DELETE FROM tb_loginadmin WHERE id ='".$id."'";
    $query_run = mysqli_query($conn,$delete);
    if($query_run){
        header("location:adminview_member.php");
        exit();
    }else{
        header("location:adminview_member.php");
        exit();
    }
 }


?>