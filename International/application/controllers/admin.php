<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Admin extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
		}
		function login()
		{
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$this->load->view('login.php');
		}
		function change($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/login","refresh");
		}
		function checkStatus(){
			$username =  $this->input->post('username'); /// รับค่า input ชื่อ username
			$password =  $this->input->post('password');/// รับค่า input ชื่อ password
			
			if($username == 'admin' && $password == 'ncu58770'){
				
				$config['base_url']=base_url().'index.php/admin/index';
				$config['total_rows']=$this->db->get('tbnews')->num_rows();
				$config['per_page']=10;
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$this->pagination->initialize($config);
				
				$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
				$this->lang->load($lang,$lang);
				
				$data['allNews']=$this->News->getAllnews($config['per_page'],$this->uri->segment(3));
				/*var_dump($data);
				die();*/
				redirect("admin","refresh");
				//$this->load->view('admin/index',$data);
				}else { //// ถ้าค่า $data เป็นเท็จ
				echo '<script>alert("Username or Password error!");</script>';
				redirect("admin/login","refresh");
			}
		}
		function index()
		{
			$config['base_url']=base_url().'index.php/admin/index';
			$config['total_rows']=$this->db->get('tbnews')->num_rows();
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['allSlide'] = $this->News->allSlide($config['per_page'],$this->uri->segment(3));
			redirect("admin/changes","refresh");
			//$this->load->view('admin/index',$data);
		}
		function changes(){
			$type = 'english';
			$this->session->set_userdata('lang',$type);
			redirect("admin/admins","refresh");
		}
		function admins()
		{
			$config['base_url']=base_url().'index.php/admin/index';
			$config['total_rows']=$this->db->get('tbnews')->num_rows();
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['allSlide'] = $this->News->allSlide($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/index',$data);
		}
		function changeHome($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/admins","refresh");
		}
/*-------------------------------------------- News --------------------------------------------------*/		
		function setConfigNews(){
			$config = array();
			$config['upload_path'] = "upload/news/";
			$config['allowed_types'] = "jpg|gif|png|pdf";
			$config['encrypat_name'] = TRUE;
			$config['overwrite'] = False;
			return $config;
		}
		function fromAddnews()
		{
			$config['base_url']=base_url().'index.php/admin/index';
			$config['total_rows']=$this->db->get('tbnews')->num_rows();
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['allNews'] = $this->News->getAllnews($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['allNews']);
			die();*/
			$this->load->view('admin/news',$data);
		}	
		function changeFromNews($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/fromAddnews","refresh");
		}
		
		function addNews(){
			$files = $_FILES;
			$config['upload_path']="upload/news/";
			$config['allowed_types']="jpg|gif|png";
			
			$this->upload->initialize($config);
			
			$file_name = $this->upload->do_upload('newsFile');
			$newsFile = $this->upload->data();
			$file = $this->upload->data();
			if ( ! $newsFile){
				$error = array('error' => $this->upload->display_errors());
				echo '<script>alert("Upload error, please upload a maximum size 1024 kb");</script>';
				redirect("admin/news","refresh");
				
			}else{
				$newsId = $this->input->post('newsId');
				$newsTitle = serialize($this->input->post('newsTitle'));
				$newsDetail = serialize($this->input->post('newsDetail'));
				$newsDate = serialize($this->input->post('newsDate'));
				
				$this->News->setNewsId($newsId);
				$this->News->setNewsTitle($newsTitle);
				$this->News->setNewsDetail($newsDetail);
				$this->News->setNewsDate($newsDate);
				$this->News->setNewsFile($newsFile);
				
				$data = $this->News->addNews();
				$newsId = $this->db->insert_id();
				$count = count($_FILES['gallery']['name']);
				
				for($i=0; $i<$count; $i++)
				{
					$_FILES['gallery']['name'] = $files['gallery']['name'][$i];
					$_FILES['gallery']['type'] = $files['gallery']['type'][$i];
					$_FILES['gallery']['tmp_name'] = $files['gallery']['tmp_name'][$i];
					$_FILES['gallery']['size'] = $files['gallery']['size'][$i];
					$_FILES['gallery']['error'] = $files['gallery']['error'][$i];
					
					$this->upload->initialize($this->setConfigNews());
					if($this->upload->do_upload('gallery') == False)
					{
						$error = array('error' => $this->upload->display_errors());
						
						echo '<script>alert("Dimension of the photo image has to be 360 by 350px");</script>';
						$this->load->view('admin/news',$error);
					}else{
						$data = $this->upload->data();
						/*var_dump($data);
							die();*/
						$dataarray = array(
						'newsId'=> $newsId,
						'newsfileName' => $data['file_name'],
						'newsfileSize' => $data['file_size'],
						'newsfileExt' => $data['file_ext'],
						'newsfileFullpath' => $data['full_path'],
						);
						/*var_dump($dataarray);
						die();*/
						$this->db->insert('tbnewsfile',$dataarray);
					}
				}
				echo '<script>alert("Save complete...");</script>';
				redirect("admin/fromAddnews","refresh");
			}
		}
		function fromEditNews($newsId)
		{
			$data['showDetail']=$newsId;
			$this->News->setNewsId($newsId);
			
			$data['listNewsLangId'] = $this->News->findByLangNewsId($newsId);
			$data['listNewsId'] = $this->News->findByNewsId($newsId);
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);	
			$this->load->view('admin/editNews',$data);
		}
		function editNews()
		{
			if($this->input->post()!= null)
			{
				$newsId = $this->input->post('newsId');
				$newsTitle = serialize($this->input->post('newsTitle'));
				$newsDetail = serialize($this->input->post('newsDetail'));
				$newsDate = serialize($this->input->post('newsDate'));
				
				$this->News->setNewsId($newsId);
				$this->News->setNewsTitle($newsTitle);
				$this->News->setNewsDetail($newsDetail);
				$this->News->setNewsDate($newsDate);
				
				$data = $this->News->editNews();
				/*var_dump($data);
				die();*/
				$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
				$this->lang->load($lang,$lang);	
			}
			redirect("admin/fromAddnews","refresh");
		}
		function delNews($newsId){
			$this->News->setNewsId($newsId);
			$img = $this->News->findByNewsId($newsId);
			$newsFile = $img[0]['newsFile'];
			unlink('upload/news/'.$newsFile);
			
			$data['listNewsLangId'] = $this->News->findByLangNewsfileId($newsId);
			$imgFile = $this->News->findByLangNewsfileId($newsId);
			for($i=0; $i<count($imgFile); $i++ ){
				$newsFile1 = $imgFile[$i]['newsfileName'];
				unlink('upload/news/'.$newsFile1);
			}
			/*var_dump($newsFile1);
				die();*/
			$this->News->delNews($newsId);
			echo '<script>alert("Delete complete...");</script>';
			redirect("admin/fromAddnews","refresh");
			exit();
		}
		/*------------------------------------------------------------------------------------------------------------------------------*/
		function addSlide(){	
			$config['upload_path']="upload/slide/";
			$config['allowed_types']="jpg|gif|png";
			
			$this->upload->initialize($config);
			
			$file_name = $this->upload->do_upload('slideFile');
			$slideFile = $this->upload->data();
			$file = $this->upload->data();
			/*var_dump($slideFile);
			die();*/
			
			if ( ! $slideFile){
				$error = array('error' => $this->upload->display_errors());
				echo '<script>alert("Upload error, please upload a maximum size 1024 kb");</script>';
				redirect("admin/index","refresh");
				
				}else{
				
				$slideId = $this->input->post('slideId');
				$slideName = $this->input->post('slideName');
				$slideStatus = $this->input->post('slideStatus');
				//$slideLink = $this->input->post('slideLink');
				
				$this->News->setSlideFile($slideId);
				$this->News->setSlideName($slideName);
				$this->News->setSlideStatus($slideStatus);
				//$this->News->setSlideLink($slideLink);
				$this->News->setSlideFile($file);
				
				$data = $this->News->addSlide();			
			}
			echo '<script>alert("Upload photo complete...");</script>';
			redirect("admin/index","refresh");	
		}
		function resizeSlide($path,$file){
			
			$config['image_library'] = 'gd2';
			$config['source_image']	= $path;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['create_thumb'] = FALSE;
			$config['width']	= 1170;
			$config['height']	= 400;
			$config['new_image'] = 'upload/slide/'.$file;
			
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			
			if ( ! $this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
				}else{
				$slideId = $this->input->post('slideId');
				$slideName = $this->input->post('slideName');
				$slideStatus = $this->input->post('slideStatus');
				$slideLink = $this->input->post('slideLink');
				$slideDetail = $this->input->post('slideDetail');
				
				$this->News->setSlideId($slideId);
				$this->News->setSlideName($slideName);
				$this->News->setSlideStatus($slideStatus);
				$this->News->setSlideLink($slideLink);
				$this->News->setSlideDetail($slideDetail);
				$this->News->setSlideFile($file);
				
				$data = $this->News->addSlide();
				
				echo '<script>alert("Upload photo complete...");</script>';
				redirect("admin/index","refresh");			
			}	
		}
		function allSlide(){
			
			$config['base_url']=base_url().'index.php/admin/allSlide';
			$config['total_rows']=$this->db->get('tbslide')->num_rows();
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$data['allSlide']=$this->News->allslide($config['per_page'],$this->uri->segment(3));
			
			//$data['allNews'] = $this->News->getAllnews();
			$this->load->view('allSlide',$data);
		}
		function editSlide(){
			$slideStatus = $this->uri->segment(4);
			$slideId = $this->uri->segment(3);
			
			$data = $this->News->changeStatus($slideId,$slideStatus);
			
			echo '<script>alert("Edit complete...");</script>';
			redirect("admin/index","refresh");
		}
