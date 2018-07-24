<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_projects extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('area');
		$this->load->model('projects');
		$data['area'] = count($this->area->get_area());
		$data['projects'] = count($this->projects->get_projects());
		$data['menu'] = 3;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/project_object',$data,true);
		$this->load->view('back_end/page',$data);
	}


	/* -------------- START manage area -----------------*/
	public function manage_area(){
		$this->load->model('area');
		$data['area'] = $this->area->get_area();
		$data['menu'] = 3;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/manage_area',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function area_create(){
		$data['menu'] = 3;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/area_create',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function area_add(){
		$this->load->model('area');
		$this->area->area_name = $this->input->post('area_name');
		$this->area->area_status = $this->input->post('area_status');
		$this->area->insert();
		redirect('manage_projects/manage_area');
	}
	public function area_edit($id = NULL){
		if($id != NULL){
			$this->load->model('area');
			$this->area->area_id = $id;
			$data['area_detail'] = $this->area->get_area_by_id();
			$data['menu'] = 3;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/area_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_projects/manage_area');		
		}
	}
	public function area_update(){
		if(!empty($this->input->post('area_id'))){
			$this->load->model('area');
			$area_id = $this->input->post('area_id');
			$this->area->area_id = $this->input->post('area_id');
			$this->area->area_name = $this->input->post('area_name');
			$this->area->area_status = $this->input->post('area_status');
			$this->area->update();
			redirect('manage_projects/area_edit/'.$area_id);
		}else{
			redirect('manage_projects/manage_area');
		}
	}
	/**************** END manage area *******************/

	/* -------------- START manage area -----------------*/
	public function projects_list(){
		$this->load->model('projects');
		$data['projects_list'] = $this->projects->get_projects_and_area();
		$data['menu'] = 3;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/projects_list',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function create(){
		$this->load->model('area');
		$data['area'] = $this->area->get_area();
		$data['menu'] = 3;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/projects_create',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function edit($id = NULL){
		if($id != NULL){
			$this->load->model('projects');
			$this->load->model('plans');
			$this->load->model('area');
			$data['area'] = $this->area->get_area();
			$this->projects->projects_id = $id;
			$data['projects'] = $this->projects->get_projects_by_id();
			$this->plans->plans_projects_id = $id;
			$data['plans'] = $this->plans->get_plans_by_projects_id();
			$data['menu'] = 3;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/projects_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_projects/projects_list');			
		}
	}
	public function add(){
		
		$this->load->model('projects');
		$this->load->model('area');
		$this->projects->projects_name = $this->input->post('projects_name');
		$this->projects->projects_area_id = $this->input->post('projects_area_id');
		$this->projects->projects_area_text = $this->area->get_name_by_id($this->input->post('projects_area_id'));
		$this->projects->projects_property = $this->input->post('projects_property');
		$this->projects->projects_price_text = $this->input->post('projects_price_text');
		$this->projects->projects_price = $this->input->post('projects_price');
		$this->projects->projects_location = $this->input->post('projects_location');
		$this->projects->projects_googlemap = $this->input->post('projects_googlemap');
		$this->projects->projects_recommend = $this->input->post('projects_recommend');
		$this->projects->projects_tag = $this->input->post('projects_tag');
		$this->projects->projects_status = $this->input->post('projects_status');
		$this->projects->projects_sub_detail = $this->input->post('projects_sub_detail');
		$this->projects->projects_detail = $this->input->post('projects_detail');
		$this->projects->projects_date_modified = time();
		
		$contact['projects_tel'] = $this->input->post('projects_tel');
		$contact['projects_website'] = $this->input->post('projects_website');
		$contact['projects_line'] = $this->input->post('projects_line');
		$contact['projects_fb'] = $this->input->post('projects_fb');
		$contact['projects_fb_link'] = $this->input->post('projects_fb_link');
		$this->projects->projects_contact = json_encode($contact);

		$last_id = $this->projects->insert();
		$this->projects->projects_id = $last_id;
		mkdir($this->config->item('upload_path')."/images/projects/" . $last_id, 0777, TRUE);
		
		if(!empty($_FILES["projects_logo"]["tmp_name"])){
				$extension = strrchr($_FILES["projects_logo"]["name"], '.' );
			    $projects_logo = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["projects_logo"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$last_id ."/".$projects_logo);
			   	$this->projects->projects_logo = $projects_logo;
		}else{
			$this->projects->projects_logo = NULL;
		}

		if(!empty($_FILES["projects_map"]["tmp_name"])){
				$extension = strrchr($_FILES["projects_map"]["name"], '.' );
			    $projects_map = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["projects_map"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$last_id ."/".$projects_map);
			   	$this->projects->projects_map = $projects_map;
		}else{
			$this->projects->projects_map = NULL;
		}

		if(!empty($_FILES["projects_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["projects_picture"]["name"], '.' );
			    $projects_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["projects_picture"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$last_id ."/".$projects_picture);
			   	$this->projects->projects_picture = $projects_picture;
		}else{
			$this->projects->projects_picture = NULL;
		}
		$this->projects->update_logo_map_picture();			
		
		

		if(!empty($_FILES["projects_facility_pic"]["tmp_name"])){
			$projects_facility_name = $this->input->post('projects_facility_name');
			$count = count($_FILES["projects_facility_pic"]["tmp_name"]);
			for($i = 0;$i < $count;$i++){
				if($_FILES["projects_facility_pic"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["projects_facility_pic"]["name"][$i] , '.' );
		    		$projects_facility_pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$projects_facility_new[$i]['picture'] = $projects_facility_pic_name;
		    		$projects_facility_new[$i]['name'] = $projects_facility_name[$i];
		    		move_uploaded_file($_FILES["projects_facility_pic"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$last_id ."/".$projects_facility_pic_name);
		    	}
			}
		}
		if(!empty($projects_facility_new)){
	    	$json_projects_facility = json_encode($projects_facility_new);	
			$this->projects->projects_facility = $json_projects_facility;	
    	}else{
    		$this->projects->projects_facility = NULL;
    	}
    	$this->projects->update_facility();		

    	if(!empty($_FILES["menu_pic_slide"]["tmp_name"])){
			$menu_pic_slide_order = $this->input->post('menu_pic_slide_order');
			$count = count($_FILES["menu_pic_slide"]["tmp_name"]);
			for($i = 0;$i < $count;$i++){
				if($_FILES["menu_pic_slide"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["menu_pic_slide"]["name"][$i] , '.' );
		    		$pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$projects_slide[$i]['name'] = $pic_name;
		    		$projects_slide[$i]['order'] = $menu_pic_slide_order[$i];
		    		move_uploaded_file($_FILES["menu_pic_slide"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$last_id ."/".$pic_name);
		    	}
			}
		}
		if(!empty($projects_slide)){
	    	$json_projects_slide = json_encode($projects_slide);	
			$this->projects->projects_slide = $json_projects_slide;	
    	}else{
    		$this->projects->projects_slide = NULL;
    	}
    	$this->projects->update_slide();		

    	mkdir($this->config->item('upload_path')."/images/projects/". $last_id."/gallery", 0777, TRUE);
    	if(!empty($_FILES["projects_gallery"]["tmp_name"])){
			$count = count($_FILES["projects_gallery"]["tmp_name"]);
			for($i = 0;$i < $count;$i++){
				if($_FILES["projects_gallery"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["projects_gallery"]["name"][$i] , '.' );
		    		$projects_gallery_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$projects_gallery[$i] = $projects_gallery_name;
		    		move_uploaded_file($_FILES["projects_gallery"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$last_id ."/gallery/".$projects_gallery_name);
		    	}
			}
		}
		if(!empty($projects_gallery)){
	    	$json_projects_gallery = json_encode($projects_gallery);	
			$this->projects->projects_gallery = $json_projects_gallery;	
    	}else{
    		$this->projects->projects_gallery = NULL;
    	}	
		$this->projects->update_gallery();		

		
		$this->load->model('plans');
		mkdir($this->config->item('upload_path')."/images/projects/". $last_id."/plans", 0777, TRUE);

		if(!empty($this->input->post('plans_name'))){
			$count_plans = count($this->input->post('plans_name'));
			for($i = 0;$i < $count_plans;$i++){

				$plans_name = $this->input->post('plans_name');
				$plans_detail = $this->input->post('plans_detail');
				$plans_gallery_new = NULL;
				$this->plans->plans_name = $plans_name[$i];
				$this->plans->plans_detail = $plans_detail[$i];
				$this->plans->plans_projects_id = $last_id;

				
			
				if($_FILES["plans_picture"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["plans_picture"]["name"][$i], '.' );
				    $plans_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				   	move_uploaded_file($_FILES["plans_picture"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$last_id ."/plans/".$plans_picture);
				   	$this->plans->plans_picture = $plans_picture;
				}
				 
				if(!empty($_FILES["plans_gallery"])){
					$plans_gallery = array_merge($_FILES["plans_gallery"]);
					$count_plans_gallery = count($plans_gallery["name"][$i]);
					for($j = 0;$j < $count_plans_gallery;$j++){
						if($plans_gallery["name"][$i][$j] != NULL){
						$extension = strrchr($plans_gallery["name"][$i][$j], '.' );
					    $plans_gallery_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
					    $plans_gallery_new[$j] = $plans_gallery_name;
					   	move_uploaded_file($plans_gallery["tmp_name"][$i][$j],$this->config->item('upload_path')."/images/projects/".$last_id ."/plans/".$plans_gallery_name);
						}
					}
				}

				if(!empty($plans_gallery_new)){
			    	$json_plans_gallery = json_encode($plans_gallery_new);	
					$this->plans->plans_gallery = $json_plans_gallery;	
		    	}else{
		    		$this->plans->plans_gallery = NULL;
		    	}

		    	$this->plans->insert();	
			}
		}
		redirect('manage_projects/projects_list');
	}

	public function update(){
		if(!empty($this->input->post('projects_id'))){
			$projects_id = $this->input->post('projects_id');
			$this->load->model('projects');
			$this->load->model('area');
			$this->projects->projects_name = $this->input->post('projects_name');
			$this->projects->projects_area_id = $this->input->post('projects_area_id');
			$this->projects->projects_area_text = $this->area->get_name_by_id($this->input->post('projects_area_id'));
			$this->projects->projects_property = $this->input->post('projects_property');
			$this->projects->projects_price_text = $this->input->post('projects_price_text');
			$this->projects->projects_price = $this->input->post('projects_price');
			$this->projects->projects_location = $this->input->post('projects_location');
			$this->projects->projects_googlemap = $this->input->post('projects_googlemap');
			$this->projects->projects_recommend = $this->input->post('projects_recommend');
			$this->projects->projects_tag = $this->input->post('projects_tag');
			$this->projects->projects_status = $this->input->post('projects_status');
			$this->projects->projects_sub_detail = $this->input->post('projects_sub_detail');
			$this->projects->projects_detail = $this->input->post('projects_detail');
			$this->projects->projects_date_modified = time();
			
			$contact['projects_tel'] = $this->input->post('projects_tel');
			$contact['projects_website'] = $this->input->post('projects_website');
			$contact['projects_line'] = $this->input->post('projects_line');
			$contact['projects_fb'] = $this->input->post('projects_fb');
			$contact['projects_fb_link'] = $this->input->post('projects_fb_link');
			
			
			$this->projects->projects_contact = json_encode($contact);
			$this->projects->projects_id = $projects_id;
			$this->projects->update();
			
		
			if(!empty($_FILES["projects_logo"]["tmp_name"])){
					$extension = strrchr($_FILES["projects_logo"]["name"], '.' );
				    $projects_logo = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				   	move_uploaded_file($_FILES["projects_logo"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$projects_logo);
				   	$this->projects->projects_logo = $projects_logo;
			}else{
				$this->projects->projects_logo = $this->input->post('projects_logo_old');
			}


			if(!empty($_FILES["projects_map"]["tmp_name"])){
					$extension = strrchr($_FILES["projects_map"]["name"], '.' );
				    $projects_map = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				   	move_uploaded_file($_FILES["projects_map"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$projects_map);
				   	$this->projects->projects_map = $projects_map;
			}else{
				$this->projects->projects_map = $this->input->post('projects_map_old');
			}

			if(!empty($_FILES["projects_picture"]["tmp_name"])){
					$extension = strrchr($_FILES["projects_picture"]["name"], '.' );
				    $projects_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				   	move_uploaded_file($_FILES["projects_picture"]["tmp_name"],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$projects_picture);
				   	$this->projects->projects_picture = $projects_picture;
			}else{
				$this->projects->projects_picture = $this->input->post('projects_picture_old');
			}
			$this->projects->update_logo_map_picture();			
			
		

			if(!empty($_FILES["projects_facility_pic"]["tmp_name"])){
				$old_facility_pic = $this->input->post('projects_facility_pic_old');
				$projects_facility_name = $this->input->post('projects_facility_name');
				$count = count($_FILES["projects_facility_pic"]["tmp_name"]);
				for($i = 0;$i < $count;$i++){
					if(!empty($old_facility_pic[$i])){
						
						if($_FILES["projects_facility_pic"]["name"][$i] != NULL){
							$extension = strrchr($_FILES["projects_facility_pic"]["name"][$i] , '.' );
				    		$projects_facility_pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				    		$facility[$i]['picture'] = $projects_facility_pic_name;
				    		move_uploaded_file($_FILES["projects_facility_pic"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$projects_facility_pic_name);
						}else{
							$facility[$i]['picture'] = $old_facility_pic[$i];
						}

					}else{
						$extension = strrchr($_FILES["projects_facility_pic"]["name"][$i] , '.' );
			    		$projects_facility_pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			    		$facility[$i]['picture'] = $projects_facility_pic_name;
			    		move_uploaded_file($_FILES["projects_facility_pic"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$projects_facility_pic_name);
					}
					$facility[$i]['name'] = $projects_facility_name[$i];
				}
			}

			if(!empty($facility)){
		    	$json_projects_facility = json_encode($facility);	
				$this->projects->projects_facility = $json_projects_facility;	
	    	}else{
	    		$this->projects->projects_facility = NULL;
	    	}
	    	$this->projects->update_facility();		


			if(!empty($_FILES["menu_pic_slide"]["tmp_name"])){
				$old_slide_pic = $this->input->post('menu_pic_slide_old');
				$menu_pic_slide_order = $this->input->post('menu_pic_slide_order');
				$count = count($_FILES["menu_pic_slide"]["tmp_name"]);
				for($i = 0;$i < $count;$i++){
					if(!empty($old_slide_pic[$i])){
						
						if($_FILES["menu_pic_slide"]["name"][$i] != NULL){
							$extension = strrchr($_FILES["menu_pic_slide"]["name"][$i] , '.' );
				    		$pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				    		$projects_slide[$i]['name'] = $pic_name;
			    			$projects_slide[$i]['order'] = $menu_pic_slide_order[$i];
				    		move_uploaded_file($_FILES["menu_pic_slide"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$pic_name);
						}else{
							$projects_slide[$i]['name'] = $old_slide_pic[$i];
						}

					}else{
						$extension = strrchr($_FILES["menu_pic_slide"]["name"][$i] , '.' );
			    		$pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			    		$projects_slide[$i]['name'] = $pic_name;
			    		$projects_slide[$i]['order'] = $menu_pic_slide_order[$i];
			    		move_uploaded_file($_FILES["menu_pic_slide"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/".$pic_name);
					}
					$projects_slide[$i]['order'] = $menu_pic_slide_order[$i];
				}
			}

			if(!empty($projects_slide)){
		    	$json_projects_slide = json_encode($projects_slide);	
				$this->projects->projects_slide = $json_projects_slide;	
	    	}else{
	    		$this->projects->projects_slide = NULL;
	    	}
	    	$this->projects->update_slide();		

			$count_all_gallery = 0 ;

			if(!empty($this->input->post('projects_gallery_old'))){
				$old_gallery = $this->input->post('projects_gallery_old');
				$count_old_gallery =  count($old_gallery);
				for($i = 0;$i < $count_old_gallery;$i++){
					$projects_gallery[$count_all_gallery] = $old_gallery[$i];
		    		$count_all_gallery++;
				}
			}

	    	if(!empty($_FILES["projects_gallery"]["tmp_name"])){
				$count = count($_FILES["projects_gallery"]["tmp_name"]);
				for($i = 0;$i < $count;$i++){
					if($_FILES["projects_gallery"]["name"][$i] != NULL){
						$extension = strrchr($_FILES["projects_gallery"]["name"][$i] , '.' );
			    		$projects_gallery_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			    		$projects_gallery[$count_all_gallery] = $projects_gallery_name;
			    		move_uploaded_file($_FILES["projects_gallery"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/gallery/".$projects_gallery_name);
			    		$count_all_gallery++;
			    	}
				}
			}
			if(!empty($projects_gallery)){
		    	$json_projects_gallery = json_encode($projects_gallery);	
				$this->projects->projects_gallery = $json_projects_gallery;	
	    	}else{
	    		$this->projects->projects_gallery = NULL;
	    	}	
			$this->projects->update_gallery();		

			
			$this->load->model('plans');

			if(!empty($this->input->post('plans_name'))){
				$this->plans->plans_projects_id = $projects_id;
				$this->plans->delete();
				
				$count_plans = count($this->input->post('plans_name'));
				for($i = 0;$i < $count_plans;$i++){

					$plans_name = $this->input->post('plans_name');
					$plans_detail = $this->input->post('plans_detail');
					$plans_picture_old = $this->input->post('plans_picture_old');
					$plans_gallery_new = NULL;
					$this->plans->plans_name = $plans_name[$i];
					$this->plans->plans_detail = $plans_detail[$i];
					

		
					if($_FILES["plans_picture"]["name"][$i] != NULL){
						$extension = strrchr($_FILES["plans_picture"]["name"][$i], '.' );
					    $plans_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
					   	move_uploaded_file($_FILES["plans_picture"]["tmp_name"][$i],$this->config->item('upload_path')."/images/projects/".$projects_id ."/plans/".$plans_picture);
					   	$this->plans->plans_picture = $plans_picture;
					}else{
						if(!empty($plans_picture_old[$i])){
							$this->plans->plans_picture = $plans_picture_old[$i];
						}else{
							$this->plans->plans_picture = '';
						}
					}
					
					
					$plans_gallery_new = '';
					if(!empty($_FILES["plans_gallery"]["tmp_name"][$i])){
						$count_plans_gallery = count($_FILES["plans_gallery"]["tmp_name"][$i]);
						for($j = 0;$j < $count_plans_gallery;$j++){
							if(!empty($_FILES["plans_gallery"]["tmp_name"][$i][$j])){
							 	$extension = strrchr($_FILES["plans_gallery"]["name"][$i][$j], '.' );
							    $new_plans_gallery = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
							   	move_uploaded_file($_FILES["plans_gallery"]["tmp_name"][$i][$j],$this->config->item('upload_path')."/images/projects/".$projects_id ."/plans/".$new_plans_gallery);
							   	$plans_gallery_new[$j] = $new_plans_gallery;
							}else{
								if(!empty($this->input->post('plans_gallery_old')[$i][$j])){
									$plans_gallery_new[$j] = $this->input->post('plans_gallery_old')[$i][$j];
								}
							}
						}
					}

					if(!empty($plans_gallery_new)){
				    	$json_plans_gallery = json_encode($plans_gallery_new);	
						$this->plans->plans_gallery = $json_plans_gallery;	
			    	}else{
			    		$this->plans->plans_gallery = NULL;
			    	}
			    	$this->plans->insert();	
				}
			}
			redirect('manage_projects/edit/'.$projects_id);
			
		}else{
			redirect('manage_projects/projects_list');
		}
	}
}
