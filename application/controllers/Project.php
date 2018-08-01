<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log(); 
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 2;
		$this->time_log->log_date = date("d");
		$this->time_log->log_month = date("m");
		$this->time_log->log_year = date("Y");
		$this->time_log->log_ip_address = $this->get_clientip();
		$this->time_log->log_time = time();
		$this->time_log->add_time_log();
		$this->time_log->del_bug_time_log();
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
		$this->load->model('projects');
	
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 2;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 2;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['projects'] = $this->projects->get_projects_active_and_area();
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
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
			$this->load->model('tags');
			$data['title'] = $data['menu'][0]['menu_name']."บนทำเล ".$data['area_is_active'][0]['area_name']." - Sawasdee Chonburi";
			$data['description'] = $this->tags->get_tag()[0]['tags_name'];
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
			$this->load->model('tags');
			$data['title'] = $data['projects'][0]['projects_name']." - Sawasdee Chonburi";
			$data['description'] = $this->tags->get_tag()[0]['tags_name'].",".$data['projects'][0]['projects_tag'];
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
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
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
