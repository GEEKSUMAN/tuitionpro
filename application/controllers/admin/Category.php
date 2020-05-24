<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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
	$this->load->view('admin/categories',$data); 
 }

 public function add(){

 	if($this->input->method('post') && $this->input->post('add_category_name')!=''){
 		$data = array('category_name' =>$this->input->post('add_category_name'));
 		common_insert('category',$data);

 	}
 	redirect(base_url('admin/categories'));

 }

 public function edit()
 {
 	if($this->input->method('post') && $this->input->post('edit_category_name')!='' && $this->input->post('edit_category_id')!=''){
 		$data = array('category_name' =>$this->input->post('edit_category_name'));
 		update_data('category',$data,array('category_id'=>$this->input->post('edit_category_id')));

 	}
 	redirect(base_url('admin/categories'));
 }

public function delete($id){
	common_delete('category',array('category_id' =>$id));
	redirect(base_url('admin/categories'));
}


 

}