<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
    $data['subscribers']=get_all_data('subscribers');
    $data['contact_us']=get_all_data('contact_us');
	$this->load->view('admin/dashboard',$data); 
 }

public function logout()
	 {
		  $data = $this->session->all_userdata();
		  foreach($data as $row => $rows_value)
		  {
		   $this->session->unset_userdata($row);
		  }
		  redirect(base_url('admin/login'));
	 }
public function manage_logo(){

	if($this->input->method('post')==TRUE && !empty($_FILES['change_logo'])){
	 if(file_exists($_FILES['change_logo']['tmp_name']) || is_uploaded_file($_FILES['change_logo']['tmp_name'])) {

        $config['file_name']   ='logo';
       $config['upload_path'] = LOGO;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 300000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
		if($this->upload->do_upload('change_logo')){
			$upload_data=$this->upload->data();
			update_data('logo',array('logo'=>$upload_data['file_name']),array('id' =>1));
		}
    }
	}

	$data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
	$this->load->view('admin/manage_logo',$data); 

}

public function manage_credentials(){
	$this->load->library('encryption');
	if($this->input->method('post')==TRUE && $this->input->post('change_email')!='' && $this->input->post('change_password')!=''){

	update_data('admin',array('email'=>$this->input->post('change_email'),'password'=>$this->encryption->encrypt($this->input->post('change_password'))),array('admin_id' =>1));

	redirect(base_url('admin/logout'));

	}
	$data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
	$this->load->view('admin/admin_credentials',$data); 

}
 

}