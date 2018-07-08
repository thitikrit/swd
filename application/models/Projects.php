<?php 

class Projects extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function insert(){
	
		$sql = "INSERT INTO  projects (projects_name,
										projects_area_id,
										projects_area_text,
										projects_property,
										projects_price_text,
										projects_price,
										projects_location,
										projects_googlemap,
										projects_contact,
										projects_recommend,
										projects_tag,
										projects_status,
										projects_sub_detail,
										projects_detail,
										projects_date_modified) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
		$query = $this->db->query($sql,array($this->projects_name,
										$this->projects_area_id,
										$this->projects_area_text,
										$this->projects_property,
										$this->projects_price_text,
										$this->projects_price,
										$this->projects_location,
										$this->projects_googlemap,
										$this->projects_contact,
										$this->projects_recommend,
										$this->projects_tag,
										$this->projects_status,
										$this->projects_sub_detail,
										$this->projects_detail,
										$this->projects_date_modified));
		return $this->db->insert_id();
	}
	function update(){
		$sql = "UPDATE projects SET projects_name = ? ,
									projects_area_id = ? ,
									projects_area_text = ? ,
									projects_property = ? ,
									projects_price_text = ? ,
									projects_price = ? ,
									projects_location = ? ,
									projects_googlemap = ? ,
									projects_contact = ? ,
									projects_recommend = ? ,
									projects_tag = ? ,
									projects_status = ? ,
									projects_sub_detail = ? ,
									projects_detail = ? ,
									projects_date_modified = ?
								WHERE projects_id = ?";
		$query = $this->db->query($sql,array($this->projects_name,
										$this->projects_area_id,
										$this->projects_area_text,
										$this->projects_property,
										$this->projects_price_text,
										$this->projects_price,
										$this->projects_location,
										$this->projects_googlemap,
										$this->projects_contact,
										$this->projects_recommend,
										$this->projects_tag,
										$this->projects_status,
										$this->projects_sub_detail,
										$this->projects_detail,
										$this->projects_date_modified,
										$this->projects_id));
	}
	function update_logo_map_picture(){
		$sql = "UPDATE projects SET projects_logo = ? , projects_map = ? , projects_picture = ? WHERE projects_id = ? ";
		$query = $this->db->query($sql,array($this->projects_logo,$this->projects_map,$this->projects_picture,$this->projects_id));
	
	}
	function update_facility(){
		$sql = "UPDATE projects SET projects_facility = ? WHERE projects_id = ? ";
		$query = $this->db->query($sql,array($this->projects_facility,$this->projects_id));
	}
	function update_slide(){
		$sql = "UPDATE projects SET projects_slide = ? WHERE projects_id = ? ";
		$query = $this->db->query($sql,array($this->projects_slide,$this->projects_id));
	}
	function update_gallery(){
		$sql = "UPDATE projects SET projects_gallery = ? WHERE projects_id = ? ";
		$query = $this->db->query($sql,array($this->projects_gallery,$this->projects_id));
	}

	
	function get_projects(){
		$sql = "SELECT * FROM projects";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_projects_by_id(){
		$sql = "SELECT * FROM projects WHERE projects_id = ?";
		$query = $this->db->query($sql,array($this->projects_id))->result_array();
		return $query;
	}

	function get_projects_active_by_id(){
		$sql = "SELECT * FROM projects WHERE projects_status = 'ACTIVE' AND projects_id = ?";
		$query = $this->db->query($sql,array($this->projects_id))->result_array();
		return $query;
	}

	function get_projects_id_and_name(){
		$sql = "SELECT * FROM projects WHERE projects_status = 'ACTIVE'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_projects_and_area(){
		$sql = "SELECT * FROM projects JOIN area  ON projects_area_id = area_id order by projects_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_projects_active_and_area(){
		$sql = "SELECT * FROM projects JOIN area  ON projects_area_id = area_id WHERE projects_status = 'ACTIVE' order by projects_id DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	function get_projects_active_by_search($search,$type,$area,$price,$order){
		if($search != NULL){
			$s = "AND ( projects_name LIKE '%$search%' OR projects_tag LIKE '%$search%' OR projects_area_text LIKE '%$search%' )";
		}else{
			$s = "";
		}

		if($area != 'default'){
			$a = "AND projects_area_id = '$area'";
		}else{
			$a = "";
		}

		if($type != 'default'){
			$t = "AND projects_property LIKE '%$type%' ";
		}else{
			$t = "";
		}

		if($price != 'default'){
			if($price == '1000000'){
				$p = "AND projects_price BETWEEN 0 AND 1000000";
			}else if($price == '1000001'){
				$p = "AND projects_price BETWEEN 1000000 AND 2500000";
			}else if($price == '2000000'){
				$p = "AND projects_price BETWEEN 2500000 AND 5000000";
			}else if($price == '5000000'){
				$p = "AND projects_price > 5000000";
			}
		}else{
			$p = "";
		}

		if($order == 'new-old'){
			$r = 'projects_id DESC';
		}else if($order == 'old-new'){
			$r = 'projects_id ASC';
		}else if($order == 'high-low'){
			$r = 'projects_price DESC';
		}else if($order == 'low-high'){
			$r = 'projects_price ASC';
		}else{
			$r = 'projects_id DESC';
		}

		$sql = "SELECT * FROM projects WHERE projects_status ='ACTIVE' $s $a $t $p ORDER BY $r";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
	public function get_projects_recommend(){
		$sql = "SELECT * FROM projects WHERE projects_status = 'ACTIVE' AND projects_recommend = '1' ORDER BY projects_id DESC LIMIT 3";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
}
?>