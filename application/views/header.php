<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from gamin.simpleqode.com/Sunset/1.1.0/index-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Mar 2018 06:50:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url().'assets/' ?>ico/favicon.ico">

    <title>Sunset Hotel | Hotel Premium HTML Template</title>

    <!-- CSS Plugins -->
    <link href="<?php echo base_url().'assets/' ?>plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/theme.css">
    <!--endbuild-->
<!-- 
    ================================================== -->
    
<!--  js test  -->
    
    
    
<!--  end of js test  -->

    <!-- JS Global -->
    <script src="<?php echo base_url().'assets/' ?>plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="<?php echo base_url().'assets/' ?>plugins/waypoints/lib/jquery.waypoints.min.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="<?php echo base_url().'assets/' ?>js/theme.js"></script>
    <!-- endbuild -->

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&amp;" async defer></script>
    
  </head>
  <body id="index__page">

    <!-- Back to top button
    ================================================== -->
    <a id="back-to-top" href="#section__home" class="btn btn-top back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
      <i class="ion-android-arrow-up"></i>
    </a>

    <!-- PRELOADER
    ================================================== -->
    <!-- <div id="loader-wrapper">
      <div id="loader"></div>
    </div>  -->
    <!-- Info Section
    ================================================== -->
    <div class="section__info">
      <div class="container">
        <div class="section_info__body">
          <div class="info__column-left">
            <div class="section_info__contact hidden-xs">
              <p>
                <i class="icon ion-android-mail"></i> <?php echo $kontak->kontak_email;?>
              </p>  
            </div> <!-- .section_info__contact -->
            <div class="section_info__contact hidden-xs">
              <p>
                <i class="icon ion-android-call"></i> <?php echo $kontak->kontak_telepon;?>
              </p>  
            </div> <!-- .section_info__contact -->
          </div> <!-- .info__column-left -->
          <div class="info__column-right">
            <ul class="social__icons">
              <!-- <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li> -->
            </ul> <!-- .social__icons -->
            
            
          </div> <!-- .info__column-right -->
        </div> <!-- .section_info__body -->
      </div> <!-- .container -->
    </div> <!-- .section__info -->

    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-default">
      <div class="container">
    
        <!-- Header -->
        <div class="navbar-header">

          <!-- Collapse toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a class="navbar-brand" href="<?php echo base_url('home') ?>">
            <h3 class="navbar-brand__logo">Sunset Hotel</h3>
            <p class="navbar-brand__sublogo">Grand</p>
          </a>
        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <!-- <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="icon ion-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="rooms-1.html">Rooms 1</a></li>
              <li><a href="rooms-2.html">Rooms 2</a></li>
              <li><a href="room-detail.html">Room detail</a></li>
            </ul>
          </li>
          </ul> -->
          <ul class="nav navbar-nav navbar-left">
            <li <?php if ($aktif=="beranda") {echo 'class="active"';} ?>><a href="<?php echo base_url('home') ?>" >Beranda</a></li>
            <li <?php if ($aktif=="tentang") {echo 'class="active"';} ?>><a href="<?php echo base_url('home/tentang') ?>">Tentang</a></li>
            <li <?php if ($aktif=="Kamar") {echo 'class="active"';} ?>><a href="<?=site_url('home/tampil_room');?>">Kamar</a></li>
            <li <?php if ($aktif=="facilities") {echo 'class="active"';} ?>><a href="<?=site_url('home/tampil_facilities');?>">Fasilitas</a></li>
            <li <?php if ($aktif=="galleri") {echo 'class="dropdown active"';}else{echo 'class="dropdown"';} ?>>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeri <i class="icon ion-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?=site_url('home/tampil_gallery');?>">Foto</a></li>
                <li><a href="<?=site_url('home/tampil_video');?>">Video</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li <?php if ($aktif=="reservation") {echo 'class="active"';} ?>><a href="<?=site_url('home/tampil_reservation');?>">Reservasi</a></li>
            <li <?php if ($aktif=="blog") {echo 'class="active"';} ?>><a href="<?=site_url('home/tampil_blog');?>">Paket Wisata</a></li>
            <li <?php if ($aktif=="event") {echo 'class="active"';} ?>><a href="<?=site_url('home/tampil_event');?>">Promo</a></li>

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon ion-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="gallery-fullwidth.html">Gallery full width</a></li>
                <li><a href="gallery-boxed.html">Gallery boxed</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-item.html">Blog Item</a></li>
                <li><a href="404page.html">404 Page</a></li>
              </ul>
            </li> -->
            <li <?php if ($aktif=="hubungi") {echo 'class="active"';} ?>><a href="<?php echo base_url('home/hubungi') ?>">Kontak</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>
