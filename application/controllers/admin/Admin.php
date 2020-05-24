<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->library('encryption');
  $this->load->model('login_model');
  if($this->session->userdata('admin_id'))
  {
   redirect(base_url('admin/dashboard'));
  }
 }

 function index()
 {  
    $this->load->view('admin/login');
 }

 function login_chk_admin(){

    $result = $this->login_model->can_admin_login($this->input->post('email',TRUE), $this->input->post('password',TRUE));
   if($result == '')
   {
    redirect(base_url('admin/dashboard'));
   }
   else
   {
    $this->session->set_flashdata('msg',$result);
    redirect(base_url('admin/login'));
   }

 }

}