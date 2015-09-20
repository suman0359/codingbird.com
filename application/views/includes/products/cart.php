




<div class="container-fluid gray-background margin--top-20">
    <div class="container">
        <div class="row" >
            <div class="col-md-3" style="height: 70px;">
                <h2>Cart</h2>
            </div>
            <div class="col-md-3 pull-right col-md-offset-6" style="height: 70px;">
                <h2 class="text-right">
                    <a style="color: #313447;" href="#">Home/Cart</a>
                </h2>
            </div>
        </div>
    </div>
</div>



<div class="container margin--top-50">
    <div class="row">
        <div class="col-md-12">

            <?php echo form_open('addcart/update'); ?>
            <?php echo form_open('checkout/process'); ?>

            <table class="shop_table cart" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>

                    <?php foreach ($this->cart->contents() as $items): ?>

                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                        <tr class="cart_item">

                            <td class="product-thumbnail">
                                <a href="">
                                    <img width="90" height="90" src="<?php echo base_url() . $items['image']; ?>" class="attachment-shop_thumbnail wp-post-image" alt="facebook-ecommerce">
                                </a>                  
                            </td>

                            <td class="product-name">
                                <a href="">

                                    <?php echo $items['name']; ?>

                                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                        <p>
                                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                            <?php endforeach; ?>
                                        </p>

                                    <?php endif; ?>

                                </a>               
                            </td>

                            <td class="product-price">
                                <span class="amount"><?php echo $this->cart->format_number($items['price']); ?></span>              
                            </td>

                            <td class="product-quantity">
                                <div class="quantity">
                                    <?php echo form_input(array('type' => 'number', 'name' => 'qty' . $i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '4', 'class' => 'input-text qty text')); ?>
                                </div>
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">$<?php echo $this->cart->format_number($items['subtotal']); ?></span>          
                            </td>

                            <td class="product-remove">
                                <?php echo anchor('addcart/delete/' . $items['rowid'], 'x', 'class="remove gray-background"'); ?>

                            </td>

                        </tr>

                        <?php $i++; ?>

                    <?php endforeach; ?>

                    <tr class="cart_item">
                        <td></td>

                        <td class="product-thumbnail" colspan="3">
                            Total
                        </td>

                        <td class="product-subtotal">
                            <span class="amount">$<?php echo $this->cart->format_number($this->cart->total()); ?></span>          
                        </td>

                    </tr>

                    <tr>
                        <td class="actions text-left gray-background">

                            <?php echo anchor('products', 'Continoue Shopping', 'class="btn btn-info"'); ?>
                        </td>
                        <td colspan="5" class="actions text-right gray-background">
                            
                            
                            <a href="<?php echo base_url()."checkout/process"; ?>" class="btn btn-info">Proceed to Checkout</a>

                            <?php echo form_submit('cart/update_cart_order', 'Update your Cart', 'class="btn btn-info"'); ?>

                        </td>

                    </tr>
                </tbody>
            </table>



            <?php echo form_close(); ?>
            <?php echo form_close(); ?>




























            <div class="cart-collaterals">

                <div class="cart_totals ">


                    <h2>Cart Totals</h2>




                    <div class="wc-proceed-to-checkout">

                        <a href="http://designed4impact.com/checkout/" class="checkout-button button alt wc-forward">Proceed tto Checkout</a>

                    </div>


                </div>

                <div class="cart_totals">


                    <h2>Cart Totals</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="col-md-3 pull-right col-md-offset-6">
                                <p>$44.49</p>
                            </div>

                        </div>
                    </div>

                    <div class="wc-proceed-to-checkout">

                        <a href="http://designed4impact.com/checkout/" class="checkout-button button alt wc-forward">Proceed to Checkout</a>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
