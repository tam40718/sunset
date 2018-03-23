<head>
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.theme.default.min.css">
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
</head>

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
    <form class="reservation__form"> 
     <div class="form-group">
      <div class="form-group__inner"> 
       <label for="reservation__check-in">Arrival date</label>
       <input type="text" class="form-control date" id="reservation__check-in" value="24 December 2017"> 
     </div> <!-- / .form-group__inner --> 
   </div> <!-- / .form-group --> 
   <div class="form-group"> 
    <div class="form-group__inner"> 
     <label for="reservation__check-out">Departure date</label>
     <input type="text" class="form-control date" id="reservation__check-out" value="12 January 2018">
   </div> <!-- / .form-group__inner --> 
 </div> <!-- / .form-group --> 
 <div class="form-group"> 
  <div class="form-group__inner"> 
   <label for="reservation__adults">Adults</label>
   <input type="text" id="reservation__adults">
   <div class="dropdown reservation-dropdown">
    <button class="dropdown-toggle" type="button" id="adults-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span>1 Adult</span>
     <i class="icon ion-chevron-down"></i>
   </button>
   <ul class="dropdown-menu" aria-labelledby="adults-dropdown">
     <li><a href="#">1 Adult</a></li>
     <li><a href="#">2 Adults</a></li>
     <li><a href="#">3 Adults</a></li>
   </ul>
 </div> <!-- . -->
</div> <!-- / .form-group__inner --> 
</div> <!-- / .form-group --> 
<div class="form-group"> 
  <div class="form-group__inner">
   <label for="reservation__children">Children</label>
   <input type="text" id="reservation__children">
   <div class="dropdown reservation-dropdown">
    <button class="dropdown-toggle" type="button" id="children-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span>1 Child</span>
     <i class="icon ion-chevron-down"></i>
   </button>
   <ul class="dropdown-menu" aria-labelledby="children-dropdown">
     <li><a href="#">1 Child</a></li>
     <li><a href="#">2 Children</a></li>
     <li><a href="#">3 Children</a></li>
   </ul>
 </div> <!-- . -->
</div> <!-- / .form-group__inner --> 
</div> <!-- / .form-group -->  
</form> <!-- / .reservation__form --> 

</div> 
</div> <!-- / .row -->
<div class="row"> 
 <div class="col-xs-12">

  <!-- Reservation button --> 
  <div class="reservation__button">
   <!-- <button type="submit" class="btn btn-reservation"> -->
    <a href="<?=site_url('home/tampil_room');?>" class="btn btn-reservation">Check availability</a></button>
  </div> <!-- / .reservation__button -->  

</div> 
</div> <!-- / .row -->  
</div> <!-- / .container --> 
</section> <!-- .section__availability -->

<!-- section about -->
<section class="section__about" id="section__about">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title">Welcome to <strong>Sunset Hotel</strong></h2>
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
      <img src="<?php echo base_url().'assets/' ?>images/about_img.jpg" class="img-responsive" alt="...">
    </div> <!-- / .about__pic -->
  </div>
  <div class="col-md-6">
   <div class="about__desc">
    <p class="about_desc__subtitle">About us</p>
    <h3 class="about_desc__title">Probably the best place to enjoy your life</h3>
    <p class="about_desc__desc">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
    <h4 class="about_desc__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
    <a href="about.html" class="btn btn-default">Learn More</a>
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
    <h2 class="section__title">Our <strong>Best rooms</strong></h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
   <p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container">
  <div class="best-rooms__content">
   <div class="row">
    <div class="col-sm-6">
     <figure class="best-rooms__item">
      <img src="<?php echo base_url().'assets/' ?>images/single_room.jpg" class="img-responsive" alt="...">
      <figcaption>
       <h3>Single room</h3>
       <div class="item__price">
        $50 <small>/ night</small>
      </div>
      <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
      <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
    </figcaption>
  </figure> <!-- / .best-rooms__item -->
</div>
<div class="col-sm-6">
 <figure class="best-rooms__item">
  <img src="<?php echo base_url().'assets/' ?>images/double_room.jpg" class="img-responsive" alt="...">
  <figcaption>
   <h3>Double room</h3>
   <div class="item__price">
    $135 <small>/ night</small>
  </div>
  <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
  <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
</figcaption>
</figure> <!-- / .best-rooms__item -->
</div>
</div> <!-- / .row -->
<div class="row">
  <div class="col-sm-6">
   <figure class="best-rooms__item">
    <img src="<?php echo base_url().'assets/' ?>images/deluxe_room.jpg" class="img-responsive" alt="...">
    <figcaption>
     <h3>Deluxe room</h3>
     <div class="item__price">
      $240 <small>/ night</small>
    </div>
    <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
    <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
  </figcaption>
</figure> <!-- / .best-rooms__item -->
</div>
<div class="col-sm-6">
 <figure class="best-rooms__item">
  <img src="<?php echo base_url().'assets/' ?>images/royal_room.jpg" class="img-responsive" alt="...">
  <figcaption>
   <h3>Royal room</h3>
   <div class="item__price">
    $320 <small>/ night</small>
  </div>
  <p class="item__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illum modi explicabo obcaecati odit, omnis quis alias.</p>
  <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
</figcaption>
</figure> <!-- / .best-rooms__item -->
</div>
</div> <!-- / .row -->
<div class="row">
  <div class="col-xs-12">
   <div class="rooms__button">
    <a href="rooms-1.html" class="btn">See all rooms</a>
  </div> <!-- / .rooms__button -->
</div>
</div> <!-- / .row -->
</div> <!-- / .best-rooms__content -->
</div> <!-- / .container -->
</section> <!-- / .section__best-rooms -->

