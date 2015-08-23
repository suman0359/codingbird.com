

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
            <form action="<?php echo base_url()."checkout"; ?>" method="post">


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

                        <tr class="cart_item">

                            <td class="product-thumbnail">
                                <a href="http://designed4impact.com/product/facebook-cover-production/"><img width="90" height="90" src="http://designed4impact.com/wp-content/uploads/2015/03/facebook-ecommerce-90x90.png" class="attachment-shop_thumbnail wp-post-image" alt="facebook-ecommerce"></a>					
                            </td>

                            <td class="product-name">
                                <a href="http://designed4impact.com/product/facebook-cover-production/">Facebook Cover Production</a>				
                            </td>

                            <td class="product-price">
                                <span class="amount">$44.99</span>				
                            </td>

                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" step="1" min="0" name="cart[03f544613917945245041ea1581df0c2][qty]" value="1" title="Qty" class="input-text qty text" size="4">
                                </div>
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">$44.99</span>			
                            </td>

                            <td class="product-remove">
                                <a href="" class="remove gray-background" title="Remove this item">×</a>			
                            </td>

                        </tr>

                        <tr class="cart_item">

                            <td class="product-thumbnail">
                                <a href=""><img width="90" height="90" src="http://designed4impact.com/wp-content/uploads/2015/03/facebook-ecommerce-90x90.png" class="attachment-shop_thumbnail wp-post-image" alt="facebook-ecommerce"></a>					
                            </td>

                            <td class="product-name">
                                <a href="">Facebook Cover Production</a>				
                            </td>

                            <td class="product-price">
                                <span class="amount">$44.99</span>				
                            </td>

                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" step="1" min="0" name="cart[03f544613917945245041ea1581df0c2][qty]" value="1" title="Qty" class="input-text qty text" size="4">
                                </div>
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">$44.99</span>			
                            </td>

                            <td class="product-remove">
                                <a href="#" class="remove gray-background" title="Remove this item">×</a>			
                            </td>

                        </tr>

                        <tr class="cart_item">
                            <td></td>

                            <td class="product-thumbnail" colspan="3">
                                Total
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">$44.99</span>			
                            </td>

                        </tr>

                        <tr>
                            <td colspan="6" class="actions text-right gray-background">
                                <input type="submit" class="btn btn-info" name="update_cart" value="Update Cart">

                                <input type="submit" class="btn btn-success" name="update_cart" value="Procesed to Checkout">
                            </td>

                        </tr>




                    </tbody>
                </table>


            </form>

            <div class="cart-collaterals">

                <div class="cart_totals ">


                    <h2>Cart Totals</h2>




                    <div class="wc-proceed-to-checkout">

                        <a href="http://designed4impact.com/checkout/" class="checkout-button button alt wc-forward">Proceed to Checkout</a>

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
