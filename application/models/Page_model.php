<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model 
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_page($url)
  {
    $this->db->select('id, name, url, description, is_index, meta_title, meta_keywords, meta_description, status');
    $this->db->from('pages');
   
    $this->db->where('url', $url);
   
    $query = $this->db->get();
   
    if ($query->num_rows() > 0)
    { 
      return $query->row_array();
    }
    else {
      show_404('');
    }   
  }
}