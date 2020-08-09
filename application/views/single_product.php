 <div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url('Pages');?>">Home</a></li>
                <li class="active">Product Details </li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details pt-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-img">
                    <img class="zoompro" src="<?php echo base_url('uploads/' . $single_product->product_image)?>" data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg" alt="zoom"/>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4><?php echo $single_product->product_name;?></h4>
                    <br>
                    <span>Rs. <?php echo $single_product->price2;?></span>

                    <p> </p>
                    <div class="pro-dec-feature">
                       <?php echo $single_product->description;?>

                   </div>
                   <div class="pro-details-cart-wrap">

                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" id="qty" type="text" name="qtybutton" value="1">
                        </div>
                    </div>

                </div>

                <div class="pro-dec-social">
                    <ul>
                        <li> <button class="btn btn-success add_cart"  data-productid="<?php echo $single_product->id;?>" data-productname="<?php echo $single_product->product_name;?>" data-productprice="<?php echo $single_product->price2;?>"  data-productimage="<?php echo $single_product->product_image;?>"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart "  aria-hidden="true"></span> Add To Cart</button></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="<?php echo base_url('asset/assets/js/vendor/jquery-1.12.0.min.js');?>"></script>
<script type="text/javascript">

    $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 

    $('.add_cart').click(function(){
        var product_id    = $(this).data("productid");
        var product_name  = $(this).data("productname");
        var product_price = $(this).data("productprice");
        var product_image = $(this).data("productimage");
        var quantity      = $('#qty').val();
        $.ajax({
            url : "<?php echo site_url('Pages/add_to_cart');?>",
            method : "POST",
            data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity,product_image:product_image},
            success: function(data){
               window.location.href= "<?php echo base_url('Pages/cart'); ?>";
           }
       });
    });


    function logout(){
        $.ajax({
          type:"POST", 
          url: '<?php echo base_url();?>User/logout',
          success: function(response){
            var obj = JSON.parse(response);
            if(obj.status=="true"){


                location.reload();    
            }

        }
    });
    }

</script>
