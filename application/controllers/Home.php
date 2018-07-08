<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
		$data['content'] = $this->load->view('front_end/home',$data,true);
		$this->load->view('front_end/page',$data);
	}
}
