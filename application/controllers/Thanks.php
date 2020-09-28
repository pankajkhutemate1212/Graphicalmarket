<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Thanks extends MY_Controller
  {
    public function __construct()
    {
      parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	  $this->load->model('sample_model');
	  $this->load->library('form_validation');
	  $this->load->model('Reportmodel');
	}
    public function index()
    {
		
		$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
$data['oldnews'] = $this->Reportmodel->oldnews_10();

    	$data['title'] = 'Request Successfully Submitted | Aeresearch.net';
	  $data['description'] = 'Request Successfully Submitted  | Aeresearch.net';
	  $data['keywords'] = 'Request Successfully Submitted  | Aeresearch.net';
	   $data['index_status']="";
       //$data['content'] = 'amp_msr/thanks_page';
	  $this->load->view('metadata/header_index', $data);
	   $this->load->view('metadata/thanks_page', $data);
	   $this->load->view('metadata/footer');
	}
	
	 public function order()
    {
    	$data['title'] = 'Order Successfully Submitted | Market Size Forecasters';
	  $data['description'] = 'Order Successfully Submitted  | Market Size Forecasters';
	  $data['keywords'] = 'Order Successfully Submitted  | Market Size Forecasters';
	   
       //$data['content'] = 'amp_msr/thanks_page';
	   $this->load->view('amp_msr/thanks_order', $data);
	}
	
	
  }