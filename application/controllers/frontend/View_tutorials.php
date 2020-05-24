<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_tutorials extends CI_Controller {

	public function index($slug)
	{	
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$tutorial=get_all_data('tutorials',array('slug' => $slug ));
		$data['tutorial']=$tutorial[0];
		$review=get_tutorial_rating($tutorial[0]['tutorials_id']);
		if(is_array($review)){$data['reviews']=$review;}else{$data['reviews']=array();}
		$this->load->view('frontend/view_tutorial_details',$data);
	}
}