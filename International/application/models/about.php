<?php 
class About extends CI_Model {

    function __construct(){
	   parent::__construct();
	}
	
######  about ######
	var $aboutId; //
	var $aboutDetail; //
###### End Attribute  ###### 

	public function setAboutId($aboutId)
	{
		$this->aboutId = $aboutId;
	}
	public function getAboutId()
	{
		return $this->aboutId;
	}

	public function setAboutDetail($aboutDetail)
	{
		$this->aboutDetail = $aboutDetail;
	}
	public function getAboutDetail()
	{
		return $this->aboutDetail;
	}
/*----------------------- function about ---------------------*/
	function editabout(){
		$data = array(
			'aboutId' => $this->getAboutId(),
			'aboutDetail' => $this->getAboutDetail()
		);
		$this->db->where('aboutId',$this->getAboutId());
		/*var_dump($data);
			die();*/	
		$data = $this->db->update('tbabout',$data);
		return $data;
	}
	function getAbout(){
		//$this->db->order_by('aboutId','DESC');
		//$this->db->limit(1);
		$data = $this->db->get('tbabout');
		/*var_dump($data);
		die();*/
		if($data->num_rows()==0){
			$data['data'] = array();
		}else{
			$item = array();
			foreach($data->result_array() as $r){
				$ar = array(
					"aboutId" => $r['aboutId'],
					'aboutDetail' => unserialize($r['aboutDetail'])
				);
			array_push($item,$ar);
			}
			return $item;
			}
		return $data;
	}
	function getAllabout($num, $offset){
		$this->db->order_by('aboutId','DESC');
		$rs = $this->db->get('tbabout',$num,$offset);
		
		if($rs->num_rows()==0){
			$data['rs'] = array();
		}else{
			$item = array();
			foreach($rs->result_array() as $r){
				$ar = array(
					'aboutId' => $r['aboutId'],
					'aboutDetail' => unserialize($r['aboutDetail']),
					'aboutDetail' => unserialize($r['aboutDetail']),
					'aboutPath' => $r['aboutPath'],
					'aboutFile' => $r['aboutFile']
				);
				array_push($item,$ar);
			}
			return $item;
		}
	}
}
?>