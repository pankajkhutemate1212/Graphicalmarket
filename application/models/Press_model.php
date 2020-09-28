<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class press_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }
 
  public function get_cat_by_all_news($limit,$start,$cat_name){
      $catname=str_replace(" ","-",$cat_name);
	//$content_auhtor= array('Pankaj Singh','Saif Bepari');
	$this->db->select('*');
    $this->db->where("type", $catname);
	//$this->db->where_in("author", $content_auhtor);
	 
	  $this->db->limit($limit, $start);
	  $this->db->order_by("id", "desc");
    $query = $this->db->get('press');

    return $query->result(); 
	
      
  }
   
  public function get_report()

  {

    $this->db->select('*');
    $this->db->order_by("id", "desc");
    $this->db->where("type", "health");
    $query = $this->db->get('press'); 
    return $query->result();            

  }
  
  public function get_news_by_cat($url){
      $this->db->select('*');
    $this->db->order_by("id", "desc");
    $this->db->where("type", $url);
    $query = $this->db->get('press'); 
    return $query->result();   
     
  }
  
  public function get_meta_title_by_cat($url){
      
    $this->db->select('meta_title,meta_description');
    $this->db->order_by("id", "desc");
    $this->db->where("type", $url);
    $query = $this->db->get('meta_data'); 
    return $query->result(); 
      
  }
  
   public function get_retail_data()

  {

    $this->db->select('*');
    
    $this->db->where('type','retail');
	
	$this->db->order_by("date", "desc");
    
    $query = $this->db->get('press'); 

    return $query->result();            

  }
   public function get_headlines_data()

  {

    $this->db->select('*');
    
    $this->db->where('type','headlines');
	
	$this->db->order_by("date", "desc");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  
  
   public function get_reports_data(){
      
    $this->db->select('*');

    $this->db->order_by("id", "desc");
    
    $this->db->where('type','reports');

    $query = $this->db->get('press'); 

    return $query->result(); 
      
  }
  
  public function get_tech_data()

  {

    $this->db->select('*');
    
     $this->db->where('type','tech');
	 $this->db->order_by("date", "desc");

    $query = $this->db->get('press'); 
	

    return $query->result();            

  }
  
  public function get_business_data(){
      
      $this->db->select('*');
    
     $this->db->where('type','business');
	 
	 $this->db->order_by("date", "desc");

    $query = $this->db->get('press'); 

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

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `press` where `url`= "'.$url.'"');
    

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

     echo show_404();

    }   

  }
  
  
  public function get_top_five_report($id, $author_name)

