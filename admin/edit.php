<?php
include("config.php");

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $user_type = $_POST['user_type'];
    $phone = $_POST['phone'];

    $edit ="UPDATE tb_loginadmin SET 
    username = '$username', 
    user_type = '$user_type' , 
    phone = '$phone' 
    WHERE id = '".$id."' ";
    $query_run = mysqli_query($conn, $edit);
    if($query_run == true){
        header("location:adminview_member.php");
        exit();
    }else{
        header("location:adminview_member.php");
        exit();
    }
    
     
}



?>