<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


  function __construct() {
    parent::__construct();
    //$this->load->model('Admin_model');
    
  }
  public function index()
  {
    $this->User_login();
  }

  public function load_include_with_sub_nav($title,$page,$data){ 
    $session_id=$this->session->userdata('user_login');
    $user = $session_id[0]['client_id'];
    //$datas['menus'] = $this->Admin_model->get_categories($user);
    $this->load->view('backend/includes/header');
    $this->load->view($page,$data);
    $this->load->view('backend/includes/footer');
  }


  public function Dashboard()
  {
    $title['title']="Home Page";
    $data = '';
    $this->load_include_with_sub_nav($title,'backend/dashboard',$data);
  }

  public function View_Ads()
  {
    $title['title']="View Ads";
    $data = '';
    $this->load_include_with_sub_nav($title,'backend/view_ads',$data);
  }
}