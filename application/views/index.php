
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link href="<?php echo base_url().'assets/' ?>plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.waterwheelCarousel.js' ?>"></script>
  <!-- JS Plugins -->
  <script src="<?php echo base_url().'assets/' ?>plugins/moment-develop/moment.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/lightbox/dist/js/lightbox.min.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/owl.carousel.min.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/contact/contact.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
     var carousel = $("#carousel").waterwheelCarousel({
      flankingItems: 3,
      movingToCenter: function ($item) {
       $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
     },
     movedToCenter: function ($item) {
       $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
     },
     movingFromCenter: function ($item) {
       $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
     },
     movedFromCenter: function ($item) {
       $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
     },
     clickedCenter: function ($item) {
       $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
     }
   });
   });
 </script>
 <style type="text/css">
 #carousel {
   height:300px;
   position:relative;
 }
 #carousel img {
   width: 450px;
 }
</style>

<!-- CONTENT
	================================================== -->

	<!-- section home -->
	<section class="section__home"  id="section__home">

      <!-- CAROUSEL
        ================================================== -->
        <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

         <!-- Indicators -->
         <ol class="carousel-indicators">
          <?php $a=0; foreach ($tampil_slider as $ts){ ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $a ?>" <?php if ($a==0){ echo 'class="active"';}?>></li>
          <?php $a++; } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php $a=1; foreach ($tampil_slider as $ts){ ?>
            <div class="item <?php echo 'item__'.$a ?> <?php if ($a==1){ echo 'active';}?>" style="background: url('<?php echo base_url().'assets/' ?>images/<?php echo $ts['slider_gambar'] ?>') no-repeat center center / cover;">
              <div class="item__container">
                <div class="item-container__inner">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="item__content">
                          <h1 class="item_content__title"><?php echo $ts['slider_judul'] ?></h1>
                            <div class="divider">
                              <hr class="line1">
                              <hr class="line2">
                              <hr class="line1">
                            </div> <!-- / .divider -->
                          <p class="item_content__desc"><?php echo $ts['slider_deskripsi'] ?></p>
                          <!-- <a href="#section__about" class="btn btn-reservation">Explore it</a> -->
                        </div> <!-- .slide__content -->
                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .container -->
                </div> <!-- / .item-container__inner -->
              </div> <!-- / .item__container -->
            </div> <!-- / .item -->
          <?php $a++; } ?>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
 <img src="<?php echo base_url().'assets/' ?>images/arrow_left.svg" alt="Prev">
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
 <img src="<?php echo base_url().'assets/' ?>images/arrow_right.svg" alt="Next">
</a>
</div><!-- /.carousel-inner -->
</div><!-- /.carousel -->
</section> <!-- / .section__home -->

<!-- section availability -->
<section class="section__availability"> 
 <div class="container"> 
  <div class="row"> 
   <div class="col-sm-12"> 

    <!-- Reservation form --> 
    <form class="reservation__form" method="post" action="<?=site_url('home/cek_sedia');?>"> 
     <div class="form-group">
      <div class="form-group__inner"> 
       <label for="reservation__check-in">Tanggal Datang</label>
       <input type="text" class="form-control date" name="checkin" id="reservation__check-in" value="<?php if(!empty($this->session->userdata('checkin'))){ echo date('d M Y', strtotime($this->session->userdata('checkin'))); }else{ echo date('d M Y');} ?>"> 
     </div> <!-- / .form-group__inner --> 
   </div> <!-- / .form-group --> 
   <div class="form-group"> 
    <div class="form-group__inner"> 
     <label for="reservation__check-out">Tanggal Pergi</label>
     <input type="text" class="form-control date" name="checkout" id="reservation__check-out" value="<?php if(!empty($this->session->userdata('checkout'))){ echo date('d M Y', strtotime($this->session->userdata('checkout'))); }else{ echo date('d M Y', strtotime('+1 day'));} ?>">
   </div> <!-- / .form-group__inner --> 
 </div> <!-- / .form-group --> 
 <div class="form-group"> 
  <div class="form-group__inner"> 
   <label for="reservation__adults">Dewasa</label>
   <input type="text" id="reservation__adults" value="<?php if(!empty($this->session->userdata('dewasa'))){ echo $this->session->userdata('dewasa'); }else{ echo "2";} ?>" name="dewasa">
   <div class="dropdown reservation-dropdown">
    <button class="dropdown-toggle" type="button" id="adults-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span><?php if(!empty($this->session->userdata('dewasa'))){ echo $this->session->userdata('dewasa'); }else{ echo "2";} ?></span>
     <i class="icon ion-chevron-down"></i>
   </button>
   <ul class="dropdown-menu" aria-labelledby="adults-dropdown">
     <li><a href="#">1 </a></li>
     <li><a href="#">2 </a></li>
     <li><a href="#">3 </a></li>
   </ul>
 </div> <!-- . -->
