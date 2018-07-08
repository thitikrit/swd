<?php 

class Menu extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get_menu(){
		$sql = "SELECT * FROM menu";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_menu_active(){
		$sql = "SELECT * FROM menu WHERE menu_status = 'ACTIVE'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_menu_by_id(){
		$sql = "SELECT * FROM menu WHERE menu_id = ? ";
		$query = $this->db->query($sql,array($this->menu_id))->result_array();
		return $query;
	}
	function update(){
			$sql = "UPDATE menu SET menu_name = ?,menu_status = ?,menu_type = ?,menu_date_modified = ?,menu_picture = ?,menu_video = ?  WHERE menu_id = ? ";
			$query = $this->db->query($sql,array($this->menu_name,$this->menu_status,$this->menu_type,$this->menu_date_modified,$this->menu_picture,$this->menu_video,$this->menu_id));
		
	}
}
?>