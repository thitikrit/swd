<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {
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
