<?php

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <!--css-->
  <link rel="stylesheet" href="font/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    hr {
      width: 30%;
      margin: auto;
    }

    .custom-file-control,
    .form-control,
    .is-focused .custom-file-control,
    .is-focused .form-control {
      background-image: linear-gradient(0deg, #7ac53f 2px, rgba(0, 150, 136, 0) 0),
        linear-gradient(0deg, rgba(0, 0, 0, 0.26) 1px, transparent 0) !important;
    }

    .btn-outline-primary.custom-file-control:before,
    .btn.btn-outline-primary {
      border-color: currentColor;
      color: #7ac53f !important;
      background-color: transparent;
      border: 1px solid #7ac53f !important;
    }

    .kanan {
      text-align: right;
    }

    .kiri {
      text-align: left;
    }
  </style>
  <!-- Material Design for Bootstrap CSS -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body>
  <?php
  include 'nav.php';
  ?>
  <form action="" method="post" action="">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h1>Berat Badan Saat Ini</h1>

          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-4 text-center">
          <h6>Berat Badan Awal</h6>
          <h6><input type="text" name="bbAwal" class="form-control bba" id="exampleInputEmail1" aria-describedby="emailHelp"></h6>
          <hr>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Masukkan Berat Badan</label>
            <input type="text" name="bb" class="form-control bb" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
            <button type="button" name="submit" class="btn btn-outline-primary submit">Simpan</button>
          </div>
        </div>
        <div class="col-4 text-center">
          <h6>Tujuan Berat Badan</h6>
          <h6><input type="text" class="form-control tbb" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuanbb"><br></h6>
          <hr>
        </div>
      </div>
  </form>
  <canvas id="myChart"></canvas><br><br><br><br><br><br>




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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
    $(document).ready(function() {
      $('.submit').on('click', function() {
        const bb = $('.bb').val();
        const bba = $('.bba').val();
        const tbb = $('.tbb').val();

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'line',

          // The data for our dataset
          data: {
            labels: ['Berat Badan Awal', 'Berat Badan Saat Ini'],
            datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: [bba, bb, tbb]
            }]
          },

          // Configuration options go here
          options: {}
        });

      })
    })
  </script>
</body>

</html>
