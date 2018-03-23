<div class="content">
			<div class="container">
				<!--start-projects-->
				<div class="projects">
					<div class="projects-header">
							<h3>Foto</h3>
							<ol class="breadcrumb">
							  <li><a href="<?php echo base_url() ?>">Beranda</a></li>
							  <li class="active">Foto</li>						  
							</ol>
						</div>
						<div class="clear"> </div>
						<div class="gallery-grids">
						<?php foreach ($galeri_album as $a) { ?>
							<div class="col-md-4 gallery-grid">								
								 <a class="fancybox" href="<?php echo base_url('Home/galeri_album/'.$a['id_album'])?>" data-fancybox-group="gallery" title="<?php echo $a['album_nama'] ?>"><img src="<?php echo base_url().'assets/'?>images/<?php echo $a['album_gambar']?>" class="img-style row6" alt=""><span> </span><h4><p><?php echo $a['album_nama'] ?></p></h4></a>							
							</div>
						<?php } ?>
							<div class="clearfix"> </div>
						</div>
					</div>
				<!---End-projects-->
				
			</div>
		</div>