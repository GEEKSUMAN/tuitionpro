<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
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
    $data['all_users']=get_all_data('users');
	$this->load->view('admin/all_users',$data);
 }
public function status(){

 	update_data('users',array('status'=>$this->input->post('status')),array('id'=>$this->input->post('users_id')));

 	redirect(base_url('admin/users/all'));
 }

 public function students(){

 	$data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
    $data['all_users']=get_all_data('users',array('registration_type'=>'2'));
	$this->load->view('admin/all_users',$data);

 }

 public function teachers(){

 	$data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
    $data['all_users']=get_all_data('users',array('registration_type'=>'1'));
	$this->load->view('admin/all_users',$data);

 }
 

}