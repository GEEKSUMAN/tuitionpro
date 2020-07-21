<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function asset_url(){
   return base_url().'assets/';
}

function is_admin_logged_in() {
	$CI =& get_instance();
    $admin = $CI->session->userdata('is_admin_logged_in');
    if (!isset($admin)) { return false; } else { return true; }
}

function get_all_data($table,$where=NULL){
	$CI =& get_instance();
    $CI->db->from($table);
    if($where!==NULL){
    $CI->db->where($where);
    }
    $query = $CI->db->get();
    return $query->result_array();
}

function common_insert($table,$data_array){
  $CI =& get_instance();
    $CI->db->set($data_array);
    if($CI->db->insert($table)){
    return $CI->db->insert_id();
    } else{
      return false;
    }
}

function common_update($table,$data_array,$id){
  $CI =& get_instance();
     if($table!='users'){$CI->db->where('user_id', $id);}
  else{
    $CI->db->where('id', $id);
  }
    if($CI->db->update($table,$data_array)){
    return true;
    } else{
      return false;
    }
}

function update_data($table,$data_array,$where){
  $CI =& get_instance();
  $CI->db->where($where);
  if($CI->db->update($table,$data_array)){
    return true;
    } else{
      return false;
    }

}

function common_delete($table,$data){
$CI =& get_instance();
   if($table!='users'){$CI->db->where($data);}
  else{
    $CI->db->where('id', $data);
  }
return $CI->db->delete($table);
}

function get_row_by_id($table,$id){
  $CI =& get_instance();
  $CI->db->from($table);
  if($table!='users'){$CI->db->where('user_id', $id);}
  else{
    $CI->db->where('id', $id);
  }
  $query = $CI->db->get();
    return $query->result_array();
}

function getFirstPara($string){
        $string = substr($string,0, strpos($string, "</p>")+4);
        return $string;
    }

function all_subjects(){
  $CI =& get_instance();
  $CI->db->order_by('subject_name');
    $CI->db->from('subjects');
    $query = $CI->db->get();
    return $query->result_array();
}

function all_boards(){
  $CI =& get_instance();
  $CI->db->order_by('board_name');
    $CI->db->from('education_board');
    $query = $CI->db->get();
    return $query->result_array();
}

function all_classes(){
  $CI =& get_instance();
    $CI->db->order_by('class_name');
    $CI->db->from('classes');
    $query = $CI->db->get();
    return $query->result_array();
}

function all_category(){
  $CI =& get_instance();
    $CI->db->from('category');
    $query = $CI->db->get();
    return $query->result_array();
}

function total_user($user_type){

 $CI =& get_instance();
$query = $CI->db->where(['registration_type'=>$user_type])->from('users')->count_all_results();
 return $query;

}
function all_users(){
 $CI =& get_instance();
$query = $CI->db->from('users')->count_all_results();
 return $query;
}
function all_tutorials(){
 $CI =& get_instance();
$query = $CI->db->from('tutorials')->count_all_results();
 return $query;
}

function create_verification_code($email)
{   

  $CI =& get_instance();
    $count = 0;

    $verification = random_string('alnum', 16);
    $verification_code = $verification;             // Create temp
    while(true) 
    {
        $CI->db->select('verification_key');
        $CI->db->where('verification_key', $verification_code);   // Test temp 
        $CI->db->where('email', $email);   
        $query = $CI->db->get('users');
        if ($query->num_rows() == 0) break;
        $verification_code = $verification . '-' . (++$count);  // Recreate new temp 
    }
    return $verification_code;      // Return temp 
}

function create_slug($name)
{   

  $CI =& get_instance();
    $count = 0;
    $name = url_title($name,'dash',TRUE);
    $slug_name = $name;             // Create temp name
    while(true) 
    {
        $CI->db->select('tutorials_id');
        $CI->db->where('slug', $slug_name);   // Test temp name
        $query = $CI->db->get('tutorials');
        if ($query->num_rows() == 0) break;
        $slug_name = $name . '-' . (++$count);  // Recreate new temp name
    }
    return $slug_name;      // Return temp name
}

function latest_tutorials(){
    $CI =& get_instance();
    $CI->db->limit('12');
    $CI->db->order_by('date_added','DESC');
    $query = $CI->db->get('tutorials');
    return $query->result_array();
}



