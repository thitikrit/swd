<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
	public function index()
	{
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('projects');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 2;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 2;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['projects'] = $this->projects->get_projects_active_and_area();
		$data['content'] = $this->load->view('front_end/projects',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function area($id = NULL)
	{
		if($id != NULL){
			$this->load->model('area');
			$this->load->model('menu');
			$this->load->model('projects');
		
			$data['area'] = $this->area->get_area_active();
			$data['menu_list'] = $this->menu->get_menu_active();
			$data['menu'] = 2;
			$data['header'] = $this->load->view('front_end/header',$data,true);
			$this->menu->menu_id = 2;
			$data['menu'] = $this->menu->get_menu_by_id();
			$this->area->area_id = $id;
			$data['area_is_active'] = $this->area->get_area_active_by_id();
			if(empty($data['area_is_active'])){
				redirect('project');
			}
			$data['area_active'] = $data['area_is_active'][0]['area_id'];
			$data['projects'] = $this->projects->get_projects_active_and_area();
			$data['content'] = $this->load->view('front_end/projects',$data,true);
			$this->load->view('front_end/page',$data);
		}else{
			redirect('project');
		}
	}
	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('area');
			$this->load->model('menu');
			$this->load->model('projects');
			$this->load->model('plans');
		
			$data['area'] = $this->area->get_area_active();
			$data['menu_list'] = $this->menu->get_menu_active();
			$data['menu'] = 2;
			$data['header'] = $this->load->view('front_end/header',$data,true);
			$this->menu->menu_id = 2;
			$data['menu'] = $this->menu->get_menu_by_id();
			$this->projects->projects_id = $id;
			$data['projects'] = $this->projects->get_projects_active_by_id();
			if(empty($data['projects'])){
				redirect('project');
			}
			$this->plans->plans_projects_id = $id;
			$data['plans'] = $this->plans->get_plans_by_projects_id();
			$data['content'] = $this->load->view('front_end/projects-detail',$data,true);
			$this->load->view('front_end/page',$data);
		}else{
			redirect('project');
		}

	}
	public function search(){
		$search = trim(str_replace("'","",strip_tags($this->input->post('search-input'))));
		$type = $this->input->post('search-type');
		$area = $this->input->post('search-area');
		$price = $this->input->post('search-price');
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('projects');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 2;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 2;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['search'] = $search;
		$data['area'] = $area;
		$data['type'] = $type;
		$data['price'] = $price;
		$data['projects'] = $this->projects->get_projects_active_by_search($search,$type,$area,$price,NULL);
		$data['content'] = $this->load->view('front_end/projects-search',$data,true);
		$this->load->view('front_end/page',$data);

	}
	public function search_order(){
		$search = trim(str_replace("'","",strip_tags($this->input->post('search'))));
		$type = $this->input->post('type');
		$area = $this->input->post('area');
		$price = $this->input->post('price');
		$order = $this->input->post('order');
		
		$this->load->model('projects');

		$data['projects'] = $this->projects->get_projects_active_by_search($search,$type,$area,$price,$order);
		echo $this->load->view('front_end/projects-search-order',$data,true);
	}
}
