<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


  function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('Dashboard_model');

  }

  public function load_include_with_sub_nav($page,$data){ 

    $this->load->view('includes/header');
    $this->load->view($page,$data);
    $this->load->view('includes/footer');
  }

  public function index()
  {
    $this->Home();
  }

  public function Home()
  {  

    $data['products'] = $this->Dashboard_model->load_products();
    $this->load_include_with_sub_nav('home',$data);
  }

  public function Login()
  {  
    $data['']= '';
    $title['title']="Home";
    $this->load_include_with_sub_nav('register',$data);
  }

  public function Contact_us()
  {  
    $data['']= '';
    $title['title']="Contact Us";
    $this->load_include_with_sub_nav('contact',$data);
  }

  public function About_us()
  {  
    $data['']= '';
    $title['title']="Contact Us";
    $this->load_include_with_sub_nav('about',$data);
  }

  public function send_mail() {
    $from_email = "";
    $to_email = $this->input->post('from_email');
        //Load email library
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
'smtp_user' => 'xxx@gmail.com',// your mail name
'smtp_pass' => '*****',
'mailtype'  => 'html', 
'charset'   => 'iso-8859-1',
'wordwrap' => TRUE
);
    $this->load->library('email', $config);

    $this->email->from($from_email, 'Identification');
    $this->email->to($to_email);
    $this->email->subject('Send Email Codeigniter');
    $this->email->message('The email send using codeigniter library');
        //Send mail
    if($this->email->send())
    {
      $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
      redirect('Pages');
    }
    else
    {
      $this->session->set_flashdata("email_sent","You have encountered an error");
      redirect('Pages');
    }   
  }


  public function Single_product()
  { 
    $id = $_GET['id']; 

    $data['single_product'] = $this->Dashboard_model->single_product($id);

    $this->load_include_with_sub_nav('single_product',$data);
  }

  function add_to_cart(){ 
    $data = array(
      'id' => $this->input->post('product_id'), 
      'name' => $this->input->post('product_name'), 
      'price' => $this->input->post('product_price'), 
      'qty' => $this->input->post('quantity'), 
      'image' => $this->input->post('product_image')
    );

    $this->cart->insert($data);
        //echo $this->show_cart(); 
    
  }

  function removeItem($rowid){
        // Remove item from cart
    $remove = $this->cart->remove($rowid);

        // Redirect to the cart page
    $this->session->set_flashdata('error_msg', 'Item Removed.');
    redirect('Pages/cart');
  }

  public function Cart()
  { 
    $data='';
    $this->load_include_with_sub_nav('cart',$data);
  }

  public function Checkout()
  { 
    if ( ! $this->session->userdata('logged_in'))
    { 
     $this->session->set_flashdata('success_msg', 'Please Login to Order.');
     redirect('Pages/Cart');
   }
    $data='';
    $this->load_include_with_sub_nav('checkout',$data);
  }

  public function order()
  {
    $user_id = $this->session->userdata('logged_in');
    $user = $user_id['user_id'];
    $data=array(
     'full_name'=>$this->input->post('first_name').' '.$this->input->post('last_name'),
     'address'=>$this->input->post('address').','.$this->input->post('city'),
     'phone'=>$this->input->post('phone_number'),
     'email'=>$this->input->post('email_address'),
     'cartContentString'=>serialize($this->cart->contents()),
     'customer_id'=>$user
   );

    $result=$this->db->insert('orders',$data);
    if($result)
    {
      $this->cart->destroy();
      $this->session->set_flashdata('success_msg', 'Successfully Ordered.');
      redirect('Pages');
    }
    else{
     redirect('Pages');
   }

 }
}