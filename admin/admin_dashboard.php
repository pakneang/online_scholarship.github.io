<?php
// session_start();
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
    exit();
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
    <div class="section-pro">
      <div class="toplogo">

        <a href="#"><button class="toplogo-button"><img src="../admin/imges/toplogo.png" alt=""></button></a>
      </div>
      <div class="profile-add">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary profile-button fa-solid fa-user" data-bs-toggle="modal"
          data-bs-target="#exampleModal">

        </button>
        <!-- Modal -->
        <div class="modal fade modal-fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog2 ">
            <div class="card">
              <div class="card-icon">
                <i class="fa-solid fa-user card-img"></i>
              </div>
              <?php

              if (isset($_SESSION['login_username'])) {

              }
              echo
                "<h1>" . $_SESSION['login_username'] . "</h1>";
              ?>

              <div class="modal-footer">
                <a href="log_out.php" class="admlogout btn btn-danger pe-auto"> ចាកចេញ <i
                    class="fa-solid fa-right-from-bracket icon-logout-admin"></i></a>


              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="admin-page1">
    <div class="dashboard_admin1">
      <nav class="dashboard_admin">
        <div class="text">
          <i class="fa-solid fa-bars hide show"></i>

        </div>
        <ul class="menu-admin">
          <div class="text1">
            <h2 class="title">អ្នកគ្រប់គ្រង</h2>
          </div>
          <li><a href="#" class="feat-btn">បញ្ជីសិស្សចុះឈ្មោះតាមជំនាញ
              <span class="fa-solid fa-angle-right first"> </span>
            </a>
            <ul class="feat-show">
              <?php
              $select = "SELECT * FROM tb_major";
              $select_run = mysqli_query($conn, $select);
              if (mysqli_num_rows($select_run) > 0) {
                while ($major = mysqli_fetch_assoc($select_run)) {
                  ?>
                  <a href="..\admin\adminpageview1.php?major=<?= $major['major_name']; ?>">
                    <button type="text" class="colmenu" id="colFormLabel" placeholder="">
                      <?= $major['major_name']; ?>
                    </button></a>
                  <?php
                }
              }
              ?>
              <!-- <li><a href="">វិទ្យាសាស្ត្រសត្វ</a></li>
              <li><a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a></li>
              <li><a href="">បច្ចេកវិទ្យាអាហារ</a></li>
              <li><a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a></li>
              <li><a href="">បច្ចេកវិទ្យាមេកានិក</a></li> -->
              <li><a href="../admin\all-students.php">សិស្សចុះឈ្មោះសរុប</a></li>
            </ul>
          </li>
          <li><a href="..\admin\adminpageinfo.php" class="info-btn">ប្រវត្តិរូបសិស្ស</a>
            <!-- <li><a href="">វិទ្យាសាស្ត្រដំណាំ</a></li>
              <li><a href="">វិទ្យាសាស្ត្រសត្វ</a></li>
              <li><a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a></li>
              <li><a href="">បច្ចេកវិទ្យាអាហារ</a></li>
              <li><a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a></li>
              <li><a href="">បច្ចេកវិទ្យាមេកានិក</a></li> 
            </ul>-->
          </li>
          <li><a href="#" class="serv-btn">សេចក្ដីជូនដំណឹង
              <span class="fa-solid fa-angle-right second"></span>
            </a>
            <ul class="serv-show">
              <li><a href="">អំពីការប្រឡង</a></li>
              <li><a href="">អំពីលទ្ធផលការប្រឡង</a></li>
            </ul>
          </li>
          <li><a href="adminview_member.php" class="add-btn">ចំនួនអ្នកគ្រប់គ្រង
              <span class="fa-solid fa-angle-right third"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="viewst">
      <!-- <div class="ro_st">
        
        <button class="bt-ro"><a href=""> <i class="fas fa-house fa-btnr"></i>ទំព័រដើម</a></button>
        
      </div> -->
      <div class="st_text">
        <h4 class="text_st">បញ្ជីសិស្សចុះឈ្មោះសុំអាហារូបករណ៍តាមជំនាញនីមួយៗ</h4>

      </div>
      <div class="departer-button">

        <?php
        if (isset($_SESSION['add-success'])) {
          echo '<p class = "p-5">' . $_SESSION['add-success'] . '</p>';
          unset($_SESSION['add-success']);

        } elseif (isset($_SESSION['add-not-success'])) {
          echo '<p class = "p-5">' . $_SESSION['add-not-success'] . '</p>';
          unset($_SESSION['add-not-success']);

        }
        ?>

        <div class="row mx-3 pt-5 de-view">

          <?php
          $select = "SELECT * FROM tb_major";
          $select_run = mysqli_query($conn, $select);
          if (mysqli_num_rows($select_run) > 0) {
            while ($major = mysqli_fetch_assoc($select_run)) {
              ?>
              <div class="col-sm-4">
                <a href="..\admin\adminpageview1.php?major=<?= $major['major_name']; ?>"><button type="text"
                    class="form-control" id="colFormLabel" placeholder="">
                    <?= $major['major_name']; ?>
                    <?php
                    $count = "SELECT * FROM student_register WHERE Skills = '" . $major['major_name'] . "'";
                    $count_run = mysqli_query($conn, $count);
                    $numCounter = mysqli_num_rows($count_run);
                    echo $numCounter;
                    ?>
                  </button></a>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <!-- <div class="col-sm-4">
            <a href="..\admin\adminpageview2.php"><button type="text" class="form-control" id="colFormLabel" placeholder=""> វិទ្យាសាស្ត្រសត្វ
              </button></a>
          </div>
          <div class="col-sm-4">
            <a href="..\admin\adminpageview3.php"><button type="text" class="form-control" id="colFormLabel" placeholder=""> បច្ចេកវិទ្យាកុំព្យូទ័រ
              </button></a>
          </div>
        </div>
        <div class="row mx-3 pt-5 de-view">
          <div class="col-sm-4">
            <a href="..\admin\adminpageview4.php"><button type="text" class="form-control" id="colFormLabel" placeholder=""> បច្ចេកវិទ្យាអាហារ
              </button></a>
          </div>
          <div class="col-sm-4">
            <a href="..\admin\adminpageview5.php"><button type="text" class="form-control" id="colFormLabel" placeholder=""> បច្ចេកវិទ្យាអគ្គិសនី</button></a>
          </div>
          <div class="col-sm-4">
            <a href="..\admin\adminpageview6.php"><button type="text" class="form-control" id="colFormLabel" placeholder=""> បច្ចេកវិទ្យាមេកានិក
              </button></a>
          </div>
        </div> -->
        <div class="row mx-3 pt-5 pb-5 de-view">
          <div class="col-sm-4">
            <a href="all-students.php"><button type="text" class="form-control1" id="colFormLabel" placeholder="">
                សិស្សចុះឈ្មោះសរុប
                <?php
                $count = "SELECT * FROM student_register";
                $count_run = mysqli_query($conn, $count);
                $numCounter = mysqli_num_rows($count_run);
                echo $numCounter;
                ?>
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- <script>
    alert(
        const addmemberAgree = document.querySelector(".addmember");
        const text_st = document.querySelector(".text_st");
        addmemberAgree.addEventListener("click", ()=>{
            text_st.innerText = "បន្ថែមសមាជិក";
        }););
    </script> -->
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
    // $('.add-btn').click(function () {
    //   $('nav ul .add-show').toggleClass("show3");
    //   $('nav ul .third').toggleClass("rotate");
    // });

  </script>

</body>

</html>