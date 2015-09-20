<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of change_password_model
 *
 * @author suman0359
 */
class Change_Password_Model extends CI_Model {

    public function check_exist_password($user_id, $old_password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $user_id);
        $this->db->where('password', md5($old_password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }


    public function update_password($user_id, $new_password) {
        $this->db->set('password', md5($new_password));
        $this->db->where('user_id', $user_id);
        $this->db->update('users');
    }
    


}
