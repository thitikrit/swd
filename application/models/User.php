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
	function insert_admin(){
		$sql = "INSERT INTO  user (user_username,user_password,user_fullname,user_tel,user_status,user_register_date,user_active) VALUES (?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->user_username,$this->user_password,$this->user_fullname,$this->user_tel,$this->user_status,$this->user_register_date,$this->user_active));
		return $query;
	}
	function get_user_by_username_and_password(){
		$sql = "SELECT * FROM user WHERE user_username = ? AND user_password = ? AND user_status = 'ADMIN' AND user_active = '1'";
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
	function get_user_by_tel(){
		$sql = "SELECT * FROM user WHERE user_tel = ?";
		$query = $this->db->query($sql,array($this->user_tel))->result_array();
		return $query;
	}
	function get_user_by_id(){
		$sql = "SELECT * FROM user WHERE user_id = ?";
		$query = $this->db->query($sql,array($this->user_id))->result_array();
		return $query;
	}
	function get_user_and_wb(){
		$sql = "SELECT T1.* , T2.num_wb
				FROM USER as T1 LEFT JOIN (SELECT *,count(webboards_id) as num_wb FROM `webboards` WHERE webboards_permission != '-1' GROUP BY webboards_user) as T2 ON T1.user_id = webboards_user
				WHERE user_status = 'MEMBER' 
				ORDER BY user_id DESC";
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
	function get_member(){
		$sql = "SELECT * FROM user WHERE user_status = 'MEMBER'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function update_info(){
		$sql = "UPDATE user SET user_fullname = ? , user_tel = ? WHERE user_id = ? ";
		$query = $this->db->query($sql,array($this->user_fullname,$this->user_tel,$this->user_id));
	}
	function check_password_old(){
		$sql = "SELECT * FROM user WHERE user_id = ? AND user_password = ?";
		$query = $this->db->query($sql,array($this->user_id,$this->user_password))->result_array();
		return $query;
	}
	function update_password(){
		$sql = "UPDATE user SET user_password = ? WHERE user_id = ? ";
		$query = $this->db->query($sql,array($this->user_password,$this->user_id));
		return $query;
	}
	function update_status(){
		$sql = "UPDATE user SET user_active = ? WHERE user_id = ? ";
		$query = $this->db->query($sql,array($this->user_active,$this->user_id));
		return $query;
	}
}
?>