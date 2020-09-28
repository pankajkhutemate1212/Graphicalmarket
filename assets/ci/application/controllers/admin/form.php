<?php

class Form extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('passa', 'Password', 'required');
		$this->form_validation->set_rules('passb', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			//$this->load->view('myform');
            $this->load->view('formsuccess');
		}
		else
		{
            //sucess
            $this->load->model('model_user');
			//after sucess 2st name insert
            //$this->load->view('formsuccess');
            $result = $this->model_user->insert_user();
            if($result)
            {
                $this->load->view('formsucess');
            }
            else
            {
                //error
                echo "sorry there is problem with connection, please try again.";
            }
		}

	}
}
?>