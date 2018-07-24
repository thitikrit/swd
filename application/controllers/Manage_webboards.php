<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_webboards extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('webboards');
		$data['webboards_member'] = count($this->webboards->get_webboards_by_member());
		$data['webboards_member_wait'] = count($this->webboards->get_webboards_by_member_and_status_wait());
		$data['webboards_admin'] = count($this->webboards->get_webboards_by_admin());
		$data['menu'] = 5;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/webboard_center',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function webboards_admin()
	{	
		$this->load->model('webboards');
		$data['webboards_list'] = $this->webboards->get_webboards_by_admin();
		$data['menu'] = 5;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/webboards',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function webboards_member()
	{	
		$this->load->model('webboards');
		$data['webboards_member'] = $this->webboards->get_webboards_by_member_and_status_not_wait();
		$data['webboards_member_wait'] = $this->webboards->get_webboards_by_member_and_status_wait();
		$this->load->model('user');
		$data['admin'] = $this->user->get_admin();
		$data['menu'] = 5;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/webboards_member',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function create(){
		$data['menu'] = 5;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/webboards_create',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function add(){
		$this->load->model('webboards');
		$this->webboards->webboards_name = $this->input->post('webboards_name');
		$this->webboards->webboards_type = $this->input->post('webboards_type');
		$this->webboards->webboards_status = $this->input->post('webboards_status');
		$this->webboards->webboards_area = $this->input->post('webboards_area');
		$this->webboards->webboards_property = $this->input->post('webboards_property');
		$this->webboards->webboards_price = $this->input->post('webboards_price');
		$this->webboards->webboards_unit = $this->input->post('webboards_unit');
		$this->webboards->webboards_recommend = $this->input->post('webboards_recommend');
		$this->webboards->webboards_tag = $this->input->post('webboards_tag');
		$this->webboards->webboards_sub_detail = $this->input->post('webboards_sub_detail');
		$this->webboards->webboards_detail = $this->input->post('webboards_detail');
		$this->webboards->webboards_date_modified = time();
		$this->webboards->webboards_gallery = NULL;
		$this->webboards->webboards_user = $this->session->userdata("user_id");


		if(!empty($_FILES["webboards_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["webboards_picture"]["name"], '.' );
			    $webboards_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["webboards_picture"]["tmp_name"],$this->config->item('upload_path')."/images/webboards/".$webboards_picture);
			   	$this->webboards->webboards_picture = $webboards_picture;
		}

		if(!empty($_FILES["webboards_gallery"]["tmp_name"])){
			$count = count($_FILES["webboards_gallery"]["tmp_name"]);
			for($i = 0;$i < $count;$i++){
				if($_FILES["webboards_gallery"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["webboards_gallery"]["name"][$i] , '.' );
		    		$webboards_gallery_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$webboards_gallery[$i] = $webboards_gallery_name;
		    		move_uploaded_file($_FILES["webboards_gallery"]["tmp_name"][$i],$this->config->item('upload_path')."/images/webboards/gallery/".$webboards_gallery_name);
		    	}
			}
			
		}

		if(!empty($webboards_gallery)){
	    	$json_webboards_gallery = json_encode($webboards_gallery);	
			$this->webboards->webboards_gallery = $json_webboards_gallery;	
    	}else{
    		$this->webboards->webboards_gallery = NULL;
    	}	

		$this->webboards->insert();	
		redirect('manage_webboards');
	}

	public function edit($id = NULL){
		if($id != NULL){
			$this->load->model('webboards');
			$this->webboards->webboards_id = $id;
			$data['webboards_detail'] = $this->webboards->get_webboards_by_id();
			$data['menu'] = 5;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/webboards_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_webboards');			
		}
	}

	public function update(){
		if(!empty($this->input->post('webboards_id'))){
			$this->load->model('webboards');
			$webboards_id = $this->input->post('webboards_id');
			$this->webboards->webboards_id = $this->input->post('webboards_id');
			$this->webboards->webboards_name = $this->input->post('webboards_name');
			$this->webboards->webboards_type = $this->input->post('webboards_type');
			$this->webboards->webboards_status = $this->input->post('webboards_status');
			$this->webboards->webboards_area = $this->input->post('webboards_area');
			$this->webboards->webboards_property = $this->input->post('webboards_property');
			$this->webboards->webboards_price = $this->input->post('webboards_price');
			$this->webboards->webboards_unit = $this->input->post('webboards_unit');
			$this->webboards->webboards_recommend = $this->input->post('webboards_recommend');
			$this->webboards->webboards_tag = $this->input->post('webboards_tag');
			$this->webboards->webboards_sub_detail = $this->input->post('webboards_sub_detail');
			$this->webboards->webboards_detail = $this->input->post('webboards_detail');
			$this->webboards->webboards_date_modified = time();

			if(!empty($_FILES["webboards_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["webboards_picture"]["name"], '.' );
			    $webboards_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["webboards_picture"]["tmp_name"],$this->config->item('upload_path')."/images/webboards/".$webboards_picture);
			   	$this->webboards->webboards_picture = $webboards_picture;
			}else{
				$this->webboards->webboards_picture = $this->input->post('webboards_picture_old');
			}

			$count_all_gallery = 0 ;

			if(!empty($this->input->post('webboards_gallery_old'))){
				$old_gallery = $this->input->post('webboards_gallery_old');
				$count_old_gallery =  count($old_gallery);
				for($i = 0;$i < $count_old_gallery;$i++){
					$webboards_gallery[$count_all_gallery] = $old_gallery[$i];
		    		$count_all_gallery++;
				}
			}

			if(!empty($_FILES["webboards_gallery"]["tmp_name"])){
				$count = count($_FILES["webboards_gallery"]["tmp_name"]);
				for($i = 0;$i < $count;$i++){
					if($_FILES["webboards_gallery"]["name"][$i] != NULL){
						$extension = strrchr($_FILES["webboards_gallery"]["name"][$i] , '.' );
			    		$webboards_gallery_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			    		$webboards_gallery[$count_all_gallery] = $webboards_gallery_name;
			    		$count_all_gallery++;
			    		move_uploaded_file($_FILES["webboards_gallery"]["tmp_name"][$i],$this->config->item('upload_path')."/images/webboards/gallery/".$webboards_gallery_name);
			    	}
				}
				
			}
			
			if(!empty($webboards_gallery)){
		    	$json_webboards_gallery = json_encode($webboards_gallery);	
				$this->webboards->webboards_gallery = $json_webboards_gallery;	
	    	}else{
	    		$this->webboards->webboards_gallery = NULL;
	    	}	


			$this->webboards->update();	
			redirect('manage_webboards/edit/'.$webboards_id);
		}else{
			redirect('manage_webboards');
		}

	}

	public function check($id = NULL){
		if($id != NULL){
			$this->load->model('webboards');
			$this->webboards->webboards_id = $id;
			$data['webboards_detail'] = $this->webboards->get_webboards_by_id();
			$data['menu'] = 5;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/webboards_edit_member',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('index.php/manage_webboards/webboards_member');			
		}
	}
	public function update_webboard_member(){
		if(!empty($this->input->post('webboards_id'))){
			$this->load->model('webboards');
			$id = $this->input->post('webboards_id');
			$permission = $this->input->post('webboards_permission');
			$this->webboards->webboards_id = $id;
			$this->webboards->webboards_permission = $permission;
			$this->webboards->webboards_approve_by_user_id = $this->session->userdata("user_id");

			$this->webboards->update_permission_webboards();
			redirect('manage_webboards/check/'.$webboards_id);
		}else{
			redirect('manage_webboards/webboards_member');
		}
	}
}
