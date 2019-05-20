<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_registrations extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('registrations');
		$data['registrations_list'] = $this->registrations->get_registrations();
		$data['menu'] = 99;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/registrations',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('registrations');
			$this->registrations->reg_id = $id;
			$data['registrations_detail'] = $this->registrations->get_registrations_by_id();
			$data['menu'] = 99;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/registrations_detail',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_registrations');						
		}

	}

	public function update(){
		if(!empty($this->input->post('reg_id'))){
			$reg_id = $this->input->post('reg_id');
			$reg_status = $this->input->post('reg_status');
			$this->load->model('registrations');
			$this->registrations->reg_id = $reg_id;
			$this->registrations->reg_status = $reg_status;
			$this->registrations->update();
			redirect('manage_registrations');		
		}else{
			redirect('manage_registrations');		
		}
	}


	public function export(){
		$this->load->model('Registration_csv_service');
    	$this->Registration_csv_service->export();
	}
}
