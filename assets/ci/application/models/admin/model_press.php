<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_press extends CI_model
{
    function __contruct()
    {       
        parent:: __contruct(); 
    }
    
   public function insert_press()
    {

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $type = $this->input->post('news_type');
        $maintitle = $this->input->post('maintitle');
        $a= $this->input->post('editor');
        $author= $this->input->post('author');
       $strip_tags = "pre";
	   $imgu = $this->input->post('imgu');
	   
       $summary = preg_replace("#<\s*\/?(".$strip_tags.")\s*[^>]*?>#im", '', $a);
       $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)
       $dates= gmdate("Y-m-d", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
            $time=$dates.' '.$time;

            $maintitle= $this->db->escape_str($maintitle);
            $summary = $this->db->escape_str($summary);
            $title = $this->db->escape_str($title);
            $keyword = $this->db->escape_str($keyword);
            $desc = $this->db->escape_str($desc);

            $maintitle= str_replace("₹","&#8377;",$maintitle);
            $summary= str_replace("₹","&#8377;",$summary);


     $sql= "INSERT INTO `press` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`publish_date`,`author`,`date`,`type`,`image_url`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$date','$author','$time','$type','img/$imgu')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "error in databse code";

         }

    }

//changes by uttareshwar more
    
    public function insert_report_news(){
        
        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $type = $this->input->post('news_type');
        $maintitle = $this->input->post('maintitle');
       $relatedkeyword = $this->input->post('relatedkeyword');
        $a= $this->input->post('editor');
        
        $author= $this->input->post('author_name');
        
        $img_url = $this->input->post('imgu');
        
       $strip_tags = "pre";
       $summary = preg_replace("#<\s*\/?(".$strip_tags.")\s*[^>]*?>#im", '', $a);
       $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)
       $dates= gmdate("Y-m-d", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
            $time=$dates.' '.$time;
			
			//$str_arr = preg_split ("<p>", $summary); 
			$str_arr=explode("<p",$summary);
			
			//$summary1 = $str_arr[0].$str_arr[1].$str_arr[2].'<p>Button Here</p>';
			
			 
			
     $sql= "INSERT INTO `press_old` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`publish_date`,`author`,`date`, `type`, `image_url`,`relatedkeyword`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$date','$author','$time', '$type', 'img/$img_url','$relatedkeyword')";


         $result = $this->db->query($sql);
		 
		 $insert_id = $this->db->insert_id();
		 
         if($this->db->affected_rows() == 1)
         {            
             //$this->load->view('admin/press_updated');
			 
			 $summary1 = '<p'.$str_arr[1].'<p'.$str_arr[2].'<p'.$str_arr[3].'<p'.$str_arr[4].'<p'.$str_arr[5].'<p></p><p style="padding-top: 10px;padding-bottom: 10px;text-align:center"><strong><a class="" href="http://aeresearch.net/assets/beta/request-for-customization/'.$insert_id.'" style="padding-left: 2em;    padding-right: 2em;    padding-left: 1em; padding-right: 1em; background: #03293d !important;border: 2px solid #0a7eaf; background-image: -webkit-linear-gradient(top,rgb(6, 133, 187) 50%, rgb(5, 72, 101)) !important;color: #fff;padding: 0.50em 1em; /* margin-top: 14px; */ cursor: pointer;" target="_blank">Request Customization</a> <a class="" href="http://aeresearch.net/assets/beta/ibb/'.$insert_id.'" style="margin-left: 2em;padding-left: 1em;padding-right: 1em;background: #03293d !important;  border: 2px solid #0a7eaf; background-image: -webkit-linear-gradient(top, rgb(6, 133, 187) 50%, rgb(5, 72, 101)) !important;color: #fff;padding: 0.50em 1em; /*margin-top: 14px; */cursor: pointer;" target="_blank">Inquiry Before Buying</a></strong>&nbsp;</p><br><br>';
             
			
			//echo($summary1);
			
			$summary_withbuttons= str_replace('<p'.$str_arr[1].'<p'.$str_arr[2].'<p'.$str_arr[3].'<p'.$str_arr[4].'<p'.$str_arr[5],$summary1,$summary);
			 
			 $sql_update="update press_old set full_desc ='$summary_withbuttons' where id= $insert_id";
			 
			 $result_update = $this->db->query($sql_update);
			 
			  if($this->db->affected_rows() > 0){
				  
				   return true;
				  
				  //echo "DATA uPDATED";
			  }
			 
			  
             
            
          
        }
         else
         {             echo "error in databse code";

         } 
        
    }
    
    //changes by uttareshwar


