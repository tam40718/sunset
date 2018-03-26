<!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Fasilitas</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
                <li class="active">Fasilitas</li>
              </ol>

	  					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg rooms__bg"></div>
    </section> <!-- / .section__header -->

    <!-- section rooms-1 -->
    <section class="section__rooms-2">
    	<div class="container">
    		<div class="row">
          <?php foreach ($list_fasilitas as $lf) { ?>
          <div class="col-md-4 col-sm-6">
            <div class="rooms__item">
              <div class="rooms__pic">
                <img src="<?php echo base_url().'assets/' ?>images/fasilitas/<?php echo $lf->gambar_fasilitas ?>" class="img-responsive" alt="<?php echo $lf->nama_fasilitas ?>">
              </div> <!-- / .about__pic -->
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title"><?php echo $lf->nama_fasilitas ?></h2>
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc"><?php echo substr($lf->deskripsi_fasilitas, 0,200) ?></p>
                
              </div> <!-- / .rooms__desc -->
            </div> <!-- .rooms__item -->
          </div>
          <?php } ?>
          
          </div>
        </div> <!-- .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__rooms-1 -->
