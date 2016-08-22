<!DOCTYPE html>
<html>
	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/editResearch" enctype="multipart/form-data">
				<?php foreach($listResearchLangId as $research){ 
				if([$this->session->userdata("lang")] == ['thailand']){ ?>
					<div class="box-body">
						<div class="form-group">
							<label><?=$this->lang->line("teacher");?></label>
							<input type="hidden" name="researchId" value="<?php echo $research['researchId'];?>">
							<input type="hidden" class="form-control" name="researchTeacher[english]" id="researchTeacher">
							<input type="text" class="form-control" name="researchTeacher[thailand]" id="researchTeacher" value="<?php echo $research['researchTeacher'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("nameResearch");?></label>
							<input type="hidden" class="form-control" name="researchName[english]" id="researchName">
							<input type="text" class="form-control" name="researchName[thailand]" id="researchName" value="<?php echo $research['researchName'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("date");?></label>
							<input type="hidden" class="form-control" name="researchDate[english]">
							<input type="text" class="form-control" name="researchDate[thailand]" id="researchDate" value="<?php echo $research['researchDate'][$this->session->userdata("lang")];?>">
						</div>
						<?php if($research['researchType'][$this->session->userdata("lang")] == "ผลงานวิชาการ"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิชาการ" checked="checked">
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="การสังเคราะห์ผลงานวิจัย">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิจัยในชั้นเรียน">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php } else if($research['researchType'][$this->session->userdata("lang")] == "การสังเคราะห์ผลงานวิจัย"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิชาการ" >
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="การสังเคราะห์ผลงานวิจัย" checked="checked">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิจัยในชั้นเรียน">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php } else if($research['researchType'][$this->session->userdata("lang")] == "ผลงานวิจัยในชั้นเรียน"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิชาการ">
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="การสังเคราะห์ผลงานวิจัย">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[thailand]" id="optionsRadios2" value="ผลงานวิจัยในชั้นเรียน" checked="checked">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php }?>
						<div class="form-group">
							<label><?=$this->lang->line("picture");?></label>
							<input type="file" name="researchFile[]" id="researchFile" multiple="multiple">
						</div>
						<div class="box-footer">
							<button type="submit" name="upload" value="upload" class="btn btn-primary">Submit</button>
						</div>
					</div>
					<?php } else { ?>
					<div class="box-body">
						<div class="form-group">
							<label><?=$this->lang->line("teacher");?></label>
							<input type="hidden" name="researchId" value="<?php echo $research['researchId'];?>">
							<input type="hidden" class="form-control" name="researchTeacher[thailand]" id="researchTeacher">
							<input type="text" class="form-control" name="researchTeacher[english]" id="researchTeacher" value="<?php echo $research['researchTeacher'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("nameResearch");?></label>
							<input type="hidden" class="form-control" name="researchName[thailand]" id="researchName">
							<input type="text" class="form-control" name="researchName[english]" id="researchName" value="<?php echo $research['researchName'][$this->session->userdata("lang")];?>">
						</div>
						<div class="form-group">
							<label><?=$this->lang->line("date");?></label>
							<input type="hidden" class="form-control" name="researchDate[thailand]">
							<input type="text" class="form-control" name="researchDate[english]" id="researchDateE" value="<?php echo $research['researchDate'][$this->session->userdata("lang")];?>">
						</div>
						<?php if($research['researchType'][$this->session->userdata("lang")] == "ResearchAcademic"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchAcademic" checked="checked">
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchSynthesis">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchClass">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php } else if($research['researchType'][$this->session->userdata("lang")] == "ResearchSynthesis"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchAcademic" >
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[english]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchSynthesis" checked="checked">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchClass">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php } else if($research['researchType'][$this->session->userdata("lang")] == "ResearchClass"){ ?>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchAcademic">
										<?=$this->lang->line("researchAcademic");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchSynthesis">
										<?=$this->lang->line("researchSynthesis");?>
									</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<label>
										<input type="hidden" name="researchType[thailand]">
										<input type="radio" name="researchType[english]" id="optionsRadios2" value="ResearchClass" checked="checked">
										<?=$this->lang->line("researchClass");?>
									</label>
								</div>
							</div>
						<?php }?>
						<div class="form-group">
							<label><?=$this->lang->line("picture");?></label>
							<input type="file" name="researchFile[]" id="researchFile" multiple="multiple">
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