public function insert_business()
    {


        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $a= $this->input->post('editor');
        $author= $this->input->post('author');
       $strip_tags = "pre";
       $summary = preg_replace("#<\s*\/?(".$strip_tags.")\s*[^>]*?>#im", '', $a);
       $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)
       $dates= gmdate("Y-m-d", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
            $time=$dates.' '.$time;
            
            
$sql= "INSERT INTO `business_update` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`publish_date`,`author`,`date`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$date','$author','$time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "error in databse code";

         }

    }
public function insert_industry()
    {
       

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $a= $this->input->post('editor');
        $author= $this->input->post('author');
       $strip_tags = "pre";
       $summary = preg_replace("#<\s*\/?(".$strip_tags.")\s*[^>]*?>#im", '', $a);
       $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)
       $dates= gmdate("Y-m-d", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
            $time=$dates.' '.$time;

     $sql= "INSERT INTO `industrydata` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`publish_date`,`author`,`date`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$date','$author','$time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "error in databse code";

         }

    }

public function insert_technology()
    {
       

        $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $a= $this->input->post('editor');
        $author= $this->input->post('author');
       $strip_tags = "pre";
       $summary = preg_replace("#<\s*\/?(".$strip_tags.")\s*[^>]*?>#im", '', $a);
       $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)
       $dates= gmdate("Y-m-d", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
            $time=$dates.' '.$time;

     $sql= "INSERT INTO `technology` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`, `monitor`, `status`,`publish_date`,`author`,`date`) VALUES ('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', 'N', 'Y','$date','$author','$time')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "error in databse code";

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
        $type = $this->input->post('type');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary = str_replace('&nbsp;', ' ', $this->input->post('editor'));

     $sql= "UPDATE `press` SET `full_desc`='$summary', `meta_title`='$title',  `url`='$url', `type`='$type', `meta_keywords`='$keyword', `name`='$maintitle', `monitor`='N', `status`='Y' WHERE (`id`='$id')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "errror in databse code";

         }
        
    }
    public function edit_industry()
    {
    	$id = $this->input->post('pid');
	 $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary = str_replace('&nbsp;', ' ', $this->input->post('editor'));

     $sql= "UPDATE `industrydata` SET `full_desc`='$summary', `meta_title`='$title',  `url`='$url', `meta_keywords`='$keyword', `meta_description`='$maintitle', `monitor`='N', `status`='Y' WHERE (`id`='$id')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "errror in databse code";

         }
        
    }
    public function edit_technology()
    {
    	$id = $this->input->post('pid');
	 $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary = str_replace('&nbsp;', ' ', $this->input->post('editor'));

     $sql= "UPDATE `technology` SET `full_desc`='$summary', `meta_title`='$title',  `url`='$url', `meta_keywords`='$keyword', `meta_description`='$maintitle', `monitor`='N', `status`='Y' WHERE (`id`='$id')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "errror in databse code";

         }
        
    }
public function edit_business()
    {
    	$id = $this->input->post('pid');
	 $url = $this->input->post('url');
        $title = $this->input->post('title');
        $keyword= $this->input->post('keyword');
        $desc = $this->input->post('desc');
        $date = $this->input->post('date');
        $maintitle = $this->input->post('maintitle');
        $timestamp=  strtotime("$date");
        $summary  = str_replace('&nbsp;', ' ', $this->input->post('editor'));
       

     $sql= "UPDATE `business_update` SET `full_desc`='$summary', `meta_title`='$title',  `url`='$url', `meta_keywords`='$keyword', `meta_description`='$maintitle', `monitor`='N', `status`='Y' WHERE (`id`='$id')";


         $result = $this->db->query($sql);
         if($this->db->affected_rows() == 1)
         {            $this->load->view('admin/press_updated');
          
        }
         else
         {             echo "errror in databse code";

         }
        
    }

private function stripHTMLtags($str)
{
    $t = preg_replace('/<[^<|>]+?>/', '', htmlspecialchars_decode($str));
    $t = htmlentities($t, ENT_QUOTES, "UTF-8");
    return $t;
}
       

    }

