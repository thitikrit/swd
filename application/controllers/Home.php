<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log();
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 1;
		$this->time_log->log_date = date("d");
		$this->time_log->log_month = date("m");
		$this->time_log->log_year = date("Y");
		$this->time_log->log_ip_address = $this->get_clientip();
		$this->time_log->log_time = time();
		$this->time_log->add_time_log();
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

	public function index()
	{	

		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('company');
		$this->load->model('projects');

		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['company'] = $this->company->get_company();
		$data['projects'] = $this->projects->get_projects_recommend();
		$data['menu'] = 1;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 1;
		$data['menu'] = $this->menu->get_menu_by_id();

		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
	 	$data['content'] = $this->load->view('front_end/home',$data,true);
		$this->load->view('front_end/page',$data);
	}
}
