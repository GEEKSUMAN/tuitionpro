<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorials_model extends CI_Model
    {


    function add_tutorial($data)
     {
        $this->db->set($data);
     return $this->db->insert('tutorials');
    }
    function add_section($data)
     {
        $this->db->set($data);
     return $this->db->insert('tutorials_section');
    }

    function my_sections($tutorials_id){

                $this->db->select('section_name'); 
                 $this->db->select('section_id'); 
                $this->db->order_by('section_id', 'DESC');
      $query = $this->db->get_where('tutorials_section', array('tutorials_id' => $tutorials_id));
      return $result=$query->result_array();

    }

     function chapter_or_topics($teacher_user_id)
     {
                $this->db->order_by('name', 'ASC');
      $query = $this->db->get_where('chapter_or_topic', array('teacher_user_id' => $teacher_user_id));

                return $result=$query->result_array();
     }

     function my_tutorials_name($teacher_user_id)
     {          
                 $this->db->select('title'); 
                 $this->db->select('tutorials_id'); 
                $this->db->order_by('tutorials_id', 'DESC');
      $query = $this->db->get_where('tutorials', array('teacher_id' => $teacher_user_id));

                return $result=$query->result_array();
     }
     function my_tutorials($teacher_user_id)
     {          
                 $this->db->select('title');
                 $this->db->select('slug');
                 $this->db->select('category');
                 $this->db->select('chapter_or_topic');
                 $this->db->select('subject');
                 $this->db->select('boards');
                 $this->db->select('price');
                 $this->db->select('thumbnail_img');
                 $this->db->select('date_added');    
                 $this->db->select('tutorials_id'); 
                $this->db->order_by('tutorials_id', 'DESC');
      $query = $this->db->get_where('tutorials', array('teacher_id' => $teacher_user_id));

                return $result=$query->result_array();
     }

     function add_chapter_or_topic($data)
     {
        $this->db->set($data);
     return $this->db->insert('chapter_or_topic');
    }

    function edit_chapter_or_topic($data,$where)
     {
        $this->db->where('chapter_or_topic_id', $where);
     return $this->db->update('chapter_or_topic',$data);
    }

    function category(){
         $this->db->order_by('category_name', 'ASC');
      $query = $this->db->get('category');
    return $result=$query->result_array();
    }

    function my_subjects($teacher_user_id){

        $this->db->select('subjects.subject_name')->join('teacher_subject_relation', 'teacher_subject_relation.subject_id= subjects.id');
        $query =$this->db->get_where('subjects', array('teacher_subject_relation.teacher_user_id' => $teacher_user_id));

    return $result=$query->result_array();
    }

    function my_classes($teacher_user_id){

        $this->db->select('classes.class_name')->join('teacher_class_relation', 'teacher_class_relation.class_id= classes.id');
        $query =$this->db->get_where('classes', array('teacher_class_relation.teacher_user_id' => $teacher_user_id));

    return $result=$query->result_array();
    }

    function my_boards($teacher_user_id){

        $this->db->select('education_board.board_name')->join('teacher_board_relation', 'teacher_board_relation.board_id= education_board.id');
        $query =$this->db->get_where('education_board', array('teacher_board_relation.teacher_user_id' => $teacher_user_id));

    return $result=$query->result_array();
    }
}