{
	  $this->db->select('id, name, url, full_desc, author,type,image_url');
      $this->db->where('id !=', $id);
      $this->db->where('author =', $author_name);
      $this->db->order_by("id" ,'DESC');
	  //$this->db->limit(5, 5);

     $query = $this->db->get('press',3); 
	 
	 return $query->result(); 


}

  
  public function get_business_rep_detail($url)

  {

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `business_update` where `url`= "'.$url.'"');


    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  
  
  public function get_top_five_bussiness_report($id){
	
	  $this->db->select('id, name, url, full_desc, author');
      //$this->db->from('business_update');
      $this->db->where("id !=" ,$id);
      $this->db->order_by("id" ,'DESC');
	  //$this->db->limit(5, 5);

     $query = $this->db->get('business_update',3); 
	 
	 return $query->result(); 

	
  }
  
  
  public function get_industry_rep_detail($url)

  {

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `industrydata` where `url`= "'.$url.'"');


    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  public function get_tech_rep_detail($url)

  {

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `technology` where `url`= "'.$url.'"');


    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  
  public function get_top_five_tech_report($id){


$this->db->select('id, name, url, full_desc, author');
      $this->db->where('id !=', $id);
      $this->db->order_by("id" ,'DESC');
	  //$this->db->limit(5, 5);

     $query = $this->db->get('technology',3); 
	 
	 return $query->result(); 


}
   public function get_top_five_industry_report($id){
	  
	  
	    $this->db->select('id, name, url, full_desc, author');
      $this->db->where('id !=', $id);
      $this->db->order_by("id" ,'DESC');
	  //$this->db->limit(5, 5);

     $query = $this->db->get('industrydata', 3); 
	 
	 return $query->result(); 

	  
	  
  }
  
  
   /*public function get_report_url($id)
   {
     $this->db->select('url');

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
   }  */
   
   //seo
   
   public function get_business_rep_detail_seo(){
	   
	   
	   $query = $this->db->query('SELECT name, url, full_desc ,publish_date FROM `business_update` order by id desc');


    if ($query->num_rows() > 0)

    { 

      return $query->result();

    }

    else {

      return NULL;

    }  
	   
	   
   }
  
 public function get_industry_rep_detail_seo(){
	 
	 
	 $query = $this->db->query('SELECT name, url, full_desc , publish_date FROM `press` order by id desc ');


    if ($query->num_rows() > 0)

    { 

      return $query->result();

    }

    else {

      return NULL;

    }   
	   
   }  
   
   public function get_rep_detail_seo(){
	   
	  // $query = $this->db->query('SELECT name, url, full_desc , publish_date FROM `press` order by id desc');
    $this->db->select('*');

    $this->db->from('press');
$this->db->order_by('id', 'desc');

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->result();

    }

    else {

      return NULL;

    }   
	   
   } 
   
   

//code satart here to get author news

public function get_author_by_news($auther, $id){
      
         $this->db->select('name, url, full_desc, author,publish_date');
      $this->db->where('id !=', $id);
       $this->db->where('author =', $auther);    
     $this->db->order_by("id" ,'DESC');
      //$this->db->limit(5, 5);

    $query = $this->db->get('press',3); 
     
     return $query->result();
   }
  
   public  function get_author_by_industry($auther, $id){
      
          $this->db->select('name, url, full_desc, author,publish_date');
     $this->db->where('id !=', $id);
      $this->db->where('author =', $auther);
      $this->db->order_by("id" ,'DESC');
      //$this->db->limit(5, 5);

    $query = $this->db->get('industrydata', 3); 
     
     return $query->result();
      
   }
  
   public function get_author_by_market($auther, $id){
      
         $this->db->select('name, url, full_desc, author,publish_date');
           $this->db->where('id !=', $id);
       $this->db->where('author =', $auther);    
     $this->db->order_by("id" ,'DESC');
      //$this->db->limit(5, 5);

    $query = $this->db->get('business_update',3); 
     
     return $query->result();
   }
  
   public function get_author_by_technology($auther, $id){
      
     $this->db->select('name, url, full_desc, author,publish_date');
     $this->db->where('id !=', $id);
     $this->db->where('author =', $auther);    
     $this->db->order_by("id" ,'DESC');
     $query = $this->db->get('technology',3); 


            return $query->result();

     
     

   }

//code end here 
 //chnages by uttareshwar @31/jul/2019
  public function get_cat_all_news_by_marketing_team($cat_name){
	  
	
	 
	 $this->db->select('*');
    $this->db->order_by("id", "desc");
    $this->db->where("type", $cat_name);
    $query = $this->db->get('press'); 
    return $query->result(); 
	  
	  
  }
  
  
  //chnages by uttareshwar @31/jul/2019 
public function get_related_report_by_keyword($id, $author_name,$sub_related_catname, $main_cat,$sub_related_id){
	  
	 if(!empty($sub_related_id)){
		  $str_arry =  explode(",",$sub_related_id);
		  
		  $array_id=array();
		  for($i=0; $i < count($str_arry); $i++){
                  
                   
		      $array_id[]=$str_arry[$i];
			
              }
	
		  
		  $this->db->select("*");
       $this->db->from('press');
	   
	  $this->db->where_in('id',  $array_id);
             
       $query = $this->db->get();
	  
	   return  $query->result();
		  
	  }else{
		  
		  $this->db->select("*");
       $this->db->from('press');
              
       $this->db->where_not_in('id', $id);
	   $this->db->where('author', $author_name);
	    $this->db->where('type', $main_cat);
	   $this->db->where('promotion_cat', $sub_related_catname);
       $this->db->order_by("id", "desc");
       $this->db->limit(5);
       $query = $this->db->get();
	  
	  return  $query->result();
	  }
	 
	 
  }  
  
   public function get_rep_detail_by_id($url)

  {

	$query = $this->db->query('SELECT * , date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y") AS published_date FROM `press` where `url_end_id`= '.$url);
    

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

     echo show_404();

    }   

  }

}

