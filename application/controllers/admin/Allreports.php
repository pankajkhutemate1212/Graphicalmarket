<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class allreports extends MY_Controller 

  {

    public function __construct(){

      parent::__construct();

     $this->load->model('report_model');

      $this->load->model('category_model');

	 // $this->load->model('page_model');

    }



     public function index()

    {
    	   ini_set('memory_limit', '11512M');

	  $data['reports'] = $this->report_model->get_all_report();

	  $data['title'] = 'Admin All Reports ';

	  $data['description'] = 'Admin';

	  $data['keywords'] = 'Admin';

	



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/call_report';

	  $this->load->view('admin/_layout_allreports', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                         

      

      

	}



    

    public function upcoming_index()

    {

	  $data['reports'] = $this->report_model->get_all_up_adm_report();

	  $data['title'] = 'Admin All Reports | GM Insights';

	  $data['description'] = 'Admin| GM Insights';

	  $data['keywords'] = 'Admin | GM Insights';

	



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/call_up_report';

	                                 $this->load->view('admin/_layout_up_allreports', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                         

      

      

	}



     public function reportsedit()

	{

	  $url = $this->uri->segment($this->uri->total_segments());

	  $data['reports'] = $this->report_model->get_rep_detail($url);

	  $cat_id = $data['reports']['category_id'];

	  $data['category'] = $this->category_model->get_rep_category($cat_id);

	  $data['title'] = $data['reports']['meta_title'].' | GM Insights';

	  $data['description'] = $data['reports']['meta_description'].'| GM Insights';

	  $data['keywords'] = $data['reports']['meta_keywords'].'| GM Insights';

	 





                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/_layout_edit_report';

                                     $this->load->view('admin/_layout_allreports', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                             



      

	

	}

     public function up_reportsedit()

	{

	  $url = $this->uri->segment($this->uri->total_segments());

	  $data['reports'] = $this->report_model->get_rep_detail($url);

	  $cat_id = $data['reports']['category_id'];

	  $data['category'] = $this->category_model->get_rep_category($cat_id);

	  $data['title'] = $data['reports']['meta_title'].' | GM Insights';

	  $data['description'] = $data['reports']['meta_description'].'| GM Insights';

	  $data['keywords'] = $data['reports']['meta_keywords'].'| GM Insights';

	 





                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/_layout_up_edit_report';

                                     $this->load->view('admin/_layout_allreports', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                             



      

	

	}

    public function up_reportsedited()

	{

	   $this->load->library('form_validation');

        $this->form_validation->set_rules('rid', 'ReportID', 'required');

		//$this->form_validation->set_rules('isbn', 'ISBN', 'required');

		$this->form_validation->set_rules('pages', 'Pages', 'required');

		$this->form_validation->set_rules('title', 'Title', 'required');

        $this->form_validation->set_rules('keyword', 'Keyword', 'required');

        $this->form_validation->set_rules('desc', 'Description', 'required');

        $this->form_validation->set_rules('date', 'Date', 'required');

      //  $this->form_validation->set_rules('cat', 'Category', 'required');

        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

         //  $this->form_validation->set_rules('editor1', 'Editor', 'required');



                            if ($this->form_validation->run() == FALSE)

                            {



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    //redirect(site_url('admin/newreport'));

                                    $this->load->view('admin/_layout_edit_report');

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                             }

                                    else

                                        {

                                                     $this->load->model('admin/model_report');

                                                     $result = $this->model_report->up_edit_report();

                                                     if($result)

                                                {

                                                    $this->load->view('admin/db_updated');



                                                }

                                                else

                                                {

                                                   // echo "Error in coading";

                                                }

                                         }

	}

    public function reportsedited()

	{

	   $this->load->library('form_validation');

        $this->form_validation->set_rules('rid', 'ReportID', 'required');

		

		$this->form_validation->set_rules('pages', 'Pages', 'required');

		$this->form_validation->set_rules('title', 'Title', 'required');

        $this->form_validation->set_rules('keyword', 'Keyword', 'required');

        $this->form_validation->set_rules('desc', 'Description', 'required');

        $this->form_validation->set_rules('date', 'Date', 'required');

      

        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

        



                            if ($this->form_validation->run() == FALSE)

                            {



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                   

                                    $this->load->view('admin/_layout_edit_report');

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

                             }

                                    else

                                        {

                                                     $this->load->model('admin/model_report');

                                                     $result = $this->model_report->edit_report();

                                                     if($result)

                                                {

                                                    $this->load->view('admin/db_updated');



                                                }

                                                else

                                                {

                                                   

                                                }

                                         }

	}

  }