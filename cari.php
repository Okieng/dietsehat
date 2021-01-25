<?php  
require 'function.php';

$m = $_GET['mk'];
$key = $_GET['id'];
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
    <!--Owl Carousel-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <style type="text/css">
      .a {

        display: none;
      }
    </style>
</head>
<body>


    <nav class="navbar anjing fixed-bottom bg-green navbar-expand">
        <div class="container">
          <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <figure class="figure">
                  <img src="img/home-512.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">Home</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="#event" class="nav-link">
                <figure class="figure">
                  <img src="image/wedding-day.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">Event</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="#gallery" class="nav-link">
                <figure class="figure">
                  <img src="image/wedding-video.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">Gallery</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="#story" class="nav-link">
                <figure class="figure">
                  <img src="image/conversation.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">asd</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="#couple" class="nav-link">
                <figure class="figure">
                  <img src="img/weight-scale.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">Couple</figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

    <section class="jenis-diet">
      <div class="container">
        <div class="owl-carousel">
            <div class="item card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Diet Sehat</h5>
                  <p class="card-text">Tinggi Protein</p>
                  <p class="card-text">2100 Kalori</p>
                </div>
              </div>
              <div class="item card bg-dark text-white">
                <img src="img/2.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">OlahRaga</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
              <div class="item card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
              <div class="card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
              <div class="card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
              <div class="card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
              <div class="card bg-dark text-white">
                <img src="img/carousel-image-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
          </div>
      </div>
    </section>
    
    <div class="container">
        <hr>
    </div>
    <div class="container">
        <div class="row">
        	<h1 class="text-center mb-3"><?= $m; ?></h1>
        <div class="col-md-8">
           <form action="" method="post">
           	 <input class="form-control mr-sm-2" type="search" placeholder="Cari Makanan" aria-label="Search" name="cari">
    		<button class="btn btn-outline-success my-2 my-sm-0 mt-2" type="submit" name="submit">Search</button>    
           </form>   
        <div class="row mt-5">
            <div class="col-md-12">
               <?php if(isset($_POST['submit'])): ?>
             
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Menu</th>
                          <th scope="col">Kalori</th>
                          <th scope="col">Tambah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i= 1; ?>
                        <div class="a"><?php foreach(getCari($_POST{'cari'}) as $c) : ?></div>
                        <tr>
                          <th scope="row"><?= $i; ?></th>
                         <td><?= $c['fields']['item_name']; ?></td>
                         <td><?= $c['fields']['nf_calories']; ?> kal</td>
                         <td> <input type="checkbox" class="check" aria-label="Checkbox for following text input" value="<?= $c['fields']['item_name']; ?>" data-id="<?= $key; ?>"></td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
              <?php endif; ?>
            </div>
                    <a href="index.php"><button type="button" class="btn btn-success">Kembali</button></a>
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
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
        $('.check').on('click', function() {
            
            const data = $(this).val()
            const key = $(this).data('id')

            $.ajax({
                type: 'POST', 
                url: 'function.php', 
                data: {
                	'data': data,
                	'key': key
                },
                success: function()
                {
                 
                 alert("data berhasil di input")
                }
            });
        })


        $('.tambah').on('click', function(){
            const val = $(this).val()
            $('.modal-title').text(val)
            
        })
    })
  </script>
</html>
