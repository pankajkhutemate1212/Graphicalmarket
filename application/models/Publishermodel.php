<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publishermodel extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_all_publishers()

  {

    $this->db->select('*');

    $this->db->from('publisher');

    $this->db->order_by("pub_name", "asc");

    $query = $this->db->get(); 

       return $query->result();          

  }
  public function get_pub_logo($pub)
  {

    $this->db->select('*');


    $this->db->from('publisher');

    $this->db->where("publisher.pub_name", $pub);

    $query = $this->db->get();

    return $query->result();  

  }
  
}

