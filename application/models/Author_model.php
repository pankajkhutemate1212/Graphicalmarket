<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author_model extends CI_Model 
{
  public function __construct()

  {

    parent::__construct();

  }
  public function get_all_author()
  {
  	$this->db->select('*');

    $this->db->from('author');
    
    $this->db->where("id < ", 10);

    $query = $this->db->get();
    
    return $query->result();
  }
  public function get_author_details($url)
  {
  	$this->db->select('*');

    $this->db->from('author');

    $this->db->where("author.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)
    { 
      return $query->row_array();
    }
  }
  
  //health
  public function get_news_by_author($name)
  {
  	$this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.author", $name);
    
  $this->db->order_by("press.date", 'desc');

    $query = $this->db->get();

    return $query->result();
  }
  public function get_news_by_author_pagination($limit,$start,$name)
  {
  	$this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.author", $name);
    
  $this->db->order_by("press.id", 'desc');
  $this->db->limit($limit, $start);

    $query = $this->db->get();

    return $query->result();
  }
  //retail
  public function get_market_by_author($name)
  {
  	$this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.author", $name);
    
  //  $this->db->where("press.type", 'retail');

    $query = $this->db->get();

    return $query->result();
  }
  
  //world
  public function get_industry_by_author($name)
  {
  	$this->db->select('*');

    $this->db->from('press');
  
    $this->db->where("press.author", $name);
  //  $this->db->where("press.type", 'world');

    $query = $this->db->get();

    return $query->result();
  }
}