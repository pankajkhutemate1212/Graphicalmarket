<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class sitemap extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('sitemap_model');
	  $this->load->model('category_model');
	}
    public function index()
    {
	  $data['reports'] = $this->sitemap_model->get_all_report();
	  $data['reports2'] = $this->sitemap_model->get_all_u_report();
	//  $data['reportsup'] = $this->sitemap_model->get_all_up_report();
	  $data['title'] = 'Industry Practices';
	  $data['description'] = 'Industry Practices';
	  $data['keywords'] = 'Industry Practices';
	  $data['content'] = 'reports/sitemap_index';
	  $this->load->view('layouts/sitemap_master', $data);
	}
     public function xml()
    {
	  $data['reports'] = $this->sitemap_model->get_all_report();
	  $data['reports2'] = $this->sitemap_model->get_all_u_report();
	 //  $data['reportsup'] = $this->sitemap_model->get_all_up_report();
	 header("Content-Type: text/xml;charset=iso-8859-1");
	  $data['content'] = 'reports/sitemap_xml';
	  $this->load->view('layouts/sitemap_xml_master', $data);
	}
    public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['reports'] = $this->report_model->get_cat_report($cat_id);
	  $data['title'] = $data['category']['name'].'';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
         
	}
    public function detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'reports/detail';
	  $this->load->view('layouts/master', $data);
	}
     public function detail2()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'reports/detail';
	  $this->load->view('layouts/master', $data);
	}
     
  }
