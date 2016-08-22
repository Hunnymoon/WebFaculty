<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>North-Chiang Mai University</title>
		
		<!-- Tell the browser to be responsive to screen width -->
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
		<!-- Google font -->
		<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
				<!-- Logo -->
				<a href="index2.html" class="logo">
					<span class="logo-lg"><b>NCIC</b></span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown messages-menu">
								<?=anchor("admin/changeHome/thailand","Th");?>
							</li>
							<li class="dropdown notifications-menu">
								<?=anchor("admin/changeHome/english","En");?>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
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
							<a href="<?php echo base_url(); ?>index.php/admin/engineering">
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
				<!-- /.sidebar -->
			</aside>
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<small><a href="<?php echo base_url(); ?>index.php/admin"><i class="fa fa-home"></i> <?=$this->lang->line("slide");?></a></small>
				</section>
				
				<!-- Main content -->
				<section class="content">
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title"><?=$this->lang->line("addSlide");?></h3>
									<button type="button" class="btn btn-social-icon btn-bitbucket" data-toggle="modal" data-target="#fromAddSlide"><i class="fa fa-plus"></i></button>
									<!--<div class="box-tools">
										<div class="input-group" style="width: 150px;">
										<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="<?=$this->lang->line("search");?>">
										<div class="input-group-btn">
										<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
										</div>
										</div>
									</div>-->
								</div><!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									<table class="table table-hover text-center">
										<tr>
											<th><?=$this->lang->line("no");?></th>
											<th><?=$this->lang->line("title");?></th>
											<th><?=$this->lang->line("detail");?></th>
											<th><?=$this->lang->line("edit");?></th>
										</tr>
										
										<?php $i= $this->uri->segment(3)+1;
											if(count($allSlide) == 0 ){
												echo '<tr><td colspan="5">'.$this->lang->line("nodata").'</td></tr>';
												}else{
												foreach($allSlide as $slide){ ?>
												<tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $slide['slideName'];?> </td>
													<td><img src="<?php echo base_url(); ?>upload/slide/<?php echo $slide['slideFile'];?>" width="100"></td>
													<td>
														<?php if($slide['slideStatus']=='show'){ ?>
															<a href="<?php echo base_url(); ?>index.php/admin/editSlide/<?php echo $slide['slideId'];?>/no" class="btn btn-app" type="button" onclick="return confirm('Confirm change status Disable!')">
															<i class="fa fa-edit"></i> Show</a>
															<?php }else{ ?>
															<a href="<?php echo base_url(); ?>index.php/admin/editSlide/<?php echo $slide['slideId'];?>/show" class="btn btn-app" type="button" onclick="return confirm('Confirm change status Show! ')">
															<i class="fa fa-edit"></i> No</a>
														<?php } ?>
													</td>
												</tr>
											<?php $i++; } } ?>
											<tr>
												<?php echo $this->pagination->create_links();?>
											</tr>
									</table>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div>
					</div><!-- /.row -->
					
					<!-- Form addSlide -->
					<div class="modal fade" id="fromAddSlide" role="dialog">
						<div class="modal-dialog">
							<form method="post" action="<?php echo base_url(); ?>index.php/admin/addSlide" enctype="multipart/form-data">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label><?=$this->lang->line("title");?></label>
											<input type="text" class="form-control" name="slideName" id="slideName" placeholder="หัวข้อ">
										</div>
										<div class="form-group">
											<label><?=$this->lang->line("picture");?></label>
											<input type="file" name="slideFile" id="slideFile">
											<?=$this->lang->line("sizeImgSlide");?>
										</div>
										<div class="form-group">
											<label>
												<input type="radio" name="slideStatus" class="minimal" value="show" checked> Show
											</label>
											<label>
												<input type="radio" name="slideStatus" class="minimal" value="no"> No Show
											</label>
										</div>
									</div>
									<div class="modal-footer">
										<div class="col-md-12 text-center">
											<div class="box-footer">
												<button type="submit" name="upload" value="upload" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
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
		<!-- date-range-picker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>setadmin/plugins/daterangepicker/daterangepicker.js"></script>
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
		
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>
		
	</body>
</html>
