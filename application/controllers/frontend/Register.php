<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  $this->load->library('encryption');
	  $this->load->library('email');
	  $this->load->model('register_model');
	 }


	public function index()
	{
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$this->load->view('frontend/register',$data);
	}


	public function user_register()
	{	
		$email = filter_var($this->input->post('mail'), FILTER_SANITIZE_EMAIL);
		if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($this->input->post('name')) && !empty($this->input->post('password')) && !empty($this->input->post('register_type'))) {
			$where= array('email' => $email );
			$email_chk=get_all_data('users',$where);
			if(empty($email_chk)){
			 $encrypted_password = $this->encryption->encrypt($this->input->post('password'));
			 $key=create_verification_code($this->input->post('mail'));
			$data = array(
			'full_name'  => ucwords(strtolower($this->input->post('name'))),
			'email'  => $this->input->post('mail'),
			'password' => $encrypted_password,
			'registration_type' => $this->input->post('register_type'),
			'is_email_verified' =>'no',
			'verification_key' =>$key
			);
			$id = $this->register_model->insert($data);

			if ($id>0) {
				$register_type=$this->input->post('register_type');
				$profile_data = array('user_id' =>$id,
									  'full_name'=>ucwords(strtolower($this->input->post('name'))),
									  'email'=>$this->input->post('mail')
									  );
				if($register_type==1){
					common_insert('teacher_profile',$profile_data);
					$board_data=array('teacher_user_id' =>$id,
        				'board_id' => $this->input->post('board',TRUE)
        				);
        			common_insert('teacher_board_relation',$board_data);
        			$class_data=array('teacher_user_id' =>$id,
        				'class_id' => $this->input->post('classes',TRUE)
        				);
        			common_insert('teacher_class_relation',$class_data);
				} elseif ($register_type==2) {
					common_insert('student_profile',$profile_data);
					$board_data=array('student_user_id' =>$id,
        				'board_id' => $this->input->post('board',TRUE)
        				);
        			common_insert('student_board_relation',$board_data);
        			$class_data=array('student_user_id' =>$id,
        				'class_id' => $this->input->post('classes',TRUE)
        				);
        			common_insert('student_class_relation',$class_data);
				 }
				// elseif ($register_type==3) {
				// 	common_insert('parent_profile',$profile_data);
				// }elseif ($register_type==4) {
				// 	common_insert('coaching_center_profile',$profile_data);
				// }elseif ($register_type==5) {
				// 	common_insert('school_profile',$profile_data);
				// }

			$for_email['user_name']=$this->input->post('name',TRUE);
			$for_email['link']= $key;
			$send_email['message']=$this->load->view('frontend/email_verification_key_template',$for_email,TRUE);
			$send_email['to']=$this->input->post('mail',TRUE);
			$send_email['subject']="Verify your Account-TuitionPro.in";
		//	print_r($send_email);
		//	print_r(send_email($send_email));
		send_email($send_email);
		//print_r($send_email['message']);
	//	die();
		//$this->email->print_debugger(); die();
				$msg='You have successfully register ! Check your email.';
				$this->session->set_flashdata('msg',$msg); 
				redirect(base_url('register'));
			}

		}  else {
		$msg=$email.'  is already registered !';
		$this->session->set_flashdata('msg',$msg); 
		redirect(base_url('register'));
		} 
	} else {
		$msg='Please check your entered data!';
		$this->session->set_flashdata('msg',$msg); 
		redirect(base_url('register'));
	}

	}

	public function verify_email($verification_code){

		if($this->register_model->verify_email($verification_code)){
		$msg='Your email id is successfully verified!';
		$this->session->set_flashdata('msg',$msg); 
		redirect(base_url('login'));
		}else{
			$msg='Please check your mail for the verification link';
		$this->session->set_flashdata('msg',$msg); 
		redirect(base_url('login'));
		}



	}
}