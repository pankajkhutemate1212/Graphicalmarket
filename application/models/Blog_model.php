<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

    //$strwhere = array();

    //$this->db->where($strwhere);

    $this->db->order_by("date", "desc");

    $query = $this->db->get('blogs'); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array('status' => 'Y');

    $this->db->where($strwhere);

  //  $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('blogs');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $this->db->from('blogs');

    $this->db->where("blogs.category_id", $cat_id);

  //  $this->db->order_by("press.creation_date", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($url)

  {

    $this->db->select('*');

    $this->db->from('blogs');

    $this->db->where("blogs.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }

}

