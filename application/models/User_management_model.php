<?php

/**
* 
*/
class User_management_model extends CI_Model
{
	
	public function save_user_info($data){
		$this->db->insert('users', $data);
	}
}