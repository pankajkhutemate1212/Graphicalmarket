<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorymodel extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_all_categories()

  {

    $this->db->select('*');

    $this->db->from('catagories');

    $this->db->order_by("cat_id", "asc");

    $query = $this->db->get(); 

       return $query->result();          

  }
  public function get_cat_detail_report($cat)

  {

    $this->db->select('*');

    $this->db->from('catagories');

    $this->db->where("catagories.cat_name", $cat);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  public function get_sub_cat($cat)
  {
 	$this->db->select('*');

    $this->db->from('subcategory');

    $this->db->where("sub_cat_name", $cat);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   
 }
 public function get_main_cat($main_cat)
  {
 	$this->db->select('*');

    $this->db->from('catagories');

    $this->db->where("cat_name", $main_cat);

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

