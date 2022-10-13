<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KLIPING DIGITAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url('');?>/assets/images/favicon.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('');?>/assets/users/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/assets/users/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/users/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/assets/users/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/assets/users/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('');?>/assets/users/css/baru.css">

   <!-- Bootstr<ap CSS File -->
  <link href="<?php echo base_url('');?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('');?>/depan/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/depan/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/depan/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/depan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>/depan/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('');?>/depan/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url().'home'?>" class="logo d-flex align-items-center">
        <h1>KLIPING DIGITAL</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><img src="<?php echo base_url('');?>/theme/images/logo1.png" width="50px" height="60px"></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->

  <!-- Search -->
    <div class="container" data-aos="fade-up">
    <p></p>
    <form action="<?php echo base_url('index.php/selengkapnya/hasil')?>" action="GET">
      <input type="search" id="cari" name="cari" placeholder="Cari Disini ..." style="width: 360px;">
      <input type="submit" class="button button-primary" value="Cari">
        </div>
          </form>
            <p></p>               

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        
        <div class="row about-cols" id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


          <?php foreach($data->result() as $row):?>       
          
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar?>" alt="" class="img-fluid">
              </div>
                <h2 class="title"><a href="<?php echo base_url().'assets/images/'.$row->tulisan_file ?>"><?php echo substr( $row->tulisan_judul,0,100);?></a></h2>
                <p></p>
            </div>
          </div>

          <?php endforeach;?>
        
      </div>

      <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>


      </div>
    </section><!-- End About Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Kliping Digital</span>
          </a>
          <p>Merupakan kumpulan berita harian yang terjadi di Kabupaten Lamongan disajikan dalam bentuk kliping yang dapat diakses secara online.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/diskominfolmg?s=20&t=UfTugdABgnzhIeHe2vGpfA" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/diskominfolmg" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/diskominfolmg" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://youtube.com/channel/UC1BoHTQ3I0xqW5Pr1Bpe6MQ" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="<?php echo base_url().'home'?>">Home</a></li>
            <li><a href="<?php echo base_url().'Administrator'?>">Login Admin</a></li>
            <li><a href="<?php echo base_url().'user/user'?>">Login User</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-contact text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            Jl. KH. Ahmad Dahlan No. 1 <br>
            Kauman, Sidoharjo, Kec. Lamongan<br>
            Kabupaten Lamongan, Jawa Timur <br><br>
            <strong>Phone:</strong> (0322) 321168<br>
            <strong>Email:</strong> diskominfolamongan@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('');?>/assets/users/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('');?>/assets/users/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('');?>/assets/jquery-ui/jquery.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/users/js/main.js"></script>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url().'depan/lib/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/jquery/jquery-migrate.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/easing/easing.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/hoverIntent.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/wow/wow.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/waypoints/waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/counterup/counterup.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/owlcarousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/isotope/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/lightbox/js/lightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/touchSwipe/jquery.touchSwipe.min.js'?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url().'depan/contactform/contactform.js'?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url().'depan/js/main.js'?>"></script>

</body>

</html>