</div> <!-- / .form-group__inner --> 
</div> <!-- / .form-group --> 
<div class="form-group"> 
  <div class="form-group__inner">
   <label for="reservation__children">Anak</label>
   <input type="text" id="reservation__children" value="<?php if(!empty($this->session->userdata('anak'))){ echo $this->session->userdata('anak'); }else{ echo "0";} ?>" name="anak">
   <div class="dropdown reservation-dropdown">
    <button class="dropdown-toggle" type="button" id="children-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span><?php if(!empty($this->session->userdata('anak'))){ echo $this->session->userdata('anak'); }else{ echo "0";} ?></span>
     <i class="icon ion-chevron-down"></i>
   </button>
   <ul class="dropdown-menu" aria-labelledby="children-dropdown">
     <li><a href="#">0 </a></li>
     <li><a href="#">1 </a></li>
     <li><a href="#">2 </a></li>
   </ul>
 </div> <!-- . -->
</div> <!-- / .form-group__inner --> 
</div> <!-- / .form-group -->  

<div class="form-group"> 
  <div class="form-group__inner">
   <label for="reservation__children">Kode Promosi</label>
   <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan Kode" value="<?php if(!empty($this->session->userdata('id_promo'))){ echo $this->session->userdata('id_promo');} ?>">
</div> <!-- / .form-group__inner --> 

</div> 
</div> <!-- / .row -->
<div class="row"> 
 <div class="col-xs-12">

  <!-- Reservation button --> 
  <div class="reservation__button">
   <button type="submit" class="btn btn-reservation">cek Ketersediaan <?php $this->session->sess_destroy(); ?></button>
  </div> <!-- / .reservation__button -->  

</form> <!-- / .reservation__form --> 
</div> 
</div> <!-- / .row -->  
</div> <!-- / .container --> 
</section> <!-- .section__availability -->

<!-- section about -->
<section class="section__about" id="section__about">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title">Selamat Datang di <strong>Sunset Resort</strong></h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container-fluid">
  <div class="row">
   <div class="section_about__content">
    <div class="col-md-6">
     <div class="about__pic">
        <img src="<?php echo base_url().'assets/' ?>images/about/<?php echo $tentang->about_logo;?>" class="img-responsive" alt="<?php echo $tentang->about_judul;?>">
    </div> <!-- / .about__pic -->
  </div>
  <div class="col-md-6">
   <div class="about__desc">
    <p class="about_desc__subtitle">Tentang Kami</p>
      <h3 class="about_desc__title"><?php echo $tentang->about_judul;?></h3>
      <p class="about_desc__desc"><?php echo substr($tentang->about_deskripsi, 0, 100);?></p>
      <h4 class="about_desc__quote"><?php echo substr($tentang->about_deskripsi2, 0, 100);?></h4>
    <a href="<?php echo base_url("home/tentang") ?>" class="btn btn-default">Lebih Lanjut</a>
  </div> <!-- / .about__desc -->
