<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_model
 *
 * @author tasfir
 */
class Product_model extends CI_Model {
    
    public function findAll(){
        $this->db->select('*');
//        $this->db->where('product_status', 1);
        $this->db->from('products');
        
        $query_result= $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function findProduct($product_id){
        $this->db->select('*');
        $this->db->where('product_id', $product_id);
        $this->db->from('products');
        
        $query_result= $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
