<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Working extends CI_Controller {
	public function index()
	{
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('workings');
		$data['workings_list'] = $this->workings->get_workings_active();
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 3;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 3;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['section'] = 0;
		$data['content'] = $this->load->view('front_end/workings',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function old()
	{
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('workings');
		$data['workings_list'] = $this->workings->get_workings_active();
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 3;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 3;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['section'] = 2;
		$data['content'] = $this->load->view('front_end/workings',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function now()
	{
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('workings');
		$data['workings_list'] = $this->workings->get_workings_active();
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 3;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 3;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['section'] = 1;
		$data['content'] = $this->load->view('front_end/workings',$data,true);
		$this->load->view('front_end/page',$data);
	}
}
