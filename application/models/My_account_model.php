<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_account_model
 *
 * @author tasfir
 */
class My_account_model extends CI_Model {

    public function select_user_info($user_id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $user_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function create_billing_address($billing_data){
        $this->db->insert('billing_address', $billing_data);
    }

    public function save_billing_address_info($data) {
        $this->db->insert('billing_address', $data);
    }
    
    public function update_billing_address_info($data, $user_id){
        $this->db->where('user_id', $user_id);
        $this->db->update('billing_address', $data);
    }

    public function select_billing_address_info($user_id) {
        $this->db->select('*');
        $this->db->from('billing_address');
        $this->db->where('user_id', $user_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_my_account($data, $user_id) {

        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);
    }

}
