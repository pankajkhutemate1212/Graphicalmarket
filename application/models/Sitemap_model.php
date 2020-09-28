<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sitemap_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

 //   $strwhere = array('status' => 'Y');

  //  $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

   // $query = $this->db->get('reports', 10); 

    return $query->result();            

  }


//Health
  public function get_all_report_health()

  {

    $this->db->select('*');

   $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

   $this->db->where($strwhere);

  $this->db->order_by("id", "desc");
  
  $this->db->where("type", "health");

  $query = $this->db->get('press',333); 

    return $query->result();            

  }
  
//retail
 public function get_all_report_retail()

  {

    $this->db->select('*');

   $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

   $this->db->where($strwhere);

  $this->db->order_by("id", "desc");
  
  $this->db->where("type", "retail");

  $query = $this->db->get('press',333); 

    return $query->result();            

  }
 
//world
public function get_all_report_world()

  {

    $this->db->select('*');

   $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

   $this->db->where($strwhere);

  $this->db->order_by("id", "desc");
  
  $this->db->where("type", "world");

  $query = $this->db->get('press',333); 

    return $query->result();            

  }
  
  public function get_news_sitmap_news()

  {

    $this->db->select('*');

   $strwhere = "date > DATE_SUB(convert_tz(now(),@@session.time_zone,'+05:30'), INTERVAL 48 HOUR)";

   $this->db->where($strwhere);

  $this->db->order_by("date", "desc");

  $query = $this->db->get('press',1000); 
 

    return $query->result();            

  }
  
    public function get_all_u_report()

  {

    $this->db->select('*');

 //  $strwhere = array('status' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

  public function get_all_xml_report()

  {

    $this->db->select('*');

    $strwhere = array('');

    $this->db->where($strwhere);

    $this->db->order_by("publish_date", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

   public function get_all_up_report()

  {

    $this->db->select('*');

    $strwhere = array('');

    $this->db->where($strwhere);

    $this->db->order_by("publish_date", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('reports');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->from('reports');

    $this->db->where("reports.category_id", $cat_id);

    $this->db->order_by("reports.creation_date", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($url)

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->from('reports');

    $this->db->where("reports.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  
 public function  get_business_rep_detail_seo(){
	
	
 $this->db->select('*');

  $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

    $this->db->where($strwhere);

  $this->db->order_by("id", "desc");

    $query = $this->db->get('business_update', 333); 

    return $query->result(); 	
	   
	 
	 
 }
 
 
  public function get_industry_rep_detail_seo(){
	  


 $this->db->select('*');

   $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

   $this->db->where($strwhere);

  $this->db->order_by("id", "desc");

    $query = $this->db->get('industrydata', 333); 
    

    return $query->result(); 	
	   
   } 


 public function get_technology_rep_detail_seo(){
	  


 $this->db->select('*');

   $strwhere = 'date > DATE_SUB(NOW(), INTERVAL 48 HOUR)';

   $this->db->where($strwhere);

  $this->db->order_by("id", "desc");

    $query = $this->db->get('technology', 333); 
    

    return $query->result(); 	
	   
   } 


}

