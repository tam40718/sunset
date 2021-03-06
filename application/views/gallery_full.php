
    <link href="<?php echo base_url().'assets/' ?>plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
    <script src="<?php echo base_url().'assets/' ?>plugins/lightbox/dist/js/lightbox.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Galeri Foto</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
                <li class="active">Galeri Foto</li>
              </ol>

	  					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg gallery__bg"></div>
    </section> <!-- / .section__header -->

    <!-- section gallery-alt -->
    <section class="section__gallery-alt">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12">
            <h2 class="subheading">Galeri Foto Pada Resort Kami</h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">Periksa layanan dan fasilitas Resort kami di galeri foto. Dapatkan akses ke pilihan gambar terbaik Resort kami.</p>
    		  </div>
    		</div> <!-- / .row -->
    		<div class="row">
    		  <div class="col-xs-12">
    		  	<!-- Nav tabs -->
            <ul class="nav nav-tabs gallery__nav" role="tablist">
              <li role="presentation" class="gallery-nav__link active">
                <a href="#" role="tab" data-filter=".all">
                  <span>Semua</span>
                </a>
              </li>
              <?php foreach ($list_album as $la) { ?>
              <li role="presentation" class="gallery-nav__link">
                <a href="#" role="tab" data-filter=".<?php echo $la->id_album ?>">
                  <span><?php echo $la->album_nama ?></span>
                </a>
              </li>
              <?php } ?>
            </ul> <!-- / .gallery__nav -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
		    <div id="gallery__items" class="row">
          <?php foreach ($list_foto as $lf) { ?>
		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all <?php echo $lf->id_album ?>">
            <a href="<?php echo base_url().'assets/' ?>images/foto/<?php echo $lf->gallery_gambar ?>" data-lightbox="gallery" data-title="<?php echo $lf->gallery_nama ?>">
              <img src="<?php echo base_url().'assets/' ?>images/foto/<?php echo $lf->gallery_gambar ?>" class="img-responsive" alt="<?php echo $lf->gallery_nama ?>">
            </a>
          </div> <!-- .gallery__item -->
          <?php } ?>
        </div> <!-- .row -->
	            
	    </div> <!-- / .container-fluid -->
    </section> <!-- / .section__gallery-alt -->
