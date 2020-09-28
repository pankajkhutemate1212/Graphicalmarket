<?php

class Schedule extends CI_controller{

	public function __contsruct()
	{
		parent :: __construct();
	}
	
	public function schedule_business()
	{
		$this->load->library('form_validation');
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
                    $this->load->model('admin/schedule_model');
                    $result = $this->schedule_model->insert_business();
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
	
	public function schedule_press()
	{
		$this->load->library('form_validation');
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
                    $this->load->model('admin/schedule_model');
                    $result = $this->schedule_model->insert_press();
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
	
	public function schedule_industry()
	{
		$this->load->library('form_validation');
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
                    $this->load->model('admin/schedule_model');
                    $result = $this->schedule_model->insert_industry();
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
	
	public function schedule_technology()
	{
		$this->load->library('form_validation');
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
                    $this->load->model('admin/schedule_model');
                    $result = $this->schedule_model->insert_technology();
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