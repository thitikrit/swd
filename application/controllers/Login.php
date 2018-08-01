<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		if($this->session->userdata('user_username')){
			redirect('home');
		}
	}

	public function index()
	{
		$this->load->model('area');
		$this->load->model('menu');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 'login';
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$data['content'] = $this->load->view('front_end/login',$data,true);
		$this->load->model('tags');
		$data['title'] = "เข้าสู่ระบบ - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$this->load->view('front_end/page',$data);
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
	public function validate_login(){
		$username =  $this->input->post('username');
		$password =  md5($this->input->post('password'));
		$this->load->model('user');
		$this->user->user_username = $username;
		$this->user->user_password = $password;	
		$sql = $this->user->get_user_member_by_username_and_password();
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
}
