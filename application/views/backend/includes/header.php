<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Isuri | Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />    
  <!-- FontAwesome 4.3.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />    
  <!-- Theme style -->
  <link href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
     folder instead of downloading all of them to reduce the load. -->
     <link href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
     <!-- iCheck -->
     <link href="<?php echo base_url('assets/admin/plugins/iCheck/flat/blue.css');?>" rel="stylesheet" type="text/css" />
     <!-- Morris chart -->
     <link href="<?php echo base_url('assets/admin/plugins/morris/morris.css');?>" rel="stylesheet" type="text/css" />
     <!-- jvectormap -->
     <link href="<?php echo base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
     <!-- Date Picker -->
     <link href="<?php echo base_url('assets/admin/plugins/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
     <!-- Daterange picker -->
     <link href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
     <!-- bootstrap wysihtml5 - text editor -->
     <link href="<?php echo base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />

     <style type="text/css">
     .skin-blue .main-header .navbar {
      background-color: #9e42a9 !important;
    }

    .skin-blue .main-header .logo {
      background-color: #131619 !important;
      color: #fff !important;
      border-bottom: 0 solid transparent;
    }
  </style>
</head>

<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo"><b>Dashboard</b></a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
       
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p>user</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
       
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
         
          <li class="treeview">
            <a href="<?php echo base_url('Dashboard/Add_product');?>">
              <i class="fa fa-dashboard"></i> <span>Add Product</span></i>
            </a>

          </li>
          <li class="treeview">
            <a href="<?php echo base_url('Dashboard/view_orders');?>">
              <i class="fa fa-dashboard"></i> <span>View Orders</span></i>
            </a>

          </li>

          <li class="treeview">
            <a href="<?php echo base_url('Dashboard/view_products');?>">
              <i class="fa fa-dashboard"></i> <span>View Products</span></i>
            </a>

          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
