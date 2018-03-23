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

    <!-- section rooms-1 -->
    <section class="section__rooms-1">
    	<div class="container">
    		<div class="row">
          <?php foreach ($list_kamar as $lk) {?> 
          <div class="rooms__item">
            <div class="col-md-6">
              <div class="rooms__pic">
                <img src="<?php echo base_url().'assets/' ?>images/kamar/<?php echo $lk->nama_gambar_kamar ?>" class="img-responsive" alt="...">
              </div> <!-- / .about__pic -->
            </div>
            <div class="col-md-6">
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title"><?php echo $lk->nama_kamar ?></h2>
                  <p class="rooms_desc__price"><span>Rp.<?php echo $lk->hight_kamar ?></span> / Malam</p>
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
