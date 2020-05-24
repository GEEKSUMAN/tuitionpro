<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_profile_model extends CI_Model
    {

     function get_details($teacher_id)
     {  $this->db->select('subjects.subject_name');
        $this->db->where('teacher_subject_relation.teacher_user_id',$teacher_id);
         $this->db->join('subjects','subjects.id = teacher_subject_relation.subject_id');
        $subject= $this->db->get('teacher_subject_relation')->result_array();

        $subjects['subjects']=implode(', ',array_values(array_column($subject, 'subject_name')));
        $this->db->select('classes.class_name');
        $this->db->join('classes','classes.id = teacher_class_relation.class_id');
        $this->db->where('teacher_user_id',$teacher_id);
        $class= $this->db->get('teacher_class_relation');
        $classes['classes']= implode(', ',array_values(array_column($class->result_array(),'class_name')));
        $this->db->select('education_board.board_name');
         $this->db->join('education_board','education_board.id = teacher_board_relation.board_id');
        $this->db->where('teacher_board_relation.teacher_user_id',$teacher_id);
        $board= $this->db->get('teacher_board_relation');
        $boards['boards']=implode(', ',array_values(array_column($board->result_array(),'board_name')));
         $this->db->where('user_id',$teacher_id);
         $query = $this->db->get('teacher_profile');
         $profile=$query->row_array();
         if(is_array($profile)){
             return array_merge($subjects,$classes,$boards,$profile);
            }
         }
        
}
