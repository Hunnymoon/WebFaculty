<?php 
class Academic extends CI_Model {

    function __construct(){
	   parent::__construct();
	}
	
######  Academic ######
	var $academicId; //
	var $academic; //
	var $academicDetail; //
	var $academicTeacher; //
######  Slide ######	
	var $facultyName; //
	var $facultyId; //
	var $facultyAbout; //
###### End Attribute  ###### 

	public function setAcademicId($academicId)
	{
		$this->academicId = $academicId;
	}
	public function getAcademicId()
	{
		return $this->academicId;
	}
	
	public function setAcademicDetail($academicDetail)
	{
		$this->academicDetail = $academicDetail;
	}
	public function getAcademicDetail()
	{
		return $this->academicDetail;
	}

	public function setFacultyId($facultyId)
	{
		$this->facultyId = $facultyId;
	}
	public function getFacultyId()
	{
		return $this->facultyId;
	}

	public function setFacultyName($facultyName)
	{
		$this->facultyName = $facultyName;
	}
	public function getFacultyName()
	{
		return $this->facultyName;
	}

	public function setAcademicTeacher($academicTeacher)
	{
		$this->academicTeacher = $academicTeacher;
	}
	public function getAcademicTeacher()
	{
		return $this->academicTeacher;
	}
	
	public function setAcademic($academic)
	{
		$this->academic = $academic;
	}
	public function getAcademic()
	{
		return $this->academic;
	}
	
	public function setFacultyAbout($facultyAbout)
	{
		$this->facultyAbout = $facultyAbout;
	}
	public function getFacultyAbout()
	{
		return $this->facultyAbout;
	}

/*----------------------- function Academic---------------------*/
	function academic(){		
		$data = $this->db->get('tbacademic');
		/*var_dump($data);
			die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							'academicId' => $r['academicId'],
							'academic' => $r['academic'],
							'academicDetail' => unserialize($r['academicDetail']),
							'academicTeacher' => unserialize($r['academicTeacher'])
						);
						array_push($item,$ar);
					}
					return $item;
				}
		return $data;	
	}
	function editAcademic(){
		$data = array(
			'academicId' => $this->getAcademicId(),
			'academicDetail' => $this->getAcademicDetail()
		);
		$this->db->where('academicId',$this->getAcademicId());
		$data = $this->db->UPDATE('tbacademic',$data);
		return $data;
	}
	function editTeacherAcademic(){
		$data = array(
			'academicId' => $this->getAcademicId(),
			'academicTeacher' => $this->getAcademicTeacher()
		);
		$this->db->where('academicId',$this->getAcademicId());
		/*var_dump($data);
			die();*/
		$data = $this->db->UPDATE('tbacademic',$data);
		return $data;
	}
/*--------------------------------------- Get Academic -----------------------------------------------------*/
	function getFindAcademic($field, $value){
		$this->db->like($field, $value);
		$data = $this->db->get('tbacademic');
		
		if($data->num_rows()==0){
			$data['data'] = array();
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							'academicId' => $r['academicId'],
							'academic' => $r['academic'],
							'academicDetail' => unserialize($r['academicDetail']),
							'academicTeacher' => unserialize($r['academicTeacher'])
						);
						array_push($item,$ar);
					}
					return $item;
				}
		return $data;
	}
}
?>