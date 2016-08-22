<!DOCTYPE html>
<html>
	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/editProject" enctype="multipart/form-data">
				<?php foreach($listProjectLangId as $project){ 
				if([$this->session->userdata("lang")] == ['thailand']){ ?>
					<div class="box-body">
						<div class="form-group">
							<label><?=$this->lang->line("teacher");?></label>
							<input type="hidden" name="projectId" value="<?php echo $project['projectId'];?>">
							<input type="hidden" class="form-control" name="projectTeacher[english]" id="projectTeacher">
							<input type="text" class="form-control" name="projectTeacher[thailand]" id="projectTeacher" value="<?php echo $project['projectTeacher'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("project");?></label>
							<input type="hidden" class="form-control" name="projectName[english]" id="projectName">
							<input type="text" class="form-control" name="projectName[thailand]" id="projectName" value="<?php echo $project['projectName'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("date");?></label>
							<input type="hidden" class="form-control" name="projectDate[english]">
							<input type="text" class="form-control" name="projectDate[thailand]" id="projectDate" value="<?php echo $project['projectDate'][$this->session->userdata("lang")];?>">
						</div>
						<?php if($project['projectType'][$this->session->userdata("lang")] == "การจัดการความรู้"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="การจัดการความรู้" checked="checked">
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="ทำนุบำรุงศิลปะและวัฒนธรรม">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="บริการวิชาการ">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php } else if($project['projectType'][$this->session->userdata("lang")] == "ทำนุบำรุงศิลปะและวัฒนธรรม"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="การจัดการความรู้" >
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="ทำนุบำรุงศิลปะและวัฒนธรรม" checked="checked">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="บริการวิชาการ">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php } else if($project['projectType'][$this->session->userdata("lang")] == "บริการวิชาการ"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="การจัดการความรู้">
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="ทำนุบำรุงศิลปะและวัฒนธรรม">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[thailand]" id="optionsRadios2" value="บริการวิชาการ" checked="checked">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php }?>
						<div class="form-group">
							<label><?=$this->lang->line("picture");?></label>
							<input type="file" name="projectFile[]" id="projectFile" multiple="multiple">
						</div>
						<div class="box-footer">
							<button type="submit" name="upload" value="upload" class="btn btn-primary">Submit</button>
						</div>
					</div>
					<?php } else { ?>
					<div class="box-body">
						<div class="form-group">
							<label><?=$this->lang->line("teacher");?></label>
							<input type="hidden" name="projectId" value="<?php echo $project['projectId'];?>">
							<input type="hidden" class="form-control" name="projectTeacher[thailand]" id="projectTeacher">
							<input type="text" class="form-control" name="projectTeacher[english]" id="projectTeacher" value="<?php echo $project['projectTeacher'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("project");?></label>
							<input type="hidden" class="form-control" name="projectName[thailand]" id="projectName">
							<input type="text" class="form-control" name="projectName[english]" id="projectName" value="<?php echo $project['projectName'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("date");?></label>
							<input type="hidden" class="form-control" name="projectDate[thailand]">
							<input type="text" class="form-control" name="projectDate[english]" id="projectDateE" value="<?php echo $project['projectDate'][$this->session->userdata("lang")];?>">
						</div>
						<?php if($project['projectType'][$this->session->userdata("lang")] == "Knowledge Management Project"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Knowledge Management Project" checked="checked">
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Arts and Culture Project">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Academic Project">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php } else if($project['projectType'][$this->session->userdata("lang")] == "Arts and Culture Project"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Knowledge Management Project" >
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[english]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Arts and Culture Project" checked="checked">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Academic Project">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php } else if($project['projectType'][$this->session->userdata("lang")] == "Academic Project"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Knowledge Management Project">
										<?=$this->lang->line("projectKnowledge");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Arts and Culture Project">
										<?=$this->lang->line("art");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="projectType[thailand]">
										<input type="radio" name="projectType[english]" id="optionsRadios2" value="Academic Project" checked="checked">
										<?=$this->lang->line("projectAcademic");?>
									</label>
								</div>
							</div>
						<?php }?>
						<div class="form-group">
							<label><?=$this->lang->line("picture");?></label>
							<input type="file" name="projectFile[]" id="projectFile" multiple="multiple">
						</div>
						<div class="box-footer">
							<button type="submit" name="upload" value="upload" class="btn btn-primary">Submit</button>
						</div>
					</div>											
				<?php } }?>
			</form>
		</section><!-- /.content -->
		
	</body>
</html>
