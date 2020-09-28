<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model 
{
  public function __construct() 
  {
	  parent::__construct();
  }
  
  //health
  public function get_news_result($match)
  {
  	$this->db->select('*');

    $this->db->like('name', $match);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('press');

    return $query->result();
  }
  
  
  //retail
  public function get_business_result($match)
  {
  	$this->db->select('name, url, full_desc');

    $this->db->like('name', $match);

    $this->db->order_by("id", "desc");
    
    $this->db->where("type", "business");

    $query = $this->db->get('press');

    return $query->result();
  }
  
  //tech
  public function get_tech_result($match)
  {
  	$this->db->select('name, url, full_desc');

    $this->db->like('name', $match);

    $this->db->order_by("id", "desc");
    
    $this->db->where("type", "tech");

    $query = $this->db->get('press');

    return $query->result();
  }
  
  public function get_headlines_result($match)
  {
      
    $this->db->select('name, url, full_desc');

    $this->db->like('name', $match);

    $this->db->order_by("id", "desc");
    
    $this->db->where("type", "headlines");

    $query = $this->db->get('press');

    return $query->result();
  }
 }