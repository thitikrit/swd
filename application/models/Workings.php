<?php 

class Workings extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
		if($this->workings_type == 'NEW'){
			$sql = "INSERT INTO  workings (workings_name,workings_area,workings_text,workings_status,workings_type,workings_picture,workings_project_id,workings_date_modified) VALUES (?,?,?,?,?,?,?,?) ";
			$query = $this->db->query($sql,array($this->workings_name,$this->workings_area,$this->workings_text,$this->workings_status,$this->workings_type,$this->workings_picture,$this->workings_project_id,$this->workings_date_modified));
		}else{
			$sql = "INSERT INTO  workings (workings_name,workings_area,workings_text,workings_status,workings_type,workings_picture,workings_picture_slider,workings_date_modified) VALUES (?,?,?,?,?,?,?,?) ";
			$query = $this->db->query($sql,array($this->workings_name,$this->workings_area,$this->workings_text,$this->workings_status,$this->workings_type,$this->workings_picture,$this->workings_picture_slider,$this->workings_date_modified));
		}
		return $query;
	}


	function get_workings(){
		$sql = "SELECT * FROM workings";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_workings_by_id(){
		$sql = "SELECT * FROM workings WHERE workings_id = ?";
		$query = $this->db->query($sql,array($this->workings_id))->result_array();
		return $query;
	}

	function update(){
		if($this->workings_type == 'NEW'){
			$sql = "UPDATE workings SET workings_name = ?,workings_area = ?,workings_text = ?,workings_status = ?,workings_type = ?,workings_picture = ?,workings_date_modified = ? ,workings_project_id = ? WHERE workings_id = ? ";
			$query = $this->db->query($sql,array($this->workings_name,$this->workings_area,$this->workings_text,$this->workings_status,$this->workings_type,$this->workings_picture,$this->workings_date_modified,$this->workings_project_id,$this->workings_id));
		}else{
			$sql = "UPDATE workings SET workings_name = ?,workings_area = ?,workings_text = ?,workings_status = ?,workings_type = ?,workings_picture = ?,workings_date_modified = ? ,workings_picture_slider = ? WHERE workings_id = ? ";
			$query = $this->db->query($sql,array($this->workings_name,$this->workings_area,$this->workings_text,$this->workings_status,$this->workings_type,$this->workings_picture,$this->workings_date_modified,$this->workings_picture_slider,$this->workings_id));
		}
	}

	function get_workings_active(){
		$sql = "SELECT * FROM workings WHERE workings_status = 'ACTIVE' order by workings_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	
}
?>