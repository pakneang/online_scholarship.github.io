<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="/Pro_me/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Page admin</title>
    <!-- <style>
        table tr,td,th{
            border: 1px solid gray;
        }
    </style> -->
</head>

<body style="background: #D3F6F4;">
    <div class="page-userlogo1">
    <div class="logo_school">
    <img src="../Pro_j/imgs/logoschool.png" alt="">
</div>
<div class="wright_school">
    <h4 class="Kh">វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ</h4>
    <p class="En">Kampong Speu Institute of Technology</p>
    <div class="line">

    </div>
</div>
    </div>
    <div class="part-page">
        <div class="dashboard_admin">
            <?php
            include('C:\xampp\htdocs\Pro_me\link_dashboardadmin.php');
            ?>
        </div>
        <div class="dashboard_adnoti">
            <div class="t-root">
                <h3 class="root"><a href="">ទំព័រដើម</a>
                </h3>
            </div>
            <div class="x">
                <table class="tbpart_info">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <th>ឈ្មោះ</th>
                            <th>ភេទ</th>
                            <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                            <th>មកពីសាលា</th>
                            <th>ភូមិ</th>
                            <th>ឃុំ</th>
                            <th>ស្រុក</th>
                            <th>មកពីខេត្ត</th>
                            <th>លេខទូរស័ព្ទ</th>
                            <th>កម្រិតសិក្សា</th>
                            <th>និទ្ទេស</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ល.រ</td>
                            <td>ប៉ាក​ នាង</td>
                            <td>ប្រុស</td>
                            <td>15/12/2000</td>
                            <td>វិទ្យាល័យទ័ពមានជ័យ</td>
                            <td>ត្រពាំងស្យា</td>
                            <td>ស្វាយរំពា</td>
                            <td>បសេដ្ឋ</td>
                            <td>កំពង់ស្ពឺ</td>
                            <td>096 75 88 48</td>
                            <td>ទុតិយភូមិ</td>
                            <td>ល្អ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div></div>
    <script>
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
    </script>


</body>

</html>