<?php
require 'function.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .inputan {
        margin-top: 3%;
    }

    body {
        background-color: #7AC53F;
    }

    .custom-file-control,
    .form-control,
    .is-focused .custom-file-control,
    .is-focused .form-control {
        background-image: linear-gradient(0deg, #7AC53F 2px, rgba(0, 150, 136, 0) 0), linear-gradient(0deg, rgba(0, 0, 0, .26) 1px, transparent 0);
    }



    .btn {
        color: #fff !important;
        border-color: #fff !important
    }

    .form {
        background-color: #fff;
        color: #7AC53F;

    }

    .custom-file-control,
    .form-control {
        display: inline-block !important;

    }

    .btn {
        background-color: #7AC53F !important;
        color: #fff !important;

    }
</style>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="mb-4" style="color:#fff;">Perhitungan Body Muscle Index</h3>
                </div>
                <form class="form" action="" method="post"><br><br>
                    <div class="container">
                        <div class="row input-atas">
                            <div class="col-2">
                                <label for="input">Tinggi Badan</label>
                            </div>
                            <div class="col-5">
                                <input type="text" name="height" class="form-control"="Tinggi Badan">
                            </div>
                        </div>
                        <div class="row inputan">
                            <div class="col-2">
                                <label for="input">Berat Badan</label>
                            </div>
                            <div class="col-5">
                                <input type="text" name="weight" class="form-control"="Berat Badan">
                            </div>
                        </div>
                        <div class="row inputan">
                            <div class="col-2">
                                <label for="input">Umur</label>
                            </div>
                            <div class="col-5">
                                <input type="text" name="age" class="form-control"="Umur">
                            </div>
                        </div>
                        <div class="row inputan">
                            <div class="col-2">
                                <label for="input">Jenis Kelamin</label>
                            </div>
                            <div class="col-10">
                                <select name="gender" class="form-control">
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>

                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="text-center">
                        <input type="Submit" value="Calculate" class="btn btn-outline-success">
                    </div>
                    <?php
                    $age = $_POST['age'];
                    $weight = $_POST['weight'];
                    $height = $_POST['height'];
                    $calories = "0.0215183";
                    $gender = $_POST['gender'];
                    switch ($gender) {
                        case 'Wanita':
                            $gender = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
                            echo "<p>Your estimated daily metabolic rate is $gender </p>";
                            echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";

                            break;
                        case 'Pria':
                            $gender = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
                            echo "<p>Your estimated daily metabolic rate is $gender </p>";
                            echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
                    }


                    ?>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
</body>

</html>
