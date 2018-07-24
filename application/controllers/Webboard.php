<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Webboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log();
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 4;
		$this->time_log->log_date = date("d");
		$this->time_log->log_month = date("m");
		$this->time_log->log_year = date("Y");
		$this->time_log->log_ip_address = $this->get_clientip();
		$this->time_log->log_time = time();
		$this->time_log->add_time_log();

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
		$this->load->model('webboards');
		$data['webboards_list'] = $this->webboards->get_webboards_public();
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 4;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 4;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['content'] = $this->load->view('front_end/webboard',$data,true);
		$this->load->view('front_end/page',$data);
	}

	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('area');
			$this->load->model('menu');
			$this->load->model('webboards');
			
			$data['area'] = $this->area->get_area_active();
			$data['menu_list'] = $this->menu->get_menu_active();
			$data['menu'] = 4;
			$data['header'] = $this->load->view('front_end/header',$data,true);
			$this->menu->menu_id = 4;
			$data['menu'] = $this->menu->get_menu_by_id();
			$this->webboards->webboards_id = $id;
			$data['webboards'] = $this->webboards->get_webboards_active_by_id_();
			if(empty($data['webboards'])){
				redirect('webboard');
			}
			$data['content'] = $this->load->view('front_end/webboard-detail',$data,true);
			$this->load->view('front_end/page',$data);

		}else{
			redirect('webboard');
		}
	}

	public function order(){
		$typeby = $this->input->post('typeby');
		$orderby = $this->input->post('orderby');

		if($typeby == 'sell'){
			$type = 'SELL';
		}else if($typeby == 'hire'){
			$type = 'HIRE';
		}else{
			$type = NULL;
		}

		$this->load->model('webboards');
		$data['webboards_list'] = $this->webboards->get_webboards_order_by($type,$orderby);
		echo $this->load->view('front_end/webboards-order',$data,true);
	}

	public function search(){
		
		$search = trim(str_replace("'","",strip_tags($this->input->post('search-webboard'))));
		$area = $this->input->post('search-area');
		$type = $this->input->post('search-type');
		$price = $this->input->post('search-price');
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('webboards');
		$data['webboards_list'] = $this->webboards->get_webboards_public();
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 4;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 4;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['search'] = $search;
		$data['area'] = $area;
		$data['type'] = $type;
		$data['price'] = $price;
		$data['webboards_list'] = $this->webboards->get_webboards_by_search($search,$area,$type,$price,NULL,NULL);
		$data['content'] = $this->load->view('front_end/webboard-search',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function search_order(){
		
		$search = trim(str_replace("'","",strip_tags($this->input->post('search'))));
		$area = $this->input->post('area');
		$type = $this->input->post('type');
		$price = $this->input->post('price');
		$typeby = $this->input->post('typeby');
		$order = $this->input->post('orderby');
		
		if($typeby == 'sell'){
			$typeby = 'SELL';
		}else if($typeby == 'hire'){
			$typeby = 'HIRE';
		}else{
			$typeby = NULL;
		}
		$this->load->model('webboards');		
		$data['webboards_list'] = $this->webboards->get_webboards_by_search($search,$area,$type,$price,$typeby,$order);
		echo $this->load->view('front_end/webboard-search-order',$data,true);
	}
}
