<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Filters extends MY_Controller 
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('search_model');
	  $this->load->model('Reportmodel');
	  $this->load->model('Author_model');
	 
    }
    public function index()
    {
		$match = $this->input->get('q');
		$data['press'] = $this->search_model->get_news_result($match);
		$data['search_string']=$match;
		$data['all_cat_pages'] = $this->Reportmodel->all_category();
		$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
		$data['social_pages'] = $this->Reportmodel->get_social_pages();

		$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
		$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
		$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
		$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
		$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'];
		$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
		$data['oldnews'] = $this->Reportmodel->oldnews_10();
		$data['title'] = 'Search Result Page';
		$data['description'] = 'Search Result Page';
		$data['keywords'] = 'Search Result Page ';
		$data['index_status']="noindex";
		$this->load->view('metadata/header_index', $data);
		$this->load->view('metadata/search', $data);
		$this->load->view('metadata/footer',$data);
    }
  }