<div class="content">
			<div class="container">
				<!--start-contact-->
				<div class="contact">
					<div class="contact-header">
							<h3>Hubungi</h3>
							<ol class="breadcrumb">
							  <li><a href="<?php echo base_url() ?>">Beranda</a></li>
							  <li class="active">Hubungi</li>						  
							</ol>
				  </div>
		 <div class="contact-grids">	
			  <div class="col-md-6 contact_left" style="height: 400px">
		 		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
				<div id="peta" style="width:500px;height:395px;"></div>	
				</div>
			 </div>
			 <div class="col-md-6 contact_right">	
				   <!-- <h3>Alamat</h3> -->
				  <div class="address">
					 <?php echo $kontak->kontak_deskripsi;?>
				  </div>					
			 </div>
			 <div class="clearfix"></div>
		 </div>

				 <!--  <div class="map">
					 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5348023136794!2d112.62793271428455!3d-7.943554294278271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629dd1f03cec5%3A0x13caf9b42b154deb!2sCAKRATOURPRO!5e0!3m2!1sid!2sid!4v1517814193957"> </iframe>
				  </div> -->
				<!---End-contact-->		
			</div>
		</div>
		<script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFTimIhQoFCg8bF7PAMgDWi38QqqvaCx8">
  </script>

<script type="text/javascript">
		(function() {
		window.onload = function() {
		var map;
		//Parameter Google maps
		var options = {
		zoom: 16, //level zoom
		//posisi tengah peta
		center:new google.maps.LatLng('<?php echo @$kontak->kontak_lat;?>' ,'<?php echo @$kontak->kontak_long?>'),
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		// Buat peta di
		var map = new google.maps.Map(document.getElementById('peta'), options);
		// Tambahkan Marker
		var locations = [
			['<?php echo @$wisata->wisata_nama?>', '<?php echo @$kontak->kontak_lat;?>' ,'<?php echo @$kontak->kontak_long?>'],
		];
		var infowindow = new google.maps.InfoWindow();

		var marker, i;
		/* kode untuk menampilkan banyak marker */
		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
		});
		/* menambahkan event clik untuk menampikan
		infowindows dengan isi sesuai denga
		marker yang di klik */

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
		return function() {
		infowindow.setContent(locations[i][0]);
		infowindow.open(map, marker);
		}
		})(marker, i));
		}


		};
		})();



</script>	