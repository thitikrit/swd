<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log();
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 7;
		$this->time_log->log_date = date("d");
		$this->time_log->log_month = date("m");
		$this->time_log->log_year = date("Y");
		$this->time_log->log_ip_address = $this->get_clientip();
		$this->time_log->log_time = time();
		$this->time_log->add_time_log();
		$this->time_log->del_bug_time_log();
	}

	public function index()
	{
		$this->load->model('area');
		$this->load->model('menu');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 7;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 7;
		$data['menu'] = $this->menu->get_menu_by_id();
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/contact',$data,true);
		$this->load->view('front_end/page',$data);
	}

	public function add(){

		if($this->input->post('contacts_name') != '' && $this->input->post('contacts_email') != '' && $this->input->post('contacts_tel') != '' && $this->input->post('contacts_detail') != '' ){
			$this->load->model('contacts');
			$this->contacts->contacts_name =  $this->input->post('contacts_name');
			$this->contacts->contacts_email =  $this->input->post('contacts_email');
			$this->contacts->contacts_tel =  $this->input->post('contacts_tel');
			$this->contacts->contacts_detail =  $this->input->post('contacts_detail');
			$this->contacts->contacts_date = time();
			$this->contacts->contacts_status =  'UNREAD';
			$this->contacts->contacts_ip_address = $this->get_clientip();
			$this->contacts->add_contact();
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
