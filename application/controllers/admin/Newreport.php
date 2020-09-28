<?php

class Newreport extends CI_controller{

	public function __contsruct()

    {

		parent :: __construct();

	}

	public function index(){

		



        $this->load->library('form_validation');



        $this->form_validation->set_rules('rid', 'ReportID', 'required');

		//$this->form_validation->set_rules('isbn', 'ISBN', 'required');

		$this->form_validation->set_rules('pages', 'Pages', 'required');

		$this->form_validation->set_rules('title', 'Title', 'required');

        $this->form_validation->set_rules('keyword', 'Keyword', 'required');

        $this->form_validation->set_rules('desc', 'Description', 'required');

        $this->form_validation->set_rules('date', 'Date', 'required');

        $this->form_validation->set_rules('cat', 'Category', 'required');

        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

    //  $this->form_validation->set_rules('editor1', 'Editor', 'required');



        if ($this->form_validation->run() == FALSE)

        {



            if(($this->session->userdata('user_id')!=""))

{

//redirect(site_url('admin/newreport'));

$this->load->view('admin/_layout_newreport');

}

else

{

$this->load->view("register_view");

}

            

        }

        else

        {

            $this->load->model('model_newreport');

            $result = $this->model_newreport->insert_report();

             if($result)

        {

            $this->load->view('formsuccess');



        }

        else

        {

            echo "Error in coading";

        }

        }

       

	

    }

	

}



?>