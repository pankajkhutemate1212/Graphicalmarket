<?php

class Newbusiness extends CI_controller{

	public function __contsruct(){

		parent :: __construct();

		 	}

	public function index(){

		

           if(($this->session->userdata('user_id')!=""))

                                    {

                                    $this->load->view('admin/_layout_newbusiness');

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

        

	}

	public function modal(){

		//$this->load->view('admin/_layout_modal');

	}



    public function insert_business()

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
                                 $result = $this->model_press->insert_business();
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
     public function edit_business()

    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');
	
	  if ($this->form_validation->run() == FALSE)
                            {
                                        if(($this->session->userdata('user_id')!=""))

                                    {                                
                                    $this->load->view('admin/allbusiness');
                                    }
                                    else
                                    {
                                    $this->load->view("register_view");
                                    }          
                             }
                             else
                             {
                             	 $this->load->model('admin/model_press');
                                 $result = $this->model_press->edit_business();
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