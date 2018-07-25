<?php 

class Time_log extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function add_time_log(){
		$sql = "INSERT INTO  time_log (log_menu,
										log_date,
										log_month,
										log_year,
										log_ip_address,
										log_time
										) 
		VALUES (?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->log_menu,
										$this->log_date,
										$this->log_month,
										$this->log_year,
										$this->log_ip_address,
										$this->log_time
										));
		return $query;
	}

	function get_ip(){
		$sql = "SELECT DISTINCT(log_ip_address) FROM time_log ";
		$query = $this->db->query($sql)->result_array();
		return count($query);
	}

	function get_year(){
		$sql = "SELECT DISTINCT(log_year) FROM time_log";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_log_all(){
		$sql = "SELECT count(log_id) as no,log_menu,log_year FROM `time_log` GROUP BY log_year,log_menu";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_log_by_year_group_month($y){
		$sql = "SELECT  count(log_id) as no,log_menu,log_month,log_year  FROM time_log WHERE log_year = $y GROUP BY log_month";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_log_by_year_group_month_and_menu($y){
		$sql = "SELECT  count(log_id) as no,log_menu,log_month,log_year  FROM time_log WHERE log_year = $y GROUP BY log_month,log_menu";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_log_by_month_group_year($m){
		$sql = "SELECT  count(log_id) as no,log_menu,log_month,log_year  FROM time_log WHERE log_month = $m GROUP BY log_year DESC,log_menu";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_log_by_year_by_month($y,$m){
		$sql = "SELECT  count(log_id) as no,log_menu,log_month,log_year  FROM time_log WHERE log_year = $y AND log_month = $m GROUP BY log_year DESC,log_month,log_menu";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

}
?>