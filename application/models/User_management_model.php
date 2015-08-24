<?php

/**
 * 
 */
class User_management_model extends CI_Model {

    public function check_exist_email($email_address) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email_address', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_user_info($data) {
        $this->db->insert('users', $data);
    }

}
