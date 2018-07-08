<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_company extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('company');
		$data['company'] = $this->company->get_company();
		$data['menu'] = 2;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/company',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function edit(){
		$this->load->model('company');
		$data['company'] = $this->company->get_company();
		$data['menu'] = 2;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/company_edit',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function update(){
		$this->load->model('company');
		$this->company->com_name = $this->input->post('com_name');
		$this->company->com_detail = $this->input->post('com_detail');
		$this->company->com_service_name = $this->input->post('com_service_name');
		$this->company->com_service_detail = $this->input->post('com_service_detail');
		$this->company->com_service_title_1 = $this->input->post('com_service_title_1');
		$this->company->com_service_detail_1 = $this->input->post('com_service_detail_1');
		$this->company->com_service_title_2 = $this->input->post('com_service_title_2');
		$this->company->com_service_detail_2 = $this->input->post('com_service_detail_2');
		$this->company->com_service_title_3 = $this->input->post('com_service_title_3');
		$this->company->com_service_detail_3 = $this->input->post('com_service_detail_3');
		$this->company->com_service_title_4 = $this->input->post('com_service_title_4');
		$this->company->com_service_detail_4 = $this->input->post('com_service_detail_4');
		$this->company->com_service_title_5 = $this->input->post('com_service_title_5');
		$this->company->com_service_detail_5 = $this->input->post('com_service_detail_5');
		$this->company->update();
		redirect('index.php/manage_company');		
	}
}
