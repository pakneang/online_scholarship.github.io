<?php

if (isset($_GET['content'])) {
    $id = $_GET['content'];
    // echo $id;
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="../Student/css/stylestudent.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Page user</title>
    </head>

    <body style="background: #D3F6F4;">
        <?php
        include_once("section-top.php");
        ?>
        <?php
        include_once("nave-bar.php");
        ?>
        <!-- Page 1user -->
        <section>
            <!-- <div>
            <div>
                <p>ក្រសួងអប់រំ យុវជន និងកីឡា
                    សូមជូនដំណឹងដល់សិស្សានុសិស្សទាំងអស់ដែលបានប្រឡងជាប់ឬធ្លាក់សញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ
                    ឬជាប់សញ្ញាបត្របច្ចេកទេស និងវិជ្ជាជីវៈកម្រិត៣ ឬមានសញ្ញាបត្រដែលមានតម្លៃសមមូល ឱ្យបានជ្រាបថា
                    ក្រសួងនឹងផ្ដល់អាហារូបករណ៍១០០% ថ្នាក់បរិញ្ញាបត្ររង ចំនួន១៨០កន្លែង សម្រាប់ឆ្នាំសិក្សា២០២១-២០២២


                    -ទាញយកពាក្យ៖ www.ksit.edu.kh -កាលបរិច្ឆេទឈប់ទទួលពាក្យ៖ ថ្ងៃទី០៧ ខែកុម្ភៈ ឆ្នាំ២០២២ -សម័យប្រឡង៖ ១៧
                    កុម្ភៈ ២០២២</p>
            </div>
        </div> -->
            <div class="control-content1">
                <div class="img-side">
                    <img src="../Student/imges/como.jpg" alt="Third slide">
                </div>
                <div class="p-side">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                        necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                        aspernatur, corporis ut quasi consequuntur, at quis?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                        necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                        aspernatur, corporis ut quasi consequuntur, at quis?

                    </p>
                </div>
        </section>
        <?php
        include_once("section-bottom.php");
        ?>
    </body>

    </html>
    <?php
} else {
    ?>
    <!-- 1P -->
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Page user</title>
    </head>

    <body style="background: #D3F6F4;">
        <section>
            <div id="header">
                <div class="page-userlogo1">
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
                            <a href="student_login.php"><button class="dropbtn">ចូលគណនី</button></a>
                        </div>
                        <div id="menu" class="dropdown">
                            <a href="copy_form2.php"><button class="dropbtn">ចុះឈ្មោះសុំប្រឡង</button></a>
                        </div>

                    </nav>
                </div>
            </div>
        </section>

        <section>
            <div class=" container-pageuser">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../Student/imges/school1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-100" src="../Student/imges/slide2.jpg" alt="Second slide">
                        </div>
                        <!-- <div class="carousel-item">
                                    <img class="d-block w-100" src="../Student/imges/electricail.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../Student/imges/donam.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../Student/imges/com.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../Student/imges/como.jpg" alt="Third slide">
                                </div>
                            </div> -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section>

            <div class="container-textall">
                <div class="container-no-bg">
                    <a href="?content=1">
                        <div class="control-content">
                            <div class="image-side">
                                <img src="../Student/imges/jos.jpg" alt="Third slide">
                            </div>
                            <div class="title-side">
                                <p>
                                    នាថ្ងៃទី១៩ ខែមករា ឆ្នាំ២០២៣
                                    លោកបណ្ឌិតហ៊ាត់ ប៊ុនហេ នាយករងវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ
                                    និងជាប្រធានសហភាពសហព័ន្ធយុវជនកម្ពុជាប្រចាំវិទ្យាស្ថានបច្ចេកកំពង់ស្ពឺ
                                    សហការណ៍ជាមួយនាយកសាលាបឋម និងអនុវិទ្យាល័យអមលាំង ដឹកនាំលោកគ្រូអ្នកគ្រូ សិស្ស
                                    និស្សិតដែលជាសមាជិក ស.ស.យ.ក ចូលរួមសកម្មភាពបង្រៀន
                                    និងរៀបតែងសួន ដល់សិស្សសាលាបឋម និងអនុវិទ្យាល័យអមលាំង
                                    ស្ថិតនៅឃុំអមលាំង ស្រុកថ្ពង ខេត្តកំពង់ស្ពឺ។

                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="?content=2">
                        <div class="control-content">
                            <div class="image-side">
                                <img src="../Student/imges/como.jpg" alt="Third slide">
                            </div>
                            <div class="title-side">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                                    necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                                    aspernatur, corporis ut quasi consequuntur, at quis?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                                    necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                                    aspernatur, corporis ut quasi consequuntur, at quis?

                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="?content=3">
                        <div class="control-content">
                            <div class="image-side">
                                <img src="../Student/imges/como.jpg" alt="Third slide">
                            </div>
                            <div class="title-side">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                                    necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                                    aspernatur, corporis ut quasi consequuntur, at quis?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores incidunt iure
                                    necessitatibus facere iste! Omnis enim fuga distinctio cumque sit voluptatum esse vero
                                    aspernatur, corporis ut quasi consequuntur, at quis?

                                </p>
                            </div>
                        </div>
                    </a>
                    
                </div>
                <div class="container-bot-ig">
                        <p>hello</p>
                    </div>
            </div>
            <!-- <div>
            <div>
                <p>ក្រសួងអប់រំ យុវជន និងកីឡា
                    សូមជូនដំណឹងដល់សិស្សានុសិស្សទាំងអស់ដែលបានប្រឡងជាប់ឬធ្លាក់សញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ
                    ឬជាប់សញ្ញាបត្របច្ចេកទេស និងវិជ្ជាជីវៈកម្រិត៣ ឬមានសញ្ញាបត្រដែលមានតម្លៃសមមូល ឱ្យបានជ្រាបថា
                    ក្រសួងនឹងផ្ដល់អាហារូបករណ៍១០០% ថ្នាក់បរិញ្ញាបត្ររង ចំនួន១៨០កន្លែង សម្រាប់ឆ្នាំសិក្សា២០២១-២០២២


                    -ទាញយកពាក្យ៖ www.ksit.edu.kh -កាលបរិច្ឆេទឈប់ទទួលពាក្យ៖ ថ្ងៃទី០៧ ខែកុម្ភៈ ឆ្នាំ២០២២ -សម័យប្រឡង៖ ១៧
                    កុម្ភៈ ២០២២</p>
            </div>
        </div> -->

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
                        <p class="address"><i class="fas fa-house"></i><span>អាសយដ្ឋាន :</span><i> ផ្លូវជាតិលេខ​​ ៤៤
                                ភូមិអូរអង្គុំ ឃុំអមលាំង ស្រុកថ្ពង ខេត្ត​កំពង់ស្ពឺ។</i></p>
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
    </body>

    </html>

    <?php
}
?>