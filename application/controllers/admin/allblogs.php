<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Allblogs extends MY_Controller 
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('report_model');
      $this->load->model('category_model');
      $this->load-model('blogs_model');
	 // $this->load->model('page_model');
    }

    public function index()
    {   
      $data['reports'] = $this->report_model->get_report();
      $data['title'] = 'GM Insights';
      $data['description'] = 'GM Insights';
      $data['keywords'] = 'GM Insights';
    //  $data['content'] = 'elements/home';
      $this->load->view('admin/_layout_allblogs', $data);
    }    
  }