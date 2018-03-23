<!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h2 class="welcome_content__title">Kontak Kami</h2>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
                <li class="active">Kontak</li>
              </ol>

    					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg contacts__bg"></div>
    </section> <!-- / .section header -->
		<!-- section Contacts alt -->
    <section class="section__contacts-alt">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

		<?php if ($this->session->flashdata('berhasil')) { echo '
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Berhasil! </strong> '.$this->session->flashdata('berhasil').'
          </div>
          ';} if ($this->session->flashdata('gagal')) { echo '
            <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Gagal!</strong> '.$this->session->flashdata('gagal').'
          </div>
          ';}?>
          <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 5000);
          </script>
            <h1 class="subheading"><?php echo $kontak->kontak_subheading;?></h1>        
          </div>
        </div> <!-- / .row -->
      	<div class="row">
      		<div class="col-sm-7">
	        	<div class="section-contacts__form_body">
              <p class="section-contacts__title">Pesan</p>

              <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

              <!-- Alert message -->
              <div class="alert" id="form_message" role="alert"></div>

              <!-- Form -->
              <form id="form_sendemail" class="contacts__form" action="<?php echo base_url('home/pesan') ?>" method="post">
                
                <!-- Email -->
                <div class="form-group">
                  <label for="email" class="sr-only">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Alamat E-mail Anda*">
                  <span class="help-block"></span>
                </div>
                
                <!-- Name -->
                <div class="form-group">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda*">
                  <span class="help-block"></span>
                </div>
                
                <!-- Message -->
                <div class="form-group">
                  <label for="message" class="sr-only">Message</label>
                  <textarea name="message" class="form-control" id="message" rows="6" placeholder="Masukkan Pesan Anda"></textarea>
                  <span class="help-block"></span>
                </div>
                
                <!-- Note -->
                <div class="form-group">
                  <small class="text-muted">
                    * Wajib Diisi.
                  </small>
                </div>
                
                <!-- Submit -->
                <button type="submit" class="btn btn-default">
                  Kirim Pesan
                </button>

              </form> <!-- .contacts__form -->
              
            </div> <!-- / .section-contacts__form_body -->
	        </div>
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title"><?php echo $kontak->kontak_judul;?></p>
							<ul class="contacts_info__content">
                <li>
                  <p class="contact-info-text"><?php echo $kontak->kontak_deskripsi;?></p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="contact-info-content">
	                  <div class="title">Alamat</div>
	                  <div class="description"><?php echo $kontak->kontak_alamat;?></div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="contact-info-content">
	                  <div class="title">Telepon</div>
	                  <div class="description"><?php echo $kontak->kontak_telepon;?></div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="contact-info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description"><?php echo $kontak->kontak_email;?></div>
	                </div>
	              </li>
	            </ul>
						</div> <!-- / .contacts__info -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>

				<!-- <div id="peta"></div>	 -->
      </div> <!-- / .section_row -->
    </section> <!-- / .section__contacts-alt -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: green">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon ion-ok"></i> Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
    
		<script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFTimIhQoFCg8bF7PAMgDWi38QqqvaCx8">
  </script>

<script type="text/javascript">
		(function() {
		window.onload = function() {
			var map;
			  var myLatLng = {lat: <?php echo $kontak->kontak_lat;?>, lng:  <?php echo $kontak->kontak_long;?>};
			  
			  var styleArray = [
			    {
			        "featureType": "all",
			        "stylers": [
			            {
			                "saturation": 0
			            },
			            {
			                "hue": "#e7ecf0"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "stylers": [
			            {
			                "saturation": -70
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            },
			            {
			                "saturation": -60
			            }
			        ]
			    }
			]

			  var mapOptions = {
			    zoom: 12,
			    center: myLatLng,
			    styles: styleArray,
			    scrollwheel: false
			  };

			  map = new google.maps.Map(document.getElementById('map'), mapOptions);
			  
			  var image = '<?php echo base_url().'assets/' ?>images/map_marker.png';
			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon: image,
			    title: 'Sunset Hotel'
			  });
			  
		};
		})();
		function save() {
			$("#myModal").modal()
		}
</script>	