<!-- section services -->
<section class="section__services">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-3 col-sm-6">
    <div class="services__item">
     <h2 class="services_item__title">Parking</h2>
     <div class="services_item__divider">
      <i class="icon ion-android-star"></i>
      <i class="icon ion-android-star"></i>
      <i class="icon ion-android-star"></i>
    </div> <!-- .services_item__divider -->
    <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel temporibus adipisci mollitia ducimus facilis nesciunt at minima magni optio, dignissimos, neque dolore iste labore dolor enim, ipsam quisquam, quae nihil!</p>
  </div> <!-- .services__item -->
</div>
<div class="col-md-3 col-sm-6">
  <div class="services__item">
   <h2 class="services_item__title">Fitness hall</h2>
   <div class="services_item__divider">
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
  </div> <!-- .services_item__divider -->
  <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eaque, eum. Voluptates corporis tenetur commodi nihil velit perspiciatis natus fugit rerum nisi, at, voluptas autem quisquam reprehenderit odit dolores quas!</p>
</div> <!-- .services__item -->
</div>
<div class="col-md-3 col-sm-6">
  <div class="services__item">
   <h2 class="services_item__title">Restaurant</h2>
   <div class="services_item__divider">
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
  </div> <!-- .services_item__divider -->
  <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt ullam porro ipsa, architecto, doloribus illo veritatis consequatur temporibus eveniet labore, vitae laudantium possimus placeat libero magnam.</p>
</div> <!-- .services__item -->
</div>
<div class="col-md-3 col-sm-6">
  <div class="services__item">
   <h2 class="services_item__title">Spa center</h2>
   <div class="services_item__divider">
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
    <i class="icon ion-android-star"></i>
  </div> <!-- .services_item__divider -->
  <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi voluptates, laudantium aspernatur, libero nulla ut. Quibusdam distinctio eaque cum officia expedita dolore, perspiciatis quisquam vel et neque tempora cupiditate.</p>
</div> <!-- .services__item -->
</div>
</div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__services -->

<!-- section gallery -->
<section class="section__gallery">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title">Our <strong>Gallery</strong></h2>
    <div class="divider">
     <hr class="line1">
     <hr class="line2">
     <hr class="line1">
   </div> <!-- / .divider -->
   <p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p>
 </div>
</div> <!-- / .row -->
</div> <!-- / .container -->
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-12">
    <div id="carousel">
     <img src="<?php echo base_url().'assets/images/gallery_img1.jpg' ?>" id="item-1" />
     <img src="<?php echo base_url().'assets/images/gallery_img2.jpg' ?>" id="item-2" />
     <img src="<?php echo base_url().'assets/images/gallery_img3.jpg' ?>" id="item-3" />
     <img src="<?php echo base_url().'assets/images/gallery_img4.jpg' ?>" id="item-4" />
     <img src="<?php echo base_url().'assets/images/gallery_img5.jpg' ?>" id="item-5" />
   </div>
 </div>
</div>
</div> <!-- / .container -->
</section> <!-- / .section__gallery -->

<!-- section testimonials -->

<!-- section Events -->
<section class="section__events">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"> 		  	
    <h2 class="section__title">Tour <strong>Packages</strong></h2>
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
     <div>Package</div>
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
    <h2 class="section__title"><strong>Contact</strong> us</h2>
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
     <p class="contacts_info__title">Information</p>
     <ul class="contacts_info__content">
      <li>
       <i class="icon ion-android-pin"></i>
       <div class="contact-info-content">
        <div class="title">Address</div>
        <div class="description">10987 1st Avenue, Lorem City, CA</div>
      </div>
    </li>
    <li>
     <i class="icon ion-android-call"></i>
     <div class="contact-info-content">
      <div class="title">Phone / Fax</div>
      <div class="description">+45 789 123 4544 / +45 789 123 4848</div>
    </div>
  </li>
  <li>
   <i class="icon ion-android-mail"></i>
   <div class="contact-info-content">
    <div class="title">E-mail</div>
    <div class="description">admin@sunsethotel.com</div>
  </div>
</li>
</ul> <!-- .contacts_info__content -->
</div> <!-- / .contacts__info -->
<p class="subheading">If you have any questions don't hesistate to contact us.</p>
</div>
<div class="col-sm-7">
  <div class="section-contacts__form_body">

   <p class="section-contacts__title">Get in touch</p>

   <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

   <!-- Alert message -->
   <div class="alert" id="form_message" role="alert"></div>

   <!-- Form -->
   <form id="form_sendemail" class="contacts__form">

    <!-- Email -->
    <div class="form-group">
     <label for="email" class="sr-only">Email address</label>
     <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
     <span class="help-block"></span>
   </div>

   <!-- Name -->
   <div class="form-group">
     <label for="name" class="sr-only">Name</label>
     <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
     <span class="help-block"></span>
   </div>

   <!-- Message -->
   <div class="form-group">
     <label for="message" class="sr-only">Message</label>
     <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
     <span class="help-block"></span>
   </div>

   <!-- Note -->
   <div class="form-group">
     <small class="text-muted">
      * All fields are mandatory.
    </small>
  </div>

  <!-- Submit -->
  <button type="submit" class="btn btn-default">
   Send Message
 </button>

</form> <!-- .contacts__form -->

</div> <!-- / .secction-contacts__form_body -->
</div>
</div> <!-- / .row -->
</div> <!-- / .container -->
</section> <!-- / .section__contacts -->
<script type="text/javascript">
 (function() {
  window.onload = function() {
   var map;
   var myLatLng = {lat: 12.032233, lng:  -118.256015};

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