</div>
</div> <!-- / .section_about__content -->
</div> <!-- / .row -->
</div>
</section> <!-- / .section__about -->

<!-- section best-rooms -->
<section class="section__best-rooms">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title"><strong>Kamar Terbaik</strong> Kami</h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
   <p class="section__subtitle">Berikut kamar terbaik kami, silahkan untuk mengecek dan memesannya.</p>
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container">
  <div class="best-rooms__content">
   <div class="row">
    <?php foreach ($list_kamar as $lk) { ?>
    <?php 
      if (!empty($this->session->userdata('checkin'))) {
        $ci = date('Y-m-d',strtotime($this->session->userdata('checkin')));
      }else{
        $ci = date('Y-m-d');
      }
      
      if (!empty($this->session->userdata('checkout'))) {
        $co = date('Y-m-d',strtotime($this->session->userdata('checkout')));
      }else{
        $co = date('Y-m-d', strtotime('+1 day'));
      }
      $stop='true'; 
      $harga=0;
      $j=0;
      while ($stop=='true') {
          $stop='false';
        if ($ci==$co) {
          $stop='false';
        }else{
        $j++;
          $weekDay = date('N', strtotime($ci));
          if ($weekDay == 0 || $weekDay == 6){
            $harga+=$lk->hight_kamar;
          }else{
            $harga+=$lk->low_kamar;
          }
          $stop='true';
          $ci = date('Y-m-d', strtotime($ci.'+1 day'));
        }
      }
      $total=$harga/$j;
      ?>
    <div class="col-sm-6">
     <figure class="best-rooms__item">
      <img src="<?php echo base_url().'assets/' ?>images/kamar/<?php echo $lk->nama_gambar_kamar ?>" class="img-responsive" alt="<?php echo $lk->nama_kamar ?>">
      <figcaption>
       <h3><?php echo $lk->nama_kamar ?></h3>
       <div class="item__price">
        <?php echo 'RP.'.$total ?> <small>/ Malam</small>
      </div>
      <p class="item__desc"><?php echo substr($lk->deskripsi_kamar, 0,100) ?></p>
      <a href="<?=site_url('home/tampil_room_detail/'.$lk->id_kamar);?>" class="btn-book">Detail <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
      <a href="<?php echo base_url('reservasi') ?>" class="btn-book">Pesan <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
    </figcaption>
  </figure> <!-- / .best-rooms__item -->
</div>
<?php } ?>

</div> <!-- / .row -->
<div class="row">
  <div class="col-xs-12">
   <div class="rooms__button">
    <a href="<?php echo base_url('home/tampil_room') ?>" class="btn">Lihat Semua Kamar</a>
  </div> <!-- / .rooms__button -->
</div>
</div> <!-- / .row -->
</div> <!-- / .best-rooms__content -->
</div> <!-- / .container -->
</section> <!-- / .section__best-rooms -->

<!-- section services -->
<section class="section__services">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">        
    <h2 class="section__title"><strong>Fasilitas </strong><span style="color: white"> Kami</span></h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
   <p class="section__subtitle">Berikut fasilitas dari Resort kami.</p>
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
 <div class="container-fluid">
  <div class="row">
   <?php foreach ($list_fasilitas as $lf) { ?>
          <div class="col-md-3 col-sm-4">
            <div class="rooms__item">
              <div class="rooms__pic">
                <img src="<?php echo base_url().'assets/' ?>images/fasilitas/<?php echo $lf->gambar_fasilitas ?>" class="img-responsive" alt="<?php echo $lf->nama_fasilitas ?>">
              </div> <!-- / .about__pic -->
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title" style="color: white"><?php echo $lf->nama_fasilitas ?></h2>
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc"><?php echo substr($lf->deskripsi_fasilitas, 0,200) ?></p>
                
              </div> <!-- / .rooms__desc -->
            </div> <!-- .rooms__item -->
          </div>
          <?php } ?>
  <div class="col-xs-12">
   <div class="rooms__button">
    <br>
    <a href="<?php echo base_url('home/tampil_facilities') ?>" class="btn" style="color: white">Lihat Semua Fasilitas</a>
  </div> <!-- / .rooms__button -->
