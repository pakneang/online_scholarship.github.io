<?php
session_start();
error_reporting(0);
include('includes/config.php');
    if (isset($_POST['Submit'])) {
        $Student_Name = $_POST['Student_Name'];
        $Student_English = $_POST['Student_English'];
        $Nationality = $_POST['Nationality'];
        $Gender = $_POST['Gender'];
        $Date_Birth = $_POST['Date_Birth'];
        $Village = $_POST['Village'];
        $Commune = $_POST['Commune'];
        $Distick = $_POST['Distick'];
        $Province = $_POST['Province'];
        $Education_lavel = $_POST['Education_lavel'];
        $Schools = $_POST['Schools'];
        $Date_Exam = $_POST['Date_Exam'];
        $Table_Number = $_POST['Table_Number'];
        $Room_Number = $_POST['Room_Number'];
        $Indexs = $_POST['Indexs'];
        $Degree_Number = $_POST['Degree_Number'];
        $Skills = $_POST['Skills'];
        $Phone_Number = $_POST['Phone_Number'];
        $Password = $_POST['Password'];

        $images = $_FILES['profile']['name'];
        $tmp_dir = $_FILES['profile']['tmp_name'];
        $imageSize = $_FILES['profile']['size'];
        $upload_dir = 'uploads/';
        $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
        $picProfile = rand(1000, 100000000) . "." . $imgExt;
        move_uploaded_file($tmp_dir, $upload_dir . $picProfile);

        $status = 1;
        $sql = "INSERT INTO  tblstudentsesregister(Student_Name,Student_English,Nationality,Gender,Date_Birth,Village,Commune,Distick,Province,
        Education_lavel,Schools,Date_Exam,Table_Number,Room_Number,Indexs,Degree_Number,Skills,Phone_Number,Password,picProfile,Status) 
                VALUES(:Student_Name,:Student_English,:Nationality,:Gender,:Date_Birth,:Village,:Commune,:Distick,:Province,
                :Education_lavel,:Schools,:Date_Exam,:Table_Number,:Room_Number,:Indexs,:Degree_Number,:Skills,:Phone_Number,:Password,:upic,:status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':Student_Name', $Student_Name, PDO::PARAM_STR);
        $query->bindParam(':Student_English', $Student_English, PDO::PARAM_STR);
        $query->bindParam(':Nationality', $Nationality, PDO::PARAM_STR);
        $query->bindParam(':Gender', $Gender, PDO::PARAM_STR);
        $query->bindParam(':Date_Birth', $Date_Birth, PDO::PARAM_STR);
        $query->bindParam(':Village', $Village, PDO::PARAM_STR);
        $query->bindParam(':Commune', $Commune, PDO::PARAM_STR);
        $query->bindParam(':Distick', $Distick, PDO::PARAM_STR);
        $query->bindParam(':Province', $Province, PDO::PARAM_STR);
        $query->bindParam(':Education_lavel', $Education_lavel, PDO::PARAM_STR);
        $query->bindParam(':Schools', $Schools, PDO::PARAM_STR);
        $query->bindParam(':Date_Exam', $Date_Exam, PDO::PARAM_STR);
        $query->bindParam(':Table_Number', $Table_Number, PDO::PARAM_STR);
        $query->bindParam(':Room_Number', $Room_Number, PDO::PARAM_STR);
        $query->bindParam(':Indexs', $Indexs, PDO::PARAM_STR);
        $query->bindParam(':Degree_Number', $Degree_Number, PDO::PARAM_STR);
        $query->bindParam(':Skills', $Skills, PDO::PARAM_STR);
        $query->bindParam(':Phone_Number', $Phone_Number, PDO::PARAM_STR);
        $query->bindParam(':Password', $Password, PDO::PARAM_STR);
        $query->bindParam(':upic', $picProfile);

        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "ព័ត៌មាននិស្សិតត្រូវបានបញ្ចូលជោគជ័យ";
        } else {
            $error = "ព័ត៌មាននិស្សិតបញ្ចូលមិនបានត្រឹមត្រូវ. សូមព្យាយាមម្ដងទៀត";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/assets.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <form action="" method="post" class="horizontal-signin">
            <div class="header-from-signin">
                <img src="assets/images/logo-ksit.png" alt="">
                <div class="title-logo-signin">
                    <h4>វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h4>
                    <p>Kampong Speu Institute of Technology</p>
                    <div class="line-signin">
                    </div>
                </div>
            </div>

            <div class="panel-signin">
                <div class="panel-border mt-5">
                    <div class="form-group has-success">
                        <div class="row mx-4 mt-2">
                            <div class="title mt-3 mb-3">
                                <h4>ប្រវត្ដនិស្សិត</h4>
                            </div>
                            <label for="default" class="col-sm-1 control-label">ឈ្មោះនិស្សិត ៖</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="colFormLabel" placeholder=""
                                    name="Student_Name">
                            </div>
                            <label for="default" class="col-sm-1 control-label">អក្សរឡាតាំង ៖</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="colFormLabel" placeholder=""
                                    name="Student_English">
                            </div>
                            <label for="defualt" class="col-sm-1 control-label">សញ្ជាតិ ៖</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="colFormLabel" placeholder=""
                                    name="Nationality">
                            </div>
                        </div>
                    </div>
                    <div class="row mx-4 mt-3 mb-2">
                        <label for="defualt" class="col-sm-1 control-label">ភេទ ៖ </label>
                        <div class="col-sm-3">
                            <select id="" class="form-control" name="Gender">
                                <option value="">ជ្រើសរើស</option>
                                <option value="ប្រុស">ប្រុស</option>
                                <option value="ស្រី">ស្រី</option>
                            </select>
                        </div>
                        <label for="defualt" class="col-sm-1 control-label">ថ្ងៃ.ខែ.កំណើត ៖</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="colFormLabel" placeholder="" name="Date_Birth">
                        </div>
                    </div>
                </div>
                <div class="panel-border mt-3">
                <div class="row mx-4 mt-3">
                <div class="title mt-3 mb-3">
                                <h4>អាសយស្ថាន</h4>
                            </div>
                    <label for="colFormLabel" class="col-sm-1 col-form-label">ភូមិ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Village">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">ឃុំ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Commune">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">ស្រុក ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Distick">
                    </div>
                </div>
                <div class="row mx-4 mt-3 mb-2">
                    <label for="defualt" class="col-sm-1 col-form-label">ខេត្ដ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Province">
                    </div>
                </div>
                </div>
            <div class="panel-border mt-3">
            <div class="row mx-4 mt-3">
            <div class="title mt-3 mb-3">
                                <h4>ការសិក្សា</h4>
                            </div>
                    <label for="defualt" class="col-sm-1 col-form-label">កម្រិតសិក្សា ៖</label>
                    <div class="col-sm-3">
                        <select name="Education_lavel" id="" class="form-control">
                            <option value="">ជ្រើសរើស</option>
                            <option value="ទុតិយភូមិ">ទុតិយភូមិ</option>
                            <option value="បឋមភូមិ">បឋមភូមិ</option>
                        </select>
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">មកពីសាលា ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Schools">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">សម័យប្រឡង ៖</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="colFormLabel" placeholder="" name="Date_Exam">
                    </div>
                </div>
                <div class="row mx-4 mt-3">
                    <label for="defualt" class="col-sm-1 col-form-label">លេខតុ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Table_Number">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">លេខបន្ទប់ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Room_Number">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">និទ្ទេស ៖</label>
                    <div class="col-sm-3">
                        <select name="Indexs" id="" class="form-control">
                            <option value="">ជ្រើសរើស</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                </div>
                <div class="row mx-4 mt-3">
                    <label for="defualt" class="col-sm-1 col-form-label">លេខ.ប័ណ្ឌ ៖</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="Degree_Number">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">ជំនាញ ៖</label>
                    <div class="col-sm-3">
                        <select name="Skills" id="" class="form-control">
                            <option value="">ជ្រើសរើស</option>
                            <option value="បច្ចេកវិទ្យាកុំព្យូទ័រ">បច្ចេកវិទ្យាកុំព្យូទ័រ</option>
                            <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                            <option value="វិទ្យាសាស្ដ្រដំណាំ">វិទ្យាសាស្ដ្រដំណាំ</option>
                            <option value="វិទ្យាសាស្ដ្រសត្វ">វិទ្យាសាស្ដ្រសត្វ</option>
                            <option value="ការដំឡើងប្រព័ន្ធអគ្គិសនី">ការដំឡើងប្រព័ន្ធអគ្គិសនី</option>
                            <option value="បច្ចេកវិទ្យាមេកានិច">បច្ចេកវិទ្យាមេកានិច</option>
                        </select>
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">លេខទូរស័ព្ទ ៖</label>
                    <div class="col-sm-3">
                        <input type="phone" class="form-control" id="colFormLabel" placeholder="" name="Phone_Number">
                    </div>
                </div>
                <div class="row mx-4 mt-3 mb-2">
                    <label for="defualt" class="col-sm-1 col-form-label">លេខសម្ងាត់ ៖</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="colFormLabel" placeholder="" name="Password">
                    </div>
                    <label for="defualt" class="col-sm-1 col-form-label">រូបថត ៖</label>
                    <div class="col-sm-3">
                        <input type="file" name="profile" class="form-control" required="" accept="*/image">
                    </div>
                </div>

            </div>
                <button type="submit" class="btn btn-submit btn-success"
                    style="width: 12rem; margin: 2rem 0rem 2rem 10rem;" name="Submit">Submit<span
                        class="btn-label btn-label-right"><i class="fa-solid fa-check"></i></span></button>

            </div>
        </form>
        <?php $sql = "SELECT * from tblstudentsesregister";
                                                        $query = $dbh->prepare($sql);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        $cnt = 1;
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $result) {   ?>
        <img src="<?php echo htmlentities(
                        $result->profile
                    ); ?>">

        <?php
                                                    }
                                                    }?>
    </div>

</body>

</html>