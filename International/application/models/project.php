<?php 
class Project extends CI_Model {

    function __construct(){
	   parent::__construct();
	}
	
######  Project ######
	var $projectId; //
	var $projectName; //
	var $projectDate; //
	var $projectTeacher; //
	var $projectType; //
###### End Project  ###### 
	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
	}
	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setProjectName($projectName)
	{
		$this->projectName = $projectName;
	}
	public function getProjectName()
	{
		return $this->projectName;
	}
	
	public function setProjectDate($projectDate)
	{
		$this->projectDate = $projectDate;
	}
	public function getProjectDate()
	{
		return $this->projectDate;
	}
	
	public function setProjectTeacher($projectTeacher)
	{
		$this->projectTeacher = $projectTeacher;
	}
	public function getProjectTeacher()
	{
		return $this->projectTeacher;
	}
	
	public function setProjectType($projectType)
	{
		$this->projectType = $projectType;
	}
	public function getProjectType()
	{
		return $this->projectType;
	}
/*-------------------------- Function addProject ---------------------------------*/
	function getProjectAll($num, $offset){
		//$this->db->join('tbproject','tbproject.projectId = tbprojectflie.projectId');
		$this->db->order_by('projectId','DESC');
		$data = $this->db->get('tbproject',$num, $offset);
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							'projectId' => $r['projectId'],
							//'projectflieId' => $r['projectflieId'],
							//'projectflieName' => $r['projectflieName'],
							'projectName' => unserialize($r['projectName']),
							'projectTeacher' => unserialize($r['projectTeacher']),
							'projectDate' => unserialize($r['projectDate']),
							'projectType' => unserialize($r['projectType'])
						);
						array_push($item,$ar);
					}
					return $item;
				}
		return $data;
	}
	function getProjectFileAll($num, $offset){
		
		$this->db->join('tbproject','tbproject.projectId = tbprojectfile.projectId');	
		$data = $this->db->get('tbprojectfile',$num, $offset);
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
		}else{
			$item = array();
			foreach($data->result_array() as $r){
				$ar = array(
					'projectId' => $r['projectId'],
					'projectName' => unserialize($r['projectName']),
					'projectTeacher' => unserialize($r['projectTeacher']),
					'projectDate' => unserialize($r['projectDate']),
					'projectType' => unserialize($r['projectType']),
					'projectfileId'=> $r['projectfileId'],
					'projectfileName' => $r['projectfileName'],
					'projectfileSize' => $r['projectfileSize'],
					'projectfileExt' => $r['projectfileExt'],
					'projectfileFullpath' => $r['projectfileFullpath']
				);
				
			array_push($item,$ar);	
			}
		return $item;
		}
		return $data;
	}
	function addProject(){
		$data = array(
			'projectId' => $this->getProjectId(),
			'projectName' => $this->getProjectName(),
			'projectTeacher' => $this->getProjectTeacher(),
			'projectDate' => $this->getProjectDate(),
			'projectType' => $this->getProjectType()	
		);	
		
		$data = $this->db->insert('tbproject', $data);
		$projectId = $this->db->insert_id();
		
		return $projectId;
	}
	function findByLangProjectId($projectId){
		$this->db->where('projectId',$this->getProjectId());
		$data = $this->db->get('tbproject');
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
		}else{
			$item = array();
			foreach($data->result_array() as $r){
				$ar = array(
					'projectId' => $r['projectId'],
					'projectName' => unserialize($r['projectName']),
					'projectTeacher' => unserialize($r['projectTeacher']),
					'projectDate' => unserialize($r['projectDate']),
					'projectType' => unserialize($r['projectType'])
				);
				
			array_push($item,$ar);	
			}
		return $item;
		}
		return $data;
	}
	function editProject(){
		$data = array(
			'projectId' => $this->getProjectId(),
			'projectName' => $this->getProjectName(),
			'projectTeacher' => $this->getProjectTeacher(),
			'projectDate' => $this->getProjectDate(),
			'projectType' => $this->getProjectType()	
		);
		$this->db->where('projectId',$this->getProjectId());
		
		$data = $this->db->update('tbproject',$data);
		/*var_dump($data);
		die();*/
		return $data;
	}
	function delProject($projectId){
		$this->db->delete('tbproject', array('projectId' => $projectId));
	}
	function getRowsArt(){
		$this->db->like('projectType',"Arts and Culture Project");
		$query  = $this->db->get('tbproject');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsArtFile(){
		$this->db->like('projectType',"Arts and Culture Project");
		$this->db->join('tbproject','tbproject.projectId = tbprojectfile.projectId');	
		$query  = $this->db->get('tbprojectfile');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsKnowledge(){
		$this->db->like('projectType',"Knowledge Management Project");
		$query  = $this->db->get('tbproject');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsKnowledgeFile(){
		$this->db->like('projectType',"Knowledge Management Project");
		$this->db->join('tbproject','tbproject.projectId = tbprojectfile.projectId');	
		$query  = $this->db->get('tbprojectfile');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsAcademic(){
		$this->db->like('projectType',"Academic Project");
		$query  = $this->db->get('tbproject');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsAcademicFile(){
		$this->db->like('projectType',"Academic Project");
		$this->db->join('tbproject','tbproject.projectId = tbprojectfile.projectId');
		$query  = $this->db->get('tbprojectfile');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
}
?>