<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed_model extends CI_Model {
    
    
    public function __construct()

  {

    parent::__construct();

  } 
  
  public function get_business_data()

  {

    $this->db->select('*');

    $this->db->order_by("publish_date", "desc");
    
    $this->db->where("type", "health");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  
  
   public function get_report()

  {

    $this->db->select('*');

    $this->db->order_by("publish_date", "desc");
    
    $this->db->where("type", "retail");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  
  
   public function get_industry_data()

  {

    $this->db->select('*');


    $this->db->order_by("publish_date", "desc");
    
     $this->db->where("type", "world");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  
  
   public function get_tech_data()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('technology'); 

    return $query->result();            

  }
    
}