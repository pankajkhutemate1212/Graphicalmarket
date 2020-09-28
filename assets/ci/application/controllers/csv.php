<?php

class Csv extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
        $this->load->helper('url');
    }

    function index() {
    	
    	
    	      if(($this->session->userdata('user_id')!=""))

                                    {
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $this->load->view('admin/csvindex', $data);

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
        $k=0;
        $date_in=0;
        $not_inserted= array();
        $date_issue=array();
        $data['addressbook'] = $this->csv_model->get_addressbook();
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
                   $url_raw=$row['report_name'];
                   $url_create=strtolower($url_raw);
                   if (strpos($url_create,'market')) {
                        $url = substr($url_create, 0, strpos($url_create, "market")).' market'; 
                    }
                    else{
                        $url= substr($url_create,0,150);
                    }
                    $url_convert = preg_replace("/[^a-zA-Z 0-9]+/", " ", $url );
                    $url_convert = str_replace(" ","-",$url_convert); 
                     $url_convert = str_replace("---","-",$url_convert); 
                    $url_convert = str_replace("--","-",$url_convert);        
                     $url_convert = str_replace("--","-",$url_convert);   
            

                    $insert_data = array(          
                     'report_name' => $row['report_name'], 
                    'url' => strtolower($url_convert),
                    'summary'=> $row['summary'],
                   'no_of_pages' => $row['no_of_pages'],
                    'table_of_content' => $row['table_of_content'], 
                    'list_of_tables' => $row['list_of_tables'],
                    
                     'publisher' => $row['publisher'],
                  'meta_title' => $row['meta_title'],
                    'meta_keyword' => $row['meta_keyword'], 
                     'meta_description' => $row['meta_description'],
                    'publish_date' => $row['publish_date'],
                     'price_su' => $row['price_su'], 
                     'price_mu' => $row['price_mu'], 
                     'price_cu' => $row['price_cu'],
                     'cat_name' => $row['cat_name'],
                      'price_eu' => $row['price_eu'],
                      'no_of_tables'=> $row['no_of_tables']
                    );
		$date_format_check=$insert_data['publish_date'];
		$date_regex = '/^([1-9]|1[0-2])\/([1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/';
                    $dta =$insert_data['report_name'];
                    $url_final=$insert_data['url'];
                        $url_dups=$this->csv_model->check_url_dups($url_final);
                        if($url_dups==null)
                        {
                            $publisher=strtolower($insert_data['publisher']);
                            $url_final=$url_final.'-'.preg_replace("/[^a-zA-Z 0-9]+/", " ", $publisher );
                            $url_final = str_replace(" ","-",$url_final); 
                            $url_final = str_replace("---","-",$url_final); 
                            $url_final = str_replace("--","-",$url_final);        
                            $url_final = str_replace("--","-",$url_final); 
                            $insert_data['url']=$url_final;
                        }
                        $result=$this->csv_model->check_dups($dta);
                        if($result==1 && preg_match($date_regex, $date_format_check))
                        {
                            $j=$j+1;
                            $this->csv_model->insert_csv($insert_data);
                        }
                        else
                        {
                        	if(preg_match($date_regex, $date_format_check)){
                        		$k=$k+1;
                            $not_inserted[]=$row['report_name'];
                            }
                            else
                                        {
                                             $date_in=$date_in+1;
                                            $date_issue[]=$row['report_name'];
                                            
                                        }

                        }
                        
                        $data['not_inserted']=$not_inserted;
                         $data['date_issue']=$date_issue;
                }
                $data["ii"] = $i;
                $data["jj"] = $j;
                $data['kk']=$k;
                $data['date_in']=$date_in;

                $this->load->view('csvcust', $data);
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
