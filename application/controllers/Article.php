<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->time_log();
	}
	public function time_log(){
		$this->load->model('time_log');
		$this->time_log->log_menu = 6;
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
		$this->load->model('articles');
		
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 6;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 6;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['articles'] = $this->articles->get_articles_active();
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/articles',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function detail($id = NULL){
		if($id != NULL){
			$this->load->model('area');
			$this->load->model('menu');
			$this->load->model('articles');
			
			$data['area'] = $this->area->get_area_active();
			$data['menu_list'] = $this->menu->get_menu_active();
			$data['menu'] = 6;
			$data['header'] = $this->load->view('front_end/header',$data,true);
			$this->menu->menu_id = 6;
			$data['menu'] = $this->menu->get_menu_by_id();
			$this->articles->articles_id = $id;
			$data['article'] = $this->articles->get_articles_active_by_id_();
			if(empty($data['article'])){
				redirect('article');
			}
			$this->load->model('tags');
			$data['title'] = $data['article'][0]['articles_name']." - Sawasdee Chonburi";
			$data['description'] = $this->tags->get_tag()[0]['tags_name'].",".$data['article'][0]['articles_tag'];
			$data['content'] = $this->load->view('front_end/article-detail',$data,true);
			$this->load->view('front_end/page',$data);

		}else{
			redirect('article');
		}
	}
	public function order(){
		$orderby = $this->input->post('orderby');
		if($orderby == 'new-old'){
			$order = 'DESC';
		}else{
			$order = 'ASC';
		}
		$this->load->model('articles');
		$data['articles'] = $this->articles->get_articles_order_by($order);
		echo $this->load->view('front_end/articles-order',$data,true);
	}
	public function search()
	{
		$search = str_replace("'","",strip_tags($this->input->post('search-article')));
		$this->load->model('area');
		$this->load->model('menu');
		$this->load->model('articles');
		
		$data['area'] = $this->area->get_area_active();
		$data['menu_list'] = $this->menu->get_menu_active();
		$data['menu'] = 6;
		$data['header'] = $this->load->view('front_end/header',$data,true);
		$this->menu->menu_id = 6;
		$data['menu'] = $this->menu->get_menu_by_id();
		$data['search'] = $search;
		$data['articles'] = $this->articles->get_articles_by_search($search,'DESC');
		$this->load->model('tags');
		$data['title'] = $data['menu'][0]['menu_name']." - Sawasdee Chonburi";
		$data['description'] = $this->tags->get_tag()[0]['tags_name'];
		$data['content'] = $this->load->view('front_end/articles-search',$data,true);
		$this->load->view('front_end/page',$data);
	}
	public function search_order()
	{
		$search = str_replace("'","",strip_tags($this->input->post('search_article')));
		$orderby = $this->input->post('orderby');
		if($orderby == 'new-old'){
			$order = 'DESC';
		}else{
			$order = 'ASC';
		}
		$this->load->model('articles');
		$data['articles'] = $this->articles->get_articles_by_search($search,$order);
		echo $this->load->view('front_end/articles-search-order',$data,true);
	}
}
