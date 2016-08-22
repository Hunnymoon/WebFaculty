<?php 
class News extends CI_Model {

    function __construct(){
	   parent::__construct();
	}
	
######  News ######
	var $newsId; //
	var $newsTitle; //
	var $newsDetail; //	
	var $newsDate; //
	var $newsFile; //
	var $newsFileEn; //
	
	var $newsfileId; //
	var $newsfileName; //
	var $newsfileSize; //
	var $newsfileExt; //
	var $newsfileFullpath; //
######  Slide ######	
	var $slideId; //
	var $slideName; //
	var $slideFile; //
	var $slideStatus; //
###### End Attribute  ###### 

	public function setNewsId($newsId)
	{
		$this->newsId = $newsId;
	}
	public function getNewsId()
	{
		return $this->newsId;
	}

	public function setNewsTitle($newsTitle)
	{
		$this->newsTitle = $newsTitle;
	}
	public function getNewsTitle()
	{
		return $this->newsTitle;
	}

	public function setNewsDetail($newsDetail)
	{
		$this->newsDetail = $newsDetail;
	}
	public function getNewsDetail()
	{
		return $this->newsDetail;
	}
	public function setNewsDate($newsDate)
	{
		$this->newsDate = $newsDate;
	}
	public function getNewsDate()
	{
		return $this->newsDate;
	}

	public function setNewsFile($newsFile)
	{
		$this->newsFile = $newsFile;
	}
	public function getNewsFile()
	{
		return $this->newsFile;
	}
	
	public function setNewsFileEn($newsFileEn)
	{
		$this->newsFileEn = $newsFileEn;
	}
	public function getNewsFileEn()
	{
		return $this->newsFileEn;
	}
	
	public function setNewsfileId($newsfileId)
	{
		$this->newsfileId = $newsfileId;
	}
	public function getNewsfileId()
	{
		return $this->newsfileId;
	}

	public function setNewsfileName($newsfileName)
	{
		$this->newsfileName = $newsfileName;
	}
	public function getNewsfileName()
	{
		return $this->newsfileName;
	}

	public function setNewsfileSize($newsfileSize)
	{
		$this->newsfileSize = $newsfileSize;
	}
	public function getNewsfileSize()
	{
		return $this->newsfileSize;
	}

	public function setNewsfileExt($newsfileExt)
	{
		$this->newsfileExt = $newsfileExt;
	}
	public function getNewsfileExt()
	{
		return $this->newsfileExt;
	}

	public function setNewsfileFullpath($newsfileFullpath)
	{
		$this->newsfileFullpath = $newsfileFullpath;
	}
	public function getNewsfileFullpath()
	{
		return $this->newsfileFullpath;
	}
/******************************** Slide ************************************/	
	public function setSlideId($slideId)
	{
		$this->slideId = $slideId;
	}public function getSlideId()
	{
		return $this->slideId;
	}
	
	public function setSlideName($slideName)
	{
		$this->slideName = $slideName;
	}
	public function getSlideName()
	{
		return $this->slideName;
	}
	
	public function setSlideFile($slideFile)
	{
		$this->slideFile = $slideFile;
	}
	public function getSlideFile()
	{
		return $this->slideFile;
	}

	public function setSlideStatus($slideStatus)
	{
		$this->slideStatus = $slideStatus;
	}
	public function getSlideStatus()
	{
		return $this->slideStatus;
	}
/*----------------------- function News ---------------------*/
	function addNews(){
	
		$file = $this->getNewsFile();
		$newsFile = $file['file_name'];
		
		$data = array(
			'newsId' => $this->getNewsId(),
			'newsTitle' => $this->getNewsTitle(),
			'newsDetail' => $this->getNewsDetail(),
			'newsDate' => $this->getNewsDate(),
			'newsFile' => $newsFile,
		);
		/*var_dump($data);
		die();*/
		$data = $this->db->insert('tbnews', $data);
		$newsId = $this->db->insert_id();
		return $newsId;
	}
	
