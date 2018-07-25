<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		if(!$this->session->userdata('user_username')){
			redirect('home');
		}else{
			if($this->session->userdata('user_status') != 'MEMBER'){
			redirect('home');
			}
		}
	}
	public function webboard(){
		$this->load->model('webboards');
		$this->webboards->webboards_user = $this->session->userdata("user_id");
		$data['webboards_list'] = $this->webboards->get_webboards_by_user_id();
		$data['menu'] = 1;
		$data['sidebar'] = $this->load->view('back_end/member_sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/member_webboard',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function webboard_create(){
		$data['menu'] = 1;
		$data['sidebar'] = $this->load->view('back_end/member_sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/member_webboards_create',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function webboard_add(){
		$this->load->model('webboards');
		$this->webboards->webboards_name = $this->input->post('webboards_name');
		$this->webboards->webboards_type = $this->input->post('webboards_type');
		$this->webboards->webboards_status = $this->input->post('webboards_status');
		$this->webboards->webboards_area = $this->input->post('webboards_area');
		$this->webboards->webboards_property = $this->input->post('webboards_property');
		$this->webboards->webboards_price = $this->input->post('webboards_price');
		$this->webboards->webboards_unit = $this->input->post('webboards_unit');
		$this->webboards->webboards_tag = $this->input->post('webboards_tag');
		$this->webboards->webboards_sub_detail = $this->input->post('webboards_sub_detail');
		$this->webboards->webboards_detail = $this->input->post('webboards_detail');
		$this->webboards->webboards_date_modified = time();
		$this->webboards->webboards_gallery = NULL;
		if($this->input->post('webboards_status') == 'ACTIVE'){
			$this->webboards->webboards_permission = -1;
		}else{
			$this->webboards->webboards_permission = NULL;
		}
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

		$this->webboards->insert_by_member();	
		redirect('member/webboard');

	}
	public function webboard_edit($id = NULL){
		if($id != NULL){
			$this->load->model('webboards');
			$this->webboards->webboards_id = $id;
			$this->webboards->webboards_user = $this->session->userdata("user_id");
			$data['webboards_detail'] = $this->webboards->get_webboards_by_id_and_check_user();
			if(empty($data['webboards_detail'])){
				redirect('member/webboard');
			}
			$data['menu'] = 5;
			$data['sidebar'] = $this->load->view('back_end/member_sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/member_webboards_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('member/webboard');			
		}
	}
	public function webboard_update(){
		if(!empty($this->input->post('webboards_id'))){
			$this->load->model('webboards');
			$webboards_id = $this->input->post('webboards_id');
			$this->webboards->webboards_id = $this->input->post('webboards_id');
			$this->webboards->webboards_name = $this->input->post('webboards_name');
			$this->webboards->webboards_type = $this->input->post('webboards_type');
			$this->webboards->webboards_area = $this->input->post('webboards_area');
			$this->webboards->webboards_property = $this->input->post('webboards_property');
			$this->webboards->webboards_price = $this->input->post('webboards_price');
			$this->webboards->webboards_unit = $this->input->post('webboards_unit');
			$this->webboards->webboards_tag = $this->input->post('webboards_tag');
			$this->webboards->webboards_sub_detail = $this->input->post('webboards_sub_detail');
			$this->webboards->webboards_detail = $this->input->post('webboards_detail');
			$this->webboards->webboards_date_modified = time();


			$status = $this->input->post('webboards_status');

			if($status == 'ACTIVE'){
				$this->webboards->webboards_status = $status;
				$this->webboards->webboards_permission = 0;
			}else if($status == 'INACTIVE'){
				$this->webboards->webboards_status = $status;
				$this->webboards->webboards_permission = $this->input->post('webboards_permission');
			}else{
				$this->webboards->webboards_status = $status;
				$this->webboards->webboards_permission = $this->input->post('webboards_permission');
			}

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


			$this->webboards->update_by_member();	
			redirect('member/webboard_edit/'.$webboards_id);
		}else{
			redirect('member/webboard');
		}

	}
	public function setting(){
		$this->load->model('user');
		$this->user->user_id = $this->session->userdata("user_id");
		$data['member'] = $this->user->get_user_by_id();
		$data['menu'] = 2;
		$data['sidebar'] = $this->load->view('back_end/member_sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/member_setting',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function check_tel(){
		if($this->input->post('tel') != ''){
			$this->load->model('user');
			$this->user->user_tel = trim($this->input->post('tel'));
			$result = $this->user->get_user_by_tel();
			if(count($result)>0){
				$return = array('status' => '0');    
		   		echo json_encode($return);
		    }else{
		    	$return = array('status' => '1');    
		   		echo json_encode($return);
		    }
	   	}else{
		   	$return = array('status' => '0');    
		   	echo json_encode($return);
	   	}	

	}

	public function update_info(){
		$this->load->model('user');
		$this->user->user_fullname = $this->input->post('user_fullname');
		$this->user->user_tel = $this->input->post('user_tel');
		$this->user->user_id = $this->input->post('user_id');
		$result = $this->user->update_info();
		if(!$result){
			$this->session->set_userdata('user_fullname',$this->input->post('user_fullname'));
			$this->session->set_userdata('user_tel',$this->input->post('user_tel'));
		}
		redirect('member/setting');
	}
	public function update_password(){
		$this->load->model('user');
		$password_old = $this->input->post('password_old');
		
		$this->user->user_id = $this->input->post('user_id');
		$this->user->user_password = md5($password_old);
		$result = $this->user->check_password_old();
		if(!empty($result)){
			$this->user->user_password = md5($this->input->post('password_new'));
			$update = $this->user->update_password();
			if($update){
				$return = array('status' => '1');    
		   		echo json_encode($return);
			}else{
				$return = array('status' => '0');    
		   		echo json_encode($return);
			}
			
		}else{
			$return = array('status' => '0');    
		   	echo json_encode($return);
		}
		
	}
}
