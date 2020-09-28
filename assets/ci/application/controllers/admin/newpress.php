<?php

class Newpress extends CI_controller{

	public function __contsruct(){

		parent :: __construct();

		 	}

	public function index(){

		

           if(($this->session->userdata('user_id')!=""))

                                    {

                                    $this->load->view('admin/_layout_newpress');

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

        

	}

	public function modal(){

		//$this->load->view('admin/_layout_modal');

	}



    public function insert_press()

    {

        $this->load->library('form_validation');
    	//$this->form_validation->set_rules('title', 'Title', 'required');
        //$this->form_validation->set_rules('keyword', 'Keyword', 'required');
        //$this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');
	
	  if ($this->form_validation->run() == FALSE)
                            {
                                        if(($this->session->userdata('user_id')!=""))

                                    {                                
                                    $this->load->view('admin/_layout_newpress');
                                    }
                                    else
                                    {
                                    $this->load->view("register_view");
                                    }          
                             }
                             else
                             {
                             	 $this->load->model('admin/model_press');
                                 $result = $this->model_press->insert_press();
	                                 if($result)
	                                 {
	                                  $this->load->view('admin/db_updated');
	                                  }
                                         else
                                          {
                                             echo "Error in coading";
                                         }
                              }



    }
    
    
     //change for new users (by uttareshwar more)
    
    public function insert_press_for_report_section()

    {

        $this->load->library('form_validation');
    	//$this->form_validation->set_rules('title', 'Title', 'required');
        //$this->form_validation->set_rules('keyword', 'Keyword', 'required');
        //$this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');
	
	  if ($this->form_validation->run() == FALSE)
                            {
                                        if(($this->session->userdata('user_id')!=""))

                                    {                             

									$this->load->view('admin/_layout_non_admin_new_press_view');									
                                    //$this->load->view('admin/_layout_newpress');
                                    }
                                    else
                                    {
                                    $this->load->view("register_view_non_admin");
                                    }          
                             }
                             else
                             {
                             	 $this->load->model('admin/model_press');
                                 $result = $this->model_press->insert_report_news();
	                                 if($result)
	                                 {
	                                     echo "News Inserted";
	                                  //$this->load->view('admin/db_updated');
	                                  }
                                         else
                                          {
                                             echo "Error in coading";
                                         }
                              }



    }
    
    //changes for new user (by uttareshwar more)
    
    
     public function edit_press()

    {

        $this->load->library('form_validation');
    	//$this->form_validation->set_rules('title', 'Title', 'required');
        //$this->form_validation->set_rules('keyword', 'Keyword', 'required');
        //$this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');
	
	  if ($this->form_validation->run() == FALSE)
                            {
                                        if(($this->session->userdata('user_id')!=""))

                                    {                                
                                    $this->load->view('admin/allpress');
                                    }
                                    else
                                    {
                                    $this->load->view("register_view");
                                    }          
                             }
                             else
                             {
                             	 $this->load->model('admin/model_press');
                                 $result = $this->model_press->edit_press();
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



}