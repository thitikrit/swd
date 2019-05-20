<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration_csv_service extends CI_Model{
  public function __construct(){
    parent::__construct();
  }
  public function export(){
    $list = $this->get_list();
    $filename = 'รายงานการลงทะเบียน_'.date('Ymd_his', time()).'.csv';
    $file = $this->set_header($filename);
    $column_list = array(
      'reg_create_date' => 'ลงทะเบียนเมื่อวันที่',
      'reg_title_name' => 'คำนำหน้าชื่อ',
      'reg_fname' => 'ชื่อ',
      'reg_lname' => 'นามสกุล',
      'reg_mobile' => 'เบอร์มือถือ',
      'reg_email' => 'อีเมล',
      'reg_line' => 'ไอดีไลน์',
      'reg_projects' => 'โครงการที่สนใจ',
      'reg_channel' => 'รู้จักผ่านช่องทาง',
      
    );
    $this->set_head($file, $column_list);
    $this->set_content($file, $column_list, $list);
    $this->set_close($file);
  }
  private function set_header($filename){
    ob_clean();
    ini_set('max_execution_time', 1200);
    date_default_timezone_set('Asia/Bangkok');
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header('Content-Description: File Transfer');
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename={$filename}");
    header("Expires: 0");
    header("Pragma: public");
    $file = @fopen( 'php://output', 'w' );
    fwrite($file, "\xEF\xBB\xBF");
    return $file;
  }
  private function set_head($file, $column_list){
    $csv_list = array();
    foreach($column_list as $column_code => $column_name){
      $csv_list[] = $column_name;
    }
    fputcsv($file, $csv_list);
  }
  private function set_content($file, $column_list, $item_list){
    foreach($item_list->result_array() as $item){
      $csv_list = array();
      foreach($column_list as $column_code => $column_name){
        if($column_code == 'reg_create_date'){
          $csv_list[] = date("d-m-Y H:i:s",$item[$column_code]);
        }else{
          $csv_list[] = (string) $item[$column_code];
        }
      }
      fputcsv($file, $csv_list);
    }
  }
  private function set_close($file){
    fclose($file);
    exit;
  }
  private function get_list(){
    $this->db->select('registration.*');
    $this->db->from('registration');
    $this->db->order_by('registration.reg_id','ASC');
    return $this->db->get();
  }
}