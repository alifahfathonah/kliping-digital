<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KLIPING DIGITAL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  
  <!-- Bootstr<ap CSS File -->
  <link href="<?php echo base_url().'depan/lib/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url().'depan/lib/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/animate/animate.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/ionicons/css/ionicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/owlcarousel/assets/owl.carousel.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/lightbox/css/lightbox.min.css'?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url().'depan/css/style.css'?>" rel="stylesheet">

  <style type="text/css">
  .wrapper{
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
  }

  .btn{
    padding: 8px 15px;
    text-align: center;
    text-decoration: none;
    text-transform: capitalize;
    font-size: sans-serif;
    color: #18d26e;
    font-size: 18px;
    display: inline-block;
    border: 2px solid #18d26e;
    background: #fff;
    border-radius: 0.3em;
    transition: all 0.2s ease-in-out;
    position: relative;
    overflow: hidden;
  }

  .btn:before{
    content: '';
    background-color: rgba(255,255,255,0.5);
    height: 100%;
    width: 3em;
    display: block;
    position: absolute;
    top: 0;
    left: -4.5em;
    transform: skewX(-45deg) translateX(0);
    transition: none;
  }

  .btn:hover{
    background-color: #18d26e;
    color: #fff;
    border-bottom: 4px solid #18d26e;
  }

  .btn:hover:before{
    transform: skewX(-45deg) translateX(14.5em);
    transition: all 0.5s ease-in-out;
  }

  @keyframes sheen{
    0% {
      transform: skewY(-45deg) translateX(0);
    }
    100%{
      transform: skewY(-45deg) translateX(12.5em);
    }
  }

  .dropbtn {
  background-color: #18d26e;
  color: white;
  padding: 15px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 6px;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #808080;}
  .dropdown:hover .dropdown-content {display: block;}
  .dropdown:hover .dropbtn {background-color: #3e8e41;}

  </style>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
      	<a class="h5co"><img src="theme/images/logo1.png" width="80px" height="90px"> </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li><a href="<?php echo base_url().'pendaftaran'?>">SIGN UP</a></li>
          <li><a href="<?php echo base_url().'user/user'?>">LOGIN USER</a></li>
          <li><a href="<?php echo base_url().'Administrator'?>">LOGIN ADMIN</a></li>-->
        <div class="dropdown" style="float:right;">
            <button class="dropbtn">Login</button>
            <div class="dropdown-content">
              <a href="<?php echo base_url().'Administrator'?>">Admin</a>
              <a href="<?php echo base_url().'user/user'?>">User</a>
            </div>
          </div>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>


  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/pemkab.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Kliping Digital Kabupaten Lamongan</h2>
               <h3><p>Dinas Komunikasi dan Informatika Lamongan </p></h3> 
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/lam3.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               <h2>Kliping Digital Kabupaten Lamongan</h2>
               <h3><p>Dinas Komunikasi dan Informatika Lamongan </p></h3> 
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/lam4.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Kliping Digital Kabupaten Lamongan</h2>
               <h3><p>Dinas Komunikasi dan Informatika Lamongan </p></h3> 
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/lam1.jpeg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Kliping Digital Kabupaten Lamongan</h2>
               <h3><p>Dinas Komunikasi dan Informatika Lamongan </p></h3> 
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/lam9.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               <h2>Kliping Digital Kabupaten Lamongan</h2>
               <h3><p>Dinas Komunikasi dan Informatika Lamongan </p></h3>               
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

   

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
  
      <div class="container">

        <header class="section-header">
          <h3>KLIPING DIGITAL</h3>
          <p>KUMPULAN BERITA HARIAN YANG TERJADI DI KABUPATEN LAMONGAN</p>
        </header>
        
        <div class="row about-cols" id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


          <?php foreach($data->result() as $row):?>       
          
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar?>" alt="" class="img-fluid">
                <header class="section-header">
                </header>
              </div>
                <h2 class="title"><a href="<?php echo base_url().'assets/images/'.$row->tulisan_file ?>"><?php echo substr( $row->tulisan_judul,0,100);?></a></h2>
                <p></p>
            </div>
          </div>

          <?php endforeach;?>

          <div class="container mt-3">
            <ul class="pagination justify-content-center">
              <br><br>
              <div class="wrapper">
                <a href="<?php echo base_url().'selengkapnya'?>" class="btn">Lihat Selengkapnya</a>
              </div>
              </div>
            </ul>
          </div>
        
      </div>
    </div>

    </section><!-- #about -->

    

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>MANAJEMEN DATA</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

        <?php foreach($album->result() as $row):?>
          <div class="testimonial-item">
            <img src="<?php echo base_url().'assets/images/'.$row->album_cover?>" class="testimonial-img" alt="">
            <h3><?php echo $row->album_nama;?></h3>
          </div>

          <?php endforeach;?>
          

        </div>

      </div>
    </section><!-- #testimonials -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>KLIPING DIGITAL</strong>. All Rights Reserved
        <br>Designed by <a href="https://lamongankab.go.id/diskominfo">Dinas Komunikasi dan Informatika Lamongan</a>
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
