<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boards extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  
  if(!$this->session->userdata('admin_id'))
  {
   redirect(base_url('admin/login'));
  }
 }

 public function index()
 {  
    $data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
	$this->load->view('admin/boards',$data); 
 }

 public function add(){

 	if($this->input->method('post') && $this->input->post('add_board_name')!=''){
 		$data = array('board_name' =>$this->input->post('add_board_name'));
 		common_insert('education_board',$data);

 	}
 	redirect(base_url('admin/boards'));

 }

 public function edit()
 {
 	if($this->input->method('post') && $this->input->post('edit_board_name')!='' && $this->input->post('edit_board_id')!=''){
 		$data = array('board_name' =>$this->input->post('edit_board_name'));
 		update_data('education_board',$data,array('id'=>$this->input->post('edit_board_id')));

 	}
 	redirect(base_url('admin/boards'));
 }

public function delete($id){
	common_delete('education_board',array('id' =>$id));
	redirect(base_url('admin/boards'));
}


 

}