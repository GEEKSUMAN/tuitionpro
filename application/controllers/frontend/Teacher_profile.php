<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_profile extends CI_Controller {

	public function __construct()
 	{
	  parent::__construct();
  	$this->load->model('teacher_profile_model');
 	}

	public function index($teacher_id)
	{
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		$data['teacher_profile']=$this->teacher_profile_model->get_details($teacher_id);
		//var_export($data['teacher_profile']);die();$data['teacher_profile']
		$data['reviews']=get_all_data('teacher_rating',array('teacher_id' => $teacher_id));
		$this->load->view('frontend/view_teacher_profile',$data);

	}
}