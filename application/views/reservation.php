
<section class="section__header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="welcome__content">
					<h1 class="welcome_content__title">Reservasi</h1>

					<!-- Breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
						<li class="active">Reservasi</li>
					</ol>

					<!-- <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
				</div> <!-- .welcome__content -->
			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
	<div class="home__bg reservation__bg"></div>
</section> <!-- / .section header -->

<!-- section reservation -->
<section class="section__reservation">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8">
				<div class="booking__details-body">
					<p class="subheading">Detail Pesanan</p>
					<h2 class="section__heading">Kamar yang dipilih</h2> 
					<div id="list"></div>
					<!-- <figure class="room__details">
						<figcaption>
							<h3>Double room</h3>
							<div class="room__price">
								<a href="#"><i class="icon ion-trash-a"></i></a>
							</div>
							<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
						</figcaption>
					</figure> 
					<ul class="details-info">
		                <li>
		                  <label>Check in</label>
		                  <p>2017-04-09</p>
		                </li>
		                <li>
		                  <label>Check out</label>
		                  <p>2017-04-18</p>
		                </li>
		                <li>
		                  <label>Adults</label>
		                  <p>2 Person</p>
		                </li>
		                <li>
		                  <label>Children</label>
		                  <p>1 Chind</p>
		                </li>
		                <li>
		                  <label>Nights</label>
		                  <p>9 Nights</p>
		                </li>
		                <li>
		                  <label>Services</label>
		                  <p>$ 65</p>
		                </li>
		                <li class="total-price">
		                  <label>Total price</label>
		                  <p>$ 515</p>
		                </li>
		            </ul> -->

					<!-- <hr> -->
					<!-- <table> -->
						<!-- <tr>
							<td><label>Biaya Kamar</label></td>
							<td><label>&nbsp:&nbsp</label></td>
							<td>Rp.<div id="biaya"></div></td>
						</tr>
						<tr>
							<td><label>Pajak</label></td>
							<td><label>&nbsp:&nbsp</label></td>
							<td>Rp.<div id="pajak"></div></td>
						</tr> -->
						<!-- <tr> -->
							<ul class="details-info">
								<li class="total-price">
				                  <label>Total Keseluruhan</label>
				                  <p id="total"></p>
				                </li>
				            </ul>
						<!-- </tr> -->
					<!-- </table> -->


		            <script type="text/javascript">
		            	$(document).ready(function () {
		            		tampil();
		            	});
		            	function tampil() {
		            		var idk = '<?php if (!empty($this->session->userdata("id_kpesan"))) { echo $this->session->userdata("id_kpesan");}else{ echo "0";} ?>';
		            		var div = document.getElementById('list');
		            		var t = document.getElementById('total');
		            		if (idk==0) {
		            			div.innerHTML = 'Tidak ada kamar yang anda pesan.';
		            			t.innerHTML = '<p>RP.0</p';
				            			console.log(1);
		            		}else{
		            			$.ajax({
					            url : "<?php echo site_url('home/list_keranjang')?>/" + idk,
					            type: "GET",
					            dataType: "JSON",
					            success: function(dlistk)
					            {
				            			console.log(dlistk);
					            	if (dlistk==0) {
					            		div.innerHTML = 'Tidak ada kamar yang anda pesan.';
				            			t.innerHTML = '<p>RP.0</p';
				            			console.log(2);
					            	}else{
				            			console.log(3);
				            			var tot = 0;
				            			for (var i = 0; i < dlistk.length; i++) {
					            			div.innerHTML += '<hr><figure class="room__details"><figcaption><h3>'+dlistk[i]['nama_kamar']+'</h3><div class="room__price"><a href="<?php echo base_url('home/keranjang_hapus') ?>/'+dlistk[i]['id_kdet_pesan']+'" onclick="return confirm(\'Anda yakin menghapus data?\'); return false;"><i class="icon ion-trash-a"></i></a></div><p class="room__desc">'+dlistk[i]['deskripsi_kamar']+'</p></figcaption></figure><ul class="details-info"><li><label>Tanggal Datang</label><p>'+dlistk[i]['checkin_kdet_pesan']+'</p></li><li><label>Tanggal Pergi</label><p>'+dlistk[i]['checkout_kdet_pesan']+'</p></li><li><label>Dewasa</label><p>'+dlistk[i]['dewasa_kdet_pesan']+'</p></li><li><label>Anak</label><p>'+dlistk[i]['anak_kdet_pesan']+'</p></li><li class="total-price"><label>Harga</label> : RP.'+dlistk[i]['harga_kdet_pesan']+'</li></ul>';
					            			tot+=parseInt(dlistk[i]['harga_kdet_pesan']);
					            		}

				            			t.innerHTML = 'RP.'+tot;
					            	}
					            },
				        			error: function (jqXHR, textStatus, errorThrown)
				        		{
				            		alert('Error get data from ajax');
				        		}
				    		});
		            		}// body...
		            	}
		            	function hapus(id) {
		            		$.ajax({
					            type: "POST",
					            url: '<?php echo base_url('home/keranjang_hapus/'); ?>/'+id,
					            dataType: "JSON",
					            success: function (data) {
					            	var div = document.getElementById('list');
		            				var t = document.getElementById('total');
		            				var URL = '<?php echo base_url('home/tampil_reservation') ?>'
		            				div.innerHTML='';
		            				t.innerHTML='';
		            				$('#list').load(document.URL +  ' #list');
		            				tampil();
					            },
					            error: function () {
					                alert("Error!!!");
					            }
					        });
		            	}
		            </script>
		</div> <!-- .booking__details-body -->
	</div>
	<div class="col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4">
		<div class="reservation__form-body">
			<p class="subheading">Booking form</p>
			<h2 class="section__heading">Personal info</h2>
			<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

			<!-- Alert message -->
			<div class="alert" id="form_reservation" role="alert"></div>

			<!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

			<form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp">
						
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="first-name" class="sr-only">First name </label>
								<input type="text" name="first-name" class="form-control" id="first-name" placeholder="Name*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="last-name" class="sr-only">Last name</label>
								<input type="text" name="last-name" class="form-control" id="last-name" placeholder="Surname*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="E-mail*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="phone" class="sr-only">Phone</label>
								<input type="tel" name="phone" class="form-control" id="phone" placeholder="Confirm Email*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="address-line1" class="sr-only">Address line 1</label>
								<input type="text" name="address-line1" class="form-control" id="address-line1" placeholder="Postal Code">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="address-line2" class="sr-only">Address line 2</label>
								<input type="text" name="address-line2" class="form-control" id="address-line2" placeholder="Country*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="state" class="sr-only">State / Region</label>
								<input type="text" name="state" class="form-control" id="state" placeholder="Telephone">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="city" class="sr-only">City</label>
								<input type="text" name="city" class="form-control" id="city" placeholder="Mobile Phone">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="form-arrival-time" class="sr-only">Arrival Time</label>
								<select class="form-control" name="form-arrival-time" id="form-arrival-time">
									<option value="0">Arrival Time</option>
									<option value="1">00</option>
									
									<?php for($i=1; $i<24; $i++) { ?>
									<?php if ($i<10) { ?>
									<option value="<?php echo'0'+$i?>">0<?='0'+$i?></option>
									<?php } else { ?>
									<option value='<?php echo $i?>'><?=$i?></option>
									<?php } } ?>

								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="requirements" class="sr-only">Special requirements</label>
								<textarea name="requirements" class="form-control" rows="8" id="requirements" placeholder="Comments"></textarea>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12">
							<p>Have you been at our property before?</p>
							<div class="col-sm-2" style="padding-left: 0px; margin-left: 0px; margin-bottom: 18px">
								<select class="form-control" name="" id="">
									<option value="0"></option>
									<option value="1">No</option>
									<option value="2">Yes</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<p>
								<input type="checkbox" name="checkbox"> I want to receive deals and the latest news by email
							</p>
						</div>
						<div class="col-sm-12">
							<p>
								<input type="checkbox" name="checkbox"> I have read and accept <a href="#" class="conditions">the terms and conditions.</a>
							</p>
							<button type="submit" class="btn btn-booking">Book now by email</button>
						</div>
					</form> <!-- .reservation__form -->
				</div> <!-- .reservation__form-body -->
			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
    </section> <!-- / .section reservation