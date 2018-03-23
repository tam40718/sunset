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
		  			<?php foreach($room_jenis as $g) { ?>
						<div class="blog-leftgrids">
								<div class="image group">
									<div class="images_3_of_1">
										<a href="<?php echo base_url('home/produk/'.$g['id_detail'])?>"><img src="<?php echo base_url().'assets/'?>images/<?php echo $g['detail_gambar']?>"></a>
									</div>
										<div class="span_2_of_3">
											<h3><a href="<?php echo base_url('home/produk/'.$g['id_detail'])?>"><?php echo $g['detail_judul']?></a></h3>
											<p><?php echo substr($g['detail_deskripsi'], 0,1000)."..."?></p>
									   </div>
		  						 </div>
							</div>
							<?php } ?>
						<div class="clear"> </div>
					</div>
				<!---End-blog-->
			</div>
		</div>