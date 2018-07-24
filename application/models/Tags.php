<?php 

class Tags extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function get_tag(){
		$sql = "SELECT * FROM tags";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function update(){
		$sql = "UPDATE tags SET tags_name = ? WHERE tags_id = '1' ";
		$query = $this->db->query($sql,array($this->tags_name));
	}
}
?>