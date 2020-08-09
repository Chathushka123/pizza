<?php
class User_model extends CI_model{
 
 
 
public function register_user($user){
 
 
$this->db->insert('user', $user);
 
}
 
public function login_user($user_email,$user_password){
 //$email,$pass
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$user_email);
  $this->db->where('user_password',$user_password);
 $this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
  // if($query=$this->db->get())
  // {
  //     return $query->result_array();
  // }
  // else{
  //   return false;
  // }
 
 
}
public function admin_login_user($user_email,$user_password)
{
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$user_email);
  $this->db->where('user_password',$user_password);
  $this->db->where('user_role',1);
 $this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}



public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}
 
 
}
 
 
?>