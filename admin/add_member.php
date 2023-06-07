<?php
require_once('config.php');
$message = "";
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);

  $insert = "INSERT INTO tb_loginadmin (username,	password,	user_type,	phone)  VALUES('$username',	'$password',	'$user_type',	'$phone') ";
  $insert_run = mysqli_query($conn, $insert);
  if($insert_run){
    $message = "Insert data is successfully";
  }else{
    $message = "Insert data is not successfully";
  }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../admin/css/styleadmin.css">

  <title>Page add member</title>
</head>

<body style="background: #AFE9D7;">
  <div class="container-add-member">
    <div class="col-lg-12">
      <p><?php
        if(isset($message)){
          echo $message;
        }
      ?></p>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row formtype">
          <div class="col-md-6">
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" type="text" value="" name="username">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Password</label>
              <input type="Password" class="form-control" id="" name="password">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>User Type</label>
              <select class="form-control" name="user_type">
                <option hidden>Select...</option>
                <option value="1">Admin</option>
                <option value="0">Staff</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
          <!-- <div class="col-md-6">
                  <div class="form-group">
                    <label>File Upload</label>
                    <div class="custom-file mb-3">
                      <input type="file" class="custom-file-input" id="customFile" name="filename">
                      <label class="custom-file-label" for="customFile" name="img">Choose file</label>
                    </div>
                  </div>
                </div> -->

          <div class="col-md-6">
            <button type="submit" class=" buttonedit " name="submit">Add</button>
            <button type="reset" class=" buttoneditc ml-4">Cancel</button>
          </div>
        </div>
      </form>
    </div>


  </div>
  <script>
    $('.btn-primary').click(function () {
      $('.btn-primary').toggleClass(":active");

    });
  </script>
</body>

</html>