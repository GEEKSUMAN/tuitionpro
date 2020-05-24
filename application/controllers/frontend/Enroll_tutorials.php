<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enroll_tutorials extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	 }

	public function enroll()
	{
		if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2) {

			$data = array('student_id' => $this->session->userdata('user_id'),
							'teacher_id'=> $this->input->post('teacher_id'),
							'tutorials_id'=>$this->input->post('tutorials_id'),

							);
			if(count(get_all_data('tutorials_enrollment',$data))==0){
			common_insert('tutorials_enrollment',$data);
			$for_email['full_name']=$this->session->userdata('full_name');
			$for_email['title']=$this->input->post('title');
			$email['message']=$this->load->view('frontend/tutorials_enroll_email_template',$for_email,TRUE);
			$email['to']=$this->session->userdata('user_email');
			$email['subject']="Tutorials Enrollment confirmation-TutionPro.in";
			send_email($email);
			$for_tutor['message']=$this->load->view('frontend/tutorials_enroll_email_template',$for_email,TRUE);
			$for_tutor['to']=get_user_email( $this->input->post('teacher_id'));
			$for_tutor['subject']="New Tutorials Enrollment -TutionPro.in";
			send_email($for_tutor);
			echo "1";
			} else{
				echo "2";
			}
				
		} else {
				echo "0";
			}
		
	}

	function login_chk_student(){
  if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2){
    echo "1";
  } else{
    echo "0";
  }
 }

	public function add_review_tutor(){

		if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2) {

			$data = array('rating_star_value' => $this->input->post('rating_value'),
							'teacher_id'=> $this->input->post('teacher_user_id'),
							'student_id' => $this->session->userdata('user_id'),
							'rating_comment'=> $this->input->post('review_comment')
							);
			common_insert('teacher_rating',$data);
			echo "1";
		} else{
			echo "0";
		}
	}

	public function enroll_key()
	{
		if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2) {
			if($this->input->post('access_key')==""){
				echo "5";
			}
			$tutorials_access_code=get_all_data('tutorials_access_code',array('access_code' =>$this->input->post('access_key')));
			if(count($tutorials_access_code)==0){
				echo "4";
				exit();
			}
			$data = array('student_id' =>$this->session->userdata('user_id'));
			if(count(get_all_data('tutorials_access_code',array('access_code' =>$this->input->post('access_key'),'student_id' =>$this->session->userdata('user_id'))))==0){
			update_data('tutorials_access_code',$data,array('access_code' =>$this->input->post('access_key')));
			$insert_data = array('student_id' => $this->session->userdata('user_id'),
							'teacher_id'=> $tutorials_access_code[0]['teacher_id'],
							'tutorials_id'=>$tutorials_access_code[0]['tutorials_id']
							);
			if(count(get_all_data('tutorials_enrollment',$insert_data))==0){
			common_insert('tutorials_enrollment',$insert_data);}
			else{
				echo "3";
				exit();
			}
			$for_email['full_name']=$this->session->userdata('full_name');
			$for_email['title']=get_tutorial_title($tutorials_access_code[0]['tutorials_id']);
			$email['message']=$this->load->view('frontend/tutorials_enroll_email_template',$for_email,TRUE);
			$email['to']=$this->session->userdata('user_email');
			$email['subject']="Tutorials Enrollment confirmation-TutionPro.in";
			send_email($email);
			$for_tutor['message']=$this->load->view('frontend/tutorials_enroll_email_template',$for_email,TRUE);
			$for_tutor['to']=get_user_email($tutorials_access_code[0]['teacher_id']);
			$for_tutor['subject']="New Tutorials Enrollment -TutionPro.in";
			send_email($for_tutor);
			echo "1";
			} else{
				echo "2";
			}
				
		} else {
				echo "0";
			}
		
	}


}