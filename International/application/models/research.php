<?php 
class Research extends CI_Model {

    function __construct(){
	   parent::__construct();
	}
	
######  Research ######
	var $researchId; //
	var $researchName; //
	var $researchTeacher; //
	var $researchDate; //
	var $researchType; //
	
	var $researchflieId; //
	var $researchflieName; //
	var $researchflieSize; //
	var $researchflieExt; //
	var $researchflieFullpath; //
###### End Research  ###### 
	public function setResearchId($researchId)
	{
		$this->researchId = $researchId;
	}
	public function getResearchId()
	{
		return $this->researchId;
	}
	
	public function setResearchName($researchName)
	{
		$this->researchName = $researchName;
	}
	public function getResearchName()
	{
		return $this->researchName;
	}

	public function setResearchTeacher($researchTeacher)
	{
		$this->researchTeacher = $researchTeacher;
	}
	public function getResearchTeacher()
	{
		return $this->researchTeacher;
	}

	public function setResearchDate($researchDate)
	{
		$this->researchDate = $researchDate;
	}
	public function getResearchDate()
	{
		return $this->researchDate;
	}

	public function setResearchFile($researchFile)
	{
		$this->researchFile = $researchFile;
	}
	public function getResearchFile()
	{
		return $this->researchFile;
	}

	public function setResearchType($researchType)
	{
		$this->researchType = $researchType;
	}
	public function getResearchType()
	{
		return $this->researchType;
	}

	public function setResearchflieId($researchflieId)
	{
		$this->researchflieId = $researchflieId;
	}
	public function getResearchflieId()
	{
		return $this->researchflieId;
	}

	public function setResearchflieName($researchflieName)
	{
		$this->researchflieName = $researchflieName;
	}
	public function getResearchflieName()
	{
		return $this->researchflieName;
	}

	public function setResearchflieSize($researchflieSize)
	{
		$this->researchflieSize = $researchflieSize;
	}
	public function getResearchflieSize()
	{
		return $this->researchflieSize;
	}

	public function setResearchflieExt($researchflieExt)
	{
		$this->researchflieExt = $researchflieExt;
	}
	public function getResearchflieExt()
	{
		return $this->researchflieExt;
	}

	public function setResearchflieFullpath($researchflieFullpath)
	{
		$this->researchflieFullpath = $researchflieFullpath;
	}
	public function getResearchflieFullpath()
	{
		return $this->researchflieFullpath;
	}


/*----------------------- function Research---------------------*/
	function getResearchAcademic($num, $offset){
		//$this->db->join('tbresearch','tbresearch.researchId = tbresearchflie.researchId');
		$this->db->order_by('researchId','DESC');
		$data = $this->db->get('tbresearch',$num, $offset);
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							'researchId' => $r['researchId'],
							//'researchflieId' => $r['researchflieId'],
							//'researchflieName' => $r['researchflieName'],
							'researchName' => unserialize($r['researchName']),
							'researchTeacher' => unserialize($r['researchTeacher']),
							'researchDate' => unserialize($r['researchDate']),
							'researchType' => unserialize($r['researchType'])
						);
						array_push($item,$ar);
					}
					return $item;
				}
		return $data;
	}
	function addResearch(){
		$data = array(
			'researchId' => $this->getResearchId(),
			'researchName' => $this->getResearchName(),
			'researchTeacher' => $this->getResearchTeacher(),
			'researchDate' => $this->getResearchDate(),
			'researchType' => $this->getResearchType()	
		);	
		
		$data = $this->db->insert('tbresearch', $data);
		$researchId = $this->db->insert_id();
		
		return $researchId;
	}
	function findByLangResearchId($researchId){
		$this->db->where('researchId',$this->getResearchId());
		$data = $this->db->get('tbresearch');
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
		}else{
			$item = array();
			foreach($data->result_array() as $r){
				$ar = array(
					'researchId' => $r['researchId'],
					'researchName' => unserialize($r['researchName']),
					'researchTeacher' => unserialize($r['researchTeacher']),
					'researchDate' => unserialize($r['researchDate']),
					'researchType' => unserialize($r['researchType'])
				);
				
			array_push($item,$ar);	
			}
		return $item;
		}
		
		return $data;
	}
	function editResearch(){
		$data = array(
			'researchId' => $this->getResearchId(),
			'researchName' => $this->getResearchName(),
			'researchTeacher' => $this->getResearchTeacher(),
			'researchDate' => $this->getResearchDate(),
			'researchType' => $this->getResearchType()	
		);
		$this->db->where('researchId',$this->getResearchId());
		/*var_dump($data);
		die();*/
		$data = $this->db->update('tbresearch',$data);
		
		return $data;
	}
	function delResearch($researchId){
		$this->db->delete('tbresearch', array('researchId' => $researchId));
	}
	function getResearchAll($num, $offset){
		$this->db->join('tbresearch','tbresearch.researchId = tbresearchflie.researchId');	
		$data = $this->db->get('tbresearchflie',$num, $offset);
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
		}else{
			$item = array();
			foreach($data->result_array() as $r){
				$ar = array(
					'researchId' => $r['researchId'],
					'researchName' => unserialize($r['researchName']),
					'researchTeacher' => unserialize($r['researchTeacher']),
					'researchDate' => unserialize($r['researchDate']),
					'researchType' => unserialize($r['researchType']),
					'researchflieId'=> $r['researchflieId'],
					'researchflieName' => $r['researchflieName'],
					'researchflieSize' => $r['researchflieSize'],
					'researchflieExt' => $r['researchflieExt'],
					'researchflieFullpath' => $r['researchflieFullpath']
				);
				
			array_push($item,$ar);	
			}
		return $item;
		}
		return $data;
	}
	function getRowsAcademic(){
		$this->db->like('researchType',"ResearchAcademic");
		$query  = $this->db->get('tbresearch');
		$data = $query ->num_rows();
		
		return $data;
	}
	function getRowsAcademicFile(){
		$this->db->like('researchType',"ResearchAcademic");
		$this->db->join('tbresearch','tbresearch.researchId = tbresearchflie.researchId');	
		$query  = $this->db->get('tbresearchflie');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsClass(){
		$this->db->like('researchType',"ResearchClass");
		$query  = $this->db->get('tbresearch');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsClassFile(){
		$this->db->like('researchType',"ResearchClass");
		$this->db->join('tbresearch','tbresearch.researchId = tbresearchflie.researchId');	
		$query  = $this->db->get('tbresearchflie');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsSynthesis(){
		$this->db->like('researchType',"ResearchSynthesis");
		$query  = $this->db->get('tbresearch');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function getRowsSynthesisFile(){
		$this->db->like('researchType',"ResearchSynthesis");
		$this->db->join('tbresearch','tbresearch.researchId = tbresearchflie.researchId');	
		$query  = $this->db->get('tbresearchflie');
		$data = $query ->num_rows();
		/*var_dump($data);
		die();*/
		return $data;
	}
}
?>