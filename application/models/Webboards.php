<?php 

class Webboards extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function insert(){
	
		$sql = "INSERT INTO  webboards (webboards_name,webboards_status,webboards_type,webboards_area,webboards_property,webboards_price,webboards_unit,webboards_picture,webboards_date_modified,webboards_recommend,webboards_tag,webboards_sub_detail,webboards_detail,webboards_gallery,webboards_permission,webboards_user) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,1) ";
		$query = $this->db->query($sql,array($this->webboards_name,$this->webboards_status,$this->webboards_type,$this->webboards_area,$this->webboards_property,$this->webboards_price,$this->webboards_unit,$this->webboards_picture,$this->webboards_date_modified,$this->webboards_recommend,$this->webboards_tag,$this->webboards_sub_detail,$this->webboards_detail,$this->webboards_gallery,$this->webboards_user));
	
		return $query;
	}
	function insert_by_member(){
	
		$sql = "INSERT INTO  webboards (webboards_name,webboards_status,webboards_type,webboards_area,webboards_property,webboards_price,webboards_unit,webboards_picture,webboards_date_modified,webboards_tag,webboards_sub_detail,webboards_detail,webboards_gallery,webboards_permission,webboards_user) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->webboards_name,$this->webboards_status,$this->webboards_type,$this->webboards_area,$this->webboards_property,$this->webboards_price,$this->webboards_unit,$this->webboards_picture,$this->webboards_date_modified,$this->webboards_tag,$this->webboards_sub_detail,$this->webboards_detail,$this->webboards_gallery,$this->webboards_permission,$this->webboards_user));
	
		return $query;
	}		
	function update(){
		$sql = "UPDATE webboards SET webboards_name = ? , webboards_status = ? , webboards_type = ? ,webboards_area = ? , webboards_property = ? , webboards_price = ? , webboards_unit = ? , webboards_picture = ? , webboards_date_modified = ? ,webboards_recommend = ? , webboards_tag = ? , webboards_sub_detail = ?  , webboards_detail = ?  , webboards_gallery = ? WHERE webboards_id = ? ";
			$query = $this->db->query($sql,array($this->webboards_name,$this->webboards_status,$this->webboards_type,$this->webboards_area,$this->webboards_property,$this->webboards_price,$this->webboards_unit,$this->webboards_picture,$this->webboards_date_modified,$this->webboards_recommend,$this->webboards_tag,$this->webboards_sub_detail,$this->webboards_detail,$this->webboards_gallery,$this->webboards_id));
	}
	function update_by_member(){
		$sql = "UPDATE webboards SET webboards_name = ? , webboards_status = ? , webboards_type = ? ,webboards_area = ? , webboards_property = ? , webboards_price = ? , webboards_unit = ? , webboards_picture = ? , webboards_date_modified = ? ,webboards_permission = ? , webboards_tag = ? , webboards_sub_detail = ?  , webboards_detail = ?  , webboards_gallery = ? WHERE webboards_id = ? ";
			$query = $this->db->query($sql,array($this->webboards_name,$this->webboards_status,$this->webboards_type,$this->webboards_area,$this->webboards_property,$this->webboards_price,$this->webboards_unit,$this->webboards_picture,$this->webboards_date_modified,$this->webboards_permission,$this->webboards_tag,$this->webboards_sub_detail,$this->webboards_detail,$this->webboards_gallery,$this->webboards_id));
	}
	function get_webboards(){
		$sql = "SELECT * FROM webboards";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_webboards_by_id(){
		$sql = "SELECT * FROM webboards WHERE webboards_id = ?";
		$query = $this->db->query($sql,array($this->webboards_id))->result_array();
		return $query;
	}

	function get_webboards_by_admin(){
		$sql = "SELECT * FROM webboards JOIN user ON webboards_user = user_id WHERE user_status = 'ADMIN'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_webboards_by_member(){
		$sql = "SELECT * FROM webboards JOIN user ON webboards_user = user_id WHERE user_status = 'MEMBER' AND webboards_permission != '-1' ORDER BY webboards_id DESC, webboards_date_modified DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_webboards_by_member_and_status_wait(){
		$sql = "SELECT * FROM webboards JOIN user ON webboards_user = user_id WHERE user_status = 'MEMBER' AND webboards_permission = 0 ORDER BY webboards_id DESC, webboards_date_modified DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_webboards_by_member_and_status_not_wait(){
		$sql = "SELECT * FROM webboards JOIN user ON webboards_user = user_id WHERE user_status = 'MEMBER' AND webboards_permission != '-1' AND webboards_permission != '0' ORDER BY webboards_id DESC, webboards_date_modified DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_webboards_by_user_id(){
		$sql = "SELECT * FROM webboards  WHERE webboards_user = ? ORDER BY webboards_id DESC";
		$query = $this->db->query($sql,array($this->webboards_user))->result_array();
		return $query;
	}
	function update_permission_webboards(){
		$sql = "UPDATE webboards SET webboards_permission = ? ,webboards_approve_by_user_id = ? WHERE webboards_id = ?";
		$query = $this->db->query($sql,array($this->webboards_permission,$this->webboards_approve_by_user_id,$this->webboards_id));
	}
	function get_webboards_public(){
		$sql = "SELECT * FROM webboards WHERE webboards_status != 'INACTIVE' AND webboards_permission = 1 ORDER BY webboards_id  DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_webboards_active_by_id_(){
		$sql = "SELECT * FROM webboards LEFT JOIN user ON webboards_user = user_id WHERE webboards_id = ? AND webboards_status != 'INACTIVE' AND webboards_permission = 1 ";
		$query = $this->db->query($sql,array($this->webboards_id))->result_array();
		return $query;
	}
	function get_webboards_order_by($type,$order){
		
		if($type != NULL){
			$t = "AND webboards_type = '$type'"; 
		}else{
			$t = "";
		}
		
		if($order == 'new-old'){
			$r = 'webboards_id DESC';
		}else if($order == 'old-new'){
			$r = 'webboards_id ASC';
		}else if($order == 'high-low'){
			$r = 'webboards_price DESC';
		}else if($order == 'low-high'){
			$r = 'webboards_price ASC';
		}else{
			$r = '';
		}

		$sql = "SELECT * FROM webboards WHERE webboards_status ='ACTIVE'  AND webboards_permission = 1 $t ORDER BY $r";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_webboards_by_search($search,$area,$type,$price,$typeby,$order){
		if($search != NULL){
			$s = "AND ( webboards_name LIKE '%$search%' OR webboards_tag LIKE '%$search%' )";
		}else{
			$s = "";
		}

		if($area != NULL){
			$a = "AND webboards_area LIKE '%$area%' ";
		}else{
			$a = "";
		}

		if($type != NULL){
			$t = "AND webboards_property LIKE '%$type%' ";
		}else{
			$t = "";
		}

		if($price != 'default'){
			if($price == '5000'){
				$p = "AND webboards_price BETWEEN 0 AND 5000";
			}else if($price == '10000'){
				$p = "AND webboards_price BETWEEN 5000 AND 10000";
			}else if($price == '25000'){
				$p = "AND webboards_price BETWEEN 10000 AND 25000";
			}else if($price == '50000'){
				$p = "AND webboards_price BETWEEN 25000 AND 50000";
			}else if($price == '100000'){
				$p = "AND webboards_price BETWEEN 50000 AND 100000";
			}else if($price == '250000'){
				$p = "AND webboards_price BETWEEN 100000 AND 250000";
			}else if($price == '500000'){
				$p = "AND webboards_price BETWEEN 250000 AND 500000";
			}else if($price == '500001'){
				$p = "AND webboards_price > 500000 ";
			}else if($price == '1000000'){	
				$p = "AND webboards_price > 1000000 ";
			}
		}else{
			$p = "";
		}

		if($typeby != NULL){
			$tb = "AND webboards_type = '$typeby'"; 
		}else{
			$tb = "";
		}
		if($order == 'new-old'){
			$r = 'webboards_id DESC';
		}else if($order == 'old-new'){
			$r = 'webboards_id ASC';
		}else if($order == 'high-low'){
			$r = 'webboards_price DESC';
		}else if($order == 'low-high'){
			$r = 'webboards_price ASC';
		}else{
			$r = 'webboards_id DESC';
		}


		$sql = "SELECT * FROM webboards WHERE webboards_status != 'INACTIVE' AND webboards_permission = 1 $s $a $t $p $tb ORDER BY $r";
		$query = $this->db->query($sql)->result_array();
		return $query;

	}
	function get_webboards_by_id_and_check_user(){
		$sql = "SELECT * FROM webboards WHERE webboards_id = ? AND webboards_user = ? AND webboards_status != 'REMOVE'";
		$query = $this->db->query($sql,array($this->webboards_id,$this->webboards_user))->result_array();
		return $query;
	} 
	function get_wb(){
		$sql = "SELECT * FROM webboards WHERE webboards_permission = '1' AND webboards_status != 'INACTIVE'";
		$query = $this->db->query($sql)->result_array();
		return count($query);
	}
	function get_webboards_by_member_id(){
		$sql = "SELECT * FROM webboards JOIN user ON webboards_user = user_id WHERE webboards_user = ? AND webboards_permission != '-1' ORDER BY webboards_id DESC";
		$query = $this->db->query($sql,array($this->webboards_user))->result_array();
		return $query;
	}
}
?>