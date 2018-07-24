<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Manage_center.php');
class Manage_menu extends Manage_center {

	function __construct() {
		parent::__construct();
		$this->checkSession();
	}

	public function index()
	{	
		$this->load->model('menu');
		$data['menu_list'] = $this->menu->get_menu();
		$data['menu'] = 1;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/menu',$data,true);
		$this->load->view('back_end/page',$data);
	}
	
	public function menu_detail($id = null){
		$this->load->model('menu');
		$this->menu->menu_id = $id;
		$data['result'] = $this->menu->get_menu_by_id();
		if(empty($data['result'])){
			redirect('manage_menu');
		}
		$data['menu'] = 1;
		$data['sidebar'] = $this->load->view('back_end/sidebar',$data,true);
		$data['content'] = $this->load->view('back_end/menu_detail',$data,true);
		$this->load->view('back_end/page',$data);
	}

	public function menu_update(){

		$menu_id = $this->input->post('menu_id');
		$menu_name = $this->input->post('menu_name');
		$menu_status = $this->input->post('menu_status');
		$menu_type = $this->input->post('menu_type');
		$this->load->model('menu');
		$this->menu->menu_id = $menu_id;
		$this->menu->menu_name = $menu_name;
		$this->menu->menu_status = $menu_status;
		$this->menu->menu_type = $menu_type;
		$this->menu->menu_date_modified = time();
		$this->menu->menu_picture = NULL;
		$this->menu->menu_video = NULL;

		$count_all_pic = 0 ;
		$count_all_vdo = 0 ;

		if(!empty($this->input->post('menu_pic_old'))){
			$old_pic = $this->input->post('menu_pic_old');
			$old_pic_order = $this->input->post('menu_pic_order_old');
			$count_old_pic =  count($old_pic);
			for($i = 0;$i < $count_old_pic;$i++){
				$menu_picture[$count_all_pic]['name'] = $old_pic[$i];
	    		$menu_picture[$count_all_pic]['order'] = $old_pic_order[$i];
	    		$count_all_pic++;
			}
			$json_menu_picture = json_encode($menu_picture);	
	    	$this->menu->menu_picture = $json_menu_picture;		
		}
		
		if(!empty($_FILES["menu_pic"]["tmp_name"])){
			$count = count($_FILES["menu_pic"]["tmp_name"]);
			$menu_pic_order = $this->input->post('menu_pic_order');

			for($i = 0;$i < $count;$i++){
				if($_FILES["menu_pic"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["menu_pic"]["name"][$i] , '.' );
		    		$menu_pic_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$menu_picture[$count_all_pic]['name'] = $menu_pic_name;
		    		$menu_picture[$count_all_pic]['order'] = $menu_pic_order[$i];
		    		$count_all_pic++;
		    		move_uploaded_file($_FILES["menu_pic"]["tmp_name"][$i],$this->config->item('upload_path')."/images/slides/".$menu_pic_name);
		    	}
			}
			if(!empty($menu_picture)){
		    	$json_menu_picture = json_encode($menu_picture);	
		    	$this->menu->menu_picture = $json_menu_picture;	
	    	}else{
	    		$this->menu->menu_picture = NULL;
	    	}	
		}
		
		if(!empty($this->input->post('menu_vdo_old'))){
			$old_vdo = $this->input->post('menu_vdo_old');
			$old_vdo_order = $this->input->post('menu_vdo_order_old');
			$count_old_vdo =  count($old_vdo);
			for($i = 0;$i < $count_old_vdo;$i++){
				$menu_video[$count_all_vdo]['name'] = $old_vdo[$i];
	    		$menu_video[$count_all_vdo]['order'] = $old_vdo_order[$i];
	    		$count_all_vdo++;
			}
			$json_menu_vdo = json_encode($menu_video);	
	    	$this->menu->menu_video = $json_menu_vdo;		
		}

		if(!empty($_FILES["menu_vdo"]["tmp_name"])){
			$count = count($_FILES["menu_vdo"]["tmp_name"]); 
			$menu_vdo_order = $this->input->post('menu_vdo_order');

			for($i = 0;$i < $count;$i++){
				if($_FILES["menu_vdo"]["name"][$i] != NULL){
					$extension = strrchr($_FILES["menu_vdo"]["name"][$i] , '.' );
		    		$menu_vdo_name = time().'_'.sprintf("%06d", mt_rand(1,9999999)).$extension;
		    		$menu_video[$count_all_vdo]['name'] = $menu_vdo_name;
		    		$menu_video[$count_all_vdo]['order'] = $menu_vdo_order[$i];	
		    		$count_all_vdo++;
		    		move_uploaded_file($_FILES["menu_vdo"]["tmp_name"][$i],$this->config->item('upload_path')."/videos/".$menu_vdo_name);
		    	}
			}
			if(!empty($menu_video)){
				$json_menu_video = json_encode($menu_video);	
	    		echo $this->menu->menu_video = $json_menu_video;
			}else{
				echo $this->menu->menu_video = NULL;
			}
			
		}
		$this->menu->update();	
		redirect('manage_menu');
	}
}
