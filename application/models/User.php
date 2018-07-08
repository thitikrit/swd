<?php 

class User extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get_user_by_username_and_password(){
		$sql = "SELECT * FROM user WHERE user_username = ? AND user_password = ? ";
		$query = $this->db->query($sql,array($this->user_username,$this->user_password))->result_array();
		return $query;
	}

}
?>