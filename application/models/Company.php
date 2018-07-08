<?php 

class Company extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function update(){
		$sql = "UPDATE company SET com_name = ?  ,
									com_detail = ? ,
									com_service_name = ? ,
									com_service_detail = ? ,
									com_service_title_1 = ? ,
									com_service_detail_1 = ? ,
									com_service_title_2 = ? ,
									com_service_detail_2 = ? ,
									com_service_title_3 = ? ,
									com_service_detail_3 = ? ,
									com_service_title_4 = ? ,
									com_service_detail_4 = ? ,
									com_service_title_5 = ? ,
									com_service_detail_5 = ? ";
		$query = $this->db->query($sql,array($this->com_name,
											 $this->com_detail,
											 $this->com_service_name,
											 $this->com_service_detail,
											 $this->com_service_title_1,
											 $this->com_service_detail_1,
											 $this->com_service_title_2,
											 $this->com_service_detail_2,
											 $this->com_service_title_3,
											 $this->com_service_detail_3,
											 $this->com_service_title_4,
											 $this->com_service_detail_4,
											 $this->com_service_title_5,
											 $this->com_service_detail_5));
	}

	function get_company(){
		$sql = "SELECT * FROM company";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	
}
?>