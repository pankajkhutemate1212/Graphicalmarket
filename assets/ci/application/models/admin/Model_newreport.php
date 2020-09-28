<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_newreport extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function insert_report()

    {

        $rid = $this->input->post('rid');

        //$isbn = $this->input->post('isbn');

        $url = $this->input->post('url');

        $pages = $this->input->post('pages');

        $cat = $this->input->post('cat');

        $title = $this->input->post('title');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $date = $this->input->post('date');

        $maintitle = $this->input->post('maintitle');



       // $timestamp = strtotime("today");



        //$timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');

        $toc = $this->input->post('toc_editor');
        $toc2 = $this->input->post('toc_editor2');
        //$seg_editor = $this->input->post('seg_editor');     

        $mix_editor = $this->input->post('mix_editor');

	//$year=$this->input->post('yearrb');


        $s_price = $this->input->post('s_price');

        $m_price = $this->input->post('m_price');

        $e_price = $this->input->post('e_price');

        $c_price = $this->input->post('c_price');

        $publisher = $this->input->post('publisher');

        $no_of_table = $this->input->post('no_of_table');

        //$domain_id = $this->post->



        $sql = "INSERT INTO `reports2` (`report_name`, `summary`, `url`, `table_of_content`, `list_of_tables`, `meta_title`, `meta_keyword`, `meta_description`, `publisher`, `publish_date`, `price_su`, `price_mu`, `price_cu`, `price_eu`, `no_of_pages`, `cat_name`, `no_of_tables`) VALUES 

        

        ('$maintitle', '$summary', '$url', '$toc', '$toc2', '$title', '$keyword', '$desc', '$publisher', '$date', '$s_price', '$m_price', '$c_price', '$e_price', '$pages', '$cat', '$no_of_table') ";



         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            echo "database added successfully";

         }

       

    }

}