</div>
</div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__services -->

<!-- section gallery -->
<section class="section__gallery">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title"><strong>Galeri</strong> Kami</h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
   <p class="section__subtitle">Berikut galeri dari Resort kami.</p>
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container-fluid">
  <!-- <div class="row">
   <div class="col-sm-12">
    <div id="carousel">
     <img src="<?php echo base_url().'assets/images/gallery_img1.jpg' ?>" id="item-1" />
     <img src="<?php echo base_url().'assets/images/gallery_img2.jpg' ?>" id="item-2" />
     <img src="<?php echo base_url().'assets/images/gallery_img3.jpg' ?>" id="item-3" />
     <img src="<?php echo base_url().'assets/images/gallery_img4.jpg' ?>" id="item-4" />
     <img src="<?php echo base_url().'assets/images/gallery_img5.jpg' ?>" id="item-5" />
   </div>
 </div>
</div> -->
        <div class="row">
          <div class="col-xs-12">
            <div id="gallery__carousel" class="owl-carousel owl-theme gallery__body">
              <?php foreach ($list_foto as $lf) { ?>
              <div class="gallery__item">
                <a href="<?php echo base_url().'assets/' ?>images/foto/<?php echo $lf->gallery_gambar ?>" data-lightbox="gallery" data-title="<?php echo $lf->gallery_nama ?>">
                  <img src="<?php echo base_url().'assets/' ?>images/foto/<?php echo $lf->gallery_gambar ?>" class="img-responsive" alt="<?php echo $lf->gallery_nama ?>">
                </a>
              </div> <!-- .gallery__item -->
              <?php } ?>
            </div> <!-- .gallery__body -->
          </div>
        </div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__gallery -->

<!-- section testimonials -->

<!-- section Events -->
<section class="section__events">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title">Paket <strong>Wisata</strong></h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container-fluid">
  <div class="row">
   <div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3 col-lg-push-9">
    <div class="news__title">
     <div>Paket Wisata</div>
   </div>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
  <div class="events__item">
   <div class="events-item__img">
    <img src="<?php echo base_url().'assets/' ?>images/events_img1.jpg" class="img-responsive" alt="...">
  </div>
  <div class="events-item__body">
    <div class="events-item__header">
     <div class="events-item__date">
      <p class="item_date__nbr">15</p>
      <p class="item_date__mounth">March</p>
    </div> <!-- .events-item__date -->
    <div class="events-item__content">
      <div class="events-item__title">
       <h3>News post title</h3>
     </div>
     <div class="events-item__info">
       <ul class="item-info__list">
        <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
        <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
      </ul> <!-- .item-info__list -->
    </div> <!-- .events-item__info -->
  </div> <!-- .events-item__content -->
</div> <!-- .events-item__header -->
<div class="events-item__text">
 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
</div> <!-- .events-item__text -->
<div class="events-item__link">
 <a href="blog-item.html">Read More ➔</a>
</div> <!-- .events-item__link -->
</div> <!-- / .events-item__body -->
</div> <!-- .events__item -->
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
  <div class="events__item">
   <div class="events-item__img">
    <img src="<?php echo base_url().'assets/' ?>images/events_img2.jpg" class="img-responsive" alt="...">
  </div>
  <div class="events-item__body">
    <div class="events-item__header">
     <div class="events-item__date">
      <p class="item_date__nbr">18</p>
      <p class="item_date__mounth">March</p>
    </div> <!-- .events-item__date -->
    <div class="events-item__content">
      <div class="events-item__title">
       <h3>News post title</h3>
     </div>
     <div class="events-item__info">
       <ul class="item-info__list">
        <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
        <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
      </ul> <!-- .item-info__list -->
    </div> <!-- .events-item__info -->
  </div> <!-- .events-item__content -->
