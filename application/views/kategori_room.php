<div class="content">
			<div class="container">
				<!--start-blog-->
					<div class="blog">
						<div class="blog-header">
							<h3>Produk</h3>
							<ol class="breadcrumb">
							  <li><a href="<?php echo base_url() ?>">Beranda</a></li>
							  <li class="active">Produk</li>						  
							</ol>
						</div>
				 <div class="content-grids">
					 <?php foreach($produk as $produke) {?>				 
					 <div class="col-md-4 contnt-grids">
						 <img src="<?php echo base_url().'assets/'; ?>images/<?php echo $produke['produk_gambar']?>" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="<?php echo base_url('home/galeri_room/'.$produke['id_produk'])?>"><?php echo $produke['produk_utama']?></a></h3>							 
						 </div>
					 </div>
					 <?php } ?>
					 <div class="clearfix"> </div>
				</div></div>
		     </div>
	     </div>