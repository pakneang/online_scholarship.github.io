<?php
require_once('config.php');
include("check_login.php");
if (isset($_POST['submit1'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $user_type = $_POST['user_type'];
  $phone = $_POST['phone'];
  $insert = "INSERT INTO tb_loginadmin (username,	password,	user_type,	phone)  VALUES('$username',	'$password',	'$user_type',	'$phone') ";
  $insert_run = mysqli_query($conn, $insert);
  if ($insert_run) {
    $message = "Insert data is successfully";
  } else {
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
  <link rel="stylesheet" href="../admin/css/styleadmin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Page admin</title>
</head>

<body style="background: #AFE9D7;">
  <section>
    <?php
    include('link_logotop.php');
    ?>
  </section>
  <div class="admin-page1">
    <div class="dashboard_admin1">
      <nav class="dashboard_admin">
        <?php
        include('link_dashboardadmin.php');
        ?>
      </nav>
    </div>
    <div class="viewst">
      <!-- <div class="ro_st">
        
        <button class="bt-ro"><a href=""> <i class="fas fa-house fa-btnr"></i>ទំព័រដើម</a></button>
        
      </div> -->
      <div class="st_text">
        <h4>ចំនួនអ្នកគ្រប់គ្រង</h4>
        <a class="addmember btn btn-primary btn-primary1" data-bs-toggle="modal" href="#exampleModalToggle"
                  role="button">បន្ថែមសមាជិក</a>
              <!-- Modal Alert -->
              <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-dialog1">
                  <div class="form-alert">
                    <div class="modal-header">
                      <h5
                        style="font-family:khmer os battambang; font-size: 25px; margin-top: 10px; color: #000; font-weight: 600;"
                        class="modal-title" id="exampleModalToggleLabel">
                        បន្ថែមសមាជិក</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div style="font-family:khmer os battambang;" class="modal-body modal-body1">
                      <!-- ដាក់ From បញ្ចូល -->
                      <form action="admin_dashboard.php" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="">
                          </div>
                          <div class="col-md-6">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                          </div>
                          <div class="col-md-6">
                            <label for="" class="form-label">User Type</label>
                            <select id="" class="form-select" name="user_type">
                              <option value="1">Admin</option>
                              <option value="0">Staff</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="">
                          </div>
                        </div>
                    <div class="modal-footer">
                      <button type="submit1" style="font-family: 'Khmer os siemreap'; font-size:18px;" class="btn btn-primary btn-resub" name="submit">រក្សាទុក</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- End  Alert -->
      </div>
      <div class="departer-button">
        <div class="view_table">
          <div class="table-responsive-sm">
            <table class="view_tr">
              <tr>
                <th class="th">ល.រ</th>
                <th class="th">ឈ្មោះ</th>
                <th class="th">User Type</th>
                <th class="th">លេខទូរស័ព្ទ</th>
                <th class="th">កែប្រែ</th>
                <th class="th">លុប</th>
              </tr>
              <?php
              $i = 1;

              // $sql = "SELECT * FROM student_register";
              
              $sql = "SELECT * FROM tb_loginadmin";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td>
                    <?php echo $i++ ?>
                  </td>
                  <td>
                    <?php echo $row['username']; ?>
                  </td>

                  <td>
                    <?php

                    // echo $row['user_type']; 
                    if ($row['user_type'] == '1') {
                      echo 'Admin';
                    } else {
                      echo 'Staff';
                    }


                    ?>
                  </td>
                  <td>
                    <?php echo $row['phone']; ?>
                  </td>
                  <td><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal-2<?= $row['id']; ?>"
                      style="font-family: 'Khmer os siemreap'; font-size:18px;" class="maf"
                      href="edit.php?id=<?= $row['id']; ?>">កែ</a></td>
                  <td><a style="font-family: 'Khmer os siemreap'; font-size:18px;" class="btn btn-danger"
                      data-bs-toggle="modal" data-bs-target="#exampleModal-3<?= $row['id']; ?>" class="maf">លុប</a></td>
                </tr>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-2<?= $row['id']; ?>" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"
                          style="font-family: 'Khmer os battambang'; font-size:25px; font-weight: 600;"
                          id="exampleModalLabel">កែប្រែ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- ដាក់ From បញ្ចូល -->
                        <form action="edit.php" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username" id=""
                                value="<?php echo $row['username']; ?>">
                              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                            </div>

                            <div class="col-md-6">
                              <label for="" class="form-label">User Type</label>
                              <select id="" class="form-select" name="user_type">
                                <option value="" hidden>Select...</option>
                                <option value="1">Admin</option>
                                <option value="0">Staff</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="" class="form-label">Phone Number</label>
                              <input type="text" class="form-control" name="phone" id=""
                                value="<?php echo $row['phone']; ?>">
                            </div>
                          </div>
                      </div>



                      <div class="modal-footer">
                        <button type="button" style="font-family: 'Khmer os siemreap'; font-size:18px;"
                          class="btn btn-secondary" data-bs-dismiss="modal">បោះបង់</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="submit" style="font-family: 'Khmer os siemreap'; font-size:18px;"
                          class="btn btn-primary btn-resub" name="edit">រក្សាទុក</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Edite -->

                <!-- Start Delete -->
                <div class="modal fade" id="exampleModal-3<?= $row['id']; ?>" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                      <div class="modal-body">
                        <h1 style="text-align:center; font-family:khmer os battambang; font-size: 35px; padding:1.5rem;">
                          តើអ្នកពិតជាចង់លុបឬ !
                        </h1>

                      </div>

                      <div class="modal-footer">
                        <button type="button" style="font-family: 'Khmer os siemreap'; font-size:18px;"
                          class="btn btn-secondary" data-bs-dismiss="modal">បោះបង់</button>
                        <?php //echo$row['id']; ?>
                        <a href="delete.php?id=<?= $row['id']; ?> "
                          style="font-family: 'Khmer os siemreap'; font-size:18px;" class="btn btn-danger">លុប</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- End Deleted -->
                <?php
              }

              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    $('.hide').click(function () {
      $('nav .menu-admin').toggleClass("show");
      $('nav .show').toggleClass("rotate");
    });
    $('.info-btn').click(function () {
      $('nav ul .info-show').toggleClass("show2");
      $('nav ul .first').toggleClass("rotate");
    });
    $('.feat-btn').click(function () {
      $('nav ul .feat-show').toggleClass("show");
      $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function () {
      $('nav ul .serv-show').toggleClass("show1");
      $('nav ul .second').toggleClass("rotate");
    });
    $('.add-btn').click(function () {
      $('nav ul .add-show').toggleClass("show3");
      $('nav ul .third').toggleClass("rotate");
    });
  </script>

</body>

</html>