<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {
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
	$this->load->view('admin/classes',$data); 
 }

 public function add(){

 	if($this->input->method('post') && $this->input->post('add_class_name')!=''){
 		$data = array('class_name' =>$this->input->post('add_class_name'));
 		common_insert('classes',$data);

 	}
 	redirect(base_url('admin/classes'));

 }

 public function edit()
 {
 	if($this->input->method('post') && $this->input->post('edit_class_name')!='' && $this->input->post('edit_class_id')!=''){
 		$data = array('class_name' =>$this->input->post('edit_class_name'));
 		update_data('classes',$data,array('id'=>$this->input->post('edit_class_id')));

 	}
 	redirect(base_url('admin/classes'));
 }

public function delete($id){
	common_delete('classes',array('id' =>$id));
	redirect(base_url('admin/classes'));
}


 

}