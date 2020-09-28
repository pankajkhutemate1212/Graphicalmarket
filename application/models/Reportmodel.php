<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Reportmodel extends CI_Model 



{



  public function __construct()



  {



    parent::__construct();



  }
    public function get_count() {
        return $this->db->count_all('press');
    }
	public function get_count_cat_pages($cat)
	{
		$this->db->where('type',$cat);
		$this->db->from("press");
		return $this->db->count_all_results();
	}
	public function get_count_author_pages($author)
	{
		$this->db->where('author',$author);
		$this->db->from("press");
		return $this->db->count_all_results();
	}

public function get_authors($limit, $start) {
	
        $this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
        $query = $this->db->get('press');
        return $query->result();
    }
public function all_category(){
    $this->db->reconnect();
    $this->db->select('*');
    $this->db->from('category_and_pages');
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    { 
      return $query->result();
    }
    else {
      return NULL;

    }   
    
}  

public function all_static_pages(){
    
     
    $this->db->select('*');
    $this->db->from('static_pages');
	 $this->db->order_by("id", "asc");
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    { 
      return $query->result();
    }
    else {
      return NULL;

    }   
    
    
}

public function get_social_pages(){
    
     $this->db->select('social_page_name');
     $this->db->from('social_pages');
     $query = $this->db->get();
     
        if ( $query->num_rows() > 0 )
            {
                 
                return  $query->result();
             }
}

public function get_comman_detail(){
    
     $this->db->select('*');
     $this->db->from('comman_table');
     $query = $this->db->get();
     
        if ( $query->num_rows() > 0 )
            {
                 
                return  $query->result_array();
             }
}
public function oldnews_10()

{
$this->db->reconnect();
$query = $this->db->query("call proc_trending()");

     return $query->result();

}
public function get_top_twenty_one_news()
{
$this->db->reconnect();
     $query = $this->db->query("call proc_homedata()");

     return $query->result();
}

public function get_single_latest_news(){
	
	$content_auhtor= array('Market Study Report');
    
     $this->db->select('*');
    $this->db->where_not_in("author", $content_auhtor);
    $this->db->order_by("date", "desc");

    $query = $this->db->get('press', 1); 
    
      return $query->row_array();
    
}


  public function get_10_report()



  {



    $this->db->select('*');
        $strwhere = array('status' => 'Y');

    $this->db->where($strwhere);

	  $this->db->order_by("id", "desc");

    $query = $this->db->get('reports', 10); 



    return $query->result();            



  }

public function get_full_report()



  {



    $this->db->select('report_name, url, publish_date, price_su, summary,cat_name');

 $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

//$query = $this->db->query('SELECT * , replace(date_format(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), "%d %b %Y"), ".","/") AS published_date, replace(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), ".","/") AS publi_date FROM  `reports` join `subcategory`on `reports`.`cat_name`=`subcategory`.`cat_name` order by publi_date desc, report_name asc');

    return $query->result();            



  }



  public function get_cat_report($url)



  {



    $this->db->select('cat_name');



    $this->db->from('catagories');



    $this->db->where("catagories.cat_url", $url);



    $query = $this->db->get();



    if ($query->num_rows() > 0)



    { 



      return $query->row_array();



    }



    else {



      return NULL;



    }   



  }



  public function get_cat_wise_report($cat)

  {



   /* $this->db->select('*');





    $this->db->from('reports');



    $this->db->where("reports.cat_name", $cat);



    $query = $this->db->get();



    return $query->result();  





    $query = $this->db->query('SELECT * FROM `catagories` join `subcategory`on `catagories`.`cat_name`=`subcategory`.`cat_name` Join `reports` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` where `catagories`.`cat_name`= "'.$cat.'"'); 
       return $query->result();
       
           $query = $this->db->query('SELECT * FROM `catagories` join `subcategory`on `catagories`.`cat_name`=`subcategory`.`cat_name` Join `reports` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` join `publisher` on `reports`.`publisher` = `publisher`.`pub_name`  where `catagories`.`cat_name`= "'.$cat.'"'); */
           
           $query = $this->db->query('SELECT * , replace(date_format(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), "%d %b %Y"), ".","/") AS published_date, replace(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), ".","/") AS publi_date FROM `catagories` join `subcategory`on `catagories`.`cat_name`=`subcategory`.`cat_name` Join `reports` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` join `publisher` on `reports`.`publisher` = `publisher`.`pub_name`  where `catagories`.`cat_name`= "'.$cat.'" order by publi_date desc, report_name asc'); 
       return $query->result();

  }

  



   public function get_pub_report($url)



  {



    $this->db->select('pub_name');



    $this->db->from('publisher');



    $this->db->where("publisher.pub_url", $url);



    $query = $this->db->get();



    if ($query->num_rows() > 0)



    { 



      return $query->row_array();



    }



    else {



      return NULL;



    }   



  }



  public function get_pub_wise_report($pub)

  {



    /*$this->db->select('*');





    $this->db->from('reports');

$this->db->order_by("id", "desc");

    $this->db->where("reports.publisher", $pub);



    $query = $this->db->get();



    return $query->result();  

$query = $this->db->query('SELECT * FROM `reports` Join `subcategory` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` where `reports`.`publisher`= "'.$pub.'"'); 
       return $query->result();*/
       $query = $this->db->query('SELECT *, replace(date_format(STR_TO_DATE(replace(publish_date,"-", "/"), "%m/%d/%Y"), "%d %b %Y"), ".","/") AS published_date, replace(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), ".","/") AS publi_date FROM `reports` Join `subcategory` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` where `reports`.`publisher`= "'.$pub.'" order by publi_date desc, report_name asc'); 
       return $query->result();

  }



  public function get_rep_detail($url)



  {



 /*   $this->db->select('*');



    $this->db->from('reports');



    $this->db->where("reports.url", $url);



    $query = $this->db->get();*/
    
    $query = $this->db->query('SELECT * ,  replace(date_format(STR_TO_DATE(replace(publish_date, "-","/"), "%m/%d/%Y"), "%d %b %Y"), ".","/") AS published_date FROM `reports` where `reports`.`url`= "'.$url.'"');



    if ($query->num_rows() > 0)



    { 



      return $query->row_array();



    }



    else {


show_404('');
     // return NULL;



    }   



  }

public function get_top_five_report($id)

{
	  $query = $this->db->query('SELECT * , REPLACE( STR_TO_DATE( REPLACE( publish_date,  "-",  "/" ) ,  "%m/%d/%Y" ) ,  ".",  "/" ) AS publi_date FROM  `reports` WHERE id != "'.$id.'" AND STR_TO_DATE( REPLACE( publish_date,  "-",  "/" ) ,  "%m/%d/%Y" ) <= CURDATE( ) ORDER BY publi_date DESC , id ASC LIMIT 5'); 

	    return $query->result(); 

}



public function get_top_ten_report()

{

	 $this->db->select('*');

	 

	  $this->db->order_by("id", "desc");

	  

	  $query = $this->db->get('reports', 10); 

	  

	    return $query->result(); 

}

public function get_top_five_news_report()

{$this->db->select('*');
$this->db->order_by("id", "desc");
$query = $this->db->get('press', 6); 
return $query->result(); 

}

public function get_top_five_business_updates()

{$this->db->select('*');
$this->db->order_by("id", "desc");
$query = $this->db->get('business_update', 5); 
return $query->result(); 

}
    
public function get_top_five_trends()

{$this->db->select('*');
$this->db->order_by("id", "desc");
$query = $this->db->get('industrydata', 5); 
return $query->result(); 

}
public function get_top_five_technology()

{$this->db->select('*');
$this->db->order_by("id", "desc");
$query = $this->db->get('technology', 5); 
return $query->result(); 

}

  public function get_top_five_pub_report($publisher, $id)

  {
  	$query = $this->db->query('SELECT *, replace(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), ".","/") AS publi_date FROM `reports` where `publisher`= "'.$publisher.'" AND `id`!= "'.$id.'" AND STR_TO_DATE( REPLACE( publish_date,  "-",  "/" ) ,  "%m/%d/%Y" ) <= CURDATE() order by publi_date desc, report_name asc limit 5'); 

   



    return $query->result(); 

  }

  

  

public function get_top_five_cat_report($catcat, $reportid)

  {


    
     $query = $this->db->query('SELECT *, replace(STR_TO_DATE(replace(publish_date,"-","/"), "%m/%d/%Y"), ".","/") AS publi_date FROM `catagories` join `subcategory`on `catagories`.`cat_name`=`subcategory`.`cat_name` Join `reports` on `subcategory`.`sub_cat_name`=`reports`.`cat_name` where `catagories`.`cat_name`= "'.$catcat.'" and `reports`.`id` != "'.$reportid.'" AND STR_TO_DATE( REPLACE( publish_date,  "-",  "/" ) ,  "%m/%d/%Y" ) <= CURDATE() order by publi_date desc, report_name asc limit 5'); 
       return $query->result();

  }



  public function get_cat_price_desc($publisher)

  {

      $this->db->select('*');

      $this->db->from('publisher'); 



    $this->db->where('publisher.pub_name', $publisher);



    //$this->db->order_by("id", "desc");



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



    $this->db->from('reports');



    $this->db->where("reports.id", $id);



    $query = $this->db->get();



    if ($query->num_rows() > 0)



    { 



      return $query->row_array();



    }



    else {


show_404('');
    //  return NULL;



    }   



  }

  public function get_search_result($match)



  {




$query = $this->db->query('SELECT *, date_format(STR_TO_DATE(replace(publish_date, "-", "/"), "%m/%d/%Y"), "%d %b %Y") AS published_date, replace(STR_TO_DATE(replace(publish_date, "-", "/"), "%m/%d/%Y"), ".","/") AS publi_date FROM `reports` where `report_name` like "%'.$match.'%" order by publi_date desc, report_name asc');

    return $query->result();            



  }

}



