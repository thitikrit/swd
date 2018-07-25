<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_general extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{
		$this->load->model('time_log');
		$data['ip'] = $this->time_log->get_ip();

		$this->load->model('webboards');
		$data['wb'] = $this->webboards->get_wb();

		$this->load->model('user');
		$data['usr'] = count($this->user->get_member());

		$this->load->model('contacts');
		$data['cont'] = count($this->contacts->get_contacts());

		$data['y'] = $this->time_log->get_year();
		$data['gf'] = $this->time_log->get_log_all();

		$data['menu'] = 0;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/dashboard',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function reload(){
		$this->load->model('time_log');
		$y = $this->input->post('y');
		$m = $this->input->post('m');

		if($y == '-' && $m == '-'){
			$result = $this->time_log->get_log_all();
			$type = 1;
		}else if($y != '-' && $m == '-'){
			$data['m'] = $this->time_log->get_log_by_year_group_month($y);
			$result = $this->time_log->get_log_by_year_group_month_and_menu($y);
			$type = 2;
		}else if($y == '-' && $m != '-'){
			$result = $this->time_log->get_log_by_month_group_year($m);
			$type = 3;
		}else{
			$result = $this->time_log->get_log_by_year_by_month($y,$m);
			$type = 4;
			$data['year'] = $y;
			$data['month'] = $m;
		}

		$data['y'] = $this->time_log->get_year();
		$data['gf'] = $result;
		$data['type'] = $type;
		echo $this->load->view('back_end/reload_dashboard',$data,true);
	}
}
