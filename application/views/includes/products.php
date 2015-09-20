<div class="products">
    <div class="container">
        <div class="row">
            <div class="product-list">

                <?php foreach ($all_product as $product) { ?>
                    <div class="col-md-4">
                        <div class="product-gird">
                            <div class="product-header btn-primary text-center">
                                <h4><?php echo $product->product_name; ?></h4>
                            </div>
                            <div class="product-body">
                                <div class="product-image text-center">
                                    <a href="<?php echo base_url() . "products/facebook_cover"; ?>">
                                        <img src="<?php echo base_url(); echo $product->product_image; ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="product-footer">

                                <a class="btn btn-primary">
                                    Go For Details
                                </a>
                                <a class="btn btn-primary pull-right" href="<?php echo base_url()."addcart/buy/"; ?><?php echo $product->product_id; ?>">
                                    Add Cart
                                </a>

                            </div>
                        </div>
                    </div>


                <?php }
                ?>


                

            </div>
        </div>
    </div>
</div>