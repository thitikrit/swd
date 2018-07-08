<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller {
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
