<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log();
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 5;
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
		$this->load->model('events');
		
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 5;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 5;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['events'] = $this->events->get_events_active();
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/events',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('area');
			$this->load->model('menu');
			$this->load->model('events');
			
			$data['area'] = $this->area->get_area_active();
			$data['menu_list'] = $this->menu->get_menu_active();
			$data['menu'] = 5;
			$data['header'] = $this->load->view('front_end/header',$data,true);
			$this->menu->menu_id = 5;
			$data['menu'] = $this->menu->get_menu_by_id();
			$this->events->events_id = $id;
			$data['event'] = $this->events->get_events_active_by_id_();
			if(empty($data['event'])){
				redirect('event');
			}
			$this->load->model('tags');
			$data['title'] = $data['event'][0]['events_name']." - Sawasdee Chonburi";
			$data['description'] = $this->tags->get_tag()[0]['tags_name'].",".$data['event'][0]['events_tag'];
			$data['content'] = $this->load->view('front_end/event-detail',$data,true);
			$this->load->view('front_end/page',$data);

		}else{
			redirect('event');
		}
	}
	public function order(){
		$orderby = $this->input->post('orderby');
		if($orderby == 'new-old'){
			$order = 'DESC';
		}else{
			$order = 'ASC';
		}
		$this->load->model('events');
		$data['events'] = $this->events->get_events_order_by($order);
		echo $this->load->view('front_end/events-order',$data,true);
	}
	public function search()
	{
		$search = trim(str_replace("'","",strip_tags($this->input->post('search-events'))));
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('events');
		
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 5;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 5;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['search'] = $search;
		$data['events'] = $this->events->get_events_by_search($search,'DESC');
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/events-search',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function search_order()
	{
		$search = str_replace("'","",strip_tags($this->input->post('search_events')));
		$orderby = $this->input->post('orderby');
		if($orderby == 'new-old'){
			$order = 'DESC';
		}else{
			$order = 'ASC';
		}
		$this->load->model('events');
		$data['events'] = $this->events->get_events_by_search($search,$order);
		echo $this->load->view('front_end/events-search-order',$data,true);
	}
}
