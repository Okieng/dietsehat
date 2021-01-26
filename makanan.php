<?php
session_start();
if (!$_SESSION['id']) {
  header('Location: index.php');
}
require 'function.php';
$id = $_SESSION['id'];


$hasil = tampil("SELECT * FROM mPagi WHERE id_user = $id");
$siang = tampil("SELECT * FROM msiang WHERE id_user = $id");
$malam = tampil("SELECT * FROM mMalam WHERE id_user = $id");
$cemilan = tampil("SELECT * FROM cemilan WHERE id_user = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Document</title>
  <!--bootstrap-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!---->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="font/css/font-awesome.min.css">
  <!--Owl Carousel-->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <style type="text/css">
    .a {

      display: none;
    }

    .btn {
      border-radius: 0px;
    }
  </style>
</head>

<body>


  <?php
  include 'nav.php';

  ?>






  <div class="container">
    <div class="row">

      <div class="col-md-12">

        <div class="row mt-5">
          <div class="col-md-12">
            <h5>$kebutuhankalori</h5>
            <div class="card">
              <div class="card-body">
                <?php $total = 0;
                $jum = 0;
                foreach ($hasil as $h) {
                  $total += $h['kal'];
                }
                $kalori = $jum - $total;
                ?>
                <h4 style="display: inline-block;" class="black">Makan Pagi</h4>
                <!-- Button trigger modal -->
                <span>
                  <a href="cari.php?mk=Makan Pagi&id=mpagi">
                    <button type="button" class="btn btn-hijau tambah" value="Makan Siang">
                      <i id="icon" class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                  </a>
                </span>
                <hr>
                <div class="kalori mt-2">
                  <p style="display: inline-block;"><?= $kalori; ?> Kalori</p>
                  <span>
                    <button class="btn btn-hijau" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      <i id="icon" class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                  </span>
                </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div class="card card-kalori card-body pagi">
                  <?php foreach ($hasil as $p) : ?>
                    <p><?= $p['makanan']; ?></p>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php $total = 0;
                $jum = 0;
                foreach ($siang as $h) {
                  $total += $h['kal'];
                }
                $kalori = $jum - $total;
                ?>
                <h4 style="display: inline-block;" class="black">Makan Siang</h4>
                <!-- Button trigger modal -->
                <span>
                  <a href="cari.php?mk=Makan Siang&id=mSiang">
                    <button type="button" class="btn btn-hijau tambah" value="Makan Siang">
                      <i id="icon" class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                  </a>
                </span>
                <hr>
                <div class="kalori mt-2">
                  <p style="display: inline-block;"><?= $kalori; ?> Kalori</p>
                  <span>
                    <button class="btn btn-hijau" type="button" data-bs-toggle="collapse" data-bs-target="#col" aria-expanded="false" aria-controls="collapseExample">
                      <i id="icon" class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                  </span>
                </div>
              </div>
              <div class="collapse" id="col">
                <div class="card card-kalori card-body">
                  <?php foreach ($siang as $s) : ?>
                    <p><?= $s['makanan']; ?>p</p>
                  <?php endforeach;  ?>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 style="display: inline-block;" class="black">Makan Malam</h4>
                    <!-- Button trigger modal -->
                    <span>
                      <a href="cari.php?mk=Makan Malam&id=mMalam">
                        <button type="button" class="btn btn-hijau tambah" value="Makan Siang">
                          <i id="icon" class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                      </a>
                    </span>
                    <hr>
                    <div class="kalori mt-2">
                      <?php $total = 0;
                      $jum = 0;
                      foreach ($malam as $h) {
                        $total += $h['kal'];
                      }
                      $kalori = $jum - $total;
                      ?>
                      <p style="display: inline-block;"><?= $kalori; ?> Kalori</p>
                      <span>
                        <button class="btn btn-hijau" type="button" data-bs-toggle="collapse" data-bs-target="#malam" aria-expanded="false" aria-controls="collapseExample">
                          <i id="icon" class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                  <div class="collapse" id="malam">
                    <div class="card card-kalori card-body">
                      <?php foreach ($malam as $m) : ?>
                        <p><?= $m['makanan']; ?>p</p>
                      <?php endforeach;  ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 style="display: inline-block;" class="black">Cemilan</h4>
                    <!-- Button trigger modal -->
                    <span>
                      <a href="cari.php?mk=Cemilan&id=cemilan">
                        <button type="button" class="btn btn-hijau tambah" value="Makan Siang">
                          <i id="icon" class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                      </a>
                    </span>
                    <hr>
                    <div class="kalori mt-2">
                      <?php $total = 0;
                      $jum = 0;
                      foreach ($cemilan as $h) {
                        $total += $h['kal'];
                      }
                      $kalori = $jum - $total;
                      ?>
                      <p style="display: inline-block;"><?= $kalori; ?> Kalori</p>
                      <span>
                        <button class="btn btn-hijau" type="button" data-bs-toggle="collapse" data-bs-target="#cemilan" aria-expanded="false" aria-controls="collapseExample">
                          <i id="icon" class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                  <div class="collapse" id="cemilan">
                    <div class="card card-kalori card-body">
                      <?php foreach ($cemilan as $c) : ?>
                        <p><?= $c['makanan']; ?>p</p>
                      <?php endforeach;  ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form action="" method="post">
                    <div class="form-group">

                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cari" placeholder="Cari Makanan">
                      <button type="submit" name="submit" class="btn btn-hijau mt-2">Cari</button>
                    </div>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn button-modal btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>

</body>
<!--bootstrap-->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!--Owl Carousel-->
<script src="js/owl.carousel.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.check').on('click', function() {

      const data = $(this).val()


      $.ajax({
        type: 'POST',
        url: 'function.php',
        data: {
          data: data
        },
        success: function() {

          alert("data berhasil di input")
        }
      });
    })


    $('.tambah').on('click', function() {
      const val = $(this).val()
      $('.modal-title').text(val)

    })
  })
</script>

</html>
