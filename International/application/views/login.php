<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>North-Chiang Mai University</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>sethome/img/logo_northcm.png"/>
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		
		<!-- Revolution css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>sethome/vendor/rs-plugin/css/settings.css" media="screen"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/rs-plugin/css/extralayer.css">
		
		<!-- Flat icon css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/flat-icon/flaticon.css">
		
		<!-- Font awesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/font-awesome/css/font-awesome.min.css">
		
		<!-- Owl Carosel css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/owl/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/owl/css/owl.theme.default.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/owl/css/owl.theme.css">
		
		<!-- mmenu -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/mmenu/css/jquery.mmenu.css" />
		
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/vendor/bootstrap/css/bootstrap.css">
		
		<!-- Animate css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/css/animate.css">
		
		<!-- Custom Style css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/css/hover.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>sethome/css/responsive.css">
		<!-- Google font -->
		<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
			</script>
		<![endif]-->
	</head>
	<body>
		<div class="loader"></div>
		<div class="main" id="Home">
			
			<!-- Menu -->
			<header  class="header-part">
				<div id="Home" class="wrapper">
					<!-- Fixed navbar -->
					<div class="navi navbar-default" role="navigation">
						<div class="container">
							<div class="navbar-header page-scroll">
								<a href="#menu">
									<button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
										
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</a>
								<a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>sethome/img/logo.png" alt="logoncic" ></a>
							</div>
							<div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
								<ul class="nav navbar-nav navbar-right">
									<div class="navbar-collapse collapse pull-right hidden-xs">
										<li class="fa fa-language">
											<a class="page-scroll"><?=anchor("admin/change/thailand","Th |");?></a>
											<a class="page-scroll"><?=anchor("admin/change/english","| En");?></a>
										</li>
									</div>
								</ul>
							</div><!--/.nav-collapse -->
						</div>
					</div><!-- End of Nav -->
				</div>
			</header>
			
			<!-- Contact -->
			<section id="Contact" class="contact-wrapper section-padding">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding">
							<h1 class="section-title"><?=$this->lang->line("login");?></h1>
							<h2><?=$this->lang->line("ncuInter");?></h2>
						</div><!-- col-xs-12 -->
						<div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<form method="post" action="<?php echo base_url(); ?>index.php/admin/checkStatus">
								<div class="form-inline">
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" name="username" id="username" placeholder="<?=$this->lang->line("user");?>" >
									</div>
									<div class="form-group col-sm-6">
										<input type="password" class="form-control" name="password" id="password" placeholder="<?=$this->lang->line("pass");?>">
									</div>
								</div>
								<div class="form-group col-sm-12" id='submit'>
									<input type="submit" id='send_message' class="btn  btn-lg costom-btn" value="<?=$this->lang->line("login");?>">
								</div>
							</form>
						</div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- get in touch -->
			
			<!-- our partner -->
			<section class="partner-wrapper">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-sm-12">
							<div class="owl-wrap">
								<div id="owl-example" class="owl-carousel">
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/logo_northcm.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/Engineering.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/Business.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/social.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/law.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/science.png" alt="ncu"></div>
									<div class="feature-image"><img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/Inter.png" alt="ncu"></div>
								</div><!-- /.owl-carousel -->
							</div><!-- /.owl-wrap -->
						</div><!-- /.col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- our partner -->
			
			<!-- footer -->
			<footer >
				<div class="footer-wrapper section-padding">
					<div class="container">
						<div class="row">
							<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
								<a href="index.html"><img src="<?php echo base_url(); ?>sethome/img/logo.png" alt="logoncic" width="100px"></a>
							</div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
							<div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
								<p class="footer-heading">link</p>
								<ul class="footermenu">
									<li><a href="<?php echo base_url(); ?>index.php/home#Home"><?=$this->lang->line("home");?></a></li>
									<li><a href="<?php echo base_url(); ?>index.php/home#News"><?=$this->lang->line("news");?></a></li>
									<li><a href="<?php echo base_url(); ?>index.php/home#Academic"><?=$this->lang->line("academic");?></a></li>
									<!--<li><a href="<?php echo base_url(); ?>index.php/home#Research"><?=$this->lang->line("research");?></a></li>
									<li><a href="<?php echo base_url(); ?>index.php/home#Project"><?=$this->lang->line("project");?></a></li>-->
									<li><a href="<?php echo base_url(); ?>index.php/home#About"><?=$this->lang->line("about");?></a></li>
									<li><a href="<?php echo base_url(); ?>index.php/home#Contact"><?=$this->lang->line("contact");?></a></li>
								</ul>
							</div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
							<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
								<p class="footer-heading">find us</p>
								<ul class="footercontact">
									<li><i class="flaticon-mainpage"></i><span><?=$this->lang->line("address");?></span> </li>
									<li><i class="flaticon-phone16"></i><span>Phone: <?=$this->lang->line("phone");?></span> </li>
									<li><i class="flaticon-email21"></i><span>E-mail: <?=$this->lang->line("email");?></span></li>
								</ul>
								<i class="flaticon-home78"></i>
							</div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
							<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
								<p class="footer-heading">faculty</p>
								<ul class="footerblog">
									<li><a href="#"><?=$this->lang->line("engineering");?></a></li>
									<li><a href="#"><?=$this->lang->line("business");?></a></li>
									<li><a href="#"><?=$this->lang->line("social");?></a></li>
									<li><a href="#"><?=$this->lang->line("law");?></a></li>
									<li><a href="#"><?=$this->lang->line("science");?></a></li>
									<li><a href="#"><?=$this->lang->line("inter");?></a></li>
								</ul>
							</div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="wow zoomIn col-xs-6">
								<p>© 2015 All rights reserved. <a href="http://www2.northcm.ac.th"><span>North-Chiang Mai University</span></a></p>
								<div class="backtop  pull-right">
									<i class="fa fa-angle-up back-to-top"></i>
								</div><!-- /.backtop -->
							</div><!-- /.col-xs-12 -->
							<div class="wow zoomIn col-xs-6 text-right">
								<p><a href="<?php echo base_url(); ?>admin/login"><span>For admin</span></a></p>
							</div><!-- /.col-xs-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.creditwrapper -->
			</footer><!-- /Footer -->
			
			<!-- MMENU Mobile--> 
			<nav id="menu">
				<ul>
					<li> <a><?=anchor("home/change/thailand","Thailand");?></a></li>
					<li> <a><?=anchor("home/change/english","English");?></a></li>
					<li> <a href="<?php echo base_url(); ?>index.php/home#Home"><?=$this->lang->line("home");?></a></li>
					<li> <a href="<?php echo base_url(); ?>index.php/home#News"><?=$this->lang->line("news");?></a></li>
					<li> <a href="<?php echo base_url(); ?>index.php/home#Academic"><?=$this->lang->line("academic");?></a></li>
					<!--<li> <a href="<?php echo base_url(); ?>index.php/home#Research"><?=$this->lang->line("research");?></a></li>
					<li> <a href="<?php echo base_url(); ?>index.php/home#Project"><?=$this->lang->line("project");?></a></li>-->
					<li> <a href="<?php echo base_url(); ?>index.php/home#About"><?=$this->lang->line("about");?></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/home#Contact"><?=$this->lang->line("comtact");?></a></li>
					<!--<li><a href="#blog">blog</a>
						<ul>
							<li><a href="blog-full-width.html">full width blog</a></li>
							<li><a href="blog-sidebar.html">sidebar blog</a></li>
						</ul>
					</li>-->
					
				</ul>
			</nav><!-- /#menu -->
			
		</div><!-- /.main -->

		<!-- jQuery JS -->
		<script src="<?php echo base_url(); ?>sethome/js/jquery-1.11.1.js"></script>
		
		<!-- Modernizr JS --> 
		<script src="<?php echo base_url(); ?>sethome/js/modernizr-2.6.2.min.js"></script>
		
		<!--Bootatrap JS-->
		<script src="<?php echo base_url(); ?>sethome/vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- REVOLUTION Slider  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>sethome/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>sethome/vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
		
		<!-- Shuffle JS -->
		<script src="<?php echo base_url(); ?>sethome/js/jquery.shuffle.min.js"></script>
		
		<!-- mmenu -->
		<script type="text/javascript" src="<?php echo base_url(); ?>sethome/vendor/mmenu/js/jquery.mmenu.min.js"></script>
		
		<!-- Owl Carosel -->
		<script src="<?php echo base_url(); ?>sethome/vendor/owl/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>sethome/js/wow.min.js"></script>
		
		<!-- waypoints JS-->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		
		<!-- Counterup JS -->
		<script src="<?php echo base_url(); ?>sethome/js/jquery.counterup.min.js"></script>
		
		<!-- Easing JS -->
		<script src="<?php echo base_url(); ?>sethome/js/jquery.easing.min.js"></script>
		
		<!-- Smooth Scroll JS -->
		<script src="<?php echo base_url(); ?>sethome/js/scrolling-nav.js"></script>
		<script src="<?php echo base_url(); ?>sethome/js/smoothscroll.min.js"></script>
		
		<!-- Custom Script JS -->
		<script src="<?php echo base_url(); ?>sethome/js/script.js"></script>
		

		
		<script>
			$(window).on('scroll', function(){
				if( $(window).scrollTop()>670 ){
					$('.navbar-default').addClass('navbar-fixed-top');
					} else {
					$('.navbar-default').removeClass('navbar-fixed-top');
				}
			});
		</script>
		
	</body>
</html>
