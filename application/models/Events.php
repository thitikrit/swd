<?php 

class Events extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
	
		$sql = "INSERT INTO  events (events_name,events_status,events_type,events_picture,events_date_modified,events_recommend,events_tag,events_sub_detail,events_detail) VALUES (?,?,?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->events_name,$this->events_status,$this->events_type,$this->events_picture,$this->events_date_modified,$this->events_recommend,$this->events_tag,$this->events_sub_detail,$this->events_detail));
	
		return $query;
	}	
	function update(){
		$sql = "UPDATE events SET events_name = ? , events_status = ? , events_type = ? ,events_picture = ? , events_date_modified = ? ,events_recommend = ? , events_tag = ? , events_sub_detail = ? , events_detail = ? WHERE events_id = ? ";
			$query = $this->db->query($sql,array($this->events_name,$this->events_status,$this->events_type,$this->events_picture,$this->events_date_modified,$this->events_recommend,$this->events_tag,$this->events_sub_detail,$this->events_detail,$this->events_id));
	}
	function get_events(){
		$sql = "SELECT * FROM events";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_events_by_id(){
		$sql = "SELECT * FROM events WHERE events_id = ?";
		$query = $this->db->query($sql,array($this->events_id))->result_array();
		return $query;
	}
	
	function get_events_active(){
		$sql = "SELECT * FROM events WHERE events_status = 'ACTIVE' ORDER BY events_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_events_active_by_id_(){
		$sql = "SELECT * FROM events WHERE events_id = ? AND events_status ='ACTIVE'";
		$query = $this->db->query($sql,array($this->events_id))->result_array();
		return $query;
	}
	function get_events_order_by($order){
		$sql = "SELECT * FROM events WHERE events_status ='ACTIVE' ORDER BY events_id $order";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_events_by_search($search,$order){
		$sql = "SELECT * FROM events WHERE events_status ='ACTIVE' AND ( events_name LIKE '%$search%' OR events_tag LIKE '%$search%' ) ORDER BY events_id $order";
		$query = $this->db->query($sql)->result_array();
		return $query;	
	}

}
?>