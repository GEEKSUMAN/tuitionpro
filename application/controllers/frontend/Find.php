<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller {

	public function __construct()
 	{
	  parent::__construct();
  	$this->load->model('find_model');
 	}

	public function tutorials()
	{	$search_data="";
		if($this->input->server('REQUEST_METHOD')==='POST'){
		$search_data = array ( 'category_name' =>$this->input->post('category_name',TRUE),
							   'board_name' =>$this->input->post('board_name',TRUE),
							   'subject_name' =>$this->input->post('subject_name',TRUE), 
							   'tutorials_name' =>$this->input->post('tutorials_name',TRUE));
		$this->session->set_tempdata('search_data',$search_data,300);
		}
		
		if($this->session->tempdata('search_data')!= NULL)
		{

		$data['search_data']=$search_data=$this->session->tempdata('search_data');
		}
		$config['base_url'] = base_url('find/tutorials');

		$config['total_rows'] = count($this->find_model->tutorials($search_data));
		$config['per_page'] =12;
		$config['use_page_numbers'] = TRUE;     
		$config['uri_segment'] = 3;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$data['pagination_link']=$this->pagination->create_links();
		if($this->uri->segment(3) > 0){
		    $offset = ($this->uri->segment(3) + 0)*$config['per_page'] - $config['per_page'];
		}
		else{
		    $offset = $this->uri->segment(3);
		}
		$data['total_rows']=$config['total_rows'];
		$data['list_tutorials']= $this->find_model->tutorials($search_data,$config['per_page'], $offset);
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		if($this->session->userdata('registration_type')==2){
		$data['already_enroll']=array_column($this->find_model->already_enroll(),'tutorials_id');
		// print_r($data['already_contact']); die();
		}
		
		$this->load->view('frontend/find_tutorials',$data);
	}

	public function tutors()

	{	$tutor_search_data="";
		if($this->input->server('REQUEST_METHOD')==='POST'){
		$tutor_search_data = array ( 'class_id' =>$this->input->post('class_id',TRUE),
							   'board_id' =>$this->input->post('board_id',TRUE),
							   'subject_id' =>$this->input->post('subject_id',TRUE), 
							   'location' =>$this->input->post('location',TRUE));
		$this->session->set_tempdata('tutor_search_data',$tutor_search_data,300);
		}
		$config['base_url'] = base_url('find/tutors');
		
		if($this->session->tempdata('tutor_search_data')!= NULL)
		{
		$data['tutor_search_data']=$tutor_search_data=$this->session->tempdata('tutor_search_data');
		}
		$config['total_rows'] = count($this->find_model->tutors($tutor_search_data));
		$config['per_page'] =12;
		$config['use_page_numbers'] = TRUE;     
		$config['uri_segment'] = 3;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$data['pagination_link']=$this->pagination->create_links();
		if($this->uri->segment(3) > 0){
		    $offset = ($this->uri->segment(3) + 0)*$config['per_page'] - $config['per_page'];
		}
		else{
		    $offset = $this->uri->segment(3);
		}
		$data['total_rows']=$config['total_rows'];
		$data['list_tutors']= $this->find_model->tutors($tutor_search_data,$config['per_page'], $offset);
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		if($this->session->userdata('registration_type')==2){
		$data['already_contact']=array_column($this->find_model->already_contact(),'teacher_user_id');
		// print_r($data['already_contact']); die();
		}
		
		$this->load->view('frontend/find_tutors',$data);
	}

	public function search_tutorials(){
		if($this->input->is_ajax_request()){
			$search_keys=$this->input->post('search_keyword',TRUE);
			$search_results=$this->find_model->search_tutorials($search_keys);
			print_r(json_encode($search_results));
		}
	}

	public function filter_by_tutor(){

		$filter_data="";
		if($this->input->server('REQUEST_METHOD')==='POST'){
		
		$filter_data = array ( 'classes' =>$this->input->post('classes',TRUE),
							   'board_filter' =>$this->input->post('board_filter',TRUE),
							   'subjects' =>$this->input->post('subjects',TRUE), 
							   'loaction_filter' =>$this->input->post('loaction_filter',TRUE),
							   'class_location_student' =>$this->input->post('class_location_student',TRUE),
							   'class_location_tutor' =>$this->input->post('class_location_tutor',TRUE),
							   'class_location_online' =>$this->input->post('class_location_online',TRUE),
							   'gender_pref_male' =>$this->input->post('gender_pref_male',TRUE),
							   'gender_pref_female' =>$this->input->post('gender_pref_female',TRUE),
							   'gender_pref_other' =>$this->input->post('gender_pref_other',TRUE)
							);
		$this->session->set_tempdata('filter_data',$filter_data,300);
		}
		$config['base_url'] = base_url('find/tutors/apply-filters');
		
		if($this->session->tempdata('filter_data')!= NULL)
		{
		$data['filter_data']=$search_data=$this->session->tempdata('filter_data');
		}
		$config['total_rows'] = count($this->find_model->filter_tutors($filter_data));
		$config['per_page'] =12;
		$config['use_page_numbers'] = TRUE;     
		$config['uri_segment'] = 4;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$data['pagination_link']=$this->pagination->create_links();
		if($this->uri->segment(4) > 0){
		    $offset = ($this->uri->segment(4) + 0)*$config['per_page'] - $config['per_page'];
		}
		else{
		    $offset = $this->uri->segment(4);
		}
		$data['total_rows']=$config['total_rows'];
		$data['list_tutors']= $this->find_model->filter_tutors($filter_data,$config['per_page'], $offset);
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		if($this->session->userdata('registration_type')==2){
		$data['already_contact']=array_column($this->find_model->already_contact(),'teacher_user_id');
		// print_r($data['already_contact']); die();
		}
		$this->load->view('frontend/find_tutors',$data);
	}

	public function filter_by_tutorials(){

		$filter_data="";
		if($this->input->server('REQUEST_METHOD')==='POST'){
		
		$filter_data = array ( 'classes' =>$this->input->post('classes',TRUE),
							   'board_filter' =>$this->input->post('board_filter',TRUE),
							   'subjects' =>$this->input->post('subjects',TRUE), 
							   'paid_tutorial' =>$this->input->post('paid_tutorial',TRUE),
							   'free_tutorial' =>$this->input->post('free_tutorial',TRUE),
							   'Beginner' =>$this->input->post('Beginner',TRUE),
							   'Intermediate' =>$this->input->post('Intermediate',TRUE),
							   'Expert' =>$this->input->post('Expert',TRUE)
							   
							);
		$this->session->set_tempdata('filter_data',$filter_data,300);
		}
		$config['base_url'] = base_url('find/tutorials/apply-filters');
		
		if($this->session->tempdata('filter_data')!= NULL)
		{
		$data['filter_data']=$search_data=$this->session->tempdata('filter_data');
		}
		$config['total_rows'] = count($this->find_model->filter_tutorials($filter_data));
		$config['per_page'] =12;
		$config['use_page_numbers'] = TRUE;     
		$config['uri_segment'] = 4;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$data['pagination_link']=$this->pagination->create_links();
		if($this->uri->segment(4) > 0){
		    $offset = ($this->uri->segment(4) + 0)*$config['per_page'] - $config['per_page'];
		}
		else{
		    $offset = $this->uri->segment(4);
		}
		$data['total_rows']=$config['total_rows'];
		$data['list_tutorials']= $this->find_model->filter_tutorials($filter_data,$config['per_page'], $offset);
		//var_export($this->db->last_query()); die();

		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE);
		if($this->session->userdata('registration_type')==2){
		$data['already_enroll']=array_column($this->find_model->already_enroll(),'tutorials_id');
		// print_r($data['already_contact']); die();
		} 
		$this->load->view('frontend/find_tutorials',$data);
	}

}