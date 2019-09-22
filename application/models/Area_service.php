<?php
class Area_service extends CI_Model{
  var $status_list = array(
    '1' => array(
      'status_code' => '1',
      'status_name' => 'เมืองชลบุรี',
      'badge_class' => 'badge badge-primary'
    ),
    '2' => array(
      'status_code' => '2',
      'status_name' => 'ศรีราชา',
      'badge_class' => 'badge badge-danger'
    ),
    '3' => array(
      'status_code' => '3',
      'status_name' => 'ทำเลอื่นๆ',
      'badge_class' => 'badge badge-info'
    ),
  );
  public function get_list(){
    return $this->status_list;
  }
  public function get_data($status_code){
    if(isset($this->status_list[$status_code])){
      return $this->status_list[$status_code];
    }
    return array(
      'status_code' => $status_code,
      'status_name' => '',
      'badge_class' => 'badge badge-dark'
    );
  }
  public function get_name($status_code){
    $status = $this->get_data($status_code);
    return $status['status_name'];
  }
  public function get_badge($status_code){
    $status = $this->get_data($status_code);
    return '<span class="'.$status['badge_class'].'">'.$status['status_name'].'</span>';
  }

}
