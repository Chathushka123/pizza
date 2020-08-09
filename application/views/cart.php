   <?php
$success_msg= $this->session->flashdata('success_msg');
$error_msg= $this->session->flashdata('error_msg');

if($success_msg){
    ?>
    <div class="alert alert-success">
      <?php echo $success_msg; ?>
  </div>
  <?php
}
if($error_msg){
    ?>
    <div class="alert alert-danger">
      <?php echo $error_msg; ?>
  </div>
  <?php
}
?>

   <div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url('Pages');?>">Home</a></li>
                <li class="active">Cart </li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <h3 class="page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                         <?php if ($cart = $this->cart->contents()){?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>action</th>
                                </tr>
                            </thead>


                                <?php     
                                foreach ($this->cart->contents() as $items) {?>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="<?php echo base_url('uploads/' . $items['image'])?>" style="width: 100px;height: 100px;" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo $items['name'];?> </a></td>
                                            <td class="product-price-cart"><span class="amount">Rs.<?php echo $items['price'];?></span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="<?php echo $items['qty'];?>">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">Rs.<?php echo number_format($items['subtotal']);?></td>
                                            <td class="product-remove">
                                               
                                                <a href="<?php echo base_url('Pages/removeItem/'.$items["rowid"]); ?>"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                         <?php }?>
                                    </tbody>
                                </table>
                                  <?php }?>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="<?php echo base_url('pages');?>">Continue Shopping</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                               
                            </div>
                            <div class="col-lg-4 col-md-6">
                               
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                               
                                <h4 class="grand-totall-title">Grand Total  <span>Rs.<?php echo $this->cart->total();?></span></h4>
                                <a href="<?php echo base_url('Pages/checkout');?>">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>