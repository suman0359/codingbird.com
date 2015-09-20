<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="bs-example" data-example-id="striped-table">


                <?php
                /*
                 * To change this license header, choose License Headers in Project Properties.
                 * To change this template file, choose Tools | Templates
                 * and open the template in the editor.
                 */



                $this->table->set_heading('Idd', 'Product Name', 'Product Price', 'Quantity', 'Action');

                foreach ($all_product as $p) {
                    $this->table->add_row($p->product_id, $p->product_name, $p->product_price, $p->product_quantity, anchor('addcart/buy/'.$p->product_id, 'Buy', 'class="btn btn-primary"'));
                }

                $this->table->set_template(array('table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-striped">'));

                echo $this->table->generate();
                ?>
            </div>
        </div>
    </div>
</div>


