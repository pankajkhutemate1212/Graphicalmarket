<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule_model extends CI_model
{
    function __contruct()
    {        parent:: __contruct();    }

    public function insert_business()
    {

        $schedule_date= $this->input->post('schedule_date');
        $schedule_hour = $this->input->post('schedule_hour');

        $schedule_minute = $this->input->post('schedule_minute');
        $schedule_time=$schedule_hour.':'.$schedule_minute;

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $summary= $this->input->post('editor');
        $author= $this->input->post('author');
    
            
            
        $sql= "INSERT INTO `schedular` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `news_type`, `publish_date`,`author`,`publish_time`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc','business_update','$schedule_date','$author','$schedule_time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            
             $this->load->view('admin/press_updated');
         }
         else
         {             
             echo "error in database code";
         }

    }

    public function insert_press()
    {

        $schedule_date= $this->input->post('schedule_date');
        $schedule_hour = $this->input->post('schedule_hour');

        $schedule_minute = $this->input->post('schedule_minute');
        $schedule_time=$schedule_hour.':'.$schedule_minute;

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $summary= $this->input->post('editor');
        $author= $this->input->post('author');
    
	
         $type= $this->input->post('news_type');  
         $img= $this->input->post('imgu');			 
            
        $sql= "INSERT INTO `schedular` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `news_type`, `publish_date`,`author`,`publish_time`,`img`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc','$type','$schedule_date','$author','$schedule_time','img/$img')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            
             $this->load->view('admin/press_updated');
         }
         else
         {             
             echo "error in database code";
         }

    }

    public function insert_technology()
    {

        $schedule_date= $this->input->post('schedule_date');
        $schedule_hour = $this->input->post('schedule_hour');

        $schedule_minute = $this->input->post('schedule_minute');
        $schedule_time=$schedule_hour.':'.$schedule_minute;

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $summary= $this->input->post('editor');
        $author= $this->input->post('author');
    
            
            
        $sql= "INSERT INTO `schedular` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `news_type`, `publish_date`,`author`,`publish_time`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc','technology','$schedule_date','$author','$schedule_time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            
             $this->load->view('admin/press_updated');
         }
         else
         {             
             echo "error in database code";
         }

    }

    public function insert_industry()
    {

        $schedule_date= $this->input->post('schedule_date');
        $schedule_hour = $this->input->post('schedule_hour');

        $schedule_minute = $this->input->post('schedule_minute');
        $schedule_time=$schedule_hour.':'.$schedule_minute;

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $summary= $this->input->post('editor');
        $author= $this->input->post('author');
    
            
            
        $sql= "INSERT INTO `schedular` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `news_type`, `publish_date`,`author`,`publish_time`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc','industrydata','$schedule_date','$author','$schedule_time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            
             $this->load->view('admin/press_updated');
         }
         else
         {             
             echo "error in database code";
         }

    }
}