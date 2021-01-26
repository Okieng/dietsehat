<?php  
session_start();
require 'function.php';


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
              <a href="makanan.php" class="nav-link">
                <figure class="figure">
                  <img src="img/home-512.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption">Home</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="bb.php" class="nav-link">
                <figure class="figure">
                 <i class="fa fa-balance-scale fa-2x text-white" aria-hidden="true"></i>
                  <figcaption class="figure-caption">Berat Badan</figcaption>
                </figure>
              </a>
            </li>
             <li class="nav-item">
              <a href="resep.php" class="nav-link">
                <figure class="figure">
                 <i class="fa fa-book text-white fa-2x" aria-hidden="true"></i>
                  <figcaption class="figure-caption">Cari Resep</figcaption>
                </figure>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <figure class="figure">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <figcaption class="figure-caption">Log Out</figcaption>
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
          <div class="row">
          	<h5 class="text-center">Cari Resep Makanan</h5>
          	<hr>
          	<div class="col-md-8">
          		 <form action="" method="post">
		           	 <input class="form-control mr-sm-2" type="search" placeholder="Cari Makanan" aria-label="Search" name="cari">
		    		<button class="btn btn-outline-success my-2 my-sm-0 mt-2" type="submit" name="submit">Search</button>    
		           </form>   
          	</div>
          </div>
         <?php if(isset($_POST['submit'])) : ?>

          <div class="container">
          	<div class="row">
          		<span style="display: none"><?php foreach(getResep($_POST['cari']) as $r) : ?></span>
           		<div class="col-md-3 mt-2">
           			<div class="card" style="width: 15rem;">
					  <img class="card-img-top" src="<?= $r['recipe']['image']; ?>" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-title text-bold"><?= $r['recipe']['label']; ?></p>
					    <p class="card-text"><?= $r['recipe']['calories']; ?> Kalori</p>
					    <ul>
					    	<li><?= $r['recipe']['ingredientLines'][0]; ?></li>
					    </ul>
					    <a href="<?= $r['recipe']['url']; ?>">Baca Resep</a>
					  </div>
					</div>
           		</div>
           	<?php endforeach; ?>
          	</div>
          </div>
        <?php endif; ?>
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
            const nama = $(this).data('nama')
            const kal = $(this).data('kal')
            $.ajax({
                type: 'POST', 
                url: 'function.php', 
                data: {
                	'data': data,
                	'key': key,
                  'nama' : nama,
                  'kal' : kal
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


<!-- php -->
           		
           		<!-- endphp -->