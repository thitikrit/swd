<?php 

class Plans extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function insert(){
	
		$sql = "INSERT INTO  plans (plans_name,
										plans_detail,
										plans_picture,
										plans_gallery,
										plans_projects_id
										) 
		VALUES (?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->plans_name,
										$this->plans_detail,
										$this->plans_picture,
										$this->plans_gallery,
										$this->plans_projects_id,
										));
		return $query;
	}
	function delete(){
		$sql = "DELETE FROM plans WHERE plans_projects_id = ?";
		$query = $this->db->query($sql,array($this->plans_projects_id));
		return $query;

	}
	function get_plans_by_projects_id(){
		$sql = "SELECT * FROM plans WHERE plans_projects_id = ?";
		$query = $this->db->query($sql,array($this->plans_projects_id))->result_array();
		return $query;
	}
}
?>