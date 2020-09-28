<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Cronjob extends CI_Controller {
       
     public function __construct()
      {
      
	 parent::__construct();  
$this->load->model('cronjob_model');   
	 
      }

     public function index()
     {
$data['news_report'] = $this->cronjob_model->get_all_news();
//var_dump($data['news_report']);
$date = date_default_timezone_set('Asia/Kolkata');

//If you want Day,Date with time AM/PM
$curr_time = date("m/d/Y H:i");
//var_dump($curr_time);
$schedule_time=$data['news_report']['publish_date'].' '.$data['news_report']['publish_time'];
//var_dump($schedule_time);
if($curr_time==$schedule_time)
{
$data['news_report'] = $this->cronjob_model->insert_news();
}
else{

}
     }
}
?>