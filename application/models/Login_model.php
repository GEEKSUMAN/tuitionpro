<?php
class Login_model extends CI_Model
{
 function can_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('users');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
     $store_password = $this->encryption->decrypt($row->password);
     if($password == $store_password && $row->status==1 && $row->is_email_verified=='yes')
     {
      $this->session->set_userdata('user_id', $row->id);
      $this->session->set_userdata('user_password', $store_password);
      $this->session->set_userdata('user_email', $row->email);
      $this->session->set_userdata('full_name', $row->full_name);
      $this->session->set_userdata('registration_type', $row->registration_type);
      $this->session->set_userdata('status', $row->status);
     } elseif ($row->status !=1) {
       return 'Your account has been disabled. Contact web admin.';
     } elseif ($row->is_email_verified=='no') {
       return 'Please verify your email id. Check Your mail inbox for the verification link';
     } 
     else
     {
      return 'Wrong Password ';
     }
   }
  }
  else
  {
   return 'Wrong Email Address';
  }
 }

 function can_admin_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('admin');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
   $store_password = $this->encryption->decrypt($row->password); 
     if($password == "admin")
     {
      $this->session->set_userdata('admin_id', $row->admin_id);
      $this->session->set_userdata('password', $store_password);
      $this->session->set_userdata('email', $row->email);
      $this->session->set_userdata('full_name', $row->full_name);
     }
     else
     {
      return 'Wrong Password';
     }
   }
  }
  else
  {
   return 'Wrong Email Address';
  }
 }
}