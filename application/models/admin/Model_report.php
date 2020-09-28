<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_report extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function insert_report()

    {

        $rid = $this->input->post('rid');

        $isbn = $this->input->post('isbn');

        $url = $this->input->post('url');

        $pages = $this->input->post('pages');

        $cat = $this->input->post('cat');

        $title = $this->input->post('title');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');
        
        $status = $this->input->post('status');

        $date = $this->input->post('date');

        $maintitle = $this->input->post('maintitle');

        $brief_desc = $this->input->post('brief_desc');



       // $timestamp = strtotime("today");



        $timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');

        $toc = $this->input->post('toc_editor');
        $toc2 = $this->input->post('toc_editor2');

        $seg_editor = $this->input->post('seg_editor');     

        $mix_editor = $this->input->post('mix_editor');



        $s_price = $this->input->post('s_price');

        $m_price = $this->input->post('m_price');

        $e_price = $this->input->post('e_price');

        

        //$domain_id = $this->post->



        $sql = "INSERT INTO `reports` (`domain_id`, `name`, `url`, `isbn_code`, `brief_desc`, `bot_desc`, `full_desc`, `table_of_content`, `list_of_tables`, `list_of_chart`, `free_analysis`, `market_overview`, `meta_title`, `meta_keywords`, `meta_description`, `publish_date`, `price_sul`, `price_el`, `price_cul`, `no_of_pages`, `delivery_format`, `is_follow`, `country_id`, `category_id`, `hit`, `creation_date`, `modification_date`, `status`, `body`) VALUES 

        

        ('1', '$maintitle', '$url', '$isbn', '$brief_desc', '', '$summary', '$toc', '$toc2', '', '$seg_editor', '$mix_editor', '$title', '$keyword', '$desc', '$timestamp', '$s_price', '$m_price', '$e_price', '$pages', 'PDF', 'Y', '', '$cat', '0', '$timestamp', '$timestamp', '$status', 'body1') ";



         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            $this->load->view('admin/db_updated');

            

         }

         else

         {

             echo "errror in databse code";

         }

    }



    public function edit_report()

    

    {

        $id= $this->input->post('id');

        $rid = $this->input->post('rid');

        $isbn = $this->input->post('isbn');

        $url = $this->input->post('url');

        $pages = $this->input->post('pages');

        $cat = $this->input->post('cat');

        $title = $this->input->post('title');

        $date = $this->input->post('date');

        

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $maintitle = $this->input->post('maintitle');

        $brief_desc = $this->input->post('brief_desc');
	
	$status = $this->input->post('status');

$year=$this->input->post('yearrb');
    



        $timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');

        $toc = $this->input->post('toc_editor');
		
		$toc2 = $this->input->post('toc_editor2');
		
        $seg_editor = $this->input->post('seg_editor');     

        $mix_editor = $this->input->post('mix_editor');



        $s_price = $this->input->post('s_price');

        $m_price = $this->input->post('m_price');

        $e_price = $this->input->post('e_price');

        

       

        

      $sql = "  UPDATE `reports` SET `domain_id`='1', `name`='$maintitle', `url`='$url', `isbn_code`='', `brief_desc`='$brief_desc', `bot_desc`='', `full_desc`='$summary', `table_of_content`='$toc', `list_of_tables`='$toc2', `list_of_chart`='', `free_analysis`='$seg_editor', `market_overview`='$mix_editor', `meta_title`='$title', `meta_keywords`='$keyword', `meta_description`='$desc', `publish_date`='$timestamp', `price_sul`='$s_price', `price_el`='$m_price', `price_cul`='$e_price', `no_of_pages`='$pages', `type`='P', `delivery_format`='pdf', `is_follow`='N', `country_id`='', `category_id`='$cat', `creation_date`='', `modification_date`='', `monitor`='N', `status`='$status', `body`='body1',`report_keyid`='$year'  WHERE (`id`='$id')";



       

         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            $this->load->view('admin/db_updated');

            

         }

         else

         {

             echo "errror in databse code";

         }

    }



    public function up_edit_report()

    

    {

        $id= $this->input->post('id');

        $rid = $this->input->post('rid');

        $isbn = $this->input->post('isbn');

        $url = $this->input->post('url');

        $pages = $this->input->post('pages');

        $cat = $this->input->post('cat');

        $title = $this->input->post('title');

        $date = $this->input->post('date');

          $status = $this->input->post('status');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $maintitle = $this->input->post('maintitle');

        $brief_desc = $this->input->post('brief_desc');

	$year=$this->input->post('yearrb');

    



        $timestamp=   strtotime('today');

        $summary = $this->input->post('editor');

        $toc = $this->input->post('toc_editor');

        $seg_editor = $this->input->post('seg_editor');     

        $mix_editor = $this->input->post('mix_editor');



        $s_price = $this->input->post('s_price');

        $m_price = $this->input->post('m_price');

        $e_price = $this->input->post('e_price');

        

       

        

      $sql = "  UPDATE `reports` SET `domain_id`='1', `name`='$maintitle', `url`='$url', `isbn_code`='', `brief_desc`='$brief_desc', `bot_desc`='', `full_desc`='$summary', `table_of_content`='$toc', `list_of_tables`='', `list_of_chart`='', `free_analysis`='$seg_editor', `market_overview`='$mix_editor', `meta_title`='$title', `meta_keywords`='$keyword', `meta_description`='$desc', `publish_date`='$timestamp', `price_sul`='$s_price', `price_el`='$m_price', `price_cul`='$e_price', `no_of_pages`='$pages', `type`='P', `delivery_format`='pdf', `is_follow`='N', `country_id`='', `category_id`='$cat', `creation_date`='', `modification_date`='', `monitor`='N', `status`='$status', `body`='body2',`report_keyid`='$year' WHERE (`id`='$id')";



       

         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            $this->load->view('admin/db_updated');

            

         }

         else

         {

             echo "errror in databse code";

         }

    }

       

    }

