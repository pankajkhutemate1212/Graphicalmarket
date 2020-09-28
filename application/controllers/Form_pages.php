<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Form_pages extends CI_Controller 
  {
    public function __construct(){
      parent::__construct();
      $this->load->model('Categorymodel');
	  $this->load->model('Publishermodel');
      $this->load->model('Reportmodel');
    }
    
    
    public function request_samp()
    {   
     $id = $this->uri->segment($this->uri->total_segments());
     $data['all_categories'] = $this->Categorymodel->get_all_categories();
	$data['reports'] = $this->Reportmodel->get_rep_detail_id($id);
	    //$cat_id = $data['reports']['category_id'];
		//$data['category'] = $this->category_model->get_rep_category($cat_id);
		  $data['title'] = $data['reports']['report_name'].'';
		//$data['description'] = $data['reports']['meta_description'].'';
	   // $data['keywords'] = $data['reports']['meta_keywords'].'';
	   // $data['content'] = 'amp/request_sample';
 	  //$this->load->view('layouts/onlyheader', $data);
	   $this->load->view('asset/header', $data);
     $this->load->view('asset/menubar', $data);
     $this->load->view('templates/form_sample_view', $data);
     $this->load->view('asset/footer');

    }    
       
       

        public function inq_buy()
    {   
     $id = $this->uri->segment($this->uri->total_segments());
     $data['all_categories'] = $this->Categorymodel->get_all_categories();
	$data['reports'] = $this->Reportmodel->get_rep_detail_id($id);
	    //$cat_id = $data['reports']['category_id'];
		//$data['category'] = $this->category_model->get_rep_category($cat_id);
	$data['title'] = $data['reports']['report_name'].'';
		//$data['description'] = $data['reports']['meta_description'].'';
	   // $data['keywords'] = $data['reports']['meta_keywords'].'';
	   // $data['content'] = 'amp/request_sample';
 	  //$this->load->view('layouts/onlyheader', $data);
	   
$this->load->view('asset/header', $data);
     $this->load->view('asset/menubar', $data);
     $this->load->view('templates/form_inquirybuy_view', $data);
     $this->load->view('asset/footer');


    // $this->load->view('amp_msr/inq_before_buy', $data);

    }   
    
     public function report_email_page()
    {
    	  $id = $this->uri->segment($this->uri->total_segments());
     $data['all_categories'] = $this->Categorymodel->get_all_categories();
	$data['reports'] = $this->Reportmodel->get_rep_detail_id($id);
	$data['title'] = $data['reports']['report_name'].'';
 	 $this->load->view('amp_msr/report_email_page', $data);
 }
    
     
  }