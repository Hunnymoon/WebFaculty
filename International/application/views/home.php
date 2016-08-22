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
								<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home"><img src="<?php echo base_url(); ?>sethome/img/logo.png" alt="logoncic"></a>
							</div>
							<div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
								<ul class="nav navbar-nav navbar-right">
									<li> <a class="page-scroll" href="#Home"><?=$this->lang->line("home");?></a></li>
									<li> <a class="page-scroll" href="#News"><?=$this->lang->line("news");?></a></li>
									<li> <a class="page-scroll" href="#Academic"><?=$this->lang->line("academic");?></a></li>
									<!--<li> <a class="page-scroll" href="#Research"><?=$this->lang->line("research");?></a></li>
									<li> <a class="page-scroll" href="#Project"><?=$this->lang->line("project");?></a></li>
									<li> <a class="page-scroll" href="#Art"><?=$this->lang->line("art");?></a></li>
									<li> <a class="page-scroll" href="#Quality Assurance"><?=$this->lang->line("qa");?></a></li>-->
									<li> <a class="page-scroll" href="#About"><?=$this->lang->line("about");?></a></li>
									<li> <a class="page-scroll" href="#Contact"><?=$this->lang->line("contact");?></a></li>
									<!-- <li class="dropdown"> <a class="page-scroll drop dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#blog">blog</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="blog-full-width.html">full-width Blog</a></li>
											<li><a href="blog-sidebar.html">sidebar blog</a></li>
										</ul>
									</li>-->
									<div class="navbar-collapse collapse pull-right hidden-xs">
										<li class="fa fa-language">
											<a class="page-scroll"><?=anchor("home/change/thailand","Th |");?></a>
											<a class="page-scroll"><?=anchor("home/change/english","| En");?></a>
										</li>
									</div>
								</ul>
							</div><!--/.nav-collapse -->
						</div>
					</div><!-- End of Nav -->
				</div>
			</header>
			<!-- slider -->
			<div class="tp-banner-container">
				<div class="tp-banner">
					<ul>  <!-- SLIDE  -->
						<?php $i=1; foreach($showSlide as $slide){?>
						<li data-transition="fade" data-slotamount="25" data-masterspeed="2500"  data-thumb="img/slider/slider_img_01.jpg"  data-saveperformance="off" class="item item <?php echo $i; echo ($i==1)?' active':'';?> ">
							<img src="<?php echo base_url(); ?>upload/slide/<?php echo $slide['slideFile'];?>">
						</li>
						<?php $i++; } ?>
					</ul>
				</div>
			</div>
			
			<!-- NEWS -->
			<section id="News" class="blog-wrapper section-padding">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding">
							<h1 class="section-title"><?=$this->lang->line("news");?></h1></br></br>
							<h2><?=$this->lang->line("ncuInter");?></h2></br></br>
						</div><!-- col-xs-12 -->
						
					  <?php if([$this->session->userdata("lang")] == ['english']){
							foreach($showNews as $news){
								if(empty($news['newsTitle']['thailand'])) {?>
									<div class="wow zoomIn col-xs-12 col-md-4 ">
										<div class="image-cropper">
											<img class="img-responsive " src="<?php echo base_url(); ?>upload/news/<?php echo $news['newsFile'];?>"/>
										</div>
										<div class="blog-date-wrapper">
											<span class="floatleft"><i class="fa fa-calendar"></i><?php echo $news['newsDate'][$this->session->userdata("lang")];?></span>
											<span class="clearboth"> &nbsp; </span>
										</div>
										<div class="blog-container">
											<h2 class="crop-title"><a target="_blank"><?php echo $news['newsTitle'][$this->session->userdata("lang")];?></a></h2>
											<div class="crop">
												<p><?php echo $news['newsDetail'][$this->session->userdata("lang")];?></p>
											</div>
											<a class="custom-button" href="<?php echo base_url(); ?>index.php/home/news/<?php echo $news['newsId'];?>" ><?=$this->lang->line("readMore");?><i class="fa fa-angle-right"></i></a>
										</div>
									</div>
						  <?php } 
							}
						}else if([$this->session->userdata("lang")] == ['thailand']){
							foreach($showNews as $news){
								if(empty($news['newsTitle']['english'])) {?>
									<div class="wow zoomIn col-xs-12 col-md-4 ">
										<div class="image-cropper">
											<img class="img-responsive " src="<?php echo base_url(); ?>upload/news/<?php echo $news['newsFile'];?>"/>
										</div>
										<div class="blog-date-wrapper">
											<span class="floatleft"><i class="fa fa-calendar"></i><?php echo $news['newsDate'][$this->session->userdata("lang")];?></span>
											<span class="clearboth"> &nbsp; </span>
										</div>
										<div class="blog-container">
											<h2><a href="<?php echo base_url(); ?>" target="_blank"><?php echo $news['newsTitle'][$this->session->userdata("lang")];?></a></h2>
											<div class="crop">
												<p><?php echo $news['newsDetail'][$this->session->userdata("lang")];?></p>
											</div>
											<a class="custom-button" href="<?php echo base_url(); ?>index.php/home/news/<?php echo $news['newsId'];?>" ><?=$this->lang->line("readMore");?><i class="fa fa-angle-right"></i></a>
										</div>
									</div>
						  <?php } 
							}
						}?>
						
					</div><!-- /.row -->
				</div><!-- /.container --></br></br></br></br>
			</section><!-- /who we wre -->
			
			<!-- Academic -->
			<section id="Academic" class="service section-padding">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding">
							<h1 class="section-title"><?=$this->lang->line("academic");?></h1></br></br>
							<h2><?=$this->lang->line("ncuInter");?></h2>
						</div><!-- col-xs-12 -->
						<div class="col-xs-12 col-sm-5 col-md-5">
							<div class="left-column">
								<div class="wow zoomIn media">
									<div class="media-left media-middle">
										<a href="<?php echo base_url(); ?>index.php/home/engineering">
											<i class="fa flaticon-industry2"></i>
										</a>
									</div>
									<div class="media-body">
										<h2><?=$this->lang->line("engineeringAca");?></h2>
										<h3><?=$this->lang->line("ncuInter");?></h3>
									</div>
								</div>
								<div class="wow zoomIn media">
									<div class="media-left media-middle">
										<a href="<?php echo base_url(); ?>index.php/home/hospitality">
											<i class="fa flaticon-industry"></i>
										</a>
									</div>
									<div class="media-body">
										<h2><?=$this->lang->line("hospitalityAca");?></h2>
										<h3><?=$this->lang->line("ncuInter");?></h3>
									</div>
								</div>
							</div>
						</div><!-- col-md-5 -->
						<div class="col-xs-6 col-sm-2 col-md-2 hidden-xs">
							<div class="image-box"></br></br>
								<img class="img-responsive" src="<?php echo base_url(); ?>sethome/img/Inter.png" alt="ncu">
							</div>
							</div><!-- /col-md-2 -->
						<div class="col-xs-12 col-sm-5 col-md-5">
							<div class="right-column">
								<div class="wow zoomIn media">
									<div class="media-left media-middle">
										<a href="<?php echo base_url(); ?>index.php/home/business">
											<i class="fa flaticon-businessman158"></i>
										</a>
									</div><!-- media left-->
									<div class="media-body">
										<h2><?=$this->lang->line("businessAca");?></h2>
										<h3><?=$this->lang->line("ncuInter");?></h3>
									</div><!--/.media body-->
								</div><!-- /.media -->
								<div class="wow zoomIn media">
									<div class="media-left media-middle">
										<a href="<?php echo base_url(); ?>index.php/home/certificate">
											<i class="fa flaticon-key4"></i>
										</a>
									</div><!-- media left-->
									<div class="media-body">
										<h2><?=$this->lang->line("certificateAca");?></h2>
										<h3><?=$this->lang->line("ncuInter");?></h3>
									</div><!--/.media body-->
								</div><!-- /.media -->
							</div><!-- /.right-column -->
						</div>
					</div><!-- row-->
				</div><!-- container -->
				</br>
				<div class="container clean-idea section-padding">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding">
							<h1 class="section-title">Interested Applicants</h1>
							<p class="text-left">
								How to Apply !</br>
								1. Download your application from the "Admission Online" button below Or <a href="<?php echo base_url(); ?>/form/applicationfrom.pdf">"Click".</a></br>
								2. Fill out your application form and gather all necessary supporting documents listed on the last page of the application form.</br>
								3. Send your completed form and all required supporting documents to:ncic@northcm.ac.th</br>
								4. Once we have received and confirmed your application form and supporting documents, we will contact you within the next 48 working hours (UTC+07:00 timezone).</br>
							</p>
							<div class="button-set">
								<a href="<?php echo base_url(); ?>/form/applicationfrom.pdf" type="button" class="btn btn-danger"><i class="fa fa-link"></i><?=$this->lang->line("admission");?></button>
								<a href="#Contact" class="page-scroll contact-us"><i class="fa fa-phone"></i><?=$this->lang->line("contact");?></a>
							</div><!-- /.button-set -->
						</div><!-- col-xs-12 -->
					</div><!-- row-->
				</div><!-- container -->
			</section><!-- /clean idea and unique design -->
			
			<!-- Research -->
			<!--<section id="Research" class="who-we-are section-padding blog-wrapper">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 col-lg-12 text-center p-padding">
							<h1 class="section-title"><?=$this->lang->line("research");?></h1></br></br>
							<h2><?=$this->lang->line("ncuInter");?></h2>
						</div>
						<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
							<div class="icon-circle">
								<a href="<?php echo base_url(); ?>index.php/home/researchAll"><i class="fa flaticon-industrial1"></i></a>
							</div>
							<div class="who-we-are-content text-center">
								<h2><?=$this->lang->line("researchAll");?></h2>
							</div>
						</div>
						<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
							<div class="icon-circle">
								<a href="<?php echo base_url(); ?>index.php/home/researchAcademic"><i class="fa flaticon-chart15"></i></a>
							</div>
							<div class="who-we-are-content text-center">
								<h2><?=$this->lang->line("researchAcademic");?></h2>
							</div>
						</div>
						<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
							<div class="icon-circle">
								<a href="<?php echo base_url(); ?>index.php/home/researchSynthesis"><i class="fa flaticon-biology1"></i></a>
							</div>
							<div class="who-we-are-content text-center">
								<h2><?=$this->lang->line("researchSynthesis");?></h2>
							</div>
						</div>
						<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
							<div class="icon-circle">
								<a href="<?php echo base_url(); ?>index.php/home/researchClass"><i class="fa fa-users"></i></a>
							</div>
							<div class="who-we-are-content text-center">
								<h2><?=$this->lang->line("researchClass");?></h2>
							</div>
						</div>
					</div>
				</div></br></br></br></br></br></br>
			</section>
			
			<!-- Project -->
			<!--<section id="Project" class="protfolio section-padding blog-wrapper">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding animated" style="visibility: visible; animation-name: zoomIn;">
							<h1 class="section-title"><?=$this->lang->line("project");?></h1></br></br>
							<h2><?=$this->lang->line("ncuInter");?></h2>
						</div>
					</div>
				</div>
				<div class="portfolio-menu">
					<div class="container">
						<div class="row"> 
							<div class="col-xs-12">
								<ul class="wow zoomIn animated" id="filter" style="visibility: visible; animation-name: zoomIn;">
									<li><a data-group="all" href="#" class="active"><?=$this->lang->line("projectAll");?></a></li>
									<li><a data-group="km" href="#"><?=$this->lang->line("projectKnowledge");?></a></li>
									<li><a data-group="art" href="#"><?=$this->lang->line("art");?></a></li>
									<li><a data-group="academic" href="#"><?=$this->lang->line("projectAcademic");?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div id="grid" class="shuffle" style="position: relative; height: 600px;">
						
						<div data-groups='["all"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered animated" style="margin:0; padding:0;">
							<div class="portfolio">
								<figure class="effect-julia">
									<img alt="img21" src="<?php echo base_url(); ?>sethome/img/project1.jpg">
									<figcaption>
										<div class="socials">
											<a href="<?php echo base_url(); ?>index.php/home/projectAll"><i class="fa flaticon-forward18"></i></a>
										</div>
										<div class="scoial-heading">
											<p><?=$this->lang->line("projectAll");?></p>
										</div>
									</figcaption>     
								</figure>
							</div>
						</div>
						
						<div data-groups='["all", "km"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered animated" style="margin:0; padding:0;">
							<div class="portfolio">
								<figure class="effect-julia">
									<img alt="img21" src="<?php echo base_url(); ?>sethome/img/project2.jpg">
									<figcaption>
										<div class="socials">
											<a href="<?php echo base_url(); ?>index.php/home/projectKnowledge"><i class="fa flaticon-forward18"></i></a>
										</div>
										<div class="scoial-heading">
											<p><?=$this->lang->line("projectKnowledge");?></p>
										</div>
									</figcaption>     
								</figure>
							</div>
						</div>
						<div data-groups='["all","art"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
							<div class="portfolio">
								<figure class="effect-julia">
									<img alt="img21" src="<?php echo base_url(); ?>sethome/img/project3.jpg">
									<figcaption>
										<div class="socials">
											<a href="<?php echo base_url(); ?>index.php/home/projectArt"><i class="fa flaticon-forward18"></i></a>
										</div>
										<div class="scoial-heading">
											<p><?=$this->lang->line("art");?></p>
										</div>
									</figcaption>     
								</figure>
							</div>
						</div>
						<div data-groups='["academic", "all"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
							<div class="portfolio">
								<figure class="effect-julia">
									<img alt="img21" src="<?php echo base_url(); ?>sethome/img/project4.jpg">
									<figcaption>
										<div class="socials">
											<a href="<?php echo base_url(); ?>index.php/home/projectAcademic"><i class="fa flaticon-forward18"></i></a>
										</div>
										<div class="scoial-heading">
											<p><?=$this->lang->line("projectAcademic");?></p>
										</div>
									</figcaption>     
								</figure>
							</div>
						</div>
					</div>  
				</div>
			</section>-->
			
			<!-- About -->
			<section id="About" class="clean-idea section-padding ">
				<div class="container">
				<?php foreach($showAbout as $about){ 
					if([$this->session->userdata("lang")] == ['thailand']){ ?>
						<div class="row">
							<div class="wow zoomIn col-xs-12 p-padding">
								<?php if(empty($about['aboutDetail']['english'])) { ?>
								<div class='text-center'>
									<h1 class="section-title"><?=$this->lang->line("about");?></h1></br></br>
								</div>
								<div class="text-left">
									<h2><?php echo $about['aboutDetail'][$this->session->userdata("lang")];?></h2>
								</div>
								<div class="button-set text-center">
									<a href="http://www.northcm.ac.th/northcm/ncufun" type="button" class="btn btn-danger"><i class="fa fa-link"></i>Read More</a>
									<a href="<?php echo base_url(); ?>index.php#Contact" class="page-scroll contact-us"><i class="fa fa-phone"></i>Contact Us</a>
								</div><!-- /.button-set -->
							</div><!-- col-xs-12 -->
						</div><!-- row-->
					<?php } 
					} else { 
						if(empty($about['aboutDetail']['thailand'])) { ?>
						<div class="row">
							<div class="wow zoomIn col-xs-12 p-padding">
								<div class='text-center'>
									<h1 class="section-title"><?=$this->lang->line("about");?></h1></br></br>
								</div>
								<div class="text-left">
									<h2><?php echo $about['aboutDetail'][$this->session->userdata("lang")];?></h2>
								</div>
								<div class="button-set text-center">
									<a href="<?php echo base_url(); ?>/form/applicationfrom.pdf" type="button" class="btn btn-danger"><i class="fa fa-link"></i><?=$this->lang->line("admission");?></button>
									<a href="<?php echo base_url(); ?>index.php#Contact" class="page-scroll contact-us"><i class="fa fa-phone"></i>Contact Us</a>
								</div><!-- /.button-set -->
							</div><!-- col-xs-12 -->
						</div><!-- row-->
					<?php }
						}
					}?>
				</div><!-- container -->
			</section><!-- /About -->
			
			<!-- Contact -->
			<section id="Contact" class="contact-wrapper section-padding">
				<div class="container">
					<div class="row">
						<div class="wow zoomIn col-xs-12 text-center p-padding">
							<h1 class="section-title"><?=$this->lang->line("contact");?></h1></br></br>
							<h2><?=$this->lang->line("ncuInter");?></h2>
						</div><!-- col-xs-12 -->
						<div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<form method="post" action="<?php echo base_url(); ?>index.php/home/contact" enctype="multipart/form-data">
								<div class="form-inline">
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" name="contactAuthor" id="exampleInputName" placeholder="<?=$this->lang->line("name");?>" >
									</div>
									<div class="form-group col-sm-6">
										<input type="email" class="form-control" name="contactEmail" id="exampleInputEmail" placeholder="<?=$this->lang->line("emailContact");?>">
									</div>
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" name="contactSubject" id="exampleInputSubject" placeholder="<?=$this->lang->line("subject");?>" >
									</div>
									<div class="form-group col-sm-3">
										<select class="form-control" name="contactCompany" id="select_id" onchange="sSelect()">
											<option value="">-Select Country-</option>
											<option value="Thailand">Thailand</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="South India & Gulf Countries">South India & Gulf Countries</option>
											<option value="North India">North India</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Nepal">Nepal</option>
											<option value="Mauritius">Mauritius</option>
											<option value="South Korea">South Korea</option>
											<option value="Africa">Africa</option>
											<option value="other">Other</option>
										</select>
									</div>
									<div class="form-group col-sm-3">
										<input type="text" class="form-control" name="contactCompanyOther" id="input_text" style="display:none" placeholder="<?=$this->lang->line("from");?>"/>
									</div>
									<div class="form-group col-sm-12">
										<textarea class="form-control" name="contactMessage" rows="3" id="exampleInputMessage" placeholder="<?=$this->lang->line("message");?>" ></textarea>
									</div>
								</div>
								<div class="form-group col-xs-12">
									<div id='mail_success' class='success' style="display:none;">Your message has been sent successfully.
									</div><!-- success message -->
									<div id='mail_fail' class='error' style="display:none;"> Sorry, error occured this time sending your message.
									</div><!-- error message -->
								</div>
								<div class="form-group col-sm-12" id='submit'>
									<input type="submit"  class="btn  btn-lg costom-btn" value="<?=$this->lang->line("send");?>">
								</div>
							</form>
						</div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
						<div class="col-xs-12">
							<div class="contact-or">
								<p><?=$this->lang->line("or");?></p>
							</div><!-- /.contact-or -->
							<div class="icon-text">
								<h2><?=$this->lang->line("follow");?></h2>
							</div><!-- /.icon-text -->
							<div class="icon-holder">
								<ul >
									<li><a href="https://www.facebook.com/NCIC2016/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCLNWwABxjoPMnZ_pLeWYN_A" target="_blank"><i class="fa fa-youtube"></i></a></li>
									<li><a href="https://twitter.com/NCIC_Thailand" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/ncicthailand/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div><!-- /.icon-holder -->
						</div><!-- /.col-xs-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- get in touch -->
			
			<!-- our partner -->
			<section class="partner-wrapper blog-wrapper">
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
								<a href="<?php echo base_url(); ?>index.php/home"><img src="<?php echo base_url(); ?>sethome/img/logo.png" alt="logoncic" width="100px"></a>
							</div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
							<div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
								<p class="footer-heading">link</p>
								<ul class="footermenu">
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#Home"><?=$this->lang->line("home");?></a></li>
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#News"><?=$this->lang->line("news");?></a></li>
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#Academic"><?=$this->lang->line("academic");?></a></li>
									<!--<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#Research"><?=$this->lang->line("research");?></a></li>
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#Project"><?=$this->lang->line("project");?></a></li>-->
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#About"><?=$this->lang->line("about");?></a></li>
									<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#Contact"><?=$this->lang->line("contact");?></a></li>
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
								<p><a href="<?php echo base_url(); ?>index.php/admin/login"><span>For admin</span></a></p>
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
					<li> <a href="#Home"><?=$this->lang->line("home");?></a></li>
					<li> <a href="#News"><?=$this->lang->line("news");?></a></li>
					<li> <a href="#Academic"><?=$this->lang->line("academic");?></a></li>
					<!--<li> <a href="#Research"><?=$this->lang->line("research");?></a></li>
					<li> <a href="#Project"><?=$this->lang->line("project");?></a></li>-->
					<li> <a href="#About"><?=$this->lang->line("about");?></a></li>
					<li><a href="#Contact"><?=$this->lang->line("contact");?></a></li>
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
		
		<!-- Email JS -->
		<script src="<?php echo base_url(); ?>sethome/js/email.js"></script>
		<script>
			$(window).on('scroll', function(){
				if( $(window).scrollTop()>670 ){
					$('.navbar-default').addClass('navbar-fixed-top');
					} else {
					$('.navbar-default').removeClass('navbar-fixed-top');
				}
			});
		</script>
		<script type="text/javascript">
			function sSelect(){
				index = document.getElementById('select_id').value;
				if(index == 'other'){
					document.getElementById('input_text').style.display='';
				}
			}
		</script>
	</body>
</html>
