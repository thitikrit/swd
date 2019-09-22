<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		
	}
	public function index()
	{
		$this->load->model('area');
		$this->load->model('menu');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = null;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->load->model('tags');
		$data['title'] = "ลงทะเบียนเพื่อรับข้อเสนอเพิ่มเติม - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];

		$this->load->model('projects');

		$data['projects'] = $this->projects->get_projects_active_and_working();
		$data['content'] = $this->load->view('front_end/registration',$data,true);
		$this->load->view('front_end/page',$data);
	}

	public function add(){

		if($this->input->post()){
			
			$this->load->model('registrations');
			$this->registrations->reg_title_name =  $this->input->post('title_name');
			$this->registrations->reg_fname =  $this->input->post('fname');
			$this->registrations->reg_lname =  $this->input->post('lname');
			//$this->registrations->reg_email =  $this->input->post('email');
			$this->registrations->reg_mobile =  $this->input->post('mobile');
			$this->registrations->reg_age =  $this->input->post('age');
			$this->registrations->reg_address =  $this->input->post('address');
			//$this->registrations->reg_line =  $this->input->post('line');
			$this->registrations->reg_projects =  $this->input->post('projects');
			$this->registrations->reg_channel =  $this->input->post('channel');
			$this->registrations->reg_create_date = time();
			$this->registrations->reg_ip_address = $this->get_clientip();
			$this->registrations->add_registration();
			
			$return = array('status' => '1');    
	    	echo json_encode($return);
    	}else{
    		$return = array('status' => '0');    
	    	echo json_encode($return);
    	}
	}
	public function get_clientip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
