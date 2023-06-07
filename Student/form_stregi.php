<?php
require_once('config.php');
if (isset($_POST['register'])) {
    $Student_Name = mysqli_real_escape_string($conn, $_POST['Student_Name']);
    $Student_English = mysqli_real_escape_string($conn, $_POST['Student_English']);
    $Nationality = mysqli_real_escape_string($conn, $_POST['Nationality']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Date_birth = mysqli_real_escape_string($conn, $_POST['Date_birth']);
    $Skills = mysqli_real_escape_string($conn, $_POST['Skills']);
    $Phone_number = mysqli_real_escape_string($conn, $_POST['Phone_number']);
    $Village = mysqli_real_escape_string($conn, $_POST['Village']);

    $Commune = mysqli_real_escape_string($conn, $_POST['Commune']);
    $Distick = mysqli_real_escape_string($conn, $_POST['Distick']);
    $Province = mysqli_real_escape_string($conn, $_POST['Province']);
    $Education_lavel = mysqli_real_escape_string($conn, $_POST['Education_lavel']);

    $Schools = mysqli_real_escape_string($conn, $_POST['Schools']);
    $Date_exam = mysqli_real_escape_string($conn, $_POST['Date_exam']);
    $Table_number = mysqli_real_escape_string($conn, $_POST['Table_number']);
    $Room_number = mysqli_real_escape_string($conn, $_POST['Room_number']);

    $Grade_exam = mysqli_real_escape_string($conn, $_POST['Grade_exam']);
    $Identity_number = mysqli_real_escape_string($conn, $_POST['Identity_number']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);

    $Repassword = mysqli_real_escape_string($conn, $_POST['Repassword']);

    $Student_image = $_FILES['Student_image']['name'];
    $image_tmp = $_FILES['Student_image']['tmp_name'];

    if (
        !empty($Student_Name)
        && !empty($Student_English)
        && !empty($Nationality)
        && !empty($Gender)
        && !empty($Date_birth)
        && !empty($Skills)
        && !empty($Phone_number)
        && !empty($Village)
        && !empty($Commune)
        && !empty($Distick)
        && !empty($Province)
        && !empty($Education_lavel)
        && !empty($Schools)
        && !empty($Date_exam)
        && !empty($Table_number)
        && !empty($Room_number)
        && !empty($Grade_exam)
        && !empty($Identity_number)
        && !empty($Password)
        && !empty($Student_image)
    ) {
        $dir = "imges/";
        move_uploaded_file($image_tmp, $dir . "/" . $Student_image);
        // if($Password == $Repassword){
        $SQL = "INSERT INTO student_register ";
        $SQL .= "(Student_Name,
            Student_English	,
            Nationality	,
            Gender,	
            Date_birth,
            Skills,
            Phone_number,	
            Village,	
            Commune,	
            Distick,	
            Province,	
            Education_lavel	,
            Schools,	
            Date_exam,	
            Table_number,	
            Room_number,	
            Grade_exam,	
            Identity_number,	
            Password,	
            Student_image)";
        $SQL .= "VALUES('$Student_Name',
                '$Student_English',
                '$Nationality',
                '$Gender',
                '$Date_birth',
                '$Skills',
                '$Phone_number',
                '$Village',
                '$Commune',
                '$Distick',
                '$Province',
                '$Education_lavel',
                '$Schools',
                '$Date_exam',
                '$Table_number',
                '$Room_number',
                '$Grade_exam',
                '$Identity_number',
                '$Password',
                '$Student_image')";

        $sql_run = mysqli_query($conn, $SQL);

        if ($sql_run == true) {
            //     echo "success";
            // }else{
            //     echo "error";
            // }
            $_SESSION['success_register'] = "Register has succesfully.";
            header("location: student_login.php");      
            exit();
        } else {
            $_SESSION['not_success_register'] = "Register has not succesfully.";
            header("location: copy_form2.php");
            exit();
        }
        //   else{
        //     $_SESSION['no_item_field'] = "* Plase complete all fields.";
        //   }
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Student\css\styleformcopy2.css">
    <title>Free Online Student Registration Form</title>

</head>

<body style="background: #6fd5e659;">
    <div class="container">
        <section>
            <div id="header">
                <div class="logo_school">
                    <img src="../Student/imges/logoschool.png" alt="">
                </div>
                <div class="wright_school">
                    <p class="Kh1">វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</p>
                    <p class="En">Kampong Speu Institute of Technology</p>

                </div>
            </div>
        </section>
        <div>
            <h2>ចុះឈ្មោះសុំប្រឡងយកអាហារូបករណ៍១០០% នៃវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h2>

        </div>
        <div class="file-connect">
            <h3>បញ្ជាក់: សូមនាំយកឯកសារថតចម្លងដូចខាងក្រោម៖</h3>
            <ol>
                <li>វិញ្ញាបនបត្របណ្ដោះអាសន្នមធ្យមសិក្សាទុតិយភូមិ ឬវិញ្ញាបនសញ្ញាបត្របច្ចេកទេស និងវិជ្ជាជីវៈកម្រិត៣
                    ឬសមមូល(បញ្ជាក់បានថតចម្លងត្រឺមត្រូវ ១ច្បាប់)</li>
                <li>សំបុត្របញ្ជាក់កំណើត (សេចក្ដីចម្លងសំបុត្របញ្ជាក់កំណើត ១ច្បាប់)</li>
                <li>រូបថត ថតថ្មី ថតចំពីមុខ ផ្ទៃពណ៌ស ៤x៦ (៤សន្លឹក) </li>
            </ol>
        </div>
        <div class="form-wrapper">
            <form action="copy_form2.php" method="POST" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="Student_image">រូបថតសិស្ស :</label>
                    <div class="form-element">
                        <input type="file" class="form-control" id="file-1" name="Student_image" accept="image/*"
                            required>
                        <label for="file-1" id="file-1-preview">
                            <img class="myimage" src="../admin/img/no-image.jpg" alt="">
                            <div>
                                <span>+</span>
                            </div>
                        </label>
                    </div>
                    <!-- <input type="file" name="Studentimage"  class="form-control" id="Studentimage" required> -->
                    <!-- <p>(less than 5 Mb)</p> -->
                </div>

                <div class="form-item">
                    <label for="Student_Name">ឈ្មោះសិស្ស :</label>
                    <input type="text" name="Student_Name" id="fullname" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="Student_English">អក្សរឡាតាំង :</label>
                    <input type="text" name="Student_English" id="Student_English" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="colFormLabel">សញ្ជាតិ ៖</label>
                    <input type="text" id="colFormLabel" placeholder="" name="Nationality">
                </div>

                <div class="form-item">
                    <label for="Gender">ភេទ :</label>
                    <div class="genders">
                        <p>ប្រុស</p> <input type="radio" name="Gender" id="Gender" value="ប្រុស" required>
                        <p>ស្រី</p> <input type="radio" name="Gender" id="Gender" value="ស្រី" required>
                    </div>
                </div>
                <div class="form-item">
                    <label for="Date_birth">ថ្ងៃខែឆ្នាំកំណើត :</label>
                    <input type="date" name="Date_birth" id="DOB" required>
                </div>


                <div class="form-item">
                    <label for="colFormLabel">ជំនាញ :</label>
                    <select name="Skills" id="" class="form-control" name="Skills" required>
                        <option value="" hidden>ជ្រើសរើស</option>

                        <?php
                        $major_select = "SELECT * FROM tb_major";
                        $major_run = mysqli_query($conn, $major_select);
                        if (mysqli_num_rows($major_run) > 0) {
                            while ($data = mysqli_fetch_assoc($major_run)) {
                                ?>
                                <option value="<?= $data['major_name']; ?>"><?= $data['major_name']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-item">
                    <label for="Phone_number">លេខទូរស័ព្ទ :</label>
                    <input type="tel" name="Phone_number" id="Phone_number" placeholder="XXX XXX XXX" required>
                </div>
                <hr>
                <div class="connect-h3">
                    <h3>អាសយដ្ឋាន​បច្ចុប្បន្ន</h3>
                </div>
                <div class="form-item">
                    <label for="Village">ភូមិ :</label>
                    <input type="text" name="Village" id="Village" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="Commune">ឃុំ / សង្កាត់ :</label>
                    <input type="text" name="Commune" id="Commune" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="Distick">ស្រុក / ខណ្ឌ :</label>
                    <input type="text" name="Distick" id="Distick" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="Province">ខេត្ត / រាជធានី :</label>
                    <input type="text" name="Province" id="Province" placeholder="" required>
                </div>
                <hr>
                <div class="connect-h3">
                    <h3>ការសិក្សា</h3>
                </div>
                <div class="form-item">
                    <label for="Education_lavel">កម្រិតសិក្សា :</label>
                    <select name="Education_lavel" id="Education_lavel" class="form-control">
                        <option value="" hidden>ជ្រើសរើស</option>
                        <option value="ទុតិយភូមិ">ទុតិយភូមិ</option>
                        <option value="បឋមភូមិ">បឋមភូមិ</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="Schools">មកពីសាលា :</label>
                    <input type="text" name="Schools" id="tstate" placeholder="" required>
                </div>
                <div class="form-item">
                    <label for="Date_exam">សម័យប្រឡង :</label>
                    <input type="date" name="Date_exam" id="Date_exam" required>
                </div>
                <div class="form-item">
                    <div class="col-sx-2">
                        <label for="Table_number">លេខតុ :</label>
                        <div class="col-4">
                            <input type="text" placeholder="" name="Table_number">
                        </div>
                    </div>
                    <div class="col-sx-2">
                        <label for="Room_number" class="form-control-label">លេខបន្ទប់ :</label>
                        <div class="col-4">
                            <input type="text" placeholder="" name="Room_number">
                        </div>
                    </div>
                    <div class="col-sx-2">
                        <label for="Grade_exam" class="form-control-label">និទ្ទេស :</label>
                        <div class="col-4">
                            <select id="option-id" class="form-control" name="Grade_exam">
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


                </div>
                <div class="form-item">
                    <label for="Identity_number">លេខអត្តសញ្ញាណប័ណ្ណ :</label>
                    <input type="text" name="Identity_number" required>
                </div>
                <div class="form-item">
                    <label for="Password">លេខសម្ងាត់ :</label>
                    <input type="password" placeholder="" name="Password" required>
                </div>
                <div class="form-item">
                    <label for="Repassword">បញ្ជាក់លេខសម្ងាត់ :</label>
                    <input type="password" placeholder="" name="Repassword" required>
                </div>
                <div class="row mx-6 mt-6">
                    <div class="register-button">
                        <button class="reset" type="reset">Cancel</button>
                        <button class="register" type="submit" name="register">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</body>
<!-- <script>
    let pstate = document.querySelector("#pstate")
    let pcity = document.querySelector("#pcity")
    let pzip = document.querySelector("#pzip")
    let pphonenumber = document.querySelector("#pphonenumber")

    let tstate = document.querySelector("#tstate")
    let tcity = document.querySelector("#tcity")
    let tzip = document.querySelector("#tzip")
    let tphonenumber = document.querySelector("#tphonenumber")

    let sameaspermanent = document.querySelector("#sameaspermanent")
    sameaspermanent.addEventListener('change', () => {
        if (sameaspermanent.checked === true) {
            tstate.value = pstate.value;
            tcity.value = pcity.value;
            tzip.value = pzip.value;
            tphonenumber.value = pphonenumber.value;
        } else if (sameaspermanent.checked === false) {
            tstate.value = "";
            tcity.value = "";
            tzip.value = "";
            tphonenumber.value = "";
        }
    })
</script> -->
<script>
    function previewBeforeUpload(id) {
        document.querySelector("#" + id).addEventListener("change", function (e) {
            if (e.target.files.length == 0) {
                return;
            }
            let file = e.target.files[0];
            let url = URL.createObjectURL(file);
            document.querySelector("#" + id + "-preview div").innerText = file.name;
            document.querySelector("#" + id + "-preview img").src = url;
        });
    }

    previewBeforeUpload("file-1");
    // previewBeforeUpload("file-2");
    // previewBeforeUpload("file-3");
    // previewBeforeUpload("file-4");

</script>

</html>