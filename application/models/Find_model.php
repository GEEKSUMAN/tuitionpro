<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_model extends CI_Model
    {

    public function tutors($data="",$limit="",$statrt="")
     {  
        if($limit!="" && $statrt!=""){
        $this->db->limit($limit,$statrt);
        }
        if($data==""){
            $query = $this->db->get('teacher_profile');
         return $query->result_array();
        }

        if($data['subject_id']!='Subject'){
        $this->db->or_where('teacher_subject_relation.subject_id',$data['subject_id']);
        $this->db->join('teacher_subject_relation','teacher_profile.user_id = teacher_subject_relation.teacher_user_id');
        }
        if($data['class_id']!='Class'){
        $this->db->or_where('teacher_class_relation.class_id',$data['class_id']);
        
        $this->db->join('teacher_class_relation','teacher_profile.user_id = teacher_class_relation.teacher_user_id');
        }
        if($data['board_id']!='Board'){
        $this->db->or_where('teacher_board_relation.board_id',$data['board_id']);
        $this->db->join('teacher_board_relation','teacher_profile.user_id = teacher_board_relation.teacher_user_id');
        }
        if($data['location']!=''){
        $this->db->or_like('teacher_profile.location',$data['location']);
        }
        $this->db->group_by('teacher_profile.user_id');
        
        $query = $this->db->get('teacher_profile');
        return $result=$query->result_array();

     }

     public function tutorials($data="",$limit="",$statrt="")
     {  
        if($limit!="" && $statrt!=""){
        $this->db->limit($limit,$statrt);
        }
        if($data==""){
            $query = $this->db->get('tutorials');
         return $query->result_array();
        }

        if($data['subject_name']!='Subject'){
        $this->db->or_like('subject',$data['subject_name']);
        }
        if($data['category_name']!='Category'){
        $this->db->or_like('category',$data['category_name']);
        }
        if($data['board_name']!='Board'){
        $this->db->or_like('boards',$data['board_name']);
        }
        if($data['tutorials_name']!=''){
        $this->db->or_like('title',$data['tutorials_name']);
        $this->db->or_like('sub_title',$data['tutorials_name']);
        $this->db->or_like('description',$data['tutorials_name']);
        $this->db->or_like('category',$data['tutorials_name']);
        $this->db->or_like('chapter_or_topic',$data['tutorials_name']);
        }
        $this->db->group_by('tutorials_id');
        $this->db->where('status','1');
        $query = $this->db->get('tutorials');
        return $result=$query->result_array();

     }


     public function filter_tutors($data="",$limit="",$statrt="")
     {  
        if($limit!="" && $statrt!=""){
        $this->db->limit($limit,$statrt);
        }
        if($data==""){
            $query = $this->db->get('teacher_profile');
        return $query->result_array();
        }
        if($data['subjects']!=''){
        $this->db->or_where_in('teacher_subject_relation.subject_id',$data['subjects']);
        $this->db->join('teacher_subject_relation','teacher_profile.user_id = teacher_subject_relation.teacher_user_id');
        }
        if($data['classes']!=''){
        $this->db->or_where_in('teacher_class_relation.class_id',$data['classes']);
        
        $this->db->join('teacher_class_relation','teacher_profile.user_id = teacher_class_relation.teacher_user_id');
        }

        if($data['board_filter']!='Board'){
        $this->db->or_where('teacher_board_relation.board_id',$data['board_filter']);
        $this->db->join('teacher_board_relation','teacher_profile.user_id = teacher_board_relation.teacher_user_id');
        }

        if($data['class_location_student']=='Y'){
        $this->db->or_where('teacher_profile.class_location_travel',$data['class_location_student']);
         }
         if($data['class_location_tutor']=='Y'){
        $this->db->or_where('teacher_profile.class_location_home',$data['class_location_tutor']);
         }
         if($data['class_location_online']=='Y'){
        $this->db->or_where('teacher_profile.class_location_online',$data['class_location_online']);
         }
         if($data['gender_pref_female']=='Female'){
        $this->db->or_where('teacher_profile.gender',$data['gender_pref_female']);
         }
         if($data['gender_pref_male']=='Male'){
        $this->db->or_where('teacher_profile.gender',$data['gender_pref_male']);
         }
         if($data['gender_pref_other']=='Other'){
        $this->db->or_where('teacher_profile.gender',$data['gender_pref_other']);
         }
         if($data['loaction_filter']!=''){
        $this->db->or_like('teacher_profile.location',$data['loaction_filter']);
        }
        $this->db->group_by('teacher_profile.user_id');

        $query = $this->db->get('teacher_profile');
        return $result=$query->result_array();


     }

     public function filter_tutorials($data="",$limit="",$statrt="")
     {  
        if($limit!="" && $statrt!=""){
        $this->db->limit($limit,$statrt);
        }
        if($data==""){
            $query = $this->db->get('tutorials');
        return $query->result_array();
        }
         if($data['subjects']!=''){
        $this->db->or_where('subject',$data['subjects']);
        }
        if($data['classes']!=''){
        $this->db->or_where('classes',$data['classes']);
        }

        if($data['board_filter']!='Board'){
         $this->db->or_like('boards',$data['board_filter']);
        }

        if($data['free_tutorial']=='Y'){
        $this->db->or_where('is_paid','N');
         }
         if($data['paid_tutorial']=='Y'){
        $this->db->or_where('is_paid',$data['paid_tutorial']);
         }
         if($data['Beginner']=='Beginner'){
        $this->db->or_where('level',$data['Beginner']);
         }
         if($data['Intermediate']=='Intermediate'){
         $this->db->or_where('level',$data['Intermediate']);
         }
         if($data['Expert']=='Expert'){
        $this->db->or_where('level',$data['Expert']);
         }
         
        $this->db->group_by('tutorials_id');
        $this->db->where('status','1');
        $query = $this->db->get('tutorials');
        return $result=$query->result_array();


     }

     public function search_tutorials($data){
        $this->db->select('title label');
        $this->db->or_like('title',$data);
        $this->db->or_like('sub_title',$data);
        $this->db->or_like('description',$data);
        $this->db->or_like('category',$data);
        $this->db->or_like('chapter_or_topic',$data);
        $this->db->where('status','1');
        $this->db->group_by('tutorials_id');
        $query = $this->db->get('tutorials');
        return $result=$query->result_array();
     }

     public function already_contact(){
        $this->db->select('teacher_user_id');
        $this->db->group_by('teacher_user_id');
        $query = $this->db->get_where('teacher_enquery',array('student_user_id' =>$this->session->userdata('user_id')));
        return array_values($query->result_array());
     }
     public function already_enroll(){
        $this->db->select('tutorials_id');
        $this->db->group_by('tutorials_id');
        $query = $this->db->get_where('tutorials_enrollment',array('student_id' =>$this->session->userdata('user_id')));
        return array_values($query->result_array());
     }
}