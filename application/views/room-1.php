 
  <script src="<?php echo base_url().'assets/' ?>plugins/moment-develop/moment.js"></script>
  <script src="<?php echo base_url().'assets/' ?>plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
 <!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Kamar</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.html">Beranda</a></li>
                <li class="active">Kamar</li>
              </ol>

	  					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg rooms__bg"></div>
    </section> <!-- / .section__header -->
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
    <!-- section rooms-1 -->
              
    <section class="section__rooms-1">
    	<div class="container">
    		<div class="row">
          <?php foreach ($list_kamar as $lk) {?> 
          <div class="rooms__item">
            <div class="col-md-6">
              <div class="rooms__pic">
                <img src="<?php echo base_url().'assets/' ?>images/kamar/<?php echo $lk->nama_gambar_kamar ?>" class="img-responsive" alt="<?php echo $lk->nama_kamar ?>">
              </div> <!-- / .about__pic -->
            </div>
            <div class="col-md-6">
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title"><?php echo $lk->nama_kamar ?></h2>
                <?php 
                  if (!empty($this->session->userdata('checkin'))) {
                    $ci = date('Y-m-d',strtotime($this->session->userdata('checkin')));
                  }else{
                    $ci = date('Y-m-d');
                  }
                  
                  if (!empty($this->session->userdata('checkout'))) {
                    $co = date('Y-m-d',strtotime($this->session->userdata('checkout')));
                  }else{
                    $co = date('Y-m-d');
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
                      echo "<br>".$j.' : '.$harga;
                      $stop='true';
                      $ci = date('Y-m-d', strtotime($ci.'+1 day'));
                    }
                  }
                  $total=$harga/$j;
                  ?>
                  <p class="rooms_desc__price"><span>Rp.<?php echo $total; ?></span> / Malam</p>
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc"><?php echo substr($lk->deskripsi_kamar, 0, 200) ?></p>
                <!-- <input type="hidden" id="a" on="fs(<?php echo $lk->id_kamar ?>)"> -->
                <?php echo $lk->fasilitas_kamar ?>
                <!-- <a href="#" onclick="fs('<?php echo $lk->id_kamar ?>')" class="btn btn-rooms">fasilitas</a> -->
                <a href="<?=site_url('home/tampil_room_detail/'.$lk->id_kamar);?>" class="btn btn-rooms">Detail</a>
                <a href="<?=site_url('home/tampil_room_detail');?>" class="btn btn-rooms">Pesan</a>
              </div> <!-- / .rooms__desc -->
            </div>
          </div> <!-- .rooms__item -->
          <?php } ?>
          
	    </div> <!-- / .container -->
    </section> <!-- / .section__rooms-1 -->
