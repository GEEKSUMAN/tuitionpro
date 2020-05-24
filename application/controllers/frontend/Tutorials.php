<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorials extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if(!$this->session->userdata('user_id'))
	  {
	   redirect(base_url('login'));
	  }
	  if(!$this->session->userdata('registration_type')==1){
	  	exit('You are not authorized!');
	  }

	  $this->load->model('tutorials_model');
	 }

	public function index()
	{	
		
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
		$data['profile_data']=$profile_data[0];
		$data['categories']=$this->tutorials_model->category();
		$data['chapter_or_topics']=$this->tutorials_model->chapter_or_topics($this->session->userdata('user_id'));
		$data['tutorials_name']=$this->tutorials_model->my_tutorials_name($this->session->userdata('user_id'));
		$data['all_tutorial']=$this->tutorials_model->my_tutorials($this->session->userdata('user_id'));
		$data['subjects']=$this->tutorials_model->my_subjects($this->session->userdata('user_id'));
		$data['classes']=$this->tutorials_model->my_classes($this->session->userdata('user_id'));
		$data['select_boards']=$this->tutorials_model->my_boards($this->session->userdata('user_id'));
		$this->load->view('frontend/teacher_tutorials',$data);
	}

	public function add_tutorials(){
		if($this->input->is_ajax_request()){
		if(file_exists($_FILES['tutorials_thumbnail']['tmp_name']) || is_uploaded_file($_FILES['tutorials_thumbnail']['tmp_name'])) {
        $config['file_name']  = strtolower($this->input->post('tutorials_title'));
	    $config['upload_path']= TUTORIALS_THUMBNAILS;
	    $config['file_ext_tolower'] = TRUE;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 50000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('tutorials_thumbnail')) {
        	echo $this->upload->display_errors() ;
         } else {
        $upload_data = $this->upload->data();
		$data= array ('title' => $this->input->post('tutorials_title'),
			'sub_title' => $this->input->post('tutorials_sub_title'),
		 'description' => $this->input->post('tutorials_description'), 
		 'prerequisite'=> $this->input->post('tutorials_prerequisite'),
		  'out_comes' => $this->input->post('tutorials_outcomes'),
		  'category' =>$this->input->post('tutorial_category'),
		  'chapter_or_topic' =>$this->input->post('tutorials_chapter_or_topic'),
		  'boards' => implode(",",$this->input->post('boards')),
		  'subject' =>$this->input->post('subjects'),
		  'classes' =>$this->input->post('class'),
		  'is_paid' =>$this->input->post('tutorials_paid'),
		  'price' =>$this->input->post('tutorials_price'), 
		  'percentage_of_discount'=>$this->input->post('tutorials_discount'),
		  'is_visible'=>'Y',
		  'thumbnail_img'=> $upload_data['file_name'],
		  'slug'=>create_slug($this->input->post('tutorials_title')),
		  'level'=>$this->input->post('tutorials_level'),
		   'teacher_id' => $this->session->userdata('user_id'));
			if($this->tutorials_model->add_tutorial($data)){
				echo "1";
			}
		}
	}
	}
	}

	public function add_chapter_or_topic(){
		if($this->input->is_ajax_request() && $this->input->post('chapter_or_topic')!=''){
			$data=array('name'=>$this->input->post('chapter_or_topic'),
						'teacher_user_id'=>$this->session->userdata('user_id'));
			if($this->tutorials_model->add_chapter_or_topic($data)){
				$chapter_or_topics=$this->tutorials_model->chapter_or_topics($this->session->userdata('user_id'));
				echo '<table class="table table-bordered table-hover text-nowrap mb-0">
											<thead>
													<tr>
														<th>Chapter / Topic <a class="btn float-right btn-primary btn-sm text-white" data-toggle="modal" data-target="#add-chapter-or-topic-modal"><i class="fa fa-plus"></i> Add</a></th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>';
					foreach ($chapter_or_topics as $chapter_or_topic) {													
													echo '<tr><td>';
													echo $chapter_or_topic['name'];
													echo '</td><td><a id="edit_chapter_or_topic" class="btn btn-success btn-sm text-white" data-id="';
													echo $chapter_or_topic['chapter_or_topic_id']; 
													echo '" data-toggle="modal" data-target="#edit-chapter-or-topic-modal" data-chapter-or-topic="';
													 echo $chapter_or_topic['name'];
													echo '"><i class="fa fa-pencil"></i> Edit</a>
														 </td>
													</tr>';
						}
												echo '</tbody></table>';


			} else {
				echo "0";
			}
		}
	}

		public function edit_chapter_or_topic(){
		if($this->input->is_ajax_request()){
			$data=array('name'=>$this->input->post('edit_chapter_or_topic'));
			if($this->tutorials_model->edit_chapter_or_topic($data,$this->input->post('edit_chapter_or_topic_id'))){
				$chapter_or_topics=$this->tutorials_model->chapter_or_topics($this->session->userdata('user_id'));
				echo '<table class="table table-bordered table-hover text-nowrap mb-0">
											<thead>
													<tr>
														<th>Chapter / Topic <a class="btn float-right btn-primary btn-sm text-white" data-toggle="modal" data-target="#add-chapter-or-topic-modal"><i class="fa fa-plus"></i> Add</a></th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>';
					foreach ($chapter_or_topics as $chapter_or_topic) {													
													echo '<tr><td>';
													echo $chapter_or_topic['name'];
													echo '</td><td><a id="edit_chapter_or_topic" class="btn btn-success btn-sm text-white" data-id="';
													echo $chapter_or_topic['chapter_or_topic_id']; 
													echo '" data-toggle="modal" data-target="#edit-chapter-or-topic-modal" data-chapter-or-topic="';
													 echo $chapter_or_topic['name'];
													echo '"><i class="fa fa-pencil"></i> Edit</a>
														 </td>
													</tr>';
						}
												echo '</tbody></table>';

			}
		}
	}

	public function add_section(){

		if($this->input->is_ajax_request() && $this->input->post('add_tutorials_section')!='' && $this->input->post('tutorials_title_for_section')!=0) {
		$data=array('section_name'=>$this->input->post('add_tutorials_section'),
					'tutorials_id'=>$this->input->post('tutorials_title_for_section'),
					'teacher_id'=>$this->session->userdata('user_id')
					);
		if($this->tutorials_model->add_section($data)){
				echo "1";
			}
		}else{
			echo "0";
		}
	}


	public function get_sections(){
		if($this->input->is_ajax_request() && $this->input->post('tutorials_id')!='') {
		$sections=$this->tutorials_model->my_sections($this->input->post('tutorials_id'));
													echo ' <option></option>';
					foreach ($sections as $section) {
													echo'<option value="'.$section['section_id'].'">';					
													echo $section['section_name'];
													echo '</option>'; 
												}
		}
	}

	public function get_tutorials(){
		if($this->input->is_ajax_request()) {
		$tutorials=$this->tutorials_model->my_tutorials_name($this->session->userdata('user_id'));
													echo '<option></option>';
					foreach ($tutorials as $tutorial) {
													echo'<option value="'.$tutorial['tutorials_id'].'">';					
													echo $tutorial['title'];
													echo '</option>'; 
						}
		}
	}

	public function add_lesson(){
		if($this->input->is_ajax_request()) {
        if(file_exists($_FILES['lesson_file']['tmp_name']) || is_uploaded_file($_FILES['lesson_file']['tmp_name'])) {
        $config['file_name']  = strtolower($this->input->post('lesson_name'));
	    if($this->input->post('lesson_file_type')=="pdf")
	    {$config['upload_path'] = LESSON_DOCUMENTS;}
	     else if ($this->input->post('lesson_file_type')=="video/mp4,video/x-m4v,video/*") 
	     	{$config['upload_path'] = LESSON_VIDEOS;} 
	     else if($this->input->post('lesson_file_type')=="image/x-png,image/gif,image/jpeg") {$config['upload_path'] = LESSON_IMAGES;}
	     else { $config['upload_path']= LESSON_AUDIOS;}
	    $config['file_ext_tolower'] = TRUE;
        $config['allowed_types'] = 'gif|jpg|png|pdf|mp3|mp4|3gp|avi|webm';
        $config['max_size'] = 300000;
        $this->load->library('upload');
        $this->upload->initialize($config,TRUE);
        if (!$this->upload->do_upload('lesson_file')) {
        	echo $this->upload->display_errors();
        } else {
        	$upload_data = $this->upload->data();
        	$data=Array ( 'tutorials_id'=> $this->input->post('tutorials_title_for_lesson'),
				 'section_id' => $this->input->post('lesson_section'),
				  'lesson_name' => $this->input->post('lesson_name'),
				  'file_type' => $this->input->post('lesson_file_type'),
				  'file_name' =>  $upload_data['file_name'],
				  'teacher_id' => $this->session->userdata('user_id')
		   ) ;
			
			common_insert('tutorials_lesson',$data);
			echo "1";
        } 
 		}
 	}
	}

	public function view_tutorial($tutorials_id){

		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
		$data['profile_data']=$profile_data[0];
		$data['tutorial']=get_all_data('tutorials',array('tutorials_id' =>$tutorials_id));
		$this->load->view('frontend/view_tutorial',$data);
	}

	public function delete_section($section_id){
		$where=array('section_id'=>$section_id,'teacher_id'=>$this->session->userdata('user_id'));
		common_delete('tutorials_section',$where);
		common_delete('tutorials_lesson',$where);
		redirect(base_url('dashboard/my-tutorials'));
	}
	public function delete_lesson($lesson_id){
		$where=array('lesson_id'=>$lesson_id,'teacher_id'=>$this->session->userdata('user_id'));
		common_delete('tutorials_lesson',$where);
		redirect(base_url('dashboard/my-tutorials'));
	}

	public function delete_tutorial($tutorials_id){
		$where=array('tutorials_id'=>$tutorials_id,'teacher_id'=>$this->session->userdata('user_id'));
		common_delete('tutorials',$where);
		common_delete('tutorials_section',$where);
		common_delete('tutorials_lesson',$where);
		redirect(base_url('dashboard/my-tutorials'));
	}
	public function delete_chapter_or_topic($chapter_or_topic_id){

		$where=array('chapter_or_topic_id'=>$chapter_or_topic_id,'teacher_user_id'=>$this->session->userdata('user_id'));
		common_delete('chapter_or_topic',$where);
		redirect(base_url('dashboard/my-tutorials'));
	}

	public function access_code(){
		$data['header']=$this->load->view('frontend/header','', TRUE);
		$data['footer']=$this->load->view('frontend/footer','', TRUE); 
		$profile_data=get_row_by_id('teacher_profile',$this->session->userdata('user_id'));
		$data['profile_data']=$profile_data[0];
		$data['tutorials_name']=$this->tutorials_model->my_tutorials_name($this->session->userdata('user_id'));
		$data['access_codes']=get_all_data('tutorials_access_code',array('teacher_id'=>$this->session->userdata('user_id')));
		$this->load->view('frontend/send_access_key',$data);
	}

	public function  gen_code(){
		echo access_key_gen();
	}

	public function send_access_keys(){

		if($this->input->is_ajax_request() && $this->input->post('tutorials_id')!="" &&  $this->input->post('send_email')!="" &&  $this->input->post('access_key')!="") {
			$data=array('access_code'=>$this->input->post('access_key'),
						'teacher_id'=>$this->session->userdata('user_id'),
						'tutorials_id'=>$this->input->post('tutorials_id'),
						'email'=>$this->input->post('send_email')
						);
			$chk=get_all_data('tutorials_access_code',array('access_code'=>$this->input->post('access_key')));
			if(count($chk)==0){
			$for_email['title']=get_tutorial_title($this->input->post('tutorials_id'));
			$for_email['key']=$this->input->post('access_key');
			$email['message']=$this->load->view('frontend/send_access_key_email_template',$for_email,TRUE);
			$email['to']=$this->input->post('send_email',TRUE);
			$email['subject']="Tutorial Access Key -TutionPro.in";
			send_email($email);
			common_insert('tutorials_access_code',$data);
				echo "1";
			} else{
				echo "2";
			}
		}
	}
}