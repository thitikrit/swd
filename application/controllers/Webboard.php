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
		$this->load->model('webboards');

		$page = 1;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_public());
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;
		$data['total_rows'] = $total_rows ;

		$data['webboards_list'] = $this->webboards->get_webboards_page($offset,$no_of_records_per_page);

		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 4;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 4;
		$data['menu'] = $this->menu->get_menu_by_id();
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
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
			$this->load->model('tags');
			$data['title'] = $data['webboards'][0]['webboards_name']." - Sawasdee Chonburi";
			$data['description'] = $this->tags->get_tag()[0]['tags_name'].",".$data['webboards'][0]['webboards_tag'];
			$data['content'] = $this->load->view('front_end/webboard-detail',$data,true);
			$this->load->view('front_end/page',$data);

		}else{
			redirect('webboard');
		}
	}

	public function order($page = 1){
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

		$page = $page;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_order_by($type,$orderby));
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;
		$data['total_rows'] = $total_rows ;

		$data['webboards_list'] = $this->webboards->get_webboards_order_by_page($type,$orderby,$offset,$no_of_records_per_page);

		echo $this->load->view('front_end/webboards-order',$data,true);
	}

	
	public function page($page = 1){
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('webboards');

		$page = $page;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_public());
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;

		$data['webboards_list'] = $this->webboards->get_webboards_page($offset,$no_of_records_per_page);

		$this->load->view('front_end/webboard-page',$data);
	}
	public function search(){
		
		$search = trim(str_replace("'","",strip_tags($this->input->post('search-webboard'))));
		$area = $this->input->post('search-area');
		$type = $this->input->post('search-type');
		$price = $this->input->post('search-price');
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('webboards');
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
		$page = 1;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_by_search($search,$area,$type,$price,NULL,NULL,999,999));
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;
		$data['total_rows'] = $total_rows ;
		$data['webboards_list'] = $this->webboards->get_webboards_by_search($search,$area,$type,$price,NULL,NULL,$offset,$no_of_records_per_page);
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/webboard-search',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function search_order($page = 1){
		
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
		$page = 1;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_by_search($search,$area,$type,$price,$typeby,$order,999,999));
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;
		$data['total_rows'] = $total_rows ;
		$data['webboards_list'] = $this->webboards->get_webboards_by_search($search,$area,$type,$price,$typeby,$order,$offset,$no_of_records_per_page);	
		echo $this->load->view('front_end/webboard-search-order',$data,true);
	}
	public function search_page($page = 1){
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

		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('webboards');
		$data['search'] = $search;
		$data['area'] = $area;
		$data['type'] = $type;
		$data['price'] = $price;
		$page = $page;
		$no_of_records_per_page = 10;
		$offset = ($page-1) * $no_of_records_per_page;
		$total_rows = count($this->webboards->get_webboards_by_search($search,$area,$type,$price,$typeby,$order,999,999));
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages ;
		$data['total_rows'] = $total_rows ;
		$data['webboards_list'] = $this->webboards->get_webboards_by_search($search,$area,$type,$price,$typeby,$order,$offset,$no_of_records_per_page);
		$this->load->view('front_end/webboard-search-page',$data);
	}
}
