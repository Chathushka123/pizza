

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Product
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Product</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th><input type="checkbox" onclick="checkAll(this)"></th>
              <th>ID</th>
              <th>Full Name</th>
              <th>Phone</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orders as $row) {

             $cartArray = unserialize($row->cartContentString);

          //  foreach( $cartArray as $value){

          //    $append = echo'<tr><td>'.$value['name'].'</td></tr>';
          // }

             ?>

             <tr>
              <td><input type="checkbox" name=""></td>
              <td><?php echo $row->id; ?></td>
              <td><?php echo $row->full_name; ?></td>
              <td><?php echo $row->phone; ?></td>
           
              <td><a data-toggle="modal"  class="vieworder" data-id="<?php echo $row->id; ?>" data-target="#myModal" >View</a> </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
         <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Image</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody id="orders">

        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>
<!-- jQuery 2.1.3 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   $.noConflict();
   $('#example').DataTable(

   {     

    "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
    "iDisplayLength": 5
  } 
  );
 } );

  $(".vieworder").click(function () {

    var serialize = $(this).data('id');

    $.ajax({
      url: '<?php echo base_url();?>dashboard/show_items',
                // data: {query:query},
                method: "POST",
                data:{ 
                  'serialize':serialize

                },
                success: function(data) {
                 var obj = JSON.parse(data);
                 // console.log(obj);
                 $('#orders').html('');
                 $.each(obj.data, function(key,val) {
                  var a = parseFloat(val.qty)*parseFloat(val.price);

                  $('#orders').append(
                    "<tr>"+
                    "<td id='item_code'>"+val.name+"</td>"+
                    "<td id='item_name'>"+val.price+"</td>"+
                    "<td id='item_name'>"+val.qty+"</td>"+
                    "<td id='item_code'><img src='../uploads/"+val.image+"' width='50' height='50' class='contentimg'></td>"+
                    "<td id='item_name'>"+a+"</td>"+

            //"<td id='date'>"+val.dtmDate+"</td>"+
            "</tr>"
            );

                });
               }
             });


  });
</script>