<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Monella </title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/assets/img/favicon.png');?>">

    <!-- all css here -->
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/animate.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/slick.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/chosen.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/simple-line-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/meanmenu.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/assets/css/responsive.css');?>">
    <script src="<?php echo base_url('asset/assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>
<body>
    <!-- header start -->
    <header class="header-area">
       <div class="header-top black-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                    <div class="welcome-area">
                        <p>Welcome to Monello Pizza! </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                    <div class="account-curr-lang-wrap f-right">
                        <ul>


                            <li class="top-hover"><a href="#">

                             <?php
                             if (isset($this->session->userdata['logged_in'])) {
                                $username = ($this->session->userdata['logged_in']['username']);

                                echo $username;

                            }
                            else{
                               echo'Account'; 
                           }
                           ?>
                           <i class="ion-chevron-down"></i></a>
                           <ul>
                            <li><a href="wishlist.html">Wishlist  </a></li>
                            <li><a href="<?php echo base_url('Pages/Login');?>">Login/Register</a></li>

                            <?php
                            if (isset($this->session->userdata['logged_in'])) {
                                $username = ($this->session->userdata['logged_in']['username']);
                                $email = ($this->session->userdata['logged_in']['email']);
                                echo'<li><a href=" '.base_url('User/user_logout').'">Logout</a></li>';

                            }
                            else{

                            }
                            ?>
                            <li><a href="my-account.html">my account</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                <div class="logo">
                    <a href="index.html">
                     <!--  <img alt="" src="<?php echo base_url('asset/assets/img/logo/logo.png');?>"> -->
                     <span style="font-size: 30px;
                     font-weight: 500;
                     line-height: 1;color: #e02c2b;">Monello Pizza</span>
                 </a>
             </div>
         </div>
         <div class="col-lg-9 col-md-8 col-12 col-sm-8">
            <div class="header-middle-right f-right">




                <div class="header-cart">
                    <a href="#">
                        <div class="header-icon-style">
                            <i class="icon-handbag icons"></i>
                            <span class="count-style"><?php echo count($this->cart->contents());?></span>
                        </div>
                        <div class="cart-text">
                            <span class="digit">My Cart</span>
                            <span class="cart-digit-bold">Rs.<?php echo $this->cart->total();?></span>
                        </div>
                    </a>
                      <?php if ($cart = $this->cart->contents()){?>
                    <div class="shopping-cart-content">
                        <ul>
                            <?php     
                                foreach ($this->cart->contents() as $items) {?>
                            <li class="single-shopping-cart">
                                <div class="shopping-cart-img">
                                    <a href="#"><img style="width: 50px;height: 50px;" src="<?php echo base_url('uploads/' . $items['image'])?>"></a>
                                </div>
                                <div class="shopping-cart-title">
                                    <h4><a href="#"><?php echo $items['name'];?></a></h4>
                                    <h6>Qty: <?php echo $items['qty'];?></h6>
                                    <span>Rs.<?php echo $items['price'];?></span>
                                </div>
                              
                            </li>
                            <?php }?>
                        </ul>
                        <div class="shopping-cart-total">
                           
                            <h4>Total : <span class="shop-total">Rs.<?php echo number_format($items['subtotal']);?></span></h4>
                        </div>
                       
                    </div>
                <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="header-bottom transparent-bar black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="top-hover"><a href="<?php echo base_url('Pages');?>">Home </a>

                            </li>
                            <li><a href="<?php echo base_url('Pages/About_us');?>">About</a></li>
                            

                            <li><a href="<?php echo base_url('Pages/Contact_us');?>">Contact Us</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-start -->
<div class="mobile-menu-area">
    <div class="container">
     <div class="row">
      <div class="col-lg-12">
       <div class="mobile-menu">
        <nav id="mobile-menu-active">
         <ul class="menu-overflow" id="nav">
          <li><a href="<?php echo base_url('Pages');?>">Home</a>

          </li>
          <li><a href="<?php echo base_url('Pages/About_us');?>">About Us</a>
           <ul>


           </ul>
       </li>


       <li><a href="<?php echo base_url('Pages/Contact_us');?>">contact us</a></li>

   </ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- mobile-menu-area-end -->
</header>