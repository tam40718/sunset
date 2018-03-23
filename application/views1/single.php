<div class="content">
			<div class="container">
				<!--start-blog-->
					<div class="blog">
						<div class="blog-header">
							<h3>Produk</h3>
							<ol class="breadcrumb">
							  <li><a href="<?php echo base_url() ?>">Beranda</a></li>
							  <li><a href="<?php echo base_url('home/room') ?>">Produk</a></li>
							  <li class="active">Detail Produk</li>						  
							</ol>
						</div>
						<div class="single-page-artical">
								<div class="artical-content">
									<h3><?php echo $room->detail_judul;?></h3>
									<img src="<?php echo base_url().'assets/'; ?>images/<?php echo $room->detail_gambar;?>" title="<?php echo $room->detail_judul;?>">
									<p><?php echo $room->detail_deskripsi;?></p>
								    </div>
							</div>
			</div>
						<div class="clear"> </div>
					</div>
				<!--End-blog-->
		</div>