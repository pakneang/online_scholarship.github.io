
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..\admin\css\styleadmin.css">
</head>

<body>
    <div class="container-mkr">
        <div class="width">
            <div class="left">
                    <div class="logo-login">
                        <img src="imges/logoschool.png" alt="">
                        <p>វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</p>
                    </div>
            </div>
            <div class="right">
                <h1>Login</h1>
                <form action="" method="post">
                <label for="">
                    <?php
                        if(isset($message)){
                            echo $message;
                        }
                    ?>
                </label>
                    <label for="">Username</label>
                    <input type="text" name="username" id="" placeholder="">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="">
                    <!-- <label for="">User type</label>
                    <select name="" id="">
                        <option value="" hidden></option>
                        <option value="1">Admin</option>
                        <option value="0">Staff</option>
                    </select> -->
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>