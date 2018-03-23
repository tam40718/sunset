<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title ?></title>		
<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url().'assets/images/'.'logo.png'?>">
<link href="<?php echo base_url().'assets/' ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/touchTouch.css" type="text/css" media="all" />
<link href="<?php echo base_url().'assets/' ?>css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>		
<script src="<?php echo base_url().'assets/' ?>js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="<?php echo $keyword ?>"/>
<meta name="description" content="<?php echo $description ?>"/>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="<?php echo base_url().'assets/' ?>js/bootstrap.js"></script>
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
	</head>
<body>
<!--start-header-->
<div class="header">
	 <!--start-container-->
	 <div class="container">
				<!--start-top-header-->
					<div class="main-header">

				<div class="clearfix"> </div>
				<div class="top-header">
										<div class="logo">
						<a href="<?php echo base_url() ?>"><img src="<?php echo base_url().'assets/' ?>images/logo2.png" title="logo" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--End-top-header-->
				<div class="navigation">
	<div class="container">
		<nav class="navbar navbar-default">
									<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
			  </button>
			</div>
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li <?php if ($aktif=="beranda") {
					echo 'class="active"';
				} ?> ><a href="<?php echo base_url('home') ?>">Beranda</a></li>
				<li <?php if ($aktif=="tentang") {
					echo 'class="active"';
				} ?> ><a href="<?php echo base_url('home/tentang') ?>">Tentang</a></li>
				<li <?php if ($aktif=="produk") {
					echo 'class="active"';
				} ?> ><a href="<?php echo base_url('home/room') ?>">Produk</a></li>
				<li <?php if ($aktif=="galeri") {
					echo 'class="active"';
				} ?> ><a href="<?php echo base_url('home/galleri') ?>">Foto</a></li>
				<li <?php if ($aktif=="hubungi") {
					echo 'class="active"';
				} ?> ><a href="<?php echo base_url('home/hubungi') ?>">Kontak</a></li>
			  </ul>
			  <div class="clearfix"> </div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
					<div class="clearfix"> </div>
				<!--start-main-header-->
				<div class="main-header">
		
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	 
			
					
	 </div>
	<!--End-main-heade-->
</div>	
</div>	
</div>		
<!--End-header-->