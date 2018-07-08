<?php 

class Area extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
		$sql = "INSERT INTO  area (area_name,area_status) VALUES (?,?) ";
		$query = $this->db->query($sql,array($this->area_name,$this->area_status));
		return $query;
	}
	function update(){
		$sql = "UPDATE area SET area_name = ? , area_status = ? WHERE area_id = ? ";
			$query = $this->db->query($sql,array($this->area_name,$this->area_status,$this->area_id));
	}	
	function get_area(){
		$sql = "SELECT * FROM area";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_area_by_id(){
		$sql = "SELECT * FROM area WHERE area_id = ?";
		$query = $this->db->query($sql,array($this->area_id))->result_array();
		return $query;
	}
	function get_area_active_by_id(){
		$sql = "SELECT * FROM area WHERE area_status = 'ACTIVE' AND area_id = ?";
		$query = $this->db->query($sql,array($this->area_id))->result_array();
		return $query;
	}
	function get_area_active(){
		$sql = "SELECT * FROM area WHERE area_status = 'ACTIVE' ";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_name_by_id($id = NULL){
		$sql = "SELECT area_name FROM area WHERE area_id = $id LIMIT 1";
		$query = $this->db->query($sql)->result_array();
		return $query[0]['area_name'];

	}

}
?>