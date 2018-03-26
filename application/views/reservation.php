section header -->
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
					<!-- <ul class="details-info">               
						<li> -->
							<label>Check in : </label>
							<p><?php echo date('l, Y-m-d'); ?></p>
						<!-- </li>
						<li> -->
							<label>Check out</label>
							<p><?php echo date('l, Y-m-d', strtotime('+1 day')); ?></p>
						<!-- </li>
					</ul> -->
					<hr>
					<figure class="room__details">
						<figcaption>
							<h3>Double room</h3>
							<div class="room__price">
								<a href="#"><i class="icon ion-trash-a"></i></a>
							</div>
							<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
						</figcaption>
					</figure> <!-- / .room__details -->
					<ul class="details-info">    
						<li>
							<label>Adult</label>
							<select name="form-adults" id="form-adults" class="form-control">
								<option value="1">1 Adult</option>
								<option value="2" selected="">2 Adults</option>
								<option value="3">3 Adults</option>
								<option value="4">4 Adults</option>
							</select>
							<span class="help-block"></span>
						</li>
						<li>
							<label>Children</label>
							<select name="form-children" id="form-children" class="form-control">
								<option value="0" selected="">0 Child</option>
								<option value="1">1 Child</option>
								<option value="2">2 Children</option>
							</select>
							<span class="help-block"></span>
						</li>
						<li class="total-price">
							<label>Total price</label>
							<p>$ 515</p>
						</li>
					</ul>
					<hr>
					<table>
						<tr>
							<td><label>Biaya Kamar</label></td>
							<td><label>&nbsp:&nbsp</label></td>
							<td>Rp.1000000</td>
						</tr>
						<tr>
							<td><label>Pajak</label></td>
							<td><label>&nbsp:&nbsp</label></td>
							<td>Rp.100000</td>
						</tr>
						<tr>
							<td><label>Total Keseluruhan</label></td>
							<td><label>&nbsp:&nbsp</label></td>
							<td>Rp.1100000</td>
						</tr>
					</table>
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
						<!-- <div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="check-in" class="sr-only">Arrival date</label>
								<input type="date" name="check-in" class="form-control" id="check-in" value="2017-04-09">
								<span class="help-block"></span>
							</div>
						</div> -->
						<!-- <div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="check-out" class="sr-only">Departure date</label>
								<input type="date" name="check-out" class="form-control" id="check-out" value="2017-04-18">
								<span class="help-block"></span>
							</div>
						</div> -->
						<!-- <div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="form-adults" class="sr-only">Adults</label>
								<select class="form-control" name="form-adults" id="form-adults">
									<option value="1" selected="">Adults</option>
									<option value="2">1 Adult</option>
									<option value="3">2 Adults</option>
									<option value="4">3 Adults</option>
								</select>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="form-children" class="sr-only">Children</label>
								<select class="form-control" name="form-children" id="form-children">
									<option value="1" selected="">Children</option>
									<option value="2">1 Child</option>
									<option value="3">2 Children</option>
									<option value="4">3 Children</option>
								</select>
								<span class="help-block"></span>
							</div>
						</div> -->
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

									<!-- <option value="2">00</option>
									<option value="3">01</option>
									<option value="4">02</option>
									<option value="5">03</option>
									<option value="6">04</option>
									<option value="7">05</option>
									<option value="8">06</option>
									<option value="9">07</option>
									<option value="10">08</option>
									<option value="11">09</option>
									<option value="12">10</option>
									<option value="13">11</option>
									<option value="14">12</option>
									<option value="15">13</option>
									<option value="16">14</option>
									<option value="17">15</option>
									<option value="18">16</option>
									<option value="19">17</option>
									<option value="20">18</option>
									<option value="21">19</option>
									<option value="22">20</option>
									<option value="23">21</option>
									<option value="24">22</option> -->
								</select>
							</div>
						</div>
						<!-- <div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="zip-code" class="sr-only">Zip Code</label>
								<input type="text" name="zip-code" class="form-control" id="zip-code" placeholder="Zip code">
								<span class="help-block"></span>
							</div>
						</div> -->
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