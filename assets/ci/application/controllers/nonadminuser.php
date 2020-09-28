<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nonadminuser extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->library('form_validation');
	$this->load->library('csvimport');
$this->load->model('user_model');
  $this->load->model('csv_model');
 $this->load->helper('url');
}
public function index()
{

if(($this->session->userdata('user_id')!=""))
{
redirect(site_url('admin/welcomenonadmin'));
}
else
{
$this->load->view("register_view_non_admin");
}
}
public function login()
{

$rules = array(array('field'=>'l_email','label'=>'Email','rules'=>'required|valid_email'),
array('field'=>'l_pass','label'=>'Password','rules'=>'required'));
$this->form_validation->set_rules($rules);
if($this->form_validation->run() == FALSE)
{
$this->index();
}
else
{
$auth=$this->user_model->login($this->input->post('l_email'),$this->input->post('l_pass'));

 

if($auth)
{


   redirect(site_url('admin/welcomenonadmin/notadminview')); 


}
else
{
    
$this->index();
}
}
}public function register()
{
$this->load->view('register_view_non_admin');//loads the register_view.php file in views folder
}
public function do_register()
{
$rules = array(
array('field'=>'username','label'=>'User Name','rules'=>'trim|required|min_length[4]|max_length[12]'),
array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email|is_unique[users.email]'),
array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
array('field'=>'gender','label'=>'Gender','rules'=>'required')
);
$this->form_validation->set_rules($rules);
if($this->form_validation->run() == FALSE)
{
$this->load->view('register_view_non_admin');
}
else
{
$this->user_model->register_user();
$this->load->view('success');
}
}
public function logout()
{
$this->session->sess_destroy();
redirect(site_url());
}

public function uploadcsvschedular(){
	$this->load->view('admin/_layout_non_admin_new_csv_schedular');
}
public function uploadcsvinschedular(){
		 
        $i=0;
        $j=0;
        $k=0;
        $date_in=0;
        $not_inserted= array();
        $date_issue=array();
        //$data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
		
        $config['allowed_types'] = '*';
        $config['max_size'] = '9999999999';

        $this->load->library('upload', $config);

        // If upload failed, display error
        if (!$this->upload->do_upload()) 
        {
            $data['error'] = $this->upload->display_errors();
			var_dump($data['error']);
			exit;

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
                    
								
							 
				   //news development start here
				   $msr_id=$row['MSR ID'];
				   $msr_Keyword=$row['Keyword'];
				   $msr_URL=$row['URL'];
				   $main_msr_URL=$row['MSR URL'];
				   $msr_Category=$row['MSR Category'];
				   $msr_News_Category=$row['News Category'];
				   $msr_Title=$row['Title'];
				   $msr_PR=$row['PR'];
				   $msr_Date=$row['Date'];
				   $msr_time=$row['Time']; 
				   $gmi_report=$row['gmi_report'];
				   $gmi_id=$row['gmi_id'];
				   $single_user_price=$row['single_user_price'];
				   $multi_user_price=$row['multi_user_price'];
				   $corporate_user_price=$row['corporate_user_price'];
				   $enterprice_user_price=$row['enterprice_user_price'];
				   
				  

					//create url
				    
				  
				   $url_convert = preg_replace("/[^a-zA-Z 0-9]+/", " ", strtolower(trim($msr_URL)));
                   $url_convert = str_replace(" ","-",$url_convert); 
                   $url_convert = str_replace("---","-",$url_convert); 
                   $url_convert = str_replace("--","-",$url_convert);        
                   $url_convert = str_replace("--","-",$url_convert);
				   //end url create
				   
				   $imagename =rand(1,19);
					$imgurl='';
					$imgurl="img-".$imagename.".png";
					$author="Market Study Report";
					$insert_data = array(          
                     'name' => $msr_Title, 
                    'url'=>$url_convert,
                    'full_desc'=> $msr_PR,
                    'news_type' => $msr_News_Category,
                    'publish_date' => $msr_Date, 
                     'author' => $author,
                    'publish_time' => $msr_time,
					'img' => $imgurl,
					'promotion_id'=> $msr_id,
					'promotion_cat'=> $msr_Category,
					'msrpromotion_url'=> $main_msr_URL,
					'gmi_report'=> $gmi_report,
					'gmi_id'=> $gmi_id,
					'single_user_price'=> $single_user_price,
					'multi_user_price'=> $multi_user_price,
					'corporate_user_price'=> $corporate_user_price,
					'enterprice_user_price'=> $enterprice_user_price
                     );
                                 
							
                   $date_format_check=$msr_Date;
				   
				     
		     $date_regex = '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/';
                       
					
                        if(preg_match($date_regex, $date_format_check))
                        {
                            $j=$j+1;
							if(empty($msr_Title) && empty($url_convert) && empty($msr_PR) && empty($msr_News_Category)){
								
								
							}else{
                            $this->csv_model->insert_csv($insert_data);
							}
							
                        }
                        else
                        {
                        	if(preg_match($date_regex, $date_format_check)){
                        		$k=$k+1;
										$not_inserted[]=$row['Title'];
										
							}
										else
                                        {
                                             $date_in=$date_in+1;
                                            $date_issue[]=$row['Title'];
											
											 
                                            
                                        }

                        }
                        
                        $data['not_inserted']=NULL;
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
                //$data['error'] = "Error occured";
                //$this->load->view('admin/csvindex', $data);
            }
        }
								 
							 
		
	}
function validateDate($date)
{
    
		
		  if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])//(0[1-9]|1[0-2])//[0-9]{4}$/",$date)) {
    return true;
} else {
    return false;
}
}
}