function recently_joined(){
    $CI =& get_instance();
    $CI->db->limit('20');
    $CI->db->select('full_name');
    $CI->db->select('id');
    $CI->db->select('join_date');
    $CI->db->select('registration_type');
    $CI->db->order_by('join_date','DESC');
    $CI->db->from('users');
    $query = $CI->db->get();
    $resluts=$query->result_array();
    $i=0;
    foreach ($resluts as $reslut) {
      $data[$i]['full_name']=$reslut['full_name'];
      $data[$i]['join_date']=$reslut['join_date'];
      $data[$i]['registration_type']=$reslut['registration_type'];
      if($reslut['registration_type']==1){
      $CI->db->select('location');
      $CI->db->select('about_me');
      $CI->db->select('profile_photo');
      $CI->db->from('teacher_profile');
      $CI->db->where('user_id',$reslut['id']);
      $query = $CI->db->get();
      $teacher=$query->result_array();
        $data[$i]['location']=$teacher[0]['location'];
        $data[$i]['profile_photo']=$teacher[0]['profile_photo'];
        $data[$i]['about_me']=$teacher[0]['about_me'];

      } else {

        $CI->db->select('location');
      $CI->db->select('about_me');
      $CI->db->select('profile_photo');
      $CI->db->from('student_profile');
      $CI->db->where('user_id',$reslut['id']);
      $query = $CI->db->get();
      $student=$query->result_array();
        $data[$i]['location']=$student[0]['location'];
        $data[$i]['profile_photo']=$student[0]['profile_photo'];
        $data[$i]['about_me']=$student[0]['about_me'];
      }

      $i++;
    }

    return $data;
    
}

function whatever_to_string($in){
    ob_start();
    print_r($in);
    return ob_get_clean();
    }

function send_email($data) 
  {
    $ci = & get_instance();
    $ci->load->library('email');

    $ci->email->from('info@tuitionpro.in', 'Tuitionpro.In');
    $ci->email->to($data['to']);

    $ci->email->subject($data['subject']);
    $ci->email->message($data['message']);
   return $ci->email->send(FALSE);
  }

function send_attached_email() 
  {
    $ci = & get_instance();
    $ci->load->library('email');

   $ci->email->from('your@example.com', 'Your Name');
    $ci->email->to('suman.2687452.majhi@gmail.com');
    $ci->email->cc('iamsuman1808@gmail.com');
    $ci->email->bcc('iamsuman1808@gmail.com');

    $ci->email->subject('Email Test');
    $ci->email->message('Testing the email class.');

    $ci->email->send();
  }

  function get_student_details($student_id){
   $CI =& get_instance();
    $CI->db->select('full_name');
    $CI->db->select('location');
    $CI->db->select('profile_photo');
    $query = $CI->db->get_where('student_profile',array('user_id' =>$student_id));
    return $query->result_array();
  }

  function get_teacher_rating($teacher_id){
    $CI =& get_instance();
    $CI->db->select('rating_star_value');
    $query = $CI->db->get_where('teacher_rating',array('teacher_id' =>$teacher_id));
    $reviews= $query->result_array();
    if(count($reviews)>0){
      return ceil( array_sum(array_column($reviews,'rating_star_value')) / count($reviews) );
    } else{
      return 0;
    }
  }
  function get_tutorial_rating($tutorials_id){
      $CI =& get_instance();
    $CI->db->select('rating_star_value');
    $query = $CI->db->get_where('tutorials_rating',array('tutorials_id' =>$tutorials_id));
    $reviews= $query->result_array();
    if(count($reviews)>0){
      return ceil( array_sum(array_column($reviews,'rating_star_value')) / count($reviews) );
    } else{
      return 0;
    }
  }

  function get_full_name($user_id){
      $CI =& get_instance();
    $CI->db->select('full_name');
    $CI->db->select('email');
    $query = $CI->db->get_where('users',array('id' =>$user_id))->result_array();
    return $query[0]['full_name'];
  }
   function get_user_email($user_id){
      $CI =& get_instance();
    $CI->db->select('email');
    $query = $CI->db->get_where('users',array('id' =>$user_id))->result_array();
    return $query[0]['email'];
  }

  function get_teacher_contact($teacher_id){

    $CI =& get_instance();
    $CI->db->select('email');
    $CI->db->select('mobile');
    $query = $CI->db->get_where('teacher_profile',array('user_id' =>$teacher_id))->result_array();
    return $query[0];
  }

  function access_key_gen()
{   

    $CI =& get_instance();
    $count = random_string('alnum',2);
    $name = random_string('alnum',5);
    $key_name = $name;             // Create temp name
    while(true) 
    {
        $CI->db->select('access_code');
        $CI->db->where('access_code', $key_name);   // Test temp name
        $query = $CI->db->get('tutorials_access_code');
        if ($query->num_rows() == 0) break;
        $key_name = $name.''.$count;  // Recreate new temp name
    }
    return $key_name;      // Return temp name
}

function get_tutorial_title($tutorials_id){
    $CI =& get_instance();
        $CI->db->select('title');
        $CI->db->where('tutorials_id', $tutorials_id);  
    $query = $CI->db->get('tutorials')->result_array();
    return $query[0]['title'];
}

function get_logo(){
  $CI =& get_instance();
  $CI->db->select('logo');
  $query = $CI->db->get('logo')->result_array();
  return $query[0]['logo'];
}

