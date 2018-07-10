<?php 

class Contacts extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function update(){
		$sql = "UPDATE contacts SET contacts_status = ? WHERE contacts_id = ? ";
		$query = $this->db->query($sql,array($this->contacts_status,$this->contacts_id));
	}

	function get_contacts(){
		$sql = "SELECT * FROM contacts ORDER BY contacts_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_contacts_by_id(){
		$sql = "SELECT * FROM contacts WHERE contacts_id = ?";
		$query = $this->db->query($sql,array($this->contacts_id))->result_array();
		return $query;
	}
	function add_contact(){
		$sql = "INSERT INTO  contacts (contacts_name,
										contacts_email,
										contacts_tel,
										contacts_detail,
										contacts_date,
										contacts_status,
										contacts_ip_address
										) 
		VALUES (?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->contacts_name,
										$this->contacts_email,
										$this->contacts_tel,
										$this->contacts_detail,
										$this->contacts_date,
										$this->contacts_status,
										$this->contacts_ip_address
										));
		return $this->db->insert_id();
	}
}
?>