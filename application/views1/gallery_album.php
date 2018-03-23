<div class="content">
			<div class="container">
				<!--start-projects-->
				<div class="projects">
					<div class="projects-header">
							<h3>Foto</h3>
							<ol class="breadcrumb">
							  <li><a href="<?php echo base_url() ?>">Beranda</a></li>
							  <li><a href="<?php echo base_url('home/galleri') ?>">Foto</a></li>
							  <li class="active">Detail Foto</li>						  
							</ol>
						</div>
						<div class="clear"> </div>
						<div class="gallery-grids">
						<?php foreach ($galeri_album as $g) { ?>
							<div class="col-md-4 gallery-grid">								
								 <a class="fancybox" href="<?php echo base_url('assets/images/'.$g['gallery_gambar']) ?>" data-fancybox-group="gallery" title="<?php echo $g['gallery_nama'] ?>"><img src="<?php echo base_url('assets/images/'.$g['gallery_gambar']) ?>" class="img-style row6" alt=""><span> </span></a>							
							</div>
							<?php } ?>
							<div class="clearfix"> </div>
						</div>
					</div>
				<!---End-projects-->
				
			</div>
		</div>