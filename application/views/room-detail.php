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
    <!-- section text header -->
    <section class="section__text-header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title"><?php echo $list_kamar->nama_kamar ?></h1>
              <div class="divider blog-divider">
                <hr class="line1">
                <hr class="line2">
                <hr class="line1">
              </div> <!-- / .divider -->
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section text-header -->
                <br><br><br>
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
   <button type="submit" class="btn btn-reservation">cek Ketersediaan</button>
  </div> <!-- / .reservation__button -->  

</form> <!-- / .reservation__form --> 
</div> 
</div> <!-- / .row -->  
</div> <!-- / .container --> 
</section> <!-- .section__availability -->
    <!-- section room-detail -->
    <section class="section__room-detail">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-7 col-md-8">
    	    	<div class="room_detail__body">
              <div id="room-detail__carousel" class="owl-carousel owl-theme room-detail__gallery">
                <?php foreach ($list_gambar_kamar as $lgk) { ?>
                <div class="room_gallery__item">
                  <img src="<?php echo base_url().'assets/' ?>images/kamar/<?php echo $lgk->nama_gambar_kamar ?>" class="img-responsive" alt="<?php echo $lgk->ket_gambar_kamar ?>">
                </div> <!-- .room_gallery__item -->
                <?php } ?>
              </div> <!-- .room-detail__gallery -->
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
                      $harga+=$list_kamar->hight_kamar;
                    }else{
                      $harga+=$list_kamar->low_kamar;
                    }
                    $stop='true';
                    $ci = date('Y-m-d', strtotime($ci.'+1 day'));
                  }
                }
                $total=$harga/$j;
                ?>
              <div class="room_price__body">
                <h2 class="room__name"><?php echo $list_kamar->nama_kamar ?></h2>
                <p class="room__price"><span><?php echo 'RP.'.$total ?></span> / Malam</p>
              </div>
              <p class="subheading">Deskripsi Kamar</p>
              <div class="room__desc">
                <?php echo $list_kamar->deskripsi_kamar ?>
              </div><hr>
              <p class="subheading">Fasilitas</p>
              <div class="room__desc">
              <?php echo $list_kamar->fasilitas_kamar ?>
              </div>
              <a href="<?=site_url('home/pesan\/').$list_kamar->id_kamar;?>" class="btn">Pesan</a>
            </div> <!-- .room-detail__body -->
            <!-- <div class="room__reviews"> -->
              <!-- <p class="subheading">Room reviews</p> -->
              <!-- <ul class="reviews__list">
                <li class="review">
                  <div class="review__user">
                    Robert Jones
                  </div>
                  <div class="review__date">
                    April 8, 2017 at 1:15 pm
                  </div>
                  <div class="review__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe, repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?
                  </div> -->
                <!-- </li>  -->
                <!-- .review -->
                <!-- <li class="review">
                  <div class="review__user">
                    Maria Atkinson
                  </div>
                  <div class="review__date">
                    March 24, 2017 at 1:38 am
                  </div>
                  <div class="review__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eaque magni aliquam dolore cum aliquid ipsa, asperiores modi voluptates.
                  </div> -->
                <!-- </li>  -->
                <!-- .review -->
                <!-- <li class="review">
                  <div class="review__user">
                    Brad pitt
                  </div>
                  <div class="review__date">
                    March 20, 2017 at 3:40 pm
                  </div>
                  <div class="review__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti provident adipisci eos reiciendis. Ab dolore natus nam temporibus quidem esse soluta. Accusamus sapiente, officia architecto accusantium sunt amet harum quis!
                  </div>
                </li>  -->
                <!-- .review -->
              <!-- </ul>  -->
              <!-- .reviews__list -->
             <!--  <p class="subheading">Leave a review</p>
              <form class="comments__form" data-animate-in="animateUp">
                
                <div class="form-group">
                  <label for="name">Name (Required)</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                </div>

                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
                </div>

                <div class="form-group">
                  <label for="message">Comment (Required)</label>
                  <textarea name="message" class="form-control" rows="6" id="message" placeholder="Enter Your Comment"></textarea>
                  <span class="help-block"></span>
                </div>
                
                <button type="submit" class="btn">
                  Submit review
                </button>
              </form> -->
            <!-- </div>  -->
            <!-- .room__reviews -->
          </div>
          <div class="col-sm-5 col-md-4">
    	    	<div class="room-detail__sidebar">
              <div class="similar__rooms">
                <p class="subheading">Kamar Lainnya</p>
                <ul class="similar-rooms__list">
                  <?php foreach ($sidebar as $s) { ?>
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
                          $harga+=$s->hight_kamar;
                        }else{
                          $harga+=$s->low_kamar;
                        }
                        $stop='true';
                        $ci = date('Y-m-d', strtotime($ci.'+1 day'));
                      }
                    }
                    $total=$harga/$j;
                    ?>
                  <li class="list__item">
                    <a href="<?=site_url('home/tampil_room_detail/'.$s->id_kamar);?>">
                      <figure class="list_item__body">
                        <img src="<?php echo base_url().'assets/' ?>images/kamar/<?php echo $s->nama_gambar_kamar ?>" class="img-responsive" alt="<?php echo $s->ket_gambar_kamar ?>">
                        <figcaption>
                          <h3><?php echo $s->nama_kamar ?></h3>
                          <div class="item__price">
                            <?php echo 'RP.'.$total ?> <small> / Malam</small>
                          </div>
                        </figcaption>
                      </figure> <!-- / .list_item__body -->  
                    </a>
                  </li>  <!-- .list__item -->
                  <?php } ?>
                </ul> <!-- .similar-rooms__list -->
              </div> <!-- .similar__rooms -->
              <div class="info__body">
                <p class="info__title"><?php echo $kontak->kontak_judul;?></p>
                <ul class="info__content">
                  <li>
                    <p class="info-text"><?php echo $kontak->kontak_deskripsi;?></p>
                  </li>
                  <li>
                    <i class="icon ion-android-pin"></i>
                    <div class="info-content">
                      <div class="title">Alamat</div>
                      <div class="description"><?php echo $kontak->kontak_alamat;?></div>
                    </div>
                  </li>
                  <li>
                    <i class="icon ion-android-call"></i>
                    <div class="info-content">
                      <div class="title">Telepon</div>
                      <div class="description"><?php echo $kontak->kontak_telepon;?></div>
                    </div>
                  </li>
                  <li>
                    <i class="icon ion-android-mail"></i>
                    <div class="info-content">
                      <div class="title">E-mail</div>
                      <div class="description"><?php echo $kontak->kontak_email;?></div>
                    </div>
                  </li>
                </ul> <!-- .info__content -->
              </div> 
              <!-- / .info__body -->
  	    		</div> <!-- .room-detail__sidebar -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation