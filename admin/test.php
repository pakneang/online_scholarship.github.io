<?php
include("config.php");
if (isset($_POST['submit'])) {
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $contry = $_POST["contry"];
    $averrage = $_POST["averrage"];
    $query = "INSERT INTO test (surname,username,contry,averrage) VALUE ('$surname','$username','$contry','$averrage')";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        header("location:test.php");
        exit();
    }else{
        header("location:test.php");
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .conntent {
            width: 50%;
            height: 500px;
            background-color: yellow;
            margin: 0 auto;
            top: 10%;
        }

        .pd {
            padding: 30px;
        }
    </style>
</head>

<body>



    <div class="conntent">
        <form class="needs-validation pd" method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">នាម ត្រកូល</label>
                    <input type="text" class="form-control" name="surname" id="validationTooltip01"
                        placeholder="First name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01"> នាម ខ្លួន</label>
                    <input type="text" class="form-control" name="username" id="validationTooltip01"
                        placeholder="First name" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip03">ខេត្ត</label>
                    <input type="text" class="form-control" name="contry" id="validationTooltip03" placeholder=""
                        required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">និទ្ទេស</label>
                    <input type="text" class="form-control" name="averrage" id="validationTooltip04" placeholder="Stte"
                        required>

                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>

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