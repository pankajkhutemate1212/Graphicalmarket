<?php

class login extends Frontend_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/user/login');
        }
        else
        {
            $this->load->model('user_m');
            $result = $this->user_m->login();
            if($result)
            {
                
                 $this->load->view('admin/dashboard');
            }
            else
            {
                //error
                echo "sorry there is problem with connection, please try again.";
            }
        }
    }
}