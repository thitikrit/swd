<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_contacts extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('contacts');
		$data['contacts_list'] = $this->contacts->get_contacts();
		$data['menu'] = 8;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/contacts',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('contacts');
			$this->contacts->contacts_id = $id;
			$data['contacts_detail'] = $this->contacts->get_contacts_by_id();
			$data['menu'] = 8;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/contacts_detail',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('index.php/manage_contacts');						
		}

	}

	public function update(){
		if(!empty($this->input->post('contacts_id'))){
			$contacts_id = $this->input->post('contacts_id');
			$contacts_status = $this->input->post('contacts_status');
			$this->load->model('contacts');
			$this->contacts->contacts_id = $contacts_id;
			$this->contacts->contacts_status = $contacts_status;
			$this->contacts->update();
			redirect('index.php/manage_contacts');		
		}else{
			redirect('index.php/manage_contacts');		
		}
	}
}
