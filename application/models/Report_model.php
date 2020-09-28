<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports', 10); 

    return $query->result();            

  }
  
   public function get_all_catcustom()

  {
      $this->db->select('*');
      $this->db->from('categories');
      $this->db->order_by("id");

    $query = $this->db->get(); 

    return $query->result();
  }
  
  public function get_report_home()

 {

   $this->db->select('*');

  $this->db->where_in('id', array('730','731','732','733','734'));

   $this->db->order_by("id", "desc");

   $query = $this->db->get('reports', 10);

   return $query->result();            

 }
  public function get_rss_report()
  {
    $this->db->select('*');
    $strwhere = array();
    $this->db->where($strwhere);
    $this->db->order_by("publish_date", "desc");
    $query = $this->db->get('reports'); 
    return $query->result();            
  }

  public function get_all_report()

  {

    $this->db->select('*');

    $strwhere = array();

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

   public function get_all_up_report()

  {

    $this->db->select('*');

    $strwhere = array('status' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }
  public function get_all_up_adm_report()

  {

    $this->db->select('*');

    $strwhere = array('status' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array('monitor' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('reports');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $strwhere = array('status' => 'Y');

    $this->db->from('reports');

    $this->db->where("reports.category_id", $cat_id, $strwhere);
	$this->db->where($strwhere);
    $this->db->order_by("id", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }
  public function get_cat_up_report($cat_id)

  {

    $this->db->select('*');

    $strwhere = array('status' => 'N');

    $this->db->from('reports');

    $this->db->where("reports.category_id", $cat_id, $strwhere);
	$this->db->where($strwhere);
    $this->db->order_by("id", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($id)

  {

    $this->db->select('*');

    $strwhere = array();

    $this->db->from('reports');

    $this->db->where("reports.url", $id);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
 public function get_rep_detail_id($id)

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->from('reports');

    $this->db->where("reports.id", $id);

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

