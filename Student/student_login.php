<?php
    include("config.php");
    if(isset($_POST['login'])){
       $username = mysqli_real_escape_string($conn, $_POST['username']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

       $login = "SELECT * FROM student_register WHERE Student_English = '". $username ."' AND Password = '". $password ."'";
       $login_run = mysqli_query($conn, $login);

       if(mysqli_num_rows($login_run) > 0){
            $data_login = mysqli_fetch_assoc($login_run);
            $_SESSION['stuName'] = $data_login['Student_English'];
            $_SESSION['stuPassword'] = $data_login['Password'];
            $_SESSION['stuID'] = $data_login['Identity_number'];
            

            // header("location: page1_st.php");
            //     exit();
            if($username == $_SESSION['stuName']  && $password == $_SESSION['stuPassword']){
                header("location: page1_st.php");
                exit();
            }
       }else{
            $_SESSION['login_not_done'] = "ព័ត៌មានរបស់អ្នកមិនត្រឹមត្រូវ";
       }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="stylesheet" href="../Student/css/stylestudent.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="container-login">
        <form action="" method="post">
            <section>
                <div class="part_logo">
                    <div class="logo_school">
                        <img src="imges/logoschool.png" alt="">
                    </div>
                    <div class="wright_school">
                        <h4 class="Kh">វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h4>
                        <p class="En">Kampong Speu Institute of Technology</p>
                        <div class="line">

                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    <p class = "ml-3">
                        <?php
                            if(isset($_SESSION['login_not_done'])){
                                echo $_SESSION['login_not_done'];
                                unset($_SESSION['login_not_done']);
                            }
                        ?>

                    </p>
                    <div class="form-group">
                        <label for="id2" class="control-label">ឈ្មោះសិស្ស</label>
                        <input type="text" name="username" id="id2" class="from-control">
                    </div>
                    <div class="form-group">
                        <label for="id2" class="control-label">លេខសម្ងាត់</label>
                        <input type="password" name="password" id="id2" class="from-control1">
                    </div>
                    <div class="form-group">
                        <div class="button-signup-userlo">
                            <div class="button-sign">
                                <button type="submit" name="login" class="from-control-submit"><i
                                            class="fa-solid fa-right-to-bracket"></i>ចូលគណនី</button>
                            </div>
                            
                        </div>
                       
                    </div>

                    <div class="form-group">
                        
                        <a class="forgot-password register" href="copy_form2.php">ចុះឈ្មោះ</a>
                    </div>
                </form>

            </section>
        </form>
    </div>
</body>

</html>
<?php
   
?>