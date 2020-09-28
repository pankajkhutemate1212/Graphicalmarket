<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
        	      if(($this->session->userdata('user_id')!=""))

                                    {

                                    $this->load->view('admin/upload/upload_form', array('error' => ' ' ));

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }
                
        }

        public function do_upload()
        {
         if(($this->session->userdata('user_id')!=""))

                                    {
                $config['upload_path']          = './assets/img/';
                $config['overwrite'] = TRUE;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/upload/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        //$data = $upload_data['file_name'];

                        $this->load->view('admin/upload/upload_success', $data);
                }
        }
        
          else

                                    {

                                    $this->load->view("register_view");

                                    }
                                    }
}
?>