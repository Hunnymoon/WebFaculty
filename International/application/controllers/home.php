<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['showSlide'] = $this->News->getAllslide();
		$data['showAbout'] = $this->About->getAbout();
		$data['showNews'] = $this->News->getShowNews();	
		//$datas = $this->News->getShowNews();
		//$data['showNewsfile'] = $this->News->getShowNewsfile();		
		//$arraydata = implode('',$datas);
		/*var_dump($data['showNews']);
		die();*/
			
		/*foreach ($data['showNews'] AS $val) {
			$id = $val['newsId'];
			$this->db->where("newsId = '$id'");
			$data['showNews'] = $datas;
		}*/
		
		/*foreach ($data['showNews'] AS $val) {
			$id = $val['newsId'];
			$this->db->where("newsId = '$id'");
			$newsfile[] = $this->db->get('tbnewsfile')->result_array();
		}*/
		
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		
		$this->load->view('home',$data);
		//redirect("home/changes","refresh");
	}
	function changes(){
		$type = 'english';
		$this->session->set_userdata('lang',$type);
		redirect("home","refresh");
	}
	function change($type){
		$this->session->set_userdata('lang',$type);
		redirect("home","refresh",$type);
	}
	
	function changeNews($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/news","refresh");
	}
	function news($newsId){
		$newsId = $newsId;
		$this->News->setNewsId($newsId);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);	
		$data['newsFile'] = $this->News->findByLangNewsfileId($newsId);
		$data['newsDetail'] = $this->News->findByLangNewsId($newsId);
		/*var_dump($data['newsFile'],$data['newsDetail']);
		die();*/
		$this->load->view('news',$data);
	}
/*-------------------------------------------------------- Academic Engineering ---------------------------------------------------*/
	function changeEngineering($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/engineering","refresh");
	}
	function engineering(){
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);		
		$engineering = $this->uri->segment(2);
		$data['academicas'] = $this->Academic->getFindAcademic('academic', $engineering);
		/*var_dump($data);
		die();*/
		$this->load->view('academic',$data);
	}
/*-------------------------------------------------------- Academic Hospitality and Tourism ---------------------------------------------------*/
	function changeHospitality($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/hospitality","refresh");
	}
	function hospitality(){
	
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$hospitality = $this->uri->segment(2);
		$data['academicas'] = $this->Academic->getFindAcademic('academic', $hospitality);
		/*var_dump($data['engineering']);
			die();*/
		$this->load->view('academic',$data);
	}
/*-------------------------------------------------------- Academic Business Administration ---------------------------------------------------*/
	function changeBusiness($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/business","refresh");
	}
	function business(){
	
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$engineering = $this->uri->segment(2);
		$data['academicas'] = $this->Academic->getFindAcademic('academic', $engineering);
		/*var_dump($data['engineering']);
			die();*/
		$this->load->view('academic',$data);
	}
/*-------------------------------------------------------- Academic Certificate Program ---------------------------------------------------*/
	function changeCertificate($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/certificate","refresh");
	}
	function certificate(){
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$certificate = $this->uri->segment(2);
		$data['academicas'] = $this->Academic->getFindAcademic('academic', $certificate);
		/*var_dump($data['certificate']);
			die();*/
		$this->load->view('academic',$data);
	}
/*-------------------------------------------------------- Research All---------------------------------------------------*/
	function changeResearchAll($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/researchAll","refresh");
	}
	function dowloadResearch($researchflieName){
		$this->load->helper('download');
		$data = file_get_contents(base_url().'upload/ResearchAcademic/'.$researchflieName); // Read the file's contents
		$name = $researchflieName;
		
		force_download($name, $data);	
	}
	function researchAll(){
		$config['base_url']=base_url().'index.php/home/researchAll';
		$config['total_rows']=$this->db->get('tbresearchflie')->num_rows();
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['researchAll'] = $this->Research->getResearchAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['researchAll']);
			die();*/
		$this->load->view('researchAll',$data);
	}
	
	function changeResearchAcademic($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/researchAcademic","refresh");
	}
	function researchAcademic(){
		$config['base_url']=base_url().'index.php/home/researchAcademic';
		$totalRows = $this->Research->getRowsAcademicFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['researchAcademic'] = $this->Research->getResearchAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['engineering']);
			die();*/
		$this->load->view('researchAcademic',$data);
	}
	
	function changeResearchSynthesis($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/researchSynthesis","refresh");
	}
	function researchSynthesis(){
		$config['base_url']=base_url().'index.php/home/researchSynthesis';
		$totalRows = $this->Research->getRowsSynthesisFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
	
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['researchSynthesis'] = $this->Research->getResearchAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['engineering']);
			die();*/
		$this->load->view('researchSynthesis',$data);
	}
	
	function changeResearchClass($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/researchClass","refresh");
	}
	function researchClass(){
	
		$config['base_url']=base_url().'index.php/home/researchClass';
		$totalRows = $this->Research->getRowsClassFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
	
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['researchClass'] = $this->Research->getResearchAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['engineering']);
			die();*/
		$this->load->view('researchClass',$data);
	}
