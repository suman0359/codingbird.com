<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Addcart
 *
 * @author tasfir
 */
class Addcart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index() {
        $this->load->view('includes/header');

        $this->load->view('includes/products/cart');

        $this->load->view('includes/footer');
    }

    public function buy($product_id) {
        $find_product = $this->product_model->findProduct($product_id);



        $data = array(
            'id' => $find_product->product_id,
            'qty' => 1,
            'price' => $find_product->product_price,
            'name' => $find_product->product_name,
            'image' => $find_product->product_image//,
                //'options' => array('Size' => 'L', 'Color' => 'Red')
        );

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->cart->insert($data);

        $this->load->view('includes/products/cart');

        redirect('addcart');
    }

    public function delete($rowid) {
        $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
        redirect('addcart');
    }

    public function update() {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty' . $i]));
            $i++;
        }

        redirect('addcart');
    }

}