	function editNews(){
		$data = array(
			'newsId' => $this->getNewsId(),
			'newsTitle' => $this->getNewsTitle(),
			'newsDetail' => $this->getNewsDetail(),
			'newsDate' => $this->getNewsDate()
		);
		$this->db->where('newsId',$this->getNewsId());
		/*var_dump($data);
			die();	*/	
		$data = $this->db->update('tbnews',$data);
		
		return $data;
	}
	function getShowNews(){
		$this->db->order_by('newsId','DESC');
		$this->db->limit(3);	
		$rs = $this->db->get('tbnews');
		if($rs->num_rows()==0){
			$data['rs'] = array();
		}else{
			$item = array();
			foreach($rs->result_array() as $r){
				$ar = array(
					"newsId" => $r['newsId'],
					'newsTitle' => unserialize($r['newsTitle']),
					'newsDate' => unserialize($r['newsDate']),
					'newsDetail' => unserialize($r['newsDetail']),
					'newsFile' => $r['newsFile']
				);
				array_push($item,$ar);
			}
			return $item;
		}
		return $data;
	}
	function getShowNewsfile(){
		$this->db->order_by('newsId','DESC');
		$this->db->limit(3);
		$data = $this->db->get('tbnewsfile')->result_array();
		//$rs = $this->db->query("SELECT * FROM tbnewsfile as A  inner join tbnews as B on A.newsId = B.newsId limit 3");
		$datas = array_map("unserialize",array_unique(array_map("serialize",$data)));
		return $data;
	}
	function getAllnews($num, $offset){
		$this->db->order_by('newsId','DESC');
		$rs = $this->db->get('tbnews',$num,$offset);
		if($rs->num_rows()==0){
					$data['rs'] = array();
				}else{
					$item = array();
					foreach($rs->result_array() as $r){
						$ar = array(
							'newsId' => $r['newsId'],
							'newsTitle' => unserialize($r['newsTitle']),
							'newsDetail' => unserialize($r['newsDetail']),
							'newsFile' => $r['newsFile']
						);
						array_push($item,$ar);
					}
					return $item;
				}
	}
	function findByLangNewsfileId($newsId){
		$this->db->where('newsId',$this->getNewsId());
		//$data = $this->db->query("SELECT * FROM tbnewsfile as A  inner join tbnews as B on A.newsId = B.newsId");
		$data = $this->db->get('tbnewsfile');
		if($data->num_rows()==0){
			//$data['data'] = array();
			redirect("home","refresh");
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							"newsId" => $r['newsId'],
							'newsfileId'=> $r['newsfileId'],
							'newsfileName' => $r['newsfileName'],
							'newsfileSize' => $r['newsfileSize'],
							'newsfileflieExt' => $r['newsfileExt'],
							'newsfileFullpath' => $r['newsfileFullpath']
						);
						array_push($item,$ar);
					}
					return $item;
				}
		/*var_dump($data);
		die();*/
		return $data;
	}
	function findByLangNewsId($newsId){
		$this->db->where('newsId',$this->getNewsId());
		//$data = $this->db->query("SELECT * FROM tbnewsfile as A  inner join tbnews as B on A.newsId = B.newsId");
		$data = $this->db->get('tbnews');
		if($data->num_rows()==0){
			//$data['data'] = array();
			redirect("home","refresh");
				}else{
					$item = array();
					foreach($data->result_array() as $r){
						$ar = array(
							"newsId" => $r['newsId'],
							'newsTitle' => unserialize($r['newsTitle']),
							'newsDetail' => unserialize($r['newsDetail']),
							'newsDate' => unserialize($r['newsDate'])
						);
						array_push($item,$ar);
					}
					return $item;
				}
		/*var_dump($data);
		die();*/
		return $data;
	}
	function findByNewsId($newsId){
		$this->db->where('newsId',$this->getNewsId());
		$data = $this->db->get('tbnews')->result_array();
		/*var_dump($data);
		die();*/
		return $data;
	}
	function delNews($newsId){
		$this->db->delete('tbnews', array('newsId' => $newsId));
		$this->db->delete('tbnewsfile', array('newsId' => $newsId));
	}
/*---------------------------------------- Slide -------------------------------------*/		
	function addSlide(){
		$file = $this->getSlideFile();
		
		$slideFile = $file['file_name'];
		$slidePath = $file['full_path'];
		
		$data = array(
			'slideId' => $this->getSlideId(),
			'slideName' => $this->getSlideName(),
			'slideFile' => $slideFile,
			'slidePath' => $slidePath,
			'slideStatus' => $this->getSlideStatus()	
		);	 
		/*var_dump($data);
		die();*/
		$data = $this->db->insert('tbslide', $data);
		return $data;
		}
	function getShowslide(){
		$this->db->order_by('slideId','DESC');
		$this->db->limit(4);
		$query = $this->db->get('tbslide')->result_array();
			
		return $query;
	}
	function getAllslide(){
		$this->db->where('slideStatus','show');
		$this->db->order_by('slideId','DESC');
		$query = $this->db->get('tbslide')->result_array();
		/*var_dump($query);
		die();*/
		return $query;
	}
	function allSlide($num, $offset){
		$this->db->order_by('slideId','DESC');
		$query = $this->db->get('tbslide',$num, $offset)->result_array();
		/*var_dump($query);
		die();*/
		return $query;
	}
	function changeStatus($slideId,$slideStatus){
		$data = array(
			'slideId' => $slideId,
			'slideStatus' => $slideStatus	
		);
		$this->db->where('slideId',$slideId);
		
		$data = $this->db->update('tbslide', $data);
		return $data;
	}
}
?>