<?php
    require_once('config.php');
    $message = "";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5( $_POST['password']);
        $login = "SELECT * FROM tb_loginadmin WHERE username ='". $username ."' AND password ='". $password ."' LIMIT 1";
        $login_run = mysqli_query($conn, $login);
        if(mysqli_num_rows($login_run) > 0){
            $data_login = mysqli_fetch_assoc($login_run);
            $_SESSION['login_username'] = $data_login['username'];
            $_SESSION['login_password'] = $data_login['password'];
            $_SESSION['login_user_type'] = $data_login['user_type'];
            
            if($_SESSION['login_user_type'] == '1'){
                header("location: ../admin/admin_dashboard.php");
                exit();
            }else{
                header("location: ../Student/index.php");
                exit();
            }
        }else{
            $message = "login is not successfully";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link rel="stylesheet" href="../admin/css/styleadmin.css">
</head>
<body>
    <div class="container-admin">
    <form action="" method="post">
    <section>
        <div class="logo">
            <div class="logo-school">
                <img src="../admin/imges/logoschool.png" alt="">
            </div>
            <div class="wright-admin">
                <h4 class="Kh">អ្នកគ្រប់គ្រង</h4>
            </div>
        </div>
        <label for="">
                    <?php
                        if(isset($message)){
                            echo $message;
                        }
                    ?>
        <div class="form-admin">
            <label for="id2" class="control-label1">ឈ្មោះ</label>
            <input type="text" name="username" id="id2" class="from-control1">
        </div>
        <div class="form-admin">
            <label for="id2" class="control-label">លេខសម្ងាត់</label>
            <input type="password" name="password" id="id2" class="from-control">
        </div>
        <div class="clearfix">
            <button type="submit" class="signupbtn" name="login">ចូល</button>
        </div>       
    </form>
    </div>
</body>
</html>