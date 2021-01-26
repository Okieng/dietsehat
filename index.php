<?php
session_start();
require 'function.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $valid = mysqli_query($conn, "SELECT * FROM user where email = '$email'");

    if (mysqli_num_rows($valid) > 0) {
        $row = mysqli_fetch_assoc($valid);
        if ($password === $row['password']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            header('Location: makanan.php');
        } else {
            $valid = true;
        }
    } else {
        echo "ga ada";
    }
}
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
    <title>Login | Diet Sehat</title>
</head>
<style>
    body {
        background-color: #7AC53F;
    }

    .login {
        background-color: #fff;
        width: 30%;
        margin-top: 5%;
    }

    .btn {
        background-color: #7AC53F !important;
        color: #fff !important;
    }

    #circle {
        width: 25%;
    }

    .custom-file-control,
    .form-control {
        display: inline-block !important;
        width: 70% !important;
    }

    h1 {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body>
    <div class="container login">
        <div class="row">

            <?php if (isset($valid)) : ?>
                <div class="alert alert-danger" role="alert">
                    Password Salah
                </div>


            <?php endif; ?>
            <div class="col-12 text-center">
                <form class="form" method="post" action="">
                    <h1 class="mt-5 mb-5">Diet Sehat</h1>
                    <div class="form-group mt-2">

                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

                    </div>
                    <div class="form-group">

                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-5">Login</button>
                    <small id="emailHelp" class="form-text text-muted">Belum punya akun? <a href="register.php">Daftar Sekarang</a></small>
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
