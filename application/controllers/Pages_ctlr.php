<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_ctlr extends Frontend_Controller 
{
public function __construct(){
parent::__construct();
//$this->load->model('Categorymodel');
//$this->load->model('Publishermodel');
//$this->load->model('Reportmodel');
$this->load->model('Press_model');
$this->load->model('Reportmodel');

}


public function aboutpage()
{    

$this->load->model('Author_model');
$data['all_author']=$this->Author_model->get_all_author();
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;

foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='about-us'){

                       $data['title'] = $row->page_meta_title;
                       $data['description'] = $row->page_meta_description;
                       $data['keywords'] =  $row->page_meta_keywords;
                       $data['about_us_data'] =  $row->static_page_detail;
                    }
                     }
                
$data['index_status']="index";

$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/aboutpage_view');
$this->load->view('metadata/footer',$data);


} 





 public function privacy(){
     
$data['all_cat_pages'] = $this->Reportmodel->all_category();

$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='privacy-policy'){

                       $data['title'] = $row->page_meta_title;
                       $data['description'] = $row->page_meta_description;
                       $data['keywords'] =  $row->page_meta_keywords;
                       $data['privacy_data'] =  $row->static_page_detail;
                    }
                     }     


$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
 $this->load->view('metadata/privacypage_view');
$this->load->view('metadata/footer');
	 
 }
 


public function contact()
{
 $data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();

$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;


foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='contact-us'){

                       $data['title'] = $row->page_meta_title;
                       $data['description'] = $row->page_meta_description;
                       $data['keywords'] =  $row->page_meta_keywords;
                       $data['conatct_us_data'] =  $row->static_page_detail;
                    }
                     }

$this->load->model('Author_model');
$data['all_author']=$this->Author_model->get_all_author();
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
$data['oldnews'] = $this->Reportmodel->oldnews_10();
$data['index_status']="index";

$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/contact-us',$data);
$this->load->view('metadata/footer',$data);
 }

 

   public function editorial(){
     
        $data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news();


foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='editorial-policy'){
                       $data['title'] = $row->page_meta_title;
                       $data['description'] = $row->page_meta_description;
                       $data['keywords'] =  $row->page_meta_keywords;
                       $data['editorial_data'] =  $row->static_page_detail;
                    }
                     }     
      
        

        $data['index_status']="index";
        $this->load->view('metadata/header_index', $data);
        $this->load->view('metadata/editorial_view');
        $this->load->view('metadata/footer'); 
	 
     
 }
   public function all_author(){
   		$this->load->model('Author_model');
   		$data['all_author']=$this->Author_model->get_all_author();
                 
		$data['index_status']="noindex";
                
                $data['all_cat_pages'] = $this->Reportmodel->all_category();
                $data['all_static_pages'] = $this->Reportmodel->all_static_pages();
                $data['social_pages'] = $this->Reportmodel->get_social_pages();
                $data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
                $data['site_name'] = $data['comman_detail'][0]['site_name'] ;
                $data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
                $data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
                $data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
				$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news();

                
                  foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='author'){

                       $data['title'] = $row->page_meta_title;
                       $data['description'] = $row->page_meta_description;
                       $data['keywords'] =  $row->page_meta_keywords;
                    }
                     }
                
		$this->load->view('metadata/header_index', $data);
 		$this->load->view('metadata/all_author',$data);
		$this->load->view('metadata/footer',$data);
 	}
public function author_details(){
	
  	$this->load->model('Author_model');
  	$url = $this->uri->segment(2);
  	 $data['author']=$this->Author_model->get_author_details($url);
  	 $auth_name=$data['author']['name'];
        
	$config = array();
	$config["base_url"] = base_url('author/'.$url) . "/page";
	$config['first_url'] = base_url('author/'.$url);
	$config['use_page_numbers'] = TRUE;
	$config["total_rows"] = $this->Reportmodel->get_count_author_pages($auth_name);
	$config["per_page"] = 9;
	$config["uri_segment"] = 4;
	$this->pagination->initialize($config);

	$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	$data["links"] = $this->pagination->create_links();
	if(empty($page)){$pagin=0;}else{$pagin=($page-1)*9;}
 
  	 $data['news_written_by_author']=$this->Author_model->get_news_by_author_pagination($config["per_page"], $pagin,$auth_name);
  	 $data['index_status']="index";
  	
         $data['title'] = 'About Author : '.$auth_name;
         $data['description'] = substr(strip_tags($data['author']['description']),0, 180).'...';
         $data['keywords'] = '';
         
        $data['all_cat_pages'] = $this->Reportmodel->all_category();
        $data['all_static_pages'] = $this->Reportmodel->all_static_pages();
        $data['social_pages'] = $this->Reportmodel->get_social_pages();
        $data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
        $data['site_name'] = $data['comman_detail'][0]['site_name'] ;
        $data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
        $data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
        $data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
		$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news();
         
        $this->load->view('metadata/header_index', $data);
         $this->load->view('metadata/author_view',$data);
        $this->load->view('metadata/footer',$data);
}
  public function amp_author_details(){
  	$this->load->model('Author_model');
  	//$url = $this->uri->segment($this->uri->total_segments(3));
  	$url = $this->uri->segment(2);
  	 $data['author']=$this->Author_model->get_author_details($url);
  	 $auth_name=$data['author']['name'];
  	  
         
         $data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
  	
  	
 $data['title'] = 'About Author : '.$auth_name;
$data['description'] = substr(strip_tags($data['author']['description']),0, 180).'...';
$data['keywords'] = '';
$this->load->view('metadata/amp_author', $data);
  
}


public function customization(){
	
	$total = $this->uri->total_segments();
    $news_id = $this->uri->segment($total);
	
	$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['press'] = $this->Press_model->get_rep_detail_by_id($news_id);

$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;

$data['newsid'] =$news_id;

foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='contact-us'){

                      
                       $data['title'] = "Aeresearch.net - Request Customization";
                       $data['description'] = "Aeresearch.net - Request Customization";
                       $data['keywords'] =  "Aeresearch.net - Request Customization";
                       $data['conatct_us_data'] =  "Aeresearch.net - Request Customization";
                    }
                     }

$this->load->model('Author_model');
$data['all_author']=$this->Author_model->get_all_author();
 
$data['index_status']="";
$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/forms/request-customization-view',$data);
$this->load->view('metadata/footer',$data);
	
	
}

public function inquiry(){
	
	$total = $this->uri->total_segments();
    $news_id = $this->uri->segment($total);
	//$news_id = end($this->uri->segment_array());
	
	 
	
	$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['press'] = $this->Press_model->get_rep_detail_by_id($news_id);
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;

$data['newsid'] =$news_id;

foreach($data['all_static_pages'] as $row){
                    if($row->page_url=='contact-us'){

                      $data['title'] = "Aeresearch.net - Request Sample";
                       $data['description'] = "Aeresearch.net - Request Sample";
                       $data['keywords'] =  "Aeresearch.net - Request Sample";
                       $data['conatct_us_data'] =  "Aeresearch.net - Request Sample";
                    }
                     }

$this->load->model('Author_model');
$data['all_author']=$this->Author_model->get_all_author();
 
$data['index_status']="";

$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/forms/inquiry-before-buying',$data);
$this->load->view('metadata/footer',$data);
	
}

public function site_map(){
     
$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;

                       $data['title'] = 'Static Sitemap';
                       $data['description'] = 'Static Sitemap';
                       $data['keywords'] =  'Static Sitemap';

$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
 $this->load->view('metadata/stat-sitemap');
$this->load->view('metadata/footer');
	 
 }
}