
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
			<p class="subheading">Formulir Pemesanan</p>
			<h2 class="section__heading">Informasi Pribadi</h2>
			<!-- <p class="section__subheading"></p> -->

			<!-- Alert message -->
			<div class="alert" id="form_reservation" role="alert"></div>

			<!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

			<form id="reservation-form_sendemail" class="reservation__form" method="post" action="<?php echo base_url('home/pesan_proses') ?>" data-animate-in="animateUp">
						
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="first-name">Nama Depan* </label>
								<input type="text" name="first_name" class="form-control" id="first-name" placeholder="Nama Depan*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="last-name">Nama Belakang*</label>
								<input type="text" name="last_name" class="form-control" id="last-name" placeholder="Nama Belakang*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="email">E-mail*</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="E-mail*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="phone">Confirm Email*</label>
								<input type="tel" name="phone" class="form-control" placeholder="Confirm E-mail*" oninput="checkcp(this)" required>
								<span class="help-block"></span>
								<script language='javascript' type='text/javascript'>
							    function checkcp(inputcp) {
							        if (inputcp.value != document.getElementById('email').value) {
							            inputcp.setCustomValidity('Email harus cocok');
							        }else {
							            inputcp.setCustomValidity('');
							        }
							    }
								</script>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="address-line1">Kode Pos</label>
								<input type="text" name="kodepos" class="form-control" id="address-line1" placeholder="Kode Pos">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="address-line2">Negara*</label>
								<input type="text" name="negara" class="form-control" id="address-line2" placeholder="Negara*" required>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="state">Telepon</label>
								<input type="text" name="telepon" class="form-control" id="telepon" placeholder="Nomor Telepon">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="city">Nomor Ponsel* </label>
								<input type="text" name="hp" class="form-control" id="hp" placeholder="Nomor Ponsel*">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="form-arrival-time">Estimasi Jam Datang</label>
								<input type="time" name="jam_datang" placeholder="Jam Datang" class="form-control">
								<!-- <select class="form-control" name="jam_datang" id="form-arrival-time">
									<option value="0">Jam Datang</option>
									<option value="1">00</option>
									
									<?php for($i=1; $i<24; $i++) { ?>
									<?php if ($i<10) { ?>
									<option value="<?php echo'0'+$i?>">0<?='0'+$i?></option>
									<?php } else { ?>
									<option value='<?php echo $i?>'><?=$i?></option>
									<?php } } ?>

								</select> -->
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="requirements">Komentar</label>
								<textarea name="komentar" class="form-control" rows="8" id="requirements" placeholder="Komentar"></textarea>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12">
							<p>Apakah anda pernah menginap disini sebelumnya.</p>
							<div class="col-sm-2" style="padding-left: 0px; margin-left: 0px; margin-bottom: 18px">
								<select class="form-control" name="pernah">
									<option value="0"></option>
									<option value="1">Tidak</option>
									<option value="2">Ya</option>
								</select>
							</div>
						</div>
						<!-- <div class="col-sm-12">
							<p>
								<input type="checkbox" name="checkbox"> I want to receive deals and the latest news by email
							</p>
						</div> -->
						<div class="col-sm-12">
							<p>
								<input type="checkbox" name="checkbox" required> Saya telah membaca dan menyetujui <a href="#"  data-toggle="modal" data-target="#term" class="conditions">syarat dan ketentuan.</a>
							</p>
							<button type="submit" class="btn btn-booking">Pesan Sekarang Melalui Email</button>
						</div>
					</form> <!-- .reservation__form -->
				</div> <!-- .reservation__form-body -->
			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
    </section> <!-- / .section reservation-->
    <div class="modal fade" id="term" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		        <div class="modal-header" style="background-color: grey">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title" style="color: white">Syarat dan Ketentuan</h4>
		        </div>
		        <div class="modal-body">
		          <p>Privasi dan keamanan informasi pribadi Anda sangat penting bagi kami. Kami tidak membagikan informasi pribadi Anda tanpa izin Anda. Kami sangat menghargai kepercayaan Anda, dan kami berusaha untuk melindungi kerahasiaan dan penggunaan setiap informasi pribadi yang Anda berikan kepada kami.</p>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal"><span style="color: black">Tutup</span></button>
		        </div>
		    </div> <!-- .modal-content -->
		  </div> <!-- .modal-dialog -->
		</div> <!-- .modal -->
		