<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_tutors extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	 }

	public function contact()
	{
		if($this->input->is_ajax_request() && $this->session->userdata('registration_type')==2) {

			$data = array('student_user_id' => $this->session->userdata('user_id'),
							'teacher_user_id'=> $this->input->post('teacher_user_id')
							);
			if(count(get_all_data('teacher_enquery',$data))==0){
			common_insert('teacher_enquery',$data);
			$for_email['full_name']=$this->session->userdata('full_name');
			$for_email['tutor_name']=$this->input->post('teacher_name');
			$for_email['student_email']=$this->session->userdata('user_email');
			$for_email['tutor_email']=$this->input->post('teacher_email');
			$for_email['tutor_mobile']=$this->input->post('teacher_mobile');
			$email['message']=$this->load->view('frontend/contact_tutor_email_template',$for_email,TRUE);
			$email['to']=$this->session->userdata('user_email');
			$email['subject']="Tutor Contacts details -TutionPro.in";
			send_email($email);
			$for_tutor['message']=$this->load->view('frontend/tuition_enquiry_email_template',$for_email,TRUE);
			$for_tutor['to']=$for_email['tutor_email'];
			$for_tutor['subject']="New Enquiry for tuitons -TutionPro.in";
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


}