/*-------------------------------------------------------- Academic Engineering ---------------------------------------------------*/
		function changeEngineering($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/engineering","refresh");
		}
		function engineering(){
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['engineering'] = $this->Academic->academic();
			/*var_dump($data['engineering']);
			die();*/
			$this->load->view('admin/engineering',$data);
		}
		function editEngineering(){
			$academicId = $this->input->post('academicId');
			$academicDetail = serialize($this->input->post('academicDetail'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicDetail($academicDetail);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/engineering","refresh");
		}
		function editEngineeringTeacher(){
			$academicId = $this->input->post('academicId');
			$academicTeacher = serialize($this->input->post('academicTeacher'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicTeacher($academicTeacher);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editTeacherAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/engineering","refresh");
		}
/*-------------------------------------------------------- Academic Hospitality---------------------------------------------------*/
		function changeHospitality($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/hospitality","refresh");
		}
		function hospitality(){
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['hospitality'] = $this->Academic->academic();
			/*var_dump($data['hospitality']);
			die();*/
			$this->load->view('admin/hospitality',$data);
		}
		function editHospitality(){
			$academicId = $this->input->post('academicId');
			$academicDetail = serialize($this->input->post('academicDetail'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicDetail($academicDetail);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/hospitality","refresh");
		}
		function editHospitalityTeacher(){
			$academicId = $this->input->post('academicId');
			$academicTeacher = serialize($this->input->post('academicTeacher'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicTeacher($academicTeacher);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editTeacherAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/hospitality","refresh");
		}
/*-------------------------------------------------------- Academic Business ---------------------------------------------------*/
		function changeBusiness($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/business","refresh");
		}
		function business(){
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['business'] = $this->Academic->academic();
			/*var_dump($data['hospitality']);
			die();*/
			$this->load->view('admin/business',$data);
		}
		function editBusiness(){
			$academicId = $this->input->post('academicId');
			$academicDetail = serialize($this->input->post('academicDetail'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicDetail($academicDetail);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/business","refresh");
		}
		function editBusinessTeacher(){
			$academicId = $this->input->post('academicId');
			$academicTeacher = serialize($this->input->post('academicTeacher'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicTeacher($academicTeacher);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editTeacherAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/business","refresh");
		}
/*-------------------------------------------------------- Academic Certificate ---------------------------------------------------*/
		function changeCertificate($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/certificate","refresh");
		}
		function certificate(){
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['certificate'] = $this->Academic->academic();
			/*var_dump($data['hospitality']);
			die();*/
			$this->load->view('admin/certificate',$data);
		}
		function editCertificate(){
			$academicId = $this->input->post('academicId');
			$academicDetail = serialize($this->input->post('academicDetail'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicDetail($academicDetail);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/certificate","refresh");
		}
		function editCertificateTeacher(){
			$academicId = $this->input->post('academicId');
			$academicTeacher = serialize($this->input->post('academicTeacher'));
			
			$this->Academic->setAcademicId($academicId);
			$this->Academic->setAcademicTeacher($academicTeacher);
			/*var_dump($_POST);
			die();*/
			$data = $this->Academic->editTeacherAcademic();
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/certificate","refresh");
		}
/*---------------------------------------------- Research --------------------------------------------------*/
		function changeResearchAcademic($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/researchAcademic","refresh");
		}
		function setConfigResearch(){
			$config = array();
			$config['upload_path'] = "upload/ResearchAcademic/";
			$config['allowed_types'] = "jpg|gif|png|pdf|docx|xlsx";
			$config['encrypat_name'] = TRUE;
			$config['overwrite'] = False;
			return $config;
		}
		function researchAcademic(){
			$config['base_url']=base_url().'index.php/admin/researchAcademic';
			$totalRows = $this->Research->getRowsAcademic();
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['research'] = $this->Research->getResearchAcademic($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['research']);
			die();*/
			$this->load->view('admin/researchAcademic',$data);
		}
		
		function changeResearchClass($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/researchClass","refresh");
		}
		function researchClass(){
			$config['base_url']=base_url().'index.php/admin/researchClass';
			$totalRows = $this->Research->getRowsClass();
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['research'] = $this->Research->getResearchAcademic($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['researchAcademic']);
			die();*/
			$this->load->view('admin/researchClass',$data);
		}
		
		function changeResearchSynthesis($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/researchSynthesis","refresh");
		}
		function researchSynthesis(){
			$config['base_url']=base_url().'index.php/admin/researchSynthesis';
			$totalRows = $this->Research->getRowsSynthesis();
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['research'] = $this->Research->getResearchAcademic($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['researchAcademic']);
			die();*/
			$this->load->view('admin/researchSynthesis',$data);
		}
		function addResearch(){
			$this->load->library('upload');
			$files = $_FILES;
			
			$researchId = $this->input->post('researchId');
			$researchName = serialize($this->input->post('researchName'));
			$researchTeacher = serialize($this->input->post('researchTeacher'));
			$researchDate = serialize($this->input->post('researchDate'));
			$researchType = serialize($this->input->post('researchType'));
			
			$this->Research->setResearchId($researchId);
			$this->Research->setResearchName($researchName);
			$this->Research->setResearchTeacher($researchTeacher);
			$this->Research->setResearchDate($researchDate);
			$this->Research->setResearchType($researchType);
			
			$data = $this->Research->addResearch();
			$researchId = $this->db->insert_id();
			$count = count($_FILES['researchFile']['name']);
			
			for($i=0; $i<$count; $i++)
			{
				$_FILES['researchFile']['name'] = $files['researchFile']['name'][$i];
				$_FILES['researchFile']['type'] = $files['researchFile']['type'][$i];
				$_FILES['researchFile']['tmp_name'] = $files['researchFile']['tmp_name'][$i];
				$_FILES['researchFile']['size'] = $files['researchFile']['size'][$i];
				$_FILES['researchFile']['error'] = $files['researchFile']['error'][$i];
				
				$this->upload->initialize($this->setConfigResearch());
				if($this->upload->do_upload('researchFile') == False)
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('admin/researchAcademic',$error);
					}else{
					$data = $this->upload->data();
					$dataarray = array(
					'researchId'=> $researchId,
					'researchflieName' => $data['orig_name'],
					'researchflieSize' => $data['file_size'],
					'researchflieExt' => $data['file_ext'],
					'researchflieFullpath' => $data['full_path'],
					);
					/*var_dump($dataarray);
					die();*/
					$this->db->insert('tbresearchflie',$dataarray);
				}
			}
			echo '<script>alert("Save complete...");</script>';
			redirect("admin/researchAcademic","refresh");
		}
		function fromEditResearch($researchId){
			$data['researchId'] = $researchId;
			$this->Research->setResearchId($researchId);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['listResearchLangId'] = $this->Research->findByLangResearchId($researchId);
			//$data['listNewsId'] = $this->News->findByNewsId($newsId);
			/*var_dump($data['listResearchLangId']);
			die();*/
			$this->load->view('admin/editResearch',$data);
		}
		function editResearch(){
			if($this->input->post()!= null)
			{
				$researchId = $this->input->post('researchId');
				$researchName = serialize($this->input->post('researchName'));
				$researchTeacher = serialize($this->input->post('researchTeacher'));
				$researchDate = serialize($this->input->post('researchDate'));
				$researchType = serialize($this->input->post('researchType'));
				
				$this->Research->setResearchId($researchId);
				$this->Research->setResearchName($researchName);
				$this->Research->setResearchTeacher($researchTeacher);
				$this->Research->setResearchDate($researchDate);
				$this->Research->setResearchType($researchType);
				/*var_dump($_POST);
				die();*/
				$data = $this->Research->editResearch();
				
				$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
				$this->lang->load($lang,$lang);	
			}
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/researchAcademic","refresh");
		}
		function delResearch($researchId){			
			$this->Research->delResearch($researchId);
			echo '<script>alert("Delete complete...");</script>';
			redirect("admin/researchAcademic","refresh");
			exit();
		}
/*---------------------------------------------- Project --------------------------------------------------*/
		function setConfigProject(){
			$config = array();
			$config['upload_path'] = "upload/project/";
			$config['allowed_types'] = "jpg|gif|png|pdf|docx|xlsx";
			$config['encrypat_name'] = TRUE;
			$config['overwrite'] = False;
			return $config;
		}
		function changeProjectKnowledge($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/knowledge","refresh");
		}
		function knowledge(){
			$config['base_url']=base_url().'index.php/admin/knowledge';
			$totalRows = $this->Project->getRowsKnowledge();
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['project'] = $this->Project->getProjectAll($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['project']);
			die();*/
			$this->load->view('admin/projectKnowledge',$data);
		}
		
		function changeProjectArt($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/art","refresh");
		}
		function art(){
			
			$config['base_url']=base_url().'index.php/admin/art';
			$totalRows = $this->Project->getRowsArt();
			//$this->db->get('tbproject')->num_rows();
			/*var_dump($totalRows);
			die();*/
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['project'] = $this->Project->getProjectAll($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['project']);
			die();*/
			$this->load->view('admin/projectArt',$data);
		}
		
		function changeProjectAcademic($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/academic","refresh");
		}
		function academic(){
			$config['base_url']=base_url().'index.php/admin/academic';
			$totalRows = $this->Project->getRowsAcademic();
			$config['total_rows'] = $totalRows;
			$config['per_page']=10;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			
			$this->pagination->initialize($config);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			
			$data['project'] = $this->Project->getProjectAll($config['per_page'],$this->uri->segment(3));
			/*var_dump($data['project']);
			die();*/
			$this->load->view('admin/projectAcademic',$data);
		}
		
		function addKnowledge(){
			$this->load->library('upload');
			$files = $_FILES;
			
			$projectId = $this->input->post('projectId');
			$projectName = serialize($this->input->post('projectName'));
			$projectTeacher = serialize($this->input->post('projectTeacher'));
			$projectDate = serialize($this->input->post('projectDate'));
			$projectType = serialize($this->input->post('projectType'));
			
			$this->Project->setProjectId($projectId);
			$this->Project->setProjectName($projectName);
			$this->Project->setProjectTeacher($projectTeacher);
			$this->Project->setProjectDate($projectDate);
			$this->Project->setProjectType($projectType);
			
			$data = $this->Project->addProject();
			$projectId = $this->db->insert_id();
			$count = count($_FILES['projectFile']['name']);
			/*var_dump($files);
			die();*/
			for($i=0; $i<$count; $i++)
			{
				$_FILES['projectFile']['name'] = $files['projectFile']['name'][$i];
				$_FILES['projectFile']['type'] = $files['projectFile']['type'][$i];
				$_FILES['projectFile']['tmp_name'] = $files['projectFile']['tmp_name'][$i];
				$_FILES['projectFile']['size'] = $files['projectFile']['size'][$i];
				$_FILES['projectFile']['error'] = $files['projectFile']['error'][$i];
				
				$this->upload->initialize($this->setConfigProject());
				if($this->upload->do_upload('projectFile') == False)
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('admin/projectKnowledge',$error);
					}else{
					$data = $this->upload->data();
					$dataarray = array(
					'projectId'=> $projectId,
					'projectfileName' => $data['orig_name'],
					'projectfileSize' => $data['file_size'],
					'projectfileExt' => $data['file_ext'],
					'projectfileFullpath' => $data['full_path'],
					);
					/*var_dump($dataarray);
					die();*/
					$this->db->insert('tbprojectfile',$dataarray);
				}
			}
			echo '<script>alert("Save complete...");</script>';
			redirect("admin/knowledge","refresh");
		}
		
		function fromEditProject($projectId){
			$data['projectId'] = $projectId;
			$this->Project->setProjectId($projectId);
			
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['listProjectLangId'] = $this->Project->findByLangProjectId($projectId);
			//$data['listNewsId'] = $this->News->findByNewsId($newsId);
			/*var_dump($data['listProjectLangId']);
			die();*/
			$this->load->view('admin/editProject',$data);
		}
		function editProject(){
			if($this->input->post()!= null)
			{
				$projectId = $this->input->post('projectId');
				$projectName = serialize($this->input->post('projectName'));
				$projectTeacher = serialize($this->input->post('projectTeacher'));
				$projectDate = serialize($this->input->post('projectDate'));
				$projectType = serialize($this->input->post('projectType'));
				
				$this->Project->setProjectId($projectId);
				$this->Project->setProjectName($projectName);
				$this->Project->setProjectTeacher($projectTeacher);
				$this->Project->setProjectDate($projectDate);
				$this->Project->setProjectType($projectType);
				/*var_dump($_POST);
				die();*/
				$data = $this->Project->editProject();
				
				$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
				$this->lang->load($lang,$lang);	
			}
			echo '<script>alert("Update complete...");</script>';
			redirect("admin/knowledge","refresh");
		}
		function delProject($projectId){			
			$this->Project->delProject($projectId);
			echo '<script>alert("Delete complete...");</script>';
			redirect("admin/knowledge","refresh");
			exit();
		}
		/*------------------------------------------------- About -------------------------------------------------------*/
		function changeAbout($type){
			$this->session->set_userdata('lang',$type);
			redirect("admin/about","refresh");
		}
		function about(){
			$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
			$this->lang->load($lang,$lang);
			$data['aboutAll'] = $this->About->getAbout();
			/*var_dump($data['aboutAll']);
			die();*/
			$this->load->view('admin/about',$data);
		}
		function editAbout(){
			if($this->input->post()!= null)
			{
				$aboutId = $this->input->post('aboutId');
				$aboutDetail = serialize($this->input->post('aboutDetail'));
				
				$this->About->setAboutId($aboutId);
				$this->About->setAboutDetail($aboutDetail);
				
				$data = $this->About->editAbout();
				
				$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
				$this->lang->load($lang,$lang);	
			}
			redirect("admin/about","refresh");
		}
		
	}			