<?php

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('news_csv_model');
        $this->load->library('csvimport');
        $this->load->helper('url');
    }

    function index() {
    	
    	
    	      if(($this->session->userdata('user_id')!=""))

                                    {
        $data['addressbook'] = $this->news_csv_model->get_addressbook();
        $this->load->view('admin/newsindex', $data);

                                    }

                                    else

                                    {
				redirect(base_url().'user');
                                    

                                    }
     
    }

    function importcsv() 
    {
        $i=0;
        $j=0;
        $not_inserted= array();
        $data['addressbook'] = $this->news_csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '9999999999';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) 
        {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('admin/csvindex', $data);
        } 
        else 
        {
            $file_data = $this->upload->data();
            $file_path =  $config['upload_path'].$file_data['file_name'];            
            if ($this->csvimport->get_array($file_path)) 
            {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) 
                {
                    $i=$i+1;
                   $url_raw=$row['name'];
                   $url_create=strtolower($url_raw);
                   if (strpos($url_create,'market')) {
                        $url = substr($url_create, 0, strpos($url_create, "market")).' market';
                    }
                    else{
                        $url= substr($url_create,0,200);
                    }
                    $url_convert = preg_replace("/[^a-zA-Z 0-9]+/", " ", $url );
                    $url_convert = str_replace(" ","-",$url_convert); 
                   $url_convert = str_replace("---","-",$url_convert); 
                    $url_convert = str_replace("--","-",$url_convert);        
                     $url_convert = str_replace("--","-",$url_convert);           
            

                    $insert_data = array( 
                    'roportid'=>$row['roportid'],         
                    'name' => $row['name'], 
                    'url' => strtolower($url_convert),
                    'full_desc'=> $row['full_desc'],
                    'meta_title'=>$row['meta_title'],
                    'meta_keywords'=>$row['meta_keywords'],
                    'meta_description'=>$row['meta_description'],
                    'monitor'=>$row['monitor'],
                    'status'=>$row['status'],
                    'date'=>$row['date'],
                   'publish_date' => $row['publish_date']
                    );

                    $dta =$insert_data['name'];
                    foreach ((array)$dta as $w) 
                    {
                        $result=$this->news_csv_model->check_dups($w);
                        if($result==1)
                        {
                            $j=$j+1;
                            $this->news_csv_model->insert_csv($insert_data);
                        }
                        else
                        {
                            $not_inserted[]=$row['name'];
                        }
                        
                        $data['not_inserted']=$not_inserted;
                    }
                }
                $k=$i-$j;
                $data["ii"] = $i;
                $data["jj"] = $j;
                $data['kk']=$k;

                $this->load->view('newscust', $data);
            } 
            else 
            {
                $data['error'] = "Error occured";
                $this->load->view('admin/csvindex', $data);
            }
        }
            
    } 
}
/*END OF FILE*/
