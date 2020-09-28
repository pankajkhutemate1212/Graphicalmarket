<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class urlchecker_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }
  public function get_rep_detail($url)

  {

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `temp_preview` where `url`= "'.$url.'"');

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  
   function insert_press_preview($pre_title,$pre_url,$pre_meta_title,$pre_key,$pre_desc,$pre_author,$pre_summary,$pre_date,$pre_img_url,$pre_news_type)
    {
        $sql= "INSERT INTO `temp_preview` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `img`,`publish_date`,`author`,`news_type`) VALUES ('$pre_title', '$pre_url', '$pre_summary', '$pre_meta_title', '$pre_key', '$pre_desc', '$pre_img_url','$pre_date','$pre_author','$pre_news_type')";
        $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            
             return 1;
        }
    }
    
  public function get_live_url_search_news($dat)
    {
	    $this->db->select("url");
        $this->db->from('press');
        $this->db->where('url', $dat);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        { 
            return 1;
        }
        else {
            return 0;
        }   
    }
   
   function get_live_url_search_technology($dat)
    {
	    $this->db->select("url");
        $this->db->from('technology');
        $this->db->where('url', $dat);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        { 
            return 1;
        }
        else {
            return 0;
        }   
    }
   function get_live_url_search_market($dat)
   {
	    $this->db->select("url");
        $this->db->from('business_update');
        $this->db->where('url', $dat);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        { 
            return 1;
        }
        else {
            return 0;
        }   
    }
   function get_live_url_search_industry($dat)
    {
	    $this->db->select("url");
        $this->db->from('industrydata');
        $this->db->where('url', $dat);
        $query = $this->db->get();

       if ($query->num_rows() > 0)

    { 
   return 1;
    }

    else {

      return 0;

    }   
    }
}