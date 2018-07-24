<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_workings extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('workings');
		$data['workings_list'] = $this->workings->get_workings();
		$data['menu'] = 4;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/workings',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function create(){
		$this->load->model('projects');
		$data['projects_list'] = $this->projects->get_projects_id_and_name();
		$data['menu'] = 4;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/workings_create',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function add(){
		
		$this->load->model('workings');
		$workings_name = $this->input->post('workings_name');
		$workings_area = $this->input->post('workings_area');
		$workings_text = $this->input->post('workings_text');
		$workings_status = $this->input->post('workings_status');
		$workings_type = $this->input->post('workings_type');
		$this->workings->workings_name = $workings_name;
		$this->workings->workings_area = $workings_area;
		$this->workings->workings_text = $workings_text;
		$this->workings->workings_status = $workings_status;
		$this->workings->workings_type = $workings_type;
		$this->workings->workings_date_modified = time();

		if(!empty($_FILES["workings_picture"]["tmp_name"])){
			$extension = strrchr($_FILES["workings_picture"]["name"], '.' );
		    $workings_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		   	move_uploaded_file($_FILES["workings_picture"]["tmp_name"],$this->config->item('upload_path')."/images/workings/".$workings_picture);
		   	$this->workings->workings_picture = $workings_picture;
		}

		if($workings_type == 'NEW'){
			$workings_project_id = $this->input->post('workings_project_id');
			$this->workings->workings_project_id = $workings_project_id;
		}else{
			if(!empty($_FILES["workings_picture_slider"]["tmp_name"])){
				$extension = strrchr($_FILES["workings_picture_slider"]["name"], '.' );
			    $workings_picture_slider = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["workings_picture_slider"]["tmp_name"],$this->config->item('upload_path')."/images/workings/old/".$workings_picture_slider);
			   	$this->workings->workings_picture_slider = $workings_picture_slider;
		   	}
		}

		$this->workings->insert();	
		redirect('manage_workings');
	}

	public function edit($id = NULL)
	{	
		if($id != NULL){
			$this->load->model('workings');
			$this->workings->workings_id = $id;
			$data['workings_detail'] = $this->workings->get_workings_by_id();
			$this->load->model('projects');
			$data['projects_list'] = $this->projects->get_projects_id_and_name();
			$data['menu'] = 4;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/workings_edit',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_workings');			
		}
	}
		
	public function update(){
		if(!empty($this->input->post('workings_id'))){
			$this->load->model('workings');
			$workings_id = $this->input->post('workings_id');
			$workings_name = $this->input->post('workings_name');
			$workings_area = $this->input->post('workings_area');
			$workings_text = $this->input->post('workings_text');
			$workings_status = $this->input->post('workings_status');
			$workings_type = $this->input->post('workings_type');
			$this->workings->workings_id = $workings_id;
			$this->workings->workings_name = $workings_name;
			$this->workings->workings_area = $workings_area;
			$this->workings->workings_text = $workings_text;
			$this->workings->workings_status = $workings_status;
			$this->workings->workings_type = $workings_type;
			$this->workings->workings_date_modified = time();

			if(!empty($_FILES["workings_picture"]["tmp_name"])){
				$extension = strrchr($_FILES["workings_picture"]["name"], '.' );
			    $workings_picture = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
			   	move_uploaded_file($_FILES["workings_picture"]["tmp_name"],$this->config->item('upload_path')."/images/workings/".$workings_picture);
			   	$this->workings->workings_picture = $workings_picture;
			}else{
				$this->workings->workings_picture = $this->input->post('workings_picture_old');
			}

			if($workings_type == 'NEW'){
				$workings_project_id = $this->input->post('workings_project_id');
				$this->workings->workings_project_id = $workings_project_id;
			}else{
				if(!empty($_FILES["workings_picture_slider"]["tmp_name"])){
					$extension = strrchr($_FILES["workings_picture_slider"]["name"], '.' );
				    $workings_picture_slider = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
				   	move_uploaded_file($_FILES["workings_picture_slider"]["tmp_name"],$this->config->item('upload_path')."/images/workings/old/".$workings_picture_slider);
				   	$this->workings->workings_picture_slider = $workings_picture_slider;
		   		}else{
		   			$this->workings->workings_picture_slider = $this->input->post('workings_picture_slider_old');
		   		}
			}

			$this->workings->update();	
			redirect('manage_workings/edit/'.$workings_id);
		}else{
			redirect('manage_workings');
		}
	}
}
