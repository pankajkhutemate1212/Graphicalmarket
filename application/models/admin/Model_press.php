<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_press extends CI_model
{
    function __contruct()
    {        parent:: __contruct();    }
    public function insert_press()
    {
       

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary = $this->input->post('editor');
       

     $sql= "INSERT INTO `press` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`date`)                            VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$timestamp')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/db_updated');
          
        }
         else
         {             echo "errror in databse code";

         }

    }



    public function edit_press()
    {
    	$id = $this->input->post('pid');
	 $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary = $this->input->post('editor');
       

     $sql= "UPDATE `press` SET `full_desc`='$summary', `meta_title`='$title',  `url`='$url', `meta_keywords`='$keyword', `meta_description`='$maintitle', `monitor`='N', `status`='Y' WHERE (`id`='$id')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "errror in databse code";

         }
        
    }



       

    }

