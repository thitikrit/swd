<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_member extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('user');
		$data['user'] = $this->user->get_user();
		$data['menu'] = 9;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/member',$data,true);
		$this->load->view('back_end/page',$data);
	}
	public function detail($id){
		if($id != NULL){
			$this->load->model('user');
			$this->user->user_id = $id;
			$data['user'] = $this->user->get_user_by_id();
			if(empty($data['user'])){
				redirect('manage_member');
			}
			$data['admin'] = $this->user->get_admin();
			$this->load->model('webboards');
			$this->webboards->webboards_user = $id;
			$data['webboards_member'] = $this->webboards->get_webboards_by_member_id();
			$data['menu'] = 9;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/member_detail',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_member');
		}

	}
	public function check($id = NULL){
		if($id != NULL){
			$this->load->model('webboards');
			$this->webboards->webboards_id = $id;
			$data['webboards_detail'] = $this->webboards->get_webboards_by_id();
			$data['menu'] = 5;
			$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
			$data['content'] = $this->load->view('back_end/webboards_edit_member_2',$data,true);
			$this->load->view('back_end/page',$data);
		}else{
			redirect('manage_member');			
		}
	}
	public function update_webboard_member(){
		if(!empty($this->input->post('webboards_id'))){
			$this->load->model('webboards');
			$id = $this->input->post('webboards_id');
			$permission = $this->input->post('webboards_permission');
			$this->webboards->webboards_id = $id;
			$this->webboards->webboards_permission = $permission;
			$this->webboards->webboards_approve_by_user_id = $this->session->userdata("user_id");

			$this->webboards->update_permission_webboards();
			redirect('manage_member/check/'.$id);
		}else{
			redirect('manage_member');
		}
	}
}
