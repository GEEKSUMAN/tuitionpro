<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	 {
	  parent::__construct();
	  if(!$this->session->userdata('user_id'))
	  {
	   redirect(base_url('login'));
	  }
	 }

	public function index()
	{	
		$registration_type=$this->session->userdata('registration_type');
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		if($registration_type==1){
		$profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
		$data['profile_data']=$profile_data[0];
		$teacher_user_id=array('teacher_user_id'=>$this->session->userdata('user_id'));
		$data['classes']=array_column(get_all_data('teacher_class_relation',$teacher_user_id), 'class_id');
		$data['subjects']=array_column(get_all_data('teacher_subject_relation',$teacher_user_id), 'subject_id');
		$data['select_boards']=array_column(get_all_data('teacher_board_relation',$teacher_user_id), 'board_id');
			$this->load->view('frontend/teacher_dashboard',$data);
		} elseif ($registration_type==2) {
		$profile_data=get_row_by_id('student_profile',$this->session->userdata('user_id'));
		$data['profile_data']=$profile_data[0];
		$student_user_id=array('student_user_id'=>$this->session->userdata('user_id'));
		$data['classes']=array_column(get_all_data('student_class_relation',$student_user_id), 'class_id');
		$data['subjects']=array_column(get_all_data('student_subject_relation',$student_user_id), 'subject_id');
		$data['select_board']=array_column(get_all_data('student_board_relation',$student_user_id), 'board_id');
			$this->load->view('frontend/student_dashboard',$data);

		 }
         //+ elseif ($registration_type==3) {
		// 	$this->load->view('frontend/parent_dashboard',$data);
		// } elseif ($registration_type==4) {
		// 	$this->load->view('frontend/coaching_center_dashboard',$data);
		// } elseif ($registration_type==5) {
		// 	$this->load->view('frontend/school_dashboard',$data);
		// }
		
	}

	public function logout()
	 {
		  $data = $this->session->all_userdata();
		  foreach($data as $row => $rows_value)
		  {
		   $this->session->unset_userdata($row);
		  }
		  redirect(base_url('login'));
	 }


	 public function edit_teacher(){
	 	if ($this->input->server('REQUEST_METHOD') == 'POST'){
	 	$data = array (
	 				  'full_name' =>ucwords(strtolower($this->input->post('full_name',TRUE))),
					  'mobile' =>$this->input->post('mobile',TRUE),
					  'gender' => $this->input->post('gender',TRUE),
					  'location' =>$this->input->post('location',TRUE),
					  'zip' =>$this->input->post('zip_code',TRUE),
					  'travel_distance' =>$this->input->post('travel_distance',TRUE),
					  'class_location_home' =>$this->input->post('class_location_home',TRUE),
					  'class_location_online' =>$this->input->post('class_location_online',TRUE),
					  'class_location_travel' =>$this->input->post('class_location_travel',TRUE),
					  'about_me' => $this->input->post('about_me',TRUE)
					);
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->update('teacher_profile', $data);
       
        $board_ids=$this->input->post('boards',TRUE);
        $boards_del=array('teacher_user_id'=>$this->session->userdata('user_id'));
       	common_delete('teacher_board_relation',$boards_del);
        foreach ($board_ids as $board_id) {
        	$boards_data=array('teacher_user_id' => $this->session->userdata('user_id'),
        				'board_id' => $board_id
        				);
        	common_insert('teacher_board_relation',$boards_data);
        }

        $class_ids=$this->input->post('teacher_class',TRUE);
        $class_del=array('teacher_user_id'=>$this->session->userdata('user_id'));
       	common_delete('teacher_class_relation',$class_del);
        foreach ($class_ids as $class_id) {
        	$xlass_data=array('teacher_user_id' => $this->session->userdata('user_id'),
        				'class_id' => $class_id
        				);
        	common_insert('teacher_class_relation',$xlass_data);
        }

        $subject_ids=$this->input->post('subjects',TRUE);
        $subjects_del=array('teacher_user_id'=>$this->session->userdata('user_id'));
       	common_delete('teacher_subject_relation',$subjects_del);
        foreach ($subject_ids as $subject_id) {
        	$subjects_data=array('teacher_user_id' => $this->session->userdata('user_id'),
        				'subject_id' => $subject_id
        				);
        	common_insert('teacher_subject_relation',$subjects_data);
        }
       
        $user_fullname=ucwords(strtolower($this->input->post('full_name',TRUE)));
	 	$new_name =str_replace("_"," ",$user_fullname).'_'.date('y-m-d');
        if(file_exists($_FILES['profile_image']['tmp_name']) || is_uploaded_file($_FILES['profile_image']['tmp_name'])) {

        $config['file_name']        = $new_name;
	    $config['upload_path'] = TEACHER_PHOTO;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('profile_image')) {
        	$msg=$this->upload->display_errors();
			$this->session->set_flashdata('msg',$msg);  
            redirect(base_url('dashboard'));
        } else {
        	$upload_data = $this->upload->data();
			$data=array('profile_photo' =>$upload_data['file_name']);
			common_update('teacher_profile',$data,$this->session->userdata('user_id'));
        } 
 		}
        if(file_exists($_FILES['profile_video']['tmp_name']) || is_uploaded_file($_FILES['profile_video']['tmp_name'])) {
 		$config2['file_name']        = $new_name;
	    $config2['upload_path'] = TEACHER_VIDEO;
        $config2['allowed_types'] = 'mp4|3gp|avi';
        $config2['max_size'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config2,TRUE);
        if (!$this->upload->do_upload('profile_video')) {
        	$msg=$this->upload->display_errors();
        	$this->session->set_flashdata('msg',$msg);  
            redirect(base_url('dashboard'));
        }else{
        	$upload_data = $this->upload->data();
			$data=array('profile_video' =>$upload_data['file_name']);
			common_update('teacher_profile',$data,$this->session->userdata('user_id'));
        }
 		}
        $msg = "Your profile updated successfully";
            $this->session->set_flashdata('msg',$msg);  
            redirect(base_url('dashboard'));
     }
	 }


	 public function edit_student(){
	 	if ($this->input->server('REQUEST_METHOD') == 'POST'){
	 	$data = array (
	 				  'full_name' =>ucwords(strtolower($this->input->post('full_name',TRUE))),
					  'mobile' =>$this->input->post('mobile',TRUE),
					  'gender' => $this->input->post('gender',TRUE),
					  'guardian_name' => $this->input->post('guardian_name',TRUE),
					  'gender_preference' => $this->input->post('gender_preference',TRUE),
					  'location' =>$this->input->post('location',TRUE),
					  'zip' =>$this->input->post('zip_code',TRUE),
					  'travel_distance' =>$this->input->post('travel_distance',TRUE),
					  'class_location_home' =>$this->input->post('class_location_home',TRUE),
					  'class_location_online' =>$this->input->post('class_location_online',TRUE),
					  'class_location_travel' =>$this->input->post('class_location_travel',TRUE),
					  'about_me' => $this->input->post('about_me',TRUE)
					);
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->update('student_profile', $data);
       
        $board_del=array('student_user_id'=>$this->session->userdata('user_id'));
       	common_delete('student_board_relation',$board_del);
        	$board_data=array('student_user_id' => $this->session->userdata('user_id'),
        				'board_id' => $this->input->post('board',TRUE)
        				);
        	common_insert('student_board_relation',$board_data);
        $class_del=array('student_user_id'=>$this->session->userdata('user_id'));
       	common_delete('student_class_relation',$class_del);
        	$class_data=array('student_user_id' => $this->session->userdata('user_id'),
        				'class_id' => $this->input->post('student_class',TRUE)
        				);
        	common_insert('student_class_relation',$class_data);

        $subject_ids=$this->input->post('subjects',TRUE);
        $subjects_del=array('student_user_id'=>$this->session->userdata('user_id'));
       	common_delete('student_subject_relation',$subjects_del);
        foreach ($subject_ids as $subject_id) {
        	$subjects_data=array('student_user_id' => $this->session->userdata('user_id'),
        				'subject_id' => $subject_id
        				);
        	common_insert('student_subject_relation',$subjects_data);
        }
       
        $user_fullname=ucwords(strtolower($this->input->post('full_name',TRUE)));
	 	$new_name =str_replace("_"," ",$user_fullname).'_'.date('y-m-d');
        if(file_exists($_FILES['profile_image']['tmp_name']) || is_uploaded_file($_FILES['profile_image']['tmp_name'])) {

        $config['file_name']        = $new_name;
	    $config['upload_path'] = STUDENT_PHOTO;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('profile_image')) {
        	$msg=$this->upload->display_errors();
			$this->session->set_flashdata('msg',$msg);  
            redirect(base_url('dashboard'));
        } else {
        	$upload_data = $this->upload->data();
			$data=array('profile_photo' =>$upload_data['file_name']);
			common_update('student_profile',$data,$this->session->userdata('user_id'));
        } 
 		}
        $msg = "Your profile updated successfully";
            $this->session->set_flashdata('msg',$msg);  
            redirect(base_url('dashboard'));
     }
	 }

     public function teacher_bank_details(){

        $registration_type=$this->session->userdata('registration_type');
        $data['header']=$this->load->view('frontend/header','', TRUE);
        $data['footer']=$this->load->view('frontend/footer','', TRUE); 
        if($registration_type==1){
        $profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
        $teacher_user_id=array('teacher_user_id'=>$this->session->userdata('user_id'));
        $bank_data=get_all_data('teacher_bank_details',array('teacher_id'=>$this->session->userdata('user_id')));
        $data['bank_details']=$bank_data[0];
            $this->load->view('frontend/teacher_bank_details',$data);
        }

     }

     public function add_teacher_bank_details(){
            if($this->input->is_ajax_request() && $this->input->post('bank_name',TRUE)!="" && $this->input->post('account_holder_name',TRUE)!="" && $this->input->post('ifsc',TRUE)!="" && $this->input->post('bank_account_no',TRUE)!="" ){
        $bank_del=array('teacher_id'=>$this->session->userdata('user_id'));
        common_delete('teacher_bank_details',$bank_del);
            $bank_data=array('teacher_id' => $this->session->userdata('user_id'),
                        'bank_name' => $this->input->post('bank_name',TRUE),
                        'account_holder_name' => $this->input->post('account_holder_name',TRUE),
                        'ifsc' => $this->input->post('ifsc',TRUE),
                        'account_no' => $this->input->post('bank_account_no',TRUE),
                        );
            if(common_insert('teacher_bank_details',$bank_data)){
                echo"1";
            }
            }
        }

    public function teacher_enroll_students(){

         $registration_type=$this->session->userdata('registration_type');
        $data['header']=$this->load->view('frontend/header','', TRUE);
        $data['footer']=$this->load->view('frontend/footer','', TRUE); 
        if($registration_type==1){
        $profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
        $data['enroll_details']=get_all_data('tutorials_enrollment',array('teacher_id'=>$this->session->userdata('user_id')));
            $this->load->view('frontend/teacher_enroll_students',$data);
        }
    }

    public function teacher_enquery(){

         $registration_type=$this->session->userdata('registration_type');
        $data['header']=$this->load->view('frontend/header','', TRUE);
        $data['footer']=$this->load->view('frontend/footer','', TRUE); 
        if($registration_type==1){
        $profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
        $data['enroll_details']=get_all_data('teacher_enquery',array('teacher_user_id'=>$this->session->userdata('user_id')));
            $this->load->view('frontend/teacher_enquiries',$data);
        }else if($registration_type==2){
        $profile_data=get_row_by_id('student_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
        $data['enroll_details']=get_all_data('teacher_enquery',array('student_user_id'=>$this->session->userdata('user_id')));
            $this->load->view('frontend/student_contact_teacher',$data);
        }
    }

    public function manage_credentials(){
         $registration_type=$this->session->userdata('registration_type');
         $this->load->library('encryption');
        if($this->input->method('post')==TRUE &&  $this->input->post('change_password')!=''){

        update_data('users',array('password'=>$this->encryption->encrypt($this->input->post('change_password'))),array('id' =>$this->session->userdata('user_id')));

        redirect(base_url('logout'));

        }
        $data['header']=$this->load->view('frontend/header','', TRUE);
        $data['footer']=$this->load->view('frontend/footer','', TRUE); 
        if($registration_type==1){
        $profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
            $this->load->view('frontend/teacher_credentials',$data);
        }
        if($registration_type==2){
        $profile_data=get_row_by_id('student_profile',$this->session->userdata('user_id'));
        $data['profile_data']=$profile_data[0];
            $this->load->view('frontend/student_credentials',$data);
        }

    }

}