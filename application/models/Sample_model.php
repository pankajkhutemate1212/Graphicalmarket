<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sample_model extends CI_Model 
{
  public function __construct() 
  {
	  parent::__construct();
	  $this->load->library('email');
  }
  public function getreportname($repId)
  {
    $this->db->select('*');
    $this->db->from('reports');
    $this->db->where("reports.id", $repId);
    $this->db->order_by("reports.creation_date", "desc");
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    { 
      return $query->row_array();
    }
    else {
      return NULL;
    }   
  }
  public function request($repId, $type)
  {
    $data = array(
              'domain_id'=> 1,
              'full_name'=> $this->input->post('name'),
              'email_id'=> $this->input->post('email'),
              'job_title'=> '',
              'phone_no'=> $this->input->post('phone'),
              'country'=> '',
              'message'=> $this->input->post('message'),
              'type'=> $type,
              'report_id'=> $repId,
              'user_id'=> '',
              'note'=> '',
              'verticle'=> '',
              'creation_date'=> time(),
              'modification_date'=> time(),
              'status'=> 'N');
    return $this->db->insert('leads', $data);
  }
  public function leadId()
  {
    $this->db->select_max('id');
    $query = $this->db->get('leads');
    return $query->row_array();
  }

  
    public function getEmail($name)
    {
    if(!$name)
      return ;
    $this->db->select('*');
    $this->db->from('emails');
    $condn = array('status'=>'Y', 'name'=>$name);
    $this->db->where($condn);	 
    $query = $this->db->get();
    if ($query->num_rows() > 0)
     { 
      return $query->row_array();
     }
     else {
      return NULL;
     }    			
   }
   public function sendEmail($leadId,$type=""){
   $this->db->select('*');
   $this->db->from('leads as l');
   $this->db->where('l.id', $leadId);
   
   $query = $this->db->get();
   $row = $query->row();
   
   if($row){
    if($row->report_id){
      $arrReport = $this->getReportName($row->report_id);     
        $repName = $arrReport['name'];
        }else{
        $repName = ''; 
        }
        $source = ''; 
        if($type == 'C'){
          $source = 'Contact Us';
        }elseif($type == 'S'){
          $source = 'Request Sample';
        }elseif($type == 'B'){
          $source = 'Download Corporate Presentation';
        }elseif($type == 'E'){
          $source = 'Inquiry Before Buying';
        }elseif($type == 'T'){
          $source = 'Request For TOC';
        }
        
       $arrEmail = $this->getEmail('SAMPLE_EMAIL');
       
	if($arrEmail){
	  $to = 'vikas@orbitmediaservices.com';
	  $subject = $arrEmail['subject'];
	  $message = $arrEmail['body'];
	  $message = str_replace('#FULLNAME',$row->full_name,$message);
	  $message = str_replace('#EMAIL',$row->email_id,$message);
	  $message = str_replace('#TITLE',$row->job_title,$message);
          $message = str_replace('#PHONE',$row->phone_no,$message);
          $message = str_replace('#COUNTRY',$row->country,$message);
          $message = str_replace('#MESSAGE',$row->message,$message);
          $message = str_replace('#SOURCE',$source,$message); 
          $message = str_replace('#RNAME',$repName,$message);
          $message = str_replace('#IPADD',$_SERVER['REMOTE_ADDR'],$message); 
         
  
	  $headers = "From: Sales <sales@grandviewresearch.com>\r\n";
	  $headers.= "Reply-To: Sales <sales@grandviewresearch.com>\r\n";
	  $headers.= "Return-Path: Sales <sales@grandviewresearch.com>\r\n";
	  $headers.= 'MIME-Version: 1.0' . "\r\n";
	  $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $to = 'vikas@orbitmediaservices.com';
          $region = $this->getRegiontName();
          $this->email->to($to);
          $this->email->subject($subject);
          $this->email->message($message);
          $this->email->set_header('Header', $headers);
          if($this->email->send()){
            echo "success";
          }else{
           echo "fail";
          }
          
          
          
 	  //$sent	= @mail($to, $subject, $message, $headers);
    	} 
        
        
    } 
    //return $sent;
  }  

   public function getRegiontName()
  {
	  $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
      $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
      $ip = $forward;
    }else{
      $ip = $remote;
    }
      $ip_data = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));
      if($ip_data && $ip_data['geoplugin_countryName'] != null)
      {
        $result = $ip_data['geoplugin_countryName'];
      }
      $this->db->select('region');
      $this->db->from('countries');
      $this->db->where('name', $result);
      $query = $this->db->get();
      if ($query->num_rows() > 0)
      { 
        return $query->row_array();
      }
      else {
        return NULL;
      }   
    }
}