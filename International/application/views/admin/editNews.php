<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>North-Chiang Mai University</title>
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>sethome/img/logo_northcm.png"/>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- daterange picker -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/daterangepicker/daterangepicker-bs3.css">
		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/iCheck/all.css">
		<!-- Bootstrap Color Picker -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/colorpicker/bootstrap-colorpicker.min.css">
		<!-- Bootstrap time Picker -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/timepicker/bootstrap-timepicker.min.css">
		<!-- Select2 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/select2/select2.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/dist/css/skins/_all-skins.min.css">
		<!-- datepicker -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>setadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			
			<header class="main-header">
				<a href="index2.html" class="logo">
					<span class="logo-lg"><b>NCIC</b></span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown messages-menu">
								<?=anchor("admin/changeFromNews/thailand","Th");?>
							</li>
							<li class="dropdown notifications-menu">
								<?=anchor("admin/changeFromNews/english","En");?>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Menu -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- search form 
						<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
						</div>
					</form>-->
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="treeview">
							<a href="<?php echo base_url(); ?>index.php/admin">
								<i class="fa fa-home"></i> 
								<span><?=$this->lang->line("slide");?></span> 
							</a>
						</li>
						<li class="treeview">
							<a href="<?php echo base_url(); ?>index.php/admin/fromAddnews">
								<i class="fa fa-newspaper-o"></i>
								<span><?=$this->lang->line("news");?></span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-graduation-cap"></i>
								<span><?=$this->lang->line("academic");?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url(); ?>index.php/admin/engineering"><i class="fa fa-circle-o"></i> <?=$this->lang->line("engineeringAca");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/hospitality"><i class="fa fa-circle-o"></i> <?=$this->lang->line("hospitalityAca");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/business"><i class="fa fa-circle-o"></i> <?=$this->lang->line("businessAca");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/certificate"><i class="fa fa-circle-o"></i> <?=$this->lang->line("certificateAca");?> </a></li>
							</ul>
							</li>
						<!--<li class="treeview">
							<a href="#">
								<i class="fa fa-book"></i>
								<span><?=$this->lang->line("research");?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url(); ?>index.php/admin/researchAcademic"><i class="fa fa-circle-o"></i> <?=$this->lang->line("researchAcademic");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/researchClass"><i class="fa fa-circle-o"></i> <?=$this->lang->line("researchClass");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/researchSynthesis"><i class="fa fa-circle-o"></i> <?=$this->lang->line("researchSynthesis");?> </a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-copy"></i> 
								<span><?=$this->lang->line("project");?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url(); ?>index.php/admin/knowledge"><i class="fa fa-circle-o"></i> <?=$this->lang->line("knowledgeP");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/art"><i class="fa fa-circle-o"></i> <?=$this->lang->line("artP");?> </a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/academic"><i class="fa fa-circle-o"></i> <?=$this->lang->line("academicP");?> </a></li>
							</ul>
						</li>-->
						<li class="treeview">
							<a href="<?php echo base_url(); ?>index.php/admin/about">
								<i class="fa fa-comments-o"></i> <span><?=$this->lang->line("about");?></span>
							</a>
						</li>
					</ul>
				</section>
			</aside>
			
			<div class="content-wrapper">
				<section class="content-header">
					<small><a href="<?php echo base_url(); ?>index.php/admin"><i class="fa fa-home"></i> <?=$this->lang->line("news");?></a></small>
				</section>
				<section class="content">
					<div class="row">
						<!--  form -->
						<form method="post" action="<?php echo base_url(); ?>index.php/admin/editNews">
							<?php foreach($listNewsLangId as $news){ 
								if([$this->session->userdata("lang")] == ['thailand']){?>
								<div class="col-md-12">
									<div class="box box-primary">
										<div class="box-body">
											<div class="form-group">
												<label>หัวข้อข่าว</label>
												<input type="hidden" name="newsId" value="<?php echo $news['newsId'];?>">
												<input type="hidden" class="form-control" name="newsTitle[english]" id="newsTitle" value="<?php echo $news['newsTitle']['english'];?>">
												<input type="text" class="form-control" name="newsTitle[thailand]" id="newsTitle" value="<?php echo $news['newsTitle'][$this->session->userdata("lang")];?>">
											</div>
											<div class="form-group">
												<label>วันที่</label>
												<input type="hidden" class="form-control" name="newsDate[english]" id="newsDateEnE" value="<?php echo $news['newsDate']['english'];?>">
												<input type="text" class="form-control" name="newsDate[thailand]" id="newsDateThE" value="<?php echo $news['newsDate'][$this->session->userdata("lang")];?>">
											</div>
											<div class="form-group">
												<label>รายละเอียดข่าว</label>
												<input type="hidden" class="form-control" name="newsDetail[english]" value="<?php echo $news['newsDetail']['english'];?>">
												<textarea type="text" class="form-control" name="newsDetail[thailand]" id="newsDetailThE"><?php echo $news['newsDetail'][$this->session->userdata("lang")];?></textarea>
											</div>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</div><!--/.col (left) -->
								<?php }else { ?>
								<div class="col-md-12">
									<div class="box box-primary">
										<div class="box-body">
											<div class="form-group">
												<label>Title News</label>
												<input type="hidden" name="newsId" value="<?php echo $news['newsId'];?>">
												<input type="hidden" class="form-control" name="newsTitle[thailand]" id="newsTitle" value="<?php echo $news['newsTitle']['thailand'];?>">
												<input type="text" class="form-control" name="newsTitle[english]" id="newsTitle" value="<?php echo $news['newsTitle'][$this->session->userdata("lang")];?>">
											</div>
											<div class="form-group">
												<label>Date News</label>
												<input type="hidden" class="form-control" name="newsDate[thailand]" id="newsDateThE" value="<?php echo $news['newsDate']['thailand'];?>">
												<input type="text" class="form-control" name="newsDate[english]" id="newsDateEnE" value="<?php echo $news['newsDate'][$this->session->userdata("lang")];?>">
											</div>
											<div class="form-group">
												<label>Detail News</label>
												<input type="hidden" class="form-control" name="newsDetail[thailand]" value="<?php echo $news['newsDetail']['thailand'];?>">
												<textarea type="text" class="form-control" name="newsDetail[english]" id="newsDetailTh"><?php echo $news['newsDetail'][$this->session->userdata("lang")];?></textarea>
											</div>
										</div>
									</div>
								</div><!--/.col (right) -->
								
							<?php } }?>
							<div class="col-md-12 text-center">
								<div class="box-footer">
									<button type="submit" id="submit" name="save" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> Developer 0.1
				</div>
				<strong>© 2015 All rights reserved. <a href="http://www2.northcm.ac.th">North-Chiang Mai University</a></strong>
			</footer>
			<div class="control-sidebar-bg"></div>
		</div><!-- ./wrapper -->
		
		<!-- jQuery 2.1.4 -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo base_url(); ?>setadmin/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- Select2 -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/select2/select2.full.min.js"></script>
		<!-- InputMask -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/input-mask/jquery.inputmask.js"></script>
		<script src="<?php echo base_url(); ?>setadmin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		<script src="<?php echo base_url(); ?>setadmin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
		<!-- bootstrap color picker -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<!-- bootstrap time picker -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- iCheck 1.0.1 -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/iCheck/icheck.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>setadmin/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url(); ?>setadmin/dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url(); ?>setadmin/dist/js/demo.js"></script>
		
		<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
			$.widget.bridge('uibutton', $.ui.button);
			<!-- Date addNews -->
			$(function() {
				$( "#newsDateTh" ).datepicker({
					dateFormat: 'dd-MM-yy'
				});
			});
			$(function() {
				$( "#newsDateEn" ).datepicker({
					dateFormat: 'dd-MM-yy'
				});
			});
			<!-- Date editNews -->
			$(function() {
				$( "#newsDateThE" ).datepicker({
					dateFormat: 'dd-MM-yy'
				});
			});
			$(function() {
				$( "#newsDateEnE" ).datepicker({
					dateFormat: 'dd-MM-yy'
				});
			});
		</script>
		<script>
			<!-- CKEDITOR addNews -->
            CKEDITOR.replace( 'newsDetailTh' );
            CKEDITOR.replace( 'newsDetailEn' );
			<!-- CKEDITOR editNews -->
			CKEDITOR.replace( 'newsDetailThE' );
            CKEDITOR.replace( 'newsDetailEnE' );
		</script>
		
	</body>
</html>
