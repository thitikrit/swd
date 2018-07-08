<?php 

class Articles extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
	
		$sql = "INSERT INTO  articles (articles_name,articles_status,articles_type,articles_picture,articles_date_modified,articles_recommend,articles_tag,articles_sub_detail,articles_detail) VALUES (?,?,?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->articles_name,$this->articles_status,$this->articles_type,$this->articles_picture,$this->articles_date_modified,$this->articles_recommend,$this->articles_tag,$this->articles_sub_detail,$this->articles_detail));
	
		return $query;
	}	
	function update(){
		$sql = "UPDATE articles SET articles_name = ? , articles_status = ? , articles_type = ? ,articles_picture = ? , articles_date_modified = ? ,articles_recommend = ? , articles_tag = ? , articles_sub_detail = ? , articles_detail = ? WHERE articles_id = ? ";
			$query = $this->db->query($sql,array($this->articles_name,$this->articles_status,$this->articles_type,$this->articles_picture,$this->articles_date_modified,$this->articles_recommend,$this->articles_tag,$this->articles_sub_detail,$this->articles_detail,$this->articles_id));
	}
	function get_articles(){
		$sql = "SELECT * FROM articles";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_articles_by_id(){
		$sql = "SELECT * FROM articles WHERE articles_id = ?";
		$query = $this->db->query($sql,array($this->articles_id))->result_array();
		return $query;
	}

	function get_articles_active(){
		$sql = "SELECT * FROM articles WHERE articles_status = 'ACTIVE' ORDER BY articles_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_articles_active_by_id_(){
		$sql = "SELECT * FROM articles WHERE articles_id = ? AND articles_status ='ACTIVE'";
		$query = $this->db->query($sql,array($this->articles_id))->result_array();
		return $query;
	}
	function get_articles_order_by($order){
		$sql = "SELECT * FROM articles WHERE articles_status ='ACTIVE' ORDER BY articles_id $order";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_articles_by_search($search,$order){
		$sql = "SELECT * FROM articles WHERE articles_status ='ACTIVE' AND ( articles_name LIKE '%$search%' OR articles_tag LIKE '%$search%' ) ORDER BY articles_id $order";
		$query = $this->db->query($sql)->result_array();
		return $query;	
	}
}
?>