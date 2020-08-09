<?php
class Dashboard_model extends CI_model{

  public function add($data_products){
    return $this->db->insert('products', $data_products);
    
  }

  public function load_products()
  {
    $this->db->select('*');
    $this->db->from('products');
    $query = $this->db->get();
    return $query->result();
  }


  public function single_product($id)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $ret = $query->row();
    return $ret;
  }

  public function edit_product($id)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $ret = $query->row();
    return $ret;
  }

  public function orders()
  {
    $this->db->select('*');
    $this->db->from('orders');
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function view_products()
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function serialize_orders($serialize)
  {
   $this->db->select('*');
   $this->db->from('orders');
   $this->db->where('id',$serialize);
   $query = $this->db->get();
   return $query->result_array();
 }

 function update_product($data_products,$id)
 {
  $this->db->where('id', $id);
  return $query = $this->db->update('products',$data_products);
}

public function update_product_image($data_products,$id)
{
  
  $this->db->where('id', $id);
  return $query = $this->db->update('products',$data_products);
}

}

?>