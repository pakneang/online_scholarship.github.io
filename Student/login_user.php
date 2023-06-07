<?php
include("config.php");
if (isset($_POST['submit'])) {
  $Student_Name = $_POST['Student_Name'];
  $Student_English = $_POST['Student_English'];
  $Nationality = $_POST['Nationality'];
  $Gender = $_POST['Gender'];
  $Date_birth = $_POST['Date_birth'];
  $Village = $_POST['Village'];
  $Commune = $_POST['Commune'];
  $Distick = $_POST['Distick'];
  $Province = $_POST['Province'];
  $Education_lavel = $_POST['Education_lavel'];
  $Schools = $_POST['Schools'];
  $Date_exam = $_POST['Date_exam'];
  $Table_number = $_POST['Table_number'];
  $Room_number = $_POST['Room_number'];
  $Grade_exam = $_POST['Grade_exam'];
  $Identity_number = $_POST['Identity_number'];
  $Skills = $_POST['Skills'];
  $Phone_number = $_POST['Phone_number'];
  $Password = $_POST['Password'];

  $Profile = $_FILES['Profile']['name'];
  $dir = "imges/";
  $tmp_file = $_FILES['Profile']['tmp_name'];

  if(! empty($Student_Name) && ! empty($Student_English) && ! empty($Nationality) && ! empty($Gender) 
  && ! empty($Date_birth) && ! empty($Village) && ! empty($Commune) && ! empty($Distick) && ! empty($Province)  && ! empty($Education_lavel) 
  && ! empty($Schools)  && ! empty($Date_exam)  && ! empty($Table_number)  && ! empty($Room_number)  && ! empty($Grade_exam) 
  && ! empty($Identity_number)  && ! empty($Skills) && ! empty($Phone_number)  && ! empty($Password) && ! empty($Profile)){
      move_uploaded_file($tmp_file, $dir."/".$Profile);
      $sql = "INSERT INTO  student_register(Student_Name,Student_English,Nationality,Gender,Date_birth,Village,Commune,Distick,Province,
      Education_lavel,Schools,Date_exam,Table_number,Room_number,Grade_exam,Identity_number,Skills,Phone_number,Password,Profile) 
              VALUES('$Student_Name','$Student_English','$Nationality','$Gender','$Date_birth','$Village','$Commune','$Distick','$Province',
      '$Education_lavel','$Schools','$Date_exam','$Table_number','$Room_number','$Grade_exam','$Identity_number','$Skills','$Phone_number','$Password','$Profile')";
      $sql_work = mysqli_query($conn, $sql);
      if($sql_work == TRUE){
        $_SESSION['success_register'] = "Register has succesfully.";
        header("location: page1_st.php");
        exit();
      }else{
        $_SESSION['not_success_register'] = "Register has not succesfully.";
        header("location: page1_st.php");
        exit();
      }
  }else{
    $_SESSION['no_item_field'] = "* Plase complete all fields.";
  }

  // $images = $_FILES['Profile']['name'];
  // $tmp_dir = $_FILES['Profile']['tmp_name'];
  // $imageSize = $_FILES['Profile']['size'];
  // $upload_dir = 'uploads/';
  // $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
  // $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
  // $picProfile = rand(1000, 100000000) . "." . $imgExt;
  // move_uploaded_file($tmp_dir, $upload_dir . $picProfile);

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../Student/css/stylestudent.css">
  <title>Sign Up</title>
</head>

