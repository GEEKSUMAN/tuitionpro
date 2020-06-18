<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_tutorials extends CI_Controller {

	public function index($slug)
	{	
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$tutorial=get_all_data('tutorials',array('slug' => $slug ));
		$data['tutorial']=$tutorial[0];
		$data['reviews']=get_all_data('tutorials_rating',array('tutorials_id' => $tutorial[0]['tutorials_id']));
		$this->load->view('frontend/view_tutorial_details',$data);
	}

	public function add_review_tutorials(){

		if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2) {

			$data = array('rating_star_value' => $this->input->post('rating_value'),
							'tutorials_id'=> $this->input->post('tutorials_id'),
							'student_id' => $this->session->userdata('user_id'),
							'rating_comment'=> $this->input->post('review_comment')
							);
			common_insert('tutorials_rating',$data);
			echo "1";
		} else{
			echo "0";
		}
	}
}