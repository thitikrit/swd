<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_tag extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('tags');
		$data['tag'] = $this->tags->get_tag();
		$data['menu'] = 10;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/tag',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function update(){
		$this->load->model('tags');
		$this->tags->tags_name = $this->input->post('tag');
		$this->tags->update();
		redirect('manage_tag');
	}
}