<body>
  <div class="container-loginuser">
    <form action="" method="post" enctype="multipart/form-data">
      <?php
      include("section-top.php");
      ?>
      <section>

        <div class="container-text">
          <div>
            <h3>ចុះឈ្មោះសុំប្រឡងយកអាហារូបករណ៍១០០% នៃវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h3>

          </div>
          <div class="file-connect">
            <h4>បញ្ជាក់: សូមនាំយកឯកសារថតចម្លងដូចខាងក្រោម៖</h4>
            <ol>
              <li>វិញ្ញាបនបត្របណ្ដោះអាសន្នមធ្យមសិក្សាទុតិយភូមិ ឬវិញ្ញាបនសញ្ញាបត្របច្ចេកទេស និងវិជ្ជាជីវៈកម្រិត៣
                ឬសមមូល(បញ្ជាក់បានថតចម្លងត្រឺមត្រូវ ១ច្បាប់)</li>
              <li>សំបុត្របញ្ជាក់កំណើត (សេចក្ដីចម្លងសំបុត្របញ្ជាក់កំណើត ១ច្បាប់)</li>
              <li>រូបថត ថតថ្មី ថតចំពីមុខ ផ្ទៃពណ៌ស ៤x៦ (៤សន្លឹក) </li>
            </ol>
          </div>
        </div>
        <div class="panel-signin">
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">ឈ្មោះសិស្ស ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Student_Name">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">អក្សរឡាតាំង ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Student_English">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">សញ្ជាតិ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Nationality">
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">ភេទ ៖ </label>
            <div class="col-sm-3">
              <select id="" class="form-control" name="Gender">
                <option value="">ជ្រើសរើស</option>
                <option value="ប្រុស">ប្រុស</option>
                <option value="ស្រី">ស្រី</option>
              </select>
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">ថ្ងៃខែឆ្នាំកំ. ៖</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" id="colFormLabel" placeholder="" name="Date_birth">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">ភូមិ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Village">
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="defualt" class="col-sm-1 col-form-label">ឃុំ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Commune">
            </div>
            <label for="defualt" class="col-sm-1 col-form-label">ស្រុក ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Distick">
            </div>
            <label for="defualt" class="col-sm-1 col-form-label">ខេត្ដ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Province">
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">កម្រិតសិក្សា ៖</label>
            <div class="col-sm-3">
              <select name="Education_lavel" id="" class="form-control">
                <option value="">ជ្រើសរើស</option>
                <option value="ទុតិយភូមិ">ទុតិយភូមិ</option>
                <option value="បឋមភូមិ">បឋមភូមិ</option>
              </select>
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">មកពីសាលា ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Schools">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">សម័យប្រឡង ៖</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" id="colFormLabel" placeholder="" name="Date_exam">
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">លេខតុ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Table_number">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">លេខបន្ទប់ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Room_number">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">និទ្ទេស ៖</label>
            <div class="col-sm-3">
              <select id="" class="form-control" name="Grade_exam">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
              </select>
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">លេខអត្ត.ប័ណ្ណ ៖</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="colFormLabel" name="Identity_number">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">ជំនាញ ៖</label>
            <div class="col-sm-3">
              <select name="Skills" id="" class="form-control">
                <option value="">ជ្រើសរើស</option>
                <?php
                  $major_select = "SELECT * FROM tb_major";
                  $major_run = mysqli_query($conn, $major_select);
                  if(mysqli_num_rows($major_run) > 0){
                    while($data = mysqli_fetch_assoc($major_run)){
                  ?>
                      <option value="<?= $data['major_name']; ?>"><?= $data['major_name']; ?></option>
                  <?php
                    }
                  }
                ?>
                <!-- <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                <option value="វិទ្យាសាស្ដ្រដំណាំ">វិទ្យាសាស្ដ្រដំណាំ</option>
                <option value="វិទ្យាសាស្ដ្រសត្វ">វិទ្យាសាស្ដ្រសត្វ</option>
                <option value="ការដំឡើងប្រព័ន្ធអគ្គិសនី">ការដំឡើងប្រព័ន្ធអគ្គិសនី</option>
                <option value="បច្ចេកវិទ្យាមេកានិច">បច្ចេកវិទ្យាមេកានិច</option> -->
              </select>
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">លេខទូរស័ព្ទ ៖</label>
            <div class="col-sm-3">
              <input type="phone" class="form-control" id="colFormLabel" placeholder="" name="Phone_number">
            </div>
          </div>
          <div class="row mx-4 mt-5">
            <label for="colFormLabel" class="col-sm-1 col-form-label">លេខសម្ងាត់ ៖</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" id="colFormLabel" placeholder="" name="Password">
            </div>
            <label for="colFormLabel" class="col-sm-1 col-form-label">រូបថត ៖</label>
            <div class="col-sm-3">
              <input type="file" class="form-control" id="colFormLabel" name="Profile">
            </div>
            
          </div>
          <p class = "mx-5 mt-4 fs-5 text-danger">
            <?php
              if(isset($_SESSION['no_item_field'])){
                echo $_SESSION['no_item_field'];
                unset($_SESSION['no_item_field']);
              }
            ?>

          </p>

          <div class="row mx-6 mt-6">
            <div class="button-register">
              <button type="reset" name="reset" class="btn btn-danger stbutton-reset">Cancel</button>
              <button type="submit" name="submit" class="btn btn-submit btn-success stbutton-submit">Submit</button>
            </div>
          </div>
        </div>
      </section>
    </form>
  </div>
</body>

</html>