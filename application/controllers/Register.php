<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {

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
		$data['content'] = $this->load->view('front_end/register',$data,true);
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
	public function create(){
		if($this->input->post('fullname') != '' && $this->input->post('tel') != '' && $this->input->post('username') != '' && $this->input->post('password') != '' ){
			$this->load->model('user');
			$this->user->user_username = $this->input->post('username');
			$this->user->user_password = md5($this->input->post('password'));
			$this->user->user_fullname = $this->input->post('fullname');
			$this->user->user_tel = trim($this->input->post('tel'));
			$this->user->user_register_date = time();
			$this->user->user_status = 'MEMBER';

			$result = $this->user->get_user_by_username();
			if(count($result)>0){
				$return = array('status' => '0');    
		   		echo json_encode($return);
		    }
		    $result = $this->user->get_user_by_tel();
			if(count($result)>0){
				$return = array('status' => '0');    
		   		echo json_encode($return);
		    }

			$result = $this->user->insert();
			if($result){
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
