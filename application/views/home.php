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
        <div class="slider-area-2">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(asset/assets/img/slider/slider-3.jpg);">
                    <div class="container">
                        <div class="slider-content slider-animated-2 text-center">
                            <h1 class="animated">Drink & Heathy Food</h1>
                            <h3 class="animated">Fresh Heathy and Organic.</h3>
                           <!--  <div class="slider-btn mt-90">
                                <a class="animated" href="product-details.html">Order Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(asset/assets/img/slider/slider-3.jpg);">
                    <div class="container">
                        <div class="slider-content slider-animated-2 text-center">
                            <h1 class="animated">Drink & Heathy Food</h1>
                            <h3 class="animated">Fresh Heathy and Organic.</h3>
                            <div class="slider-btn mt-90">
                                <a class="animated" href="product-details.html">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-95 pb-70">
            <div class="custom-container">
                <div class="product-tab-list-wrap text-center mb-40 yellow-color">
                    <div class="product-tab-list nav">
                        <a class="active" href="#tab1" data-toggle="tab">
                            <h4>All </h4>
                        </a>
                       
                    </div>
                   
                </div>
                <div class="tab-content jump yellow-color">
                    <div id="tab1" class="tab-pane active">
                        <div class="row">
                            <?php foreach($products as $row) { ?>
    
                            <div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Pages/Single_product/?id='.$row->id); ?>">
                                            <img src="<?php echo base_url('uploads/' . $row->product_image)?>" alt="">
                                        </a>
                                        <div class="product-action">
                                            <div class="pro-action-left">
                                                <a title="Add Tto Cart" href="<?php echo base_url('Pages/Single_product/?id='.$row->id); ?>"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                            </div>
                                          
                                                
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4>
                                            <a href="<?php echo base_url('Pages/Single_product/?id='.$row->id); ?>"><?php echo $row->product_name;?> </a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>RS.<?php echo $row->price1;?></span>
                                            <span class="product-price-old">RS.<?php echo $row->price2;?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
        
       
       
        
       