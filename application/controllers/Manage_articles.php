<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_articles extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('articles');
		$data['articles_list'] = $this->articles->get_articles();
		$data['menu'] = 7;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/articles',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function create(){
		$data['menu'] = 7;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/articles_create',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function add(){
		$this->load->model('articles');
		$this->articles->articles_name = $this->input->post('articles_name');
		$this->articles->articles_type = $this->input->post('articles_type');
		$this->articles->articles_status = $this->input->post('articles_status');
		$this->articles->articles_recommend = $this->input->post('articles_recommend');
		$this->articles->articles_tag = $this->input->post('articles_tag');
		$this->articles->articles_sub_detail = $this->input->post('articles_sub_detail');
		$this->articles->articles_detail = $this->input->post('articles_detail');
		$this->articles->articles_date_modified = time();
		if(!empty($_FILES["articles_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["articles_picture"]["name"], '.' );
			    $articles_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["articles_picture"]["tmp_name"],$this->config->item('upload_path')."/images/articles/".$articles_picture);
			   	$this->articles->articles_picture = $articles_picture;
		}
		$this->articles->insert();	
		redirect('index.php/manage_articles');
	}

	public function edit($id = NULL){
		if($id != NULL){
			$this->load->model('articles');
			$this->articles->articles_id = $id;
			$data['articles_detail'] = $this->articles->get_articles_by_id();
			$data['menu'] = 7;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/articles_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('index.php/manage_articles');			
		}
	}

	public function update(){
		if(!empty($this->input->post('articles_id'))){
			$this->load->model('articles');
			$articles_id = $this->input->post('articles_id');
			$this->articles->articles_id = $this->input->post('articles_id');
			$this->articles->articles_name = $this->input->post('articles_name');
			$this->articles->articles_type = $this->input->post('articles_type');
			$this->articles->articles_status = $this->input->post('articles_status');
			$this->articles->articles_recommend = $this->input->post('articles_recommend');
			$this->articles->articles_tag = $this->input->post('articles_tag');
			$this->articles->articles_sub_detail = $this->input->post('articles_sub_detail');
			$this->articles->articles_detail = $this->input->post('articles_detail');
			$this->articles->articles_date_modified = time();
			if(!empty($_FILES["articles_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["articles_picture"]["name"], '.' );
			    $articles_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			    $articles_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["articles_picture"]["tmp_name"],$this->config->item('upload_path')."/images/articles/".$articles_picture);
			   	$this->articles->articles_picture = $articles_picture;
			}else{
				$this->articles->articles_picture = $this->input->post('articles_picture_old');;
			}
			$this->articles->update();	
			redirect('index.php/manage_articles/edit/'.$articles_id);
		}else{
			redirect('index.php/manage_articles');
		}

	}
}
