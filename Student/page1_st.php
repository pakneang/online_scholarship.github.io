<?php
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Student/css/stylestudent.css">
    <title>Page user</title>
</head>

<body style="background: #D3F6F4;">
    <section>
        <div class="head">
            <div id="header1">
                <div class="page-userlogo1 ">
                    <div class="logo_school">
                        <img src="../Student/imges/logoschool.png" alt="">
                    </div>
                    <div class="wright_school">
                        <h4 class="Kh1">វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h4>
                        <p class="En">Kampong Speu Institute of Technology</p>
                        <div class="line">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="profilepic">
                <div>
                    <p>Profile</p>
                </div>

            </div> -->
        </div>
    </section>
    <section>
        <div id="container-menu">
            <div class="container_pageuser1">
                <nav class="dashboard_st">
                    <div id="menu" class="dropdown">
                        <a href="index.php"><button class="dropbtn"><i
                                    class="fas fa-house iconfa-root"></i>ទំព័រដើម</button></a>
                    </div>
                    <div id="menu" class="dropdown">
                        <button class="dropbtn">ជំនាញសិក្សា</button>
                        <div class="dropdown-content">
                            <a href="">វិទ្យាសាស្ត្រដំណាំ</a>
                            <a href="">វិទ្យាសាស្ត្រសត្វ</a>
                            <a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a>
                            <a href="">បច្ចេកវិទ្យាអាហារ</a>
                            <a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a>
                            <a href="">បច្ចេកវិទ្យាមេកានិក</a>
                        </div>
                    </div>

                    <div id="menu" class="dropdown">
                        <button class="dropbtn">សេចក្ដីជូនដំណឹង</button>
                        <div class="dropdown-content">
                            <a href="">វិទ្យាសាស្ត្រដំណាំ</a>
                            <a href="">វិទ្យាសាស្ត្រសត្វ</a>
                            <a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a>
                            <a href="">បច្ចេកវិទ្យាអាហារ</a>
                            <a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a>
                            <a href="">បច្ចេកវិទ្យាមេកានិក</a>
                        </div>
                    </div>
                    <!-- <div id="menu" class="dropdown">
                            <button class="dropbtn">សេចក្ដីជូនដំណឹង</button>
                            <div class="dropdown-content">
                                <a href="">វិទ្យាសាស្ត្រដំណាំ</a>
                                <a href="">វិទ្យាសាស្ត្រសត្វ</a>
                                <a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a>
                                <a href="">បច្ចេកវិទ្យាអាហារ</a>
                                <a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a>
                                <a href="">បច្ចេកវិទ្យាមេកានិក</a>
                            </div>
                        </div> -->

                    <div id="menu" class="dropdown">
                        <a href="logout.php"><button class="dropbtn">ចាកចេញ<i
                                    class="fa-solid fa-right-from-bracket icon-logout"></i></button></a>
                    </div>


                </nav>
            </div>
        </div>
    </section>

    <section>

        <div class="container-content-student">
            <div class="container-content-student-top">
                <!-- <div id="menu" class="dropdown">
                    <a href="student_login.php"><button class="dropbtn">ចូលគណនី</button></a>
                </div>
            </div> -->
                <?php
                $sql = " SELECT * FROM student_register WHERE Identity_number ='" . $_SESSION['stuID'] . "'";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                    ?>





                    <div class="container-content-student-info">
                        <div class="student-info1">
                            <div class="student-info2">
                                <div class="img-info2">
                                    <img src="imges/<?php echo $row['Student_image']; ?>" width="150px" height="auto"
                                        border-radius="10px" alt="">
                                </div>
                                <div class="name-info2">
                                    <h3>
                                        <?php echo $row['Student_English']; ?>
                                    </h3>
                                </div>
                            </div>


                            <div class="student-info3">
                                <div class="story-info3">
                                    <div class="label">
                                        <label> ឈ្មោះ </label><span>៖
                                            <?php echo "$row[Student_Name]" ?>
                                        </span>
                                        <!-- <hr class="hr"> -->
                                    </div>

                                    <div class="label">
                                        <label>ភេទ </label><span>៖
                                            <?php echo "$row[Gender]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label" class="hr" color="gray">
                                        <label>ថ្ងៃខែឆ្នាំកំណើត </label><span>៖
                                            <?php echo "$row[Date_birth]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>មកពីសាលា </label><span>៖​​
                                            <?php echo "$row[Schools]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>ជ្រើសរើសជំនាញ </label><span>៖
                                            <?php echo "$row[Skills]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>លេខទូរស័ព្ទ </label><span>៖
                                            <?php echo "$row[Phone_number]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>ភូមិ </label><span>៖
                                            <?php echo "$row[Village]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>ឃុំ / សង្កាត់ </label><span>៖
                                            <?php echo "$row[Commune]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>ស្រុក / ខណ្ឌ </label><span>៖
                                            <?php echo "$row[Distick]" ?>
                                        </span>
                                    </div>
                                    <!-- <hr class="hr" class="hr" color="gray"> -->
                                    <div class="label">
                                        <label>ខេត្ត / រាជធានី </label><span>៖
                                            <?php echo "$row[Province]" ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
    </section>

    <section>
        <div class="cantainer_bottop">
            <div class="about_school">
                <div class="about_school_left">
                    <h1>ប្រព័ន្ធបណ្ដាញសង្គម</h1>
                    <hr color="#fff00">
                    <p class="tfacebook"><i class="fa-brands fa-facebook"></i>Facebook</p>
                    <p class="youtube"><i class="fa-brands fa-square-youtube"></i>Youtube</p>
                    <p class="websit"><i class="fa-brands fa-google"></i>Websit</p>
                </div>
                <div class="about_school_right">
                    <h1>អាសយដ្ឋាន</h1>
                    <hr color="#00ffff" ;>
                    <p class="address"><i class="fas fa-house"></i><span>អាសយដ្ឋាន :</span>ផ្លូវជាតិលេខ​​ ៤៤
                        ភូមិអូរអង្គុំ ឃុំអមលាំង ស្រុកថ្ពង ខេត្ត​កំពង់ស្ពឺ។</p>
                    <p class="facebook"><i class="fa-brands fa-facebook"></i><span>Facebook page :</span> Kampong Speu
                        Institute of Technology</p>
                    <p class="num_phone"><i class="fas fa-phone"></i><span>លេខទូរស័ព្ទ :</span> 085 483 609 / 011 425
                        279 / 010 770 774/ 096 47 67 709</p>
                    <p class="internet"><i class="fas fa-regular fa-globe"></i>www.ksit.edu.kh</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>