/*-------------------------------------------------------- Project All---------------------------------------------------*/
	function dowloadProject($projectflieName){
		$this->load->helper('download');
		$data = file_get_contents(base_url().'upload/project/'.$projectflieName); // Read the file's contents
		$name = $projectflieName;
		
		force_download($name, $data);	
	}
	function changeProjectAll($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/projectAll","refresh");
	}
	function projectAll(){
		$config['base_url']=base_url().'index.php/home/projectAll';
		$config['total_rows']=$this->db->get('tbprojectfile')->num_rows();
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['projectAll'] = $this->Project->getProjectFileAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['projectAll']);
			die();*/
		$this->load->view('projectAll',$data);
	}
	
	function changeProjectKnowledge($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/projectKnowledge","refresh");
	}
	function projectKnowledge(){
		$config['base_url']=base_url().'index.php/home/projectKnowledge';
		$totalRows = $this->Project->getRowsKnowledgeFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['projectKnowledge'] = $this->Project->getProjectFileAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['projectAll']);
			die();*/
		$this->load->view('projectKnowledge',$data);
	}
	
	function changeProjectArt($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/projectArt","refresh");
	}
	function projectArt(){
		$config['base_url']=base_url().'index.php/home/projectArt';
		$totalRows = $this->Project->getRowsArtFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['projectArt'] = $this->Project->getProjectFileAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['projectArt']);
			die();*/
		$this->load->view('projectArt',$data);
	}
	
	function changeProjectAcademic($type){
		$this->session->set_userdata('lang',$type);
		redirect("home/projectAcademic","refresh");
	}
	function projectAcademic(){
		$config['base_url']=base_url().'index.php/home/projectAcademic';
		$totalRows = $this->Project->getRowsAcademicFile();
		$config['total_rows'] = $totalRows;
		$config['per_page']=10;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
			
		$this->pagination->initialize($config);
		
		$lang = $this->session->userdata("lang") == null? "english" : $lang = $this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$data['projectAcademic'] = $this->Project->getProjectFileAll($config['per_page'],$this->uri->segment(3));
		/*var_dump($data['projectAcademic']);
			die();*/
		$this->load->view('projectAcademic',$data);
	}
/*------------------------------------------------------ Contact -----------------------------------------------------------------*/
	function contact(){	
		$contactId = $this->input->post('contactId');
		$contactAuthor = $this->input->post('contactAuthor');
		$contactEmail = $this->input->post('contactEmail');
		$contactSubject = $this->input->post('contactSubject');
		$contactCompany = $this->input->post('contactCompany');
		$contactCompanyOther = $this->input->post('contactCompanyOther');
		$contactMessage = $this->input->post('contactMessage');
		
		$br = wordwrap("\n");
		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.office365.com';
		$config['smtp_user'] = 'rattanaporn@northcm.ac.th';
		$config['smtp_pass'] = 'Ncu58770';
		$config['smtp_port'] = '587';
		$config['smtp_crypto'] = 'tls';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n";
		
		$this->load->library('email', $config);
		$this->email->from($contactEmail, $contactAuthor);
		
		if($contactCompany == 'Thailand'){
			$this->email->to('ncic@northcm.ac.th');
		}else if($contactCompany == 'Bangladesh'){
			$this->email->to('emonkhandakar@gmail.com');
		}else if($contactCompany == 'South India & Gulf Countries'){
			$this->email->to('shmessage100@gmail.com');
		}else if($contactCompany == 'North India'){
			$this->email->to('sravanikar@gmail.com');
		}else if($contactCompany == 'Bhutan'){
			$this->email->to('careerinfo1199@yahoo.com');
		}else if($contactCompany == 'Nepal'){
			$this->email->to('vinayakpandith@yahoo.co.in');
		}else if($contactCompany == 'Mauritius'){
			$this->email->to('christopher.david@reachout-global.com');
		}else if($contactCompany == 'South Korea'){
			$this->email->to('ncic@northcm.ac.th');
		}else if($contactCompany == 'Africa'){
			$this->email->to('kumarashish2609@hotmail.com');
		}else{
			$this->email->to('ncic@northcm.ac.th');
		}
		$this->email->subject($contactSubject);
		$this->email->message('Name: '.$contactAuthor.$br.
							  'From: '.$contactCompany.' : '.$contactCompanyOther.$br.
							  'E-mail: '.$contactEmail.$br.
							  'Subject: '.$contactSubject.$br.$br.
							  $contactMessage);
		if($this->email->send()){
			echo '<script>alert("Send E-mail now..!");</script>';
		}else{
			echo '<script>alert("Send not E-mail..!");</script>';
			echo $this->email->print_debugger();
		}
		redirect("home","refresh");
	}
}