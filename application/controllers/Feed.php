<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Feed extends Frontend_Controller {
       
     public function __construct()
      {
      
	 parent::__construct();
        
	$this->load->helper('xml');
        $this->load->helper('text');
      //$this->load->model('posts_model', 'posts');
        $this->load->model('feed_model');
	
	 
	 
      }

 public function index()
{
    $data['feed_name'] = 'www.news.marketsizeforecasters.com'; // your website
    $data['encoding'] = 'utf-8'; // the encoding
    $data['feed_url'] = 'http://www.news.marketsizeforecasters.com/rssfeed.xml'; // the url to your feed
    $data['page_description'] = 'Market research news'; // some description
    $data['page_language'] = 'en-US'; // the language
    $data['creator_email'] = 'info@news.marketsizeforecasters.com'; // your email
   //$data['posts'] = $this->posts->getPosts(10); 
    
      $data['news'] = $this->feed_model->get_report();//retail
      $data['industry'] = $this->feed_model->get_industry_data();//world
      $data['business'] = $this->feed_model->get_business_data();//health
     // $data['tech'] = $this->feed_model->get_tech_data(); 
   
    header("Content-Type: application/rss+xml"); // important!
    
    $this->load->view('metadata/rss', $data);
    
}

}