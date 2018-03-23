<section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Our gallery</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Gallery</li>
              </ol>

	  					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
          <h2 class="subheading">Some shots of our beautiful interior</h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p>
    		  </div>
    		</div> <!-- / .row -->
    		<div class="row">
    		  <div class="col-xs-12">
    		  	<!-- Nav tabs -->
            <ul class="nav nav-tabs gallery__nav" role="tablist">
              <li role="presentation" class="gallery-nav__link active">
                <a href="#" role="tab" data-filter=".all">
                  <span>All</span>
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
    	<div class="container">
		    <div id="gallery__items" class="row">
          <?php foreach ($list_video as $lv) { ?>
		    	<div class="col-xs-12 col-sm-6 col-md-4 gallery__item all <?php echo $lv->id_album ?>">
            <!-- <a href="https://www.youtube.com/embed/kUlyFOBT_sw" data-lightbox="gallery" data-title="Your caption"> -->
            <iframe class="col-sm-12" id="iframe" height="253px" src="<?php echo $lv->gallery_gambar ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <!-- </a> -->
          </div> <!-- .gallery__item -->
          <?php } ?>
          
        </div> <!-- .row -->
	            
	    </div> <!-- / .container-fluid -->
    </section> <!-- / .section__gallery-alt -->

    <!-- modal -->
    <div class="modal fade" id="services__modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/kUlyFOBT_sw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>>
          </div>
        </div> <!-- .modal-content -->
      </div> <!-- .modal-dialog -->
    </div> <!-- .modal -->