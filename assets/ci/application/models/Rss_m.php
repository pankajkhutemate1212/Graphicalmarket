<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rss_m extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function get_rss_report(){

$query=$this->db->query("SELECT r.name,r.id,summary,cust_link,pub_time,r.meta_description,c.name as cat_name FROM `rss_feed_custom` r join categories c on r.category=c.id");
     return $query->result();  

     }

    public function checkname($name)
    {
		
      $query = $this->db->query("SELECT *, 'News' as type FROM `press` where name like '%".$name."%' union SELECT *, 'Industry Data & Trends' as type FROM `industrydata` where name like '%".$name."%' union SELECT *, 'Business World' as type FROM business_update where name like '%".$name."%' union SELECT *, 'Technology' as type FROM `technology` where name like '%".$name."%'");
            if ($query->num_rows() == 0) {
            return 1;
        } 
    }
    public function all_cat(){
      $query = $this->db->query("select * from categories");
       return $query->result(); 
   }
   public function confirmed($url)
   {
	   $query = $this->db->query("SELECT *, 'News' as type FROM `press` where url like '%".$url."%' union SELECT *, 'Industry Data & Trends' as type FROM `industrydata` where url like '%".$url."%' union SELECT *, 'Business World' as type FROM business_update where url like '%".$url."%' union SELECT *, 'Technology' as type FROM `technology` where url like '%".$url."%'");
	    return $query->row_array(); 
   }
    public function checkpublished($id)
    {
      $query = $this->db->query("select * from reports where id='".$id."' and body='body1'");
            if ($query->num_rows() == 0) {
            return 1;
        } 
    }
    public function addreport_custom($name,$url,$desc,$cat,$summary)
    {
        $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada)
        $dates= gmdate("Y-m-j", time() + 3600*($timezone+date("I")));
        $time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
        $date_time=$dates.':'.$time;

        $this->db->query("insert into rss_feed_custom(name,cust_link,meta_description,pub_time,category,summary) values ('".$name."','".$url."','".$desc."','".$date_time."','".$cat."','".$summary."')");
    }

    public function addreport($id)
    {
        $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada)
        $dates= gmdate("Y-m-j", time() + 3600*($timezone+date("I")));
        $time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
        $date_time=$dates.':'.$time;

        //$this->db->query("insert into rss_feed(report_id,pub_time) values (".$id.",'".$date_time."')");
    }
    function check_home_available($id)
    {
 	 $query = $this->db->query("select * from rss_feed where report_id='".$id."'");
 	  if ($query->num_rows() == 0) {
            return 1;
        } 
        else{
   	 return 0;
   }
 }
   function check_name_url_dups($name,$url)
   {
   $query = $this->db->query("select * from rss_feed_custom where name='".$name."' or cust_link = '".$url."'");
 	  if ($query->num_rows() == 0) {
            return 1;
        } 
        else{
   	 return 0;
   }
   }
    function confirm_title($name)
    {
 	 $query = $this->db->query("SELECT *, 'News' as type FROM `press` where name like '%".$name."%' union SELECT *, 'Industry Data & Trends' as type FROM `industrydata` where name like '%".$name."%' union SELECT *, 'Business World' as type FROM business_update where name like '%".$name."%' union SELECT *, 'Technology' as type FROM `technology` where name like '%".$name."%'");
	 
           return $query->result();  
             if ($query->num_rows() > 0)

    { 
      //return $query->row_array();

    }

    else {

    //  show_404();
   
 }
}
public function all_disc_links($u)
{
	$this->db->select('*');

    $this->db->where('status','A');
    
    $this->db->where('user_name',$u);
    
    $query = $this->db->get('pay_links'); 

    return $query->result();
}
 
}
