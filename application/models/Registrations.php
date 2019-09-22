<?php 

class Registrations extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function update(){
		$sql = "UPDATE registration SET reg_status = ? WHERE reg_id = ? ";
		$query = $this->db->query($sql,array($this->reg_status,$this->reg_id));
	}

	function get_registrations(){
		$sql = "SELECT * FROM registration ORDER BY reg_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_registrations_by_id(){
		$sql = "SELECT * FROM registration WHERE reg_id = ?";
		$query = $this->db->query($sql,array($this->reg_id))->result_array();
		return $query;
	}
	function add_registration(){
		$sql = "INSERT INTO  registration (reg_title_name,
										reg_fname,
										reg_lname,
										reg_age,
										reg_mobile,
										reg_address,
										reg_projects,
										reg_channel,
										reg_create_date,
										reg_ip_address
										) 
		VALUES (?,?,?,?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array(
										$this->reg_title_name,
										$this->reg_fname,
										$this->reg_lname,
										$this->reg_age,
										$this->reg_mobile,
										$this->reg_address,
										$this->reg_projects,
										$this->reg_channel,
										$this->reg_create_date,
										$this->reg_ip_address
										));
		return $this->db->insert_id();
	}
	function get_count_new(){
		$sql = "SELECT * FROM registration WHERE reg_status = 'WAIT' ";
		$query = $this->db->query($sql)->num_rows();
		return $query;
	}
}
?>