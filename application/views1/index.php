
<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/responsiveslides.css">	
<script src="<?php echo base_url().'assets/' ?>js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
	    $(function () {
	
	      // Slideshow 1
	      $("#slider1").responsiveSlides({
	        maxwidth: 1600,
	        speed: 600
	      });
	});
  </script>
<div class="clearfix"> </div>
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					    <?php 
					    foreach ($tampil_slider as $ts) {?>
					      <li><img src="<?php echo base_url().'assets/' ?>images/<?php echo $ts['slider_gambar'] ?>" alt=""></li>
					    <?php } ?>
					    </ul>
					</div>
					<!--End-image-slider-->
		 <!---start-content-->
		 <div class="content">
		      <div class="container">
				 <div class="content-grids">
					 <h2>Produk Terbaru</h2>	
					 <?php foreach ($home as $data) { ?>				 
					 <div class="col-md-4 contnt-grids">
						 <img src="<?php echo base_url().'assets/images/'.$data['detail_gambar'] ?>" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="<?php echo base_url('home/produk/'.$data['id_detail'])?>"><?php echo substr($data['detail_judul'], 0,30).'...' ?></a></h3>							 
						 </div>
					 </div>
					 <?php } ?>
					 <div class="clearfix"> </div>
				</div>
		     </div>
	     </div>
		 <!---start-content//-->

<div class="content">
			<div class="container">
		 <div class="projects">

				 <div class="content-grids">
							<h2>Foto Terbaru</h2
						<div class="clear"> </div>
						<div class="gallery-grids">
		    			<?php foreach ($galeri_album as $data) { ?>
							<div class="col-md-4 gallery-grid">								
								 <a class="fancybox" href="<?php echo base_url('assets/images/'.$data['gallery_gambar']) ?>" data-fancybox-group="gallery" title="<?php echo $data['gallery_nama'] ?>"><img src="<?php echo base_url('assets/images/'.$data['gallery_gambar']) ?>" class="img-style row6" alt=""><span> </span></a>							
							</div>
							<?php } ?>
							<div class="clearfix"> </div>
						</div>
						<div class="clear"> </div>
						</div>
						</div>
						</div>
					</div>