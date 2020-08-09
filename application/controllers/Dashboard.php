<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


  function __construct() {
    parent::__construct();
    $this->load->model('Dashboard_model');
    $this->load->helper(array('form', 'url'));
    
  }
  public function index()
  {
    $this->Dashboard();
  }

  public function load_include_with_sub_nav($title,$page,$data){ 

    $this->load->view('backend/includes/header');
    $this->load->view($page,$data);
    $this->load->view('backend/includes/footer');
  }


  public function Dashboard()
  {
    $title['title']="Dashboard";
    $data = '';
    $this->load_include_with_sub_nav($title,'backend/dashboard',$data);
  }

  public function Add_product()
  {
    $title['title']="Dashboard";
    $data = '';
    $this->load_include_with_sub_nav($title,'backend/add_product',$data);
  }

  public function View_orders()
  {
    $title['title']="View_orders";
    $data['orders'] = $this->Dashboard_model->orders();
    $this->load_include_with_sub_nav($title,'backend/view_orders',$data);
  }

  public function save_product()
  {
    $image = $_FILES['userfile']['name'];
    $config = array(
      'upload_path' => "./uploads/",
      'allowed_types' => "gif|jpg|png|jpeg|pdf",
      'overwrite' => TRUE,
'max_size' => "10048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)

);
    $this->load->library('upload', $config);
    if($this->upload->do_upload())
    {
      $data = array('upload_data' => $this->upload->data());
      $data_products = array(
        'product_name'    => $this->input->post('product_name'),
        'product_image'   => $image,
        'price1'    => $this->input->post('price1'),
        'price2'   => $this->input->post('price2'));
      $result = $this->Dashboard_model->add($data_products);
      if( $result)
      {
         $this->session->set_flashdata('success', 'Successfully Added');
// After that you need to used redirect function instead of load view such as 
     redirect("dashboard/view_products");
      }
      
    }
    else
    {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('file_view', $error);
    }

  }

  public function update_product()
  {
    $hidden_product = $this->input->post('hidden_product');
    $hidden_image = $this->input->post('hidden_image');

    if ($_FILES['userfile']['size'] == 0 ){

     $data_products = array(
      'product_name'    => $this->input->post('product_name'),
      'product_image'   => $hidden_image,
      'price1'    => $this->input->post('price1'),
      'price2'   => $this->input->post('price2'));
     $result = $this->Dashboard_model->update_product($data_products,$hidden_product);
     $this->session->set_flashdata('success', 'Successfully Updated');
// After that you need to used redirect function instead of load view such as 
     redirect("dashboard/view_products");
   }
   else
   {

     $image = $_FILES['userfile']['name'];

     $config = array(
      'upload_path' => "./uploads/",
      'allowed_types' => "gif|jpg|png|jpeg|pdf",
      'overwrite' => TRUE,
'max_size' => "10048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)

);
     $this->load->library('upload', $config);
     if($this->upload->do_upload())
     {
      $data = array('upload_data' => $this->upload->data());
      $data_products = array(
        'product_name'    => $this->input->post('product_name'),
        'product_image'   => $image,
        'price1'    => $this->input->post('price1'),
        'price2'   => $this->input->post('price2'));
      $result = $this->Dashboard_model->update_product_image($data_products,$hidden_product);
       $this->session->set_flashdata('success', 'Successfully Updated');
// After that you need to used redirect function instead of load view such as 
     redirect("dashboard/view_products");


    }

  }

}

public function view_products()
{
  $title['title']="view_product";
  $data['products'] = $this->Dashboard_model->view_products();
  $this->load_include_with_sub_nav($title,'backend/view_product',$data);
}

public function show_items()
{

  $serialize = $this->input->post('serialize');
  $data['serialize_orders'] = $this->Dashboard_model->serialize_orders($serialize);

  $result = unserialize($data['serialize_orders'][0]['cartContentString']);
  echo json_encode(array('status' =>'true','data'=>$result));

}

public function edit_product($id)
{
  $title['title']="edit_product";
  $data['edit_product'] = $this->Dashboard_model->edit_product($id);
  $this->load_include_with_sub_nav($title,'backend/edit_product',$data);
}


}