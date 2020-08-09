<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Edit Product
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Product</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Edit Product</h3>
          </div><!-- /.box-header -->
          <!-- form start -->

           <?php echo form_open_multipart('Dashboard/update_product',array('name'=>'addproduct'));?>
         <!--  <form enctype="multipart/form-data" action="<?php echo base_url('Dashboard/save_product');?>" method="post" name="addproduct" >
 -->


            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control"  placeholder="Enter Name" value="<?php echo $edit_product->product_name;?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="text" name="price1" class="form-control" id="price1" placeholder="Enter Price" value="<?php echo $edit_product->price1;?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sale Price</label>
                <input type="text" name="price2" value="<?php echo $edit_product->price2;?>" class="form-control" id="price2" placeholder="Enter Sale Price">
              </div>
        <input type="hidden" name="hidden_product" value="<?php echo $edit_product->id;?>">
              <div class="form-group">
                <label for="exampleInputFile">Product Image</label>
            
            <img width="100" height="100" src = "<?=site_url('uploads/' . $edit_product->product_image); ?>">
            <input type="hidden" name="hidden_image" value="<?php echo $edit_product->product_image;?>">
                <input type='file' name='userfile' />
              </div> 
         
            </div><!-- /.box-body -->

           <div class="box-footer">
              <button type="submit" class="finish btn-success btn">Submit</button>
               
            </div>
          </form> 
        </div><!-- /.box -->
      </div><!--/.col (left) -->
      <!-- right column -->     
    </div>   <!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url('assets/admin/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
<!-- jQuery UI 1.11.2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script type="text/javascript">
  $(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='addproduct']").validate({
    // Specify validation rules
    rules: {
  
       product_name: {
        required: true
      },
      price1: {
        required: true,
        number: true
      },
      price2: {
        required: true,
        number: true
      }

      
    },
    // Specify validation error messages
    
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>