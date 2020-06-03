<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_pages extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  
  if(!$this->session->userdata('admin_id'))
  {
   redirect(base_url('admin/login'));
  }
 }

 public function about_us()
 {  
    $data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
    $data['about_us']=get_all_data('about_us_page');
	$this->load->view('admin/about_us_page',$data);
 }

 public function about_us_add(){

  if($this->input->method('post') && $this->input->post('add_title')!='' && $this->input->post('add_description')!=''){
    $data = array('title' =>$this->input->post('add_title'), 'description' => $this->input->post('add_description'));
    common_insert('about_us_page',$data);

  }
  redirect(base_url('admin/manage-pages/about-us'));

 }


 public function about_us_edit()
 {
  if($this->input->method('post') && $this->input->post('edit_title')!='' && $this->input->post('edit_about_us_id')!=''){
    $data = array('title' =>$this->input->post('edit_title'),
                  'description' =>$this->input->post('edit_description')
                  );
    update_data('about_us_page',$data,array('about_us_id'=>$this->input->post('edit_about_us_id')));

  }
 redirect(base_url('admin/manage-pages/about-us'));
 }

public function about_us_delete($id){
  common_delete('about_us_page',array('about_us_id' =>$id));
   redirect(base_url('admin/manage-pages/about-us'));
}

public function terms_and_conditions()
 {  
    $data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
    $data['terms_and_conditions']=get_all_data('terms_and_conditions_page');
  $this->load->view('admin/terms_and_conditions_page',$data);
 }

 public function terms_and_conditions_add(){

  if($this->input->method('post') && $this->input->post('add_title')!='' && $this->input->post('add_description')!=''){
    $data = array('title' =>$this->input->post('add_title'), 'description' => $this->input->post('add_description'));
    common_insert('terms_and_conditions_page',$data);

  }
  redirect(base_url('admin/manage-pages/terms-and-conditions'));

 }


 public function terms_and_conditions_edit()
 {
  if($this->input->method('post') && $this->input->post('edit_title')!='' && $this->input->post('edit_terms_and_conditions_id')!=''){
    $data = array('title' =>$this->input->post('edit_title'),
                  'description' =>$this->input->post('edit_description')
                  );
    update_data('terms_and_conditions_page',$data,array('terms_and_conditions_id'=>$this->input->post('edit_terms_and_conditions_id')));

  }
 redirect(base_url('admin/manage-pages/terms-and-conditions'));
 }

public function terms_and_conditions_delete($id){
  common_delete('terms_and_conditions_page',array('terms_and_conditions_id' =>$id));
   redirect(base_url('admin/manage-pages/terms-and-conditions'));
}

public function faq()
 {  
    $data['header']=$this->load->view('admin/header','', TRUE);
    $data['footer']=$this->load->view('admin/footer','', TRUE); 
    $data['sidebar']=$this->load->view('admin/sidebar','', TRUE);
    $data['faqs']=get_all_data('faq_page');
  $this->load->view('admin/faq_page',$data);
 }

 public function faq_add(){

  if($this->input->method('post') && $this->input->post('add_title')!='' && $this->input->post('add_description')!=''){
    if(file_exists($_FILES['add_media']['tmp_name']) || is_uploaded_file($_FILES['add_media']['tmp_name'])) {

        $config['file_name']        = strtolower($this->input->post('add_title'));
       $config['upload_path'] = FAQ_MEDIA;
        $config['allowed_types'] = 'gif|jpg|png|mp4|avi|3gp|mkv';
        $config['max_size'] = 300000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('add_media')) {
          echo $msg=$this->upload->display_errors();
         $this->session->set_flashdata('msg',$msg);  
            redirect(base_url('admin/manage-pages/frequently-asked-questions'));
        } else {
          $upload_data = $this->upload->data();
      $data = array('title' =>$this->input->post('add_title'), 'description' => $this->input->post('add_description') , 'media' =>$upload_data['file_name']);
    common_insert('faq_page',$data);
        } 
    }

  }
  redirect(base_url('admin/manage-pages/frequently-asked-questions'));

 }


 public function faq_edit()
 {
  if($this->input->method('post') && $this->input->post('edit_title')!='' && $this->input->post('edit_faq_id')!=''){
    if(file_exists($_FILES['edit_media']['tmp_name']) || is_uploaded_file($_FILES['edit_media']['tmp_name'])) {

        $config['file_name']   = strtolower($this->input->post('edit_title'));
       $config['upload_path'] = FAQ_MEDIA;
        $config['allowed_types'] = 'gif|jpg|png|mp4|avi|3gp|mkv';
        $config['max_size'] = 300000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('edit_media')) {
          $data = array('title' =>$this->input->post('edit_title'),
                  'description' =>$this->input->post('edit_description')
                  );
       update_data('faq_page',$data,array('faq_id'=>$this->input->post('edit_faq_id')));
          echo $msg=$this->upload->display_errors();
         $this->session->set_flashdata('msg',$msg);  
            redirect(base_url('admin/manage-pages/frequently-asked-questions'));
        } else {
          $upload_data = $this->upload->data();
      $data = array('title' =>$this->input->post('edit_title'),
                  'description' =>$this->input->post('edit_description'),
                  'media' =>$upload_data['file_name']
                  );
    update_data('faq_page',$data,array('faq_id'=>$this->input->post('edit_faq_id')));
        } 
    }

  }
 redirect(base_url('admin/manage-pages/frequently-asked-questions'));
 }

public function faq_delete($id){
  common_delete('faq_page',array('faq_id' =>$id));
   redirect(base_url('admin/manage-pages/frequently-asked-questions'));
}


}