<?php
require_once('config.php');
include("check_login.php");
if (isset($_POST['submit'])) {
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
      <div class="ro_st">
        
        <button class="bt-ro"><a href="../admin/admin_dashboard.php"> <i class="fas fa-house fa-btnr"></i>ទំព័រដើម</a></button>
        
      </div>
      <div class="st_text">
        <h4>ប្រវត្តិរូបសិស្សចុះឈ្មោះសុំអាហារូបករណ៍</h4>
      </div>
      <div class="departer-button">
        <div class="view_table">
          <div class="table-responsive-sm">
            <table class="view_tr">
              <tr>
                <th>ល.រ</th>
                <th>ឈ្មោះភាសាខ្មែរ</th>
                <th>ឈ្មោះភាសាអង់គ្លេស</th>
                <th>ភេទ</th>
                <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                <th>ភូមិ</th>
                <th>ឃុំ</th>
                <th>ស្រុក</th>
                <th>មកពីខេត្ត</th>
                <th>មកពីសាលា</th>
                <th>កម្រិតសិក្សា</th>
                <th>និទ្ទេស</th>
                <th>លេខទូរស័ព្ទ</th>
              </tr>
              <?php
              $i = 1;

              // $sql = "SELECT * FROM student_register";
              
              $sql = "SELECT * FROM student_register";
              $result = mysqli_query($conn, $sql);
              ?>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td>
                    <?php echo $i++ ?>
                  </td>
                  <td>
                    <?php echo $row['Student_Name']; ?>
                  </td>
                  <td>
                    <?php echo $row['Student_English']; ?>
                  </td>
                  <td>
                    <?php echo $row['Gender']; ?>
                  </td>
                  <td>
                    <?php echo $row['Date_birth']; ?>
                  </td>
                  <td>
                    <?php echo $row['Village']; ?>
                  </td>
                  <td>
                    <?php echo $row['Commune']; ?>
                  </td>
                  <td>
                    <?php echo $row['Distick']; ?>
                  </td>
                  <td>
                    <?php echo $row['Province']; ?>
                  </td>
                  <td>
                    <?php echo $row['Schools']; ?>
                  </td>
                  <td>
                    <?php echo $row['Education_lavel']; ?>
                  </td>
                  <td>
                    <?php echo $row['Grade_exam']; ?>
                  </td>
                  <td>
                    <?php echo $row['Phone_number']; ?>
                  </td>
                </tr>
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