</div> <!-- .events-item__header -->
<div class="events-item__text">
 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
</div> <!-- .events-item__text -->
<div class="events-item__link">
 <a href="blog-item.html">Read More ➔</a>
</div> <!-- .events-item__link -->
</div> <!-- / .events-item__body -->
</div> <!-- .events__item -->
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
  <div class="events__item">
   <div class="events-item__img">
    <img src="<?php echo base_url().'assets/' ?>images/events_img3.jpg" class="img-responsive" alt="...">
  </div>
  <div class="events-item__body">
    <div class="events-item__header">
     <div class="events-item__date">
      <p class="item_date__nbr">21</p>
      <p class="item_date__mounth">March</p>
    </div> <!-- .events-item__date -->
    <div class="events-item__content">
      <div class="events-item__title">
       <h3>News post title</h3>
     </div>
     <div class="events-item__info">
       <ul class="item-info__list">
        <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
        <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 9 Comments</li>
      </ul> <!-- .item-info__list -->
    </div> <!-- .events-item__info -->
  </div> <!-- .events-item__content -->
</div> <!-- .events-item__header -->
<div class="events-item__text">
 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
</div> <!-- .events-item__text -->
<div class="events-item__link">
 <a href="blog-item.html">Read More ➔</a>
</div> <!-- .events-item__link -->
</div> <!-- / .events-item__body -->
</div> <!-- .events__item -->
</div>
</div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__events -->

<!-- section Contacts -->
<section class="section__contacts">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title"><strong>Kontak</strong> Kami</h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="section_row">
  <div id="map"></div>
</div> <!-- / .section_row -->
<div class="container">
  <div class="row">
   <div class="col-sm-5">
    <div class="contacts__info">
     <p class="contacts_info__title"><?php echo $kontak->kontak_judul;?></p>
     <ul class="contacts_info__content">
      <li>
       <i class="icon ion-android-pin"></i>
       <div class="contact-info-content">
        <div class="title">Alamat</div>
        <div class="description"><?php echo $kontak->kontak_alamat;?></div>
      </div>
    </li>
    <li>
     <i class="icon ion-android-call"></i>
     <div class="contact-info-content">
      <div class="title">Telepon</div>
      <div class="description"><?php echo $kontak->kontak_telepon;?></div>
    </div>
  </li>
  <li>
   <i class="icon ion-android-mail"></i>
   <div class="contact-info-content">
    <div class="title">E-mail</div>
    <div class="description"><?php echo $kontak->kontak_email;?></div>
  </div>
</li>
</ul> <!-- .contacts_info__content -->
</div> <!-- / .contacts__info -->
</div>

</div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__contacts -->
<script type="text/javascript">
 (function() {
  window.onload = function() {
   var map;
   var myLatLng = {lat: <?php echo $kontak->kontak_lat;?>, lng:  <?php echo $kontak->kontak_long;?>};

   var styleArray = [
   {
    "featureType": "all",
    "stylers": [
    {
     "saturation": 0
   },
   {
     "hue": "#e7ecf0"
   }
   ]
 },
 {
  "featureType": "road",
  "stylers": [
  {
   "saturation": -70
 }
 ]
},
{
  "featureType": "transit",
  "stylers": [
  {
   "visibility": "off"
 }
 ]
},
{
  "featureType": "poi",
  "stylers": [
  {
   "visibility": "off"
 }
 ]
},
{
  "featureType": "water",
  "stylers": [
  {
   "visibility": "simplified"
 },
 {
   "saturation": -60
 }
 ]
}
]

var mapOptions = {
  zoom: 12,
  center: myLatLng,
  styles: styleArray,
  scrollwheel: false
};

map = new google.maps.Map(document.getElementById('map'), mapOptions);

var image = '<?php echo base_url().'assets/' ?>images/map_marker.png';
var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  icon: image,
  title: 'Sunset Hotel'
});

};
})();
</script>