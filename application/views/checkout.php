<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url('Pages');?>">Home</a></li>
                <li class="active"> Checkout </li>
            </ul>
        </div>
    </div>
</div>
<!-- checkout-area start -->
<div class="checkout-area pb-80 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">billing information</a></h5>
                            </div>
                            <div id="payment-2" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <form method="post" action="order">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>First Name</label>
                                                    <input type="text" name="first_name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" required>
                                                </div>
                                            </div>
                                          
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Email Address</label>
                                                    <input type="email"  name="email_address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Address</label>
                                                    <input type="text" name="address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>city</label>
                                                    <input type="text" name="city" required>
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Telephone</label>
                                                    <input type="text" name="phone_number" required>
                                                </div>
                                            </div>
                                           
                                        </div>
                                      
                                        <div class="billing-back-btn">
                                            
                                            <div class="billing-btn">
                                                <button type="submit">Order</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-6">Order Review</a></h5>
                            </div>
                            <div id="payment-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="order-review-wrapper">
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-3">Qty</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php     
                                                       foreach ($this->cart->contents() as $items) {?>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p><?php echo $items['name'];?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>Rs.<?php echo $items['price'];?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p><?php echo $items['qty'];?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>Rs.<?php echo number_format($items['subtotal']);?></p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                      
                                                        <tr>
                                                            <td colspan="3">Grand Total</td>
                                                            <td colspan="1">Rs.<?php echo $this->cart->total();?></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

