<?php 
/**
* Login Check Model
*/
class User_login_model extends CI_Model
{
	
	public function check_login_info($user_email, $user_password){
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where('email_address', $user_email);
        $this->db->where('password', md5($user_password));
        $this->db->where('status', 1);
        //$this->db->where('user_category', 'user');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
	}
}