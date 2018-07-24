<?php 

class User extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
		$sql = "INSERT INTO  user (user_username,user_password,user_fullname,user_tel,user_status,user_register_date) VALUES (?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->user_username,$this->user_password,$this->user_fullname,$this->user_tel,$this->user_status,$this->user_register_date));
		return $query;
	}
	function get_user_by_username_and_password(){
		$sql = "SELECT * FROM user WHERE user_username = ? AND user_password = ? AND user_status = 'ADMIN'";
		$query = $this->db->query($sql,array($this->user_username,$this->user_password))->result_array();
		return $query;
	}
	function get_user_member_by_username_and_password(){
		$sql = "SELECT * FROM user WHERE user_username = ? AND user_password = ? AND user_status = 'MEMBER'";
		$query = $this->db->query($sql,array($this->user_username,$this->user_password))->result_array();
		return $query;
	}
	function get_user_by_username(){
		$sql = "SELECT * FROM user WHERE user_username = ?";
		$query = $this->db->query($sql,array($this->user_username))->result_array();
		return $query;
	}
	function get_user_by_id(){
		$sql = "SELECT * FROM user WHERE user_id = ?";
		$query = $this->db->query($sql,array($this->user_id))->result_array();
		return $query;
	}
	function get_user(){
		$sql = "SELECT user.* , count(webboards_id) as num_wb FROM user JOIN webboards ON user_id = webboards_user WHERE user_status = 'MEMBER' group by user_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function update_login_time(){
		$sql = "UPDATE user SET user_login_date = ? WHERE user_id = ? ";
		$query = $this->db->query($sql,array($this->user_login_date,$this->user_id));
	}

	function get_admin(){
		$sql = "SELECT * FROM user WHERE user_status != 'MEMBER'";
		$query = $this->db->query($sql)->result_array();
		return $query;

	}
}
?>