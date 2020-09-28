<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class press_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  public function get_industry_report()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('industrydata'); 

    return $query->result();            

  }
  public function get_technology_report()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('technology'); 

    return $query->result();            

  }
  public function get_business_report()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('business_update'); 

    return $query->result();            

  }
  
  public function home_get_report()

  {

    $this->db->select('*');


    $this->db->order_by("id", "desc");

    $query = $this->db->get('press', 11); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array(

                      'status' => 'Y');

    $this->db->where($strwhere);

  //  $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('press');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.category_id", $cat_id);

  //  $this->db->order_by("press.creation_date", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($url)

  {

    $this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  public function get_business_detail($url)

  {

    $this->db->select('*');

    $this->db->from('business_update');

    $this->db->where("business_update.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
   public function get_industry_detail($url)

  {

    $this->db->select('*');

    $this->db->from('industrydata');

    $this->db->where("industrydata.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
   public function get_technology_detail($url)

  {

    $this->db->select('*');

    $this->db->from('technology');

    $this->db->where("technology.url", $url);

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

