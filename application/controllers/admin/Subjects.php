<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {
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
	$this->load->view('admin/subjects',$data); 
 }

 public function add(){

 	if($this->input->method('post') && $this->input->post('add_subject_name')!=''){
 		$data = array('subject_name' =>$this->input->post('add_subject_name'));
 		common_insert('subjects',$data);

 	}
 	redirect(base_url('admin/subjects'));

 }

 public function edit()
 {
 	if($this->input->method('post') && $this->input->post('edit_subject_name')!='' && $this->input->post('edit_subject_id')!=''){
 		$data = array('subject_name' =>$this->input->post('edit_subject_name'));
 		update_data('subjects',$data,array('id'=>$this->input->post('edit_subject_id')));

 	}
 	redirect(base_url('admin/subjects'));
 }

public function delete($id){
	common_delete('subjects',array('id' =>$id));
	redirect(base_url('admin/subjects'));
}


 

}