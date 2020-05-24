<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->library('encryption');
  $this->load->model('login_model');
  if($this->session->userdata('user_id'))
  {
   redirect(base_url('dashboard'));
  }
 }

 function index()
 {  
    $data['header']=$this->load->view('frontend/header','', TRUE);
    $data['footer']=$this->load->view('frontend/footer','', TRUE); 
    $this->load->view('frontend/login',$data);
 }

 function login_chk(){

    $result = $this->login_model->can_login($this->input->post('mail',TRUE), $this->input->post('password',TRUE));
   if($result == '')
   {
    redirect(base_url('dashboard'));
   }
   else
   {
    $this->session->set_flashdata('msg',$result);
    redirect(base_url('login'));
   }

 }

}