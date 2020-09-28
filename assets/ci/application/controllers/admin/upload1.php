<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('upload');
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

        public function do_upload11()
        {
         if(($this->session->userdata('user_id')!=""))

                                    {
$news_type=$this->input->post('news_type');

			
						
               
                $config['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/img/'.$news_type;
                $config['overwrite'] = TRUE;
                $config['allowed_types']        = 'jpg';
                $config['max_size']             = 1000;
                $config['max_width']            = 3000;
                $config['max_height']           = 3000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/upload/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						$data['news_type']=$news_type;
                   

                        $this->load->view('admin/upload/upload_success', $data);
                }
        }
        
          else

                                    {

                                    $this->load->view("register_view");

                                    }
                                    }
                                    
        public function do_upload_of_reports_image()
        {
            if(($this->session->userdata('user_id')!=""))
            {
                $news_type=$this->input->post('news_type');
                //$userfile=$this->input->post('userfile');
                
                $_FILES['userfile']['name']=strtolower($_FILES['userfile']['name']);
                 $_FILES['userfile']['name']= preg_replace("/[^a-zA-Z 0-9_.]+/", " ", $_FILES['userfile']['name'] );
				 
                    $_FILES['userfile']['name'] = str_replace(" ","-",$_FILES['userfile']['name']); 
                     $_FILES['userfile']['name'] = str_replace("---","-",$_FILES['userfile']['name']); 
                    $_FILES['userfile']['name'] = str_replace("--","-",$_FILES['userfile']['name']);        
                     $_FILES['userfile']['name'] = str_replace("--","-",$_FILES['userfile']['name']);  
                    
                     $counter = -1;
    $rawBaseName = pathinfo($_FILES['userfile']['name'], PATHINFO_FILENAME );
    $extension = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION );
  while(file_exists($_SERVER['DOCUMENT_ROOT'].'/img/'.$news_type.'/'.$_FILES['userfile']['name'])) {
        $_FILES['userfile']['name'] = $rawBaseName . $counter . '.' . $extension;
        $counter--;
    };
   // echo $_FILES['userfile']['name'];
                $config['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/img/'.$news_type;
                $config['overwrite'] = FALSE;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 4000;
                $config['max_width']            = 3000;
                $config['max_height']           = 3000;

                $this->load->library('upload', $config);
				
				 
                $this->upload->initialize($config);
                
                if(empty($_FILES['userfile']['name']))
                {
                     
                }
                else
                {
				    $file = $_FILES['userfile']['name'];
		}
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
						
					echo $this->upload->display_errors() ;
                }
                else
                {
				    $this->load->library('image_lib');
				    $image_data =   $this->upload->data();

                    $configer =  array('image_library'   => 'gd2',
                                      'source_image'    =>  $image_data['full_path'],
                                      'maintain_ratio' => FALSE,
                                      'width'           =>  640,
                                      'height'          =>  300,
                                    );
                    $this->image_lib->clear();
                    $this->image_lib->initialize($configer);
                    $this->image_lib->resize();
				    echo  $news_type.'/'.$file;
                }
            }
            else
            {
                //Redirect("user/login");
            }
        }
}
?>