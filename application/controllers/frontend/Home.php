<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		$this->load->view('frontend/home',$data);
	}

	public function contact_us()
	{
		if($this->input->method('post')==TRUE && $this->input->post('full_name')!="" && $this->input->post('email')!="" && $this->input->post('message')!=""){
			$insert_data = array('full_name' => $this->input->post('full_name'), 'email' =>$this->input->post('email'), 'message'=>$this->input->post('message') );
			common_insert('contact_us',$insert_data);
			$msg='Thank you. Your message has been sent succeessfully. We will get back to you soon !';
				$this->session->set_flashdata('msg',$msg); 
		}

		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		$this->load->view('frontend/contact_us_page',$data);
	}

	public function faq(){

		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		$data['faqs']=get_all_data('faq_page');
		$this->load->view('frontend/faq_page',$data);

	}

	public function about_us(){
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		$data['about_us']=get_all_data('about_us_page');
		$this->load->view('frontend/about_us_page',$data);
	}

	public function subscribe_us(){
		
		if($this->input->is_ajax_request()){
			$email=$this->input->post('subscribe_email',TRUE);
			common_insert('subscribers',array('email'=>$email));
			echo "1";
		}
	}
}