<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}
	public function index(){
		$this->load->model('user');
		$this->user->user_id = $this->session->userdata("user_id");
		$data['user'] = $this->user->get_user_by_id();
		$data['menu'] = 12;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/admin_setting',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function update_info(){
		$this->load->model('user');
		$this->user->user_fullname = $this->input->post('user_fullname');
		$this->user->user_tel = 0;
		$this->user->user_id = $this->input->post('user_id');
		$result = $this->user->update_info();
		if(!$result){
			$this->session->set_userdata('user_fullname',$this->input->post('user_fullname'));
		}
		redirect('setting');
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
