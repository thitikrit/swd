<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
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
		$data['content'] = $this->load->view('front_end/contact',$data,true);
		$this->load->view('front_end/page',$data);
	}

	public function add(){

		$this->load->model('contacts');
		$this->contacts->contacts_name =  $this->input->post('contacts_name');
		$this->contacts->contacts_email =  $this->input->post('contacts_email');
		$this->contacts->contacts_tel =  $this->input->post('contacts_tel');
		$this->contacts->contacts_detail =  $this->input->post('contacts_detail');
		$this->contacts->contacts_date = time();
		$this->contacts->contacts_status =  'UNREAD';
		$this->contacts->add_contact();
		$return = array('status' => '1');    
    	echo json_encode($return);
	}
}
