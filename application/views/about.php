<!-- <head> -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/assets/owl.theme.default.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url().'assets/' ?>plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="<?php echo base_url().'assets/' ?>plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="<?php echo base_url().'assets/' ?>plugins/countTo/jquery.countTo.js"></script>
	<!-- </head> -->
<!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">

							<h2 class="welcome_content__title">Tentang Kami</h2>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
							  <li class="active">Tentang Kami</li>
							</ol>

	  					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->

		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg about__bg" style="background-image: url(<?php echo base_url().'assets/' ?>images/rooms_bg.jpg);"></div>
    </section> <!-- / .section__header -->
	   
	<!-- section about-alt -->
    <section class="section__about-alt">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12"> 		  	
    				<h2 class="section__title">Selamat Datang di <strong>Sunset Hotel</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    			</div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="<?php echo base_url().'assets/' ?>images/about/<?php echo $tentang->about_logo;?>" class="img-responsive" alt="<?php echo $tentang->about_judul;?>">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
			    	  <div class="about__desc">
			  				<h3 class="about_desc__title"><?php echo $tentang->about_judul;?></h3>
								<p class="about_desc__desc"><?php echo $tentang->about_deskripsi;?></p>
								<h4 class="about_desc__quote"><?php echo $tentang->about_deskripsi2;?></h4>
			  			</div> <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__about -->

		<!-- section data -->
    <section class="section__data">
    	<div class="container">
		    <div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="1024" data-speed="2000" data-refresh-interval="10">0</p>
							<h3 class="section-data__title">Guests stay</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="245" data-speed="1000" data-refresh-interval="5">0</p>
							<h3 class="section-data__title">Rooms</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="37" data-speed="1000" data-refresh-interval="2">0</p>
							<h3 class="section-data__title">Awards</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="3700" data-speed="2000" data-refresh-interval="10">0</p>
							<h3 class="section-data__title">Meal served</h3>
						</div> <!-- .section-data__item -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__data -->
<!-- Modal
    ================================================== -->
	  <div class="modal fade" id="services__modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
			    <div class="embed-responsive embed-responsive-16by9">
			    	<iframe width="560" height="315" src="<?php echo $tentang->about_video;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>>
					</div>
		    </div> <!-- .modal-content -->
		  </div> <!-- .modal-dialog -->
		</div> <!-- .modal -->
    <!-- section services alt -->
    <section class="section__services-alt">
    	<div class="container">
		    <div class="row">
					<div class="col-sm-5">
						<!-- <h2 class="section__title services__title"><strong>Fasilitas </strong>Kami</h2> -->
						<h2 class="section__title services__title"><strong>Fasilitas </strong>Kami</h2>
						<!-- <p class="services__text">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc.</p> -->
						<div class="services__img">
							<a href="#services__modal" data-toggle="modal">
								<img src="<?php echo base_url().'assets/' ?>images/about/<?php echo $tentang->about_cover;?>" class="img-responsive" alt="<?php echo $tentang->about_judul;?>">	
							</a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-6">
								<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-model-s"></i>
									</div>
									<div class="services_item__title">
										<h3>Parking</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolor magnam quas cumque.
									</div>
								</div> <!-- .services__item -->
							</div>
							  <div class="col-sm-6">
							  	<div class="services__item">
										<div class="services_item__logo">
											<i class="icon ion-android-bicycle"></i>
										</div>
										<div class="services_item__title">
											<h3>Fitness Hall</h3>
										</div>
										<div class="services_item__desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ullam architecto.
										</div>
									</div> <!-- .services__item -->
							  </div>
						</div> <!-- .row -->
						<div class="row">
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-restaurant"></i>
									</div>
									<div class="services_item__title">
										<h3>Restaurant</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum sint ipsum culpa consequatur.
									</div>
								</div> <!-- .services__item -->
						  </div>
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-sunny"></i>
									</div>
									<div class="services_item__title">
										<h3>Spa center</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quo iure sapiente. Earum est corporis.
									</div>
								</div> <!-- .services__item -->
							</div>  
						</div> <!-- / .row -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services-alt -->

    <!-- section testimonials -->
    