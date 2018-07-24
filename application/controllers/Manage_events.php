<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_events extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('events');
		$data['events_list'] = $this->events->get_events();
		$data['menu'] = 6;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/events',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function create(){
		$data['menu'] = 6;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/events_create',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function add(){
		$this->load->model('events');
		$this->events->events_name = $this->input->post('events_name');
		$this->events->events_type = $this->input->post('events_type');
		$this->events->events_status = $this->input->post('events_status');
		$this->events->events_recommend = $this->input->post('events_recommend');
		$this->events->events_tag = $this->input->post('events_tag');
		$this->events->events_sub_detail = $this->input->post('events_sub_detail');
		$this->events->events_detail = $this->input->post('events_detail');
		$this->events->events_date_modified = time();
		if(!empty($_FILES["events_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["events_picture"]["name"], '.' );
			    $events_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["events_picture"]["tmp_name"],$this->config->item('upload_path')."/images/events/".$events_picture);
			   	$this->events->events_picture = $events_picture;
		}
		$this->events->insert();	
		redirect('manage_events');
	}

	public function edit($id = NULL){
		if($id != NULL){
			$this->load->model('events');
			$this->events->events_id = $id;
			$data['events_detail'] = $this->events->get_events_by_id();
			$data['menu'] = 6;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/events_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_events');			
		}
	}

	public function update(){
		if(!empty($this->input->post('events_id'))){
			$this->load->model('events');
			$events_id = $this->input->post('events_id');
			$this->events->events_id = $this->input->post('events_id');
			$this->events->events_name = $this->input->post('events_name');
			$this->events->events_type = $this->input->post('events_type');
			$this->events->events_status = $this->input->post('events_status');
			$this->events->events_recommend = $this->input->post('events_recommend');
			$this->events->events_tag = $this->input->post('events_tag');
			$this->events->events_sub_detail = $this->input->post('events_sub_detail');
			$this->events->events_detail = $this->input->post('events_detail');
			$this->events->events_date_modified = time();
			if(!empty($_FILES["events_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["events_picture"]["name"], '.' );
			    $events_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["events_picture"]["tmp_name"],$this->config->item('upload_path')."/images/events/".$events_picture);
			   	$this->events->events_picture = $events_picture;
			}else{
				$this->events->events_picture = $this->input->post('events_picture_old');;
			}
			$this->events->update();	
			redirect('manage_events/edit/'.$events_id);
		}else{
			redirect('manage_events');
		}

	}
}
