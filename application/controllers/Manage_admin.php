<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_admin extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
		if($this->session->userdata('user_username') != 'swdadminkero'){
			redirect('manage_general');
		}
	}

	public function index()
	{	
		$this->load->model('user');
		$data['user'] = $this->user->get_admin();
		$data['menu'] = 11;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/admin',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function detail($id){
		if($id != NULL){
			$this->load->model('user');
			$this->user->user_id = $id;
			$data['user'] = $this->user->get_user_by_id();
			if(empty($data['user'])){
				redirect('manage_admin');
			}else{
				if($data['user'][0]['user_status'] != 'ADMIN'){
					redirect('manage_admin');
				}
			}
			$data['menu'] = 11;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/admin_detail',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_admin');
		}

	}
	public function update_status(){
		if(!empty($this->input->post('user_id'))){
			$this->load->model('user');
			$id = $this->input->post('user_id');
			$user_active = $this->input->post('user_active');
			$this->user->user_id = $id;
			$this->user->user_active = $user_active;
			$this->user->update_status();
			redirect('manage_admin');
		}else{
			redirect('manage_admin');
		}
	}
	public function update_password(){
		if(!empty($this->input->post('user_id'))){
			$this->load->model('user');
			$this->user->user_id = $this->input->post('user_id');
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
	public function create(){
		$data['menu'] = 12;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/admin_create',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function check_username(){
		if($this->input->post('username') != ''){
			$this->load->model('user');
			$this->user->user_username = $this->input->post('username');
			$result = $this->user->get_user_by_username();
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
	public function add(){
		$this->load->model('user');
		$this->user->user_username = $this->input->post('user_username');
		$this->user->user_password = md5($this->input->post('password_new'));
		$this->user->user_fullname = $this->input->post('user_fullname');
		$this->user->user_tel = 0;
		$this->user->user_register_date = time();
		$this->user->user_status = 'ADMIN';
		$this->user->user_active = $this->input->post('user_active');
		$this->user->insert_admin();
		redirect('manage_admin');
	}
}
