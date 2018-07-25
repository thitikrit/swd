<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_center extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}

	public function login()
	{
		if($this->session->userdata('user_id') && $this->session->userdata('user_username') && $this->session->userdata('user_status')){
			redirect('manage_general');
		}
		$this->load->view('back_end/login',null);
	}
	public function logout(){
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_username');
			$this->session->unset_userdata('user_status');
			$this->session->sess_destroy();
			redirect('manage_center/login');
	}
	public function validate_login(){
		$username =  $this->input->post('username');
		$password =  md5($this->input->post('password'));
		$this->load->model('user');
		$this->user->user_username = $username;
		$this->user->user_password = $password;	
		$sql = $this->user->get_user_by_username_and_password();
		if(count($sql)>0){
			$this->session->set_userdata('user_id',$sql[0]['user_id']);
			$this->session->set_userdata('user_username',$sql[0]['user_username']);
			$this->session->set_userdata('user_fullname',$sql[0]['user_fullname']);
			$this->session->set_userdata('user_status',$sql[0]['user_status']);
			$this->user->user_id = $sql[0]['user_id'];
			$this->user->user_login_date = time();	
			$this->user->update_login_time();
			$return = array('status' => 1, 'message' => 'เข้าสู่ระบบสำเร็จ');    
    		echo json_encode($return);
		}else{
			$return = array('status' => 0, 'message' => '* ไม่มีผู้ใช้งานนี้ในระบบ *');    
    		echo json_encode($return);
		}
	}
	public function checkSession(){
		if($this->session->userdata('user_id') && $this->session->userdata('user_username') && $this->session->userdata('user_status')){
			if($this->session->userdata('user_status') != 'MEMBER'){
				return 0;
			}else{
				$this->logout();
			}
		}
		else{
			$this->logout();
		}
	}
}
