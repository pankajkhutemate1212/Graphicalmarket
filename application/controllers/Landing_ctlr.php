<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Landing_ctlr extends Frontend_Controller 
{
public function __construct(){
parent::__construct();

$this->load->model('Reportmodel');
$this->load->model('Press_model');
$this->load->model('Author_model');
 $this->load->library("pagination");

}
public function index()
{   
$single_news['name']='';
$single_news['author']='';
$single_news['date']='';
$single_news['full_desc']='';
$single_news['image_url']='';
$config = array();
 $config["base_url"] = base_url() . "page";
$config['first_url'] = base_url();
 $config['use_page_numbers'] = TRUE;
 $config["total_rows"] = $this->Reportmodel->get_count();
 $config["per_page"] = 10;
 $config["uri_segment"] = 2;
$this->pagination->initialize($config);
$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
 $data["links"] = $this->pagination->create_links();
 if(empty($page)){$pagin=0;}else{$pagin=($page-1)*10;}
 $data['newsdata'] = $this->Reportmodel->get_authors($config["per_page"], $pagin);

$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
$data['all_author']=$this->Author_model->get_all_author();
//$data['single_news']=$this->Reportmodel->get_single_latest_news();
//$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
 
//home page meta details
$data['title'] = $data['comman_detail'][0]['home_page_meta_title'];
$data['description'] = $data['comman_detail'][0]['home_page_meta_description'];
$data['keywords'] = $data['comman_detail'][0]['home_page_meta_keywords'];

$data['index_status']="index";

$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/homepage', $data);
$this->load->view('metadata/footer');


}

public function amp_index()

{   
$url = $this->uri->segment($this->uri->total_segments()-1);
$data['all_cat_pages'] = $this->Reportmodel->all_category($url);
$data['all_static_pages'] = $this->Reportmodel->all_static_pages($url);
$data['social_pages'] = $this->Reportmodel->get_social_pages($url);
$data['comman_detail'] = $this->Reportmodel->get_comman_detail($url);//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
$data['all_author']=$this->Author_model->get_all_author();
$data['single_news']=$this->Reportmodel->get_single_latest_news();
$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
$data['oldnews'] = $this->Reportmodel->oldnews_10(); 
 
//home page meta details
$data['title'] = $data['comman_detail'][0]['home_page_meta_title'];
$data['description'] = $data['comman_detail'][0]['home_page_meta_description'];
$data['keywords'] = $data['comman_detail'][0]['home_page_meta_keywords'];

$data['index_status']="index";

//$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/amp_homepage', $data);
//$this->load->view('metadata/footer');


}

public function show_category_detail_page(){
	
	 $cat_name = $this->uri->segment(2);
    $config = array();
 $config["base_url"] = base_url('category/'.$cat_name) . "/page";
$config['first_url'] = base_url('category/'.$cat_name);
 $config['use_page_numbers'] = TRUE;
 $config["total_rows"] = $this->Reportmodel->get_count_cat_pages($cat_name);
 $config["per_page"] = 10;
 $config["uri_segment"] = 4;
$this->pagination->initialize($config);

$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 $data["links"] = $this->pagination->create_links();
 if(empty($page)){$pagin=0;}else{$pagin=($page-1)*10;}

	$data['press'] = $this->Press_model->get_cat_by_all_news($config["per_page"], $pagin,$cat_name);
    $data['all_cat_pages'] = $this->Reportmodel->all_category();
    $data['all_static_pages'] = $this->Reportmodel->all_static_pages();
    $data['social_pages'] = $this->Reportmodel->get_social_pages();
    $data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
    $data['site_name'] = $data['comman_detail'][0]['site_name'] ;
    $data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
    $data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
    $data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
	$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
	$data['oldnews'] = $this->Reportmodel->oldnews_10();
    
    foreach($data['all_cat_pages'] as $row){
       if($cat_name==$row->cat_url){
           
          $data['title'] = $row->cat_meta_title;
          $data['description'] = $row->cat_meta_description;
          $data['keywords'] =  $row->cat_meta_keyword;
		  $data['cat'] =  $row->cat_name;
       }
    }
    
    $data['index_status']="index";
    $this->load->view('metadata/header_index', $data);
    $this->load->view('metadata/all_index');
    $this->load->view('metadata/footer');
    
}



public function removeCommonWords($str){
 
 	// EEEEEEK Stop words
	$commonWords = array('&','a','able','about','above','abroad','according','accordingly','across','actually','adj','after','afterwards','again','against','ago','ahead','ain\'t','all','allow','allows','almost','alone','along','alongside','already','also','although','always','am','amid','amidst','among','amongst','an','and','another','any','anybody','anyhow','anyone','anything','anyway','anyways','anywhere','apart','appear','appreciate','appropriate','are','aren\'t','around','as','a\'s','aside','ask','asking','associated','at','available','away','awfully','b','back','backward','backwards','be','became','because','become','becomes','becoming','been','before','beforehand','begin','behind','being','believe','below','beside','besides','best','better','between','beyond','both','brief','but','by','c','came','can','cannot','cant','can\'t','caption','cause','causes','certain','certainly','changes','clearly','c\'mon','co','co.','com','come','comes','concerning','consequently','consider','considering','contain','containing','contains','corresponding','could','couldn\'t','course','c\'s','currently','d','dare','daren\'t','definitely','described','despite','did','didn\'t','different','directly','do','does','doesn\'t','doing','done','don\'t','down','downwards','during','e','each','edu','eg','eight','eighty','either','else','elsewhere','end','ending','enough','entirely','especially','et','etc','even','ever','evermore','every','everybody','everyone','everything','everywhere','ex','exactly','example','except','f','fairly','far','farther','few','fewer','fifth','first','five','followed','following','follows','for','forever','former','formerly','forth','forward','found','four','from','further','furthermore','g','get','gets','getting','given','gives','go','goes','going','gone','got','gotten','greetings','h','had','hadn\'t','half','happens','hardly','has','hasn\'t','have','haven\'t','having','he','he\'d','he\'ll','hello','help','hence','her','here','hereafter','hereby','herein','here\'s','hereupon','hers','herself','he\'s','hi','him','himself','his','hither','hopefully','how','howbeit','however','hundred','i','i\'d','ie','if','ignored','i\'ll','i\'m','immediate','in','inasmuch','inc','inc.','indeed','indicate','indicated','indicates','inner','inside','insofar','instead','into','inward','is','isn\'t','it','it\'d','it\'ll','its','it\'s','itself','i\'ve','j','just','k','keep','keeps','kept','know','known','knows','l','last','lately','later','latter','latterly','least','less','lest','let','let\'s','like','liked','likely','likewise','little','look','looking','looks','low','lower','ltd','m','made','mainly','make','makes','many','may','maybe','mayn\'t','me','mean','meantime','meanwhile','merely','might','mightn\'t','mine','minus','miss','more','moreover','most','mostly','mr','mrs','much','must','mustn\'t','my','myself','n','name','namely','nd','near','nearly','necessary','need','needn\'t','needs','neither','never','neverf','neverless','nevertheless','new','next','nine','ninety','no','nobody','non','none','nonetheless','noone','no-one','nor','normally','not','nothing','notwithstanding','novel','now','nowhere','o','obviously','of','off','often','oh','ok','okay','old','on','once','one','ones','one\'s','only','onto','opposite','or','other','others','otherwise','ought','oughtn\'t','our','ours','ourselves','out','outside','over','overall','own','p','particular','particularly','past','per','perhaps','placed','please','plus','possible','presumably','probably','provided','provides','q','que','quite','qv','r','rather','rd','re','really','reasonably','recent','recently','regarding','regardless','regards','relatively','respectively','right','round','s','said','same','saw','say','saying','says','second','secondly','see','seeing','seem','seemed','seeming','seems','seen','self','selves','sensible','sent','serious','seriously','seven','several','shall','shan\'t','she','she\'d','she\'ll','she\'s','should','shouldn\'t','since','six','so','some','somebody','someday','somehow','someone','something','sometime','sometimes','somewhat','somewhere','soon','sorry','specified','specify','specifying','still','sub','such','sup','sure','t','take','taken','taking','tell','tends','th','than','thank','thanks','thanx','that','that\'ll','thats','that\'s','that\'ve','the','their','theirs','them','themselves','then','thence','there','thereafter','thereby','there\'d','therefore','therein','there\'ll','there\'re','theres','there\'s','thereupon','there\'ve','these','they','they\'d','they\'ll','they\'re','they\'ve','thing','things','think','third','thirty','this','thorough','thoroughly','those','though','three','through','throughout','thru','thus','till','to','together','too','took','toward','towards','tried','tries','truly','try','trying','t\'s','twice','two','u','un','under','underneath','undoing','unfortunately','unless','unlike','unlikely','until','unto','up','upon','upwards','us','use','used','useful','uses','using','usually','v','value','various','versus','very','via','viz','vs','w','want','wants','was','wasn\'t','way','we','we\'d','welcome','well','we\'ll','went','were','we\'re','weren\'t','we\'ve','what','whatever','what\'ll','what\'s','what\'ve','when','whence','whenever','where','whereafter','whereas','whereby','wherein','where\'s','whereupon','wherever','whether','which','whichever','while','whilst','whither','who','who\'d','whoever','whole','who\'ll','whom','whomever','who\'s','whose','why','will','willing','wish','with','within','without','wonder','won\'t','would','wouldn\'t','x','y','yes','yet','you','you\'d','you\'ll','your','you\'re','yours','yourself','yourselves','you\'ve','z','zero');
	
	//$url_tital=$this->uri->sigment(1);
$str=str_replace('&','and',$str);
 
	$out_put=preg_replace('/\b('.implode('|',$commonWords).')\b/','',$str);
	
    //$result=preg_replace( '/\b('.explode(' ',$out_put).')\b/',',',$out_put);
	
    $result = preg_replace('/[ ]+/', ', ', $out_put);
	$result=rtrim($result,', ');
	
	return $result;
}   

public function timeAgo($date,$formatted_date)
{
    $time_ago = strtotime($date);

	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)  
	$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
    $cur_time   = strtotime($time);

    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    // Seconds
    if($seconds <= 60){
        return "Published: Just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "Published: One minute ago";
        }
        else{
            return "Published: $minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "Published: An hour ago";
        }else{
            return "Published: $hours hours ago";
        }
    }
    else{
       return 'Date: '.$formatted_date;
    }
} 

	public function page_detail()
	{
		$data['news_details']="print";
		$id=null;
		$check_urlh= $this->uri->total_segments();
		if($check_urlh==4)
		{
			$url1 = $this->uri->segment(1);
			$url2 = $this->uri->segment(2);
			$url3 = $this->uri->segment(3);
			$url4= $this->uri->segment(4);
			$url=$url1."/".$url2."/".$url3."/".$url4;
		}
		else
		{
			$url = $this->uri->segment($this->uri->total_segments(1));	
		}
		$data['press'] = $this->Press_model->get_rep_detail($url);
		$id=$data['press']['id'];
		$sub_related_catname=$data['press']['promotion_cat'];
		$sub_related_id=$data['press']['related_report'];
		$main_cat=$data['press']['type'];
		$related_keyword=$data['press']['relatedkeyword'];
		$author_name=$data['press']['author'];
		$data['ten_report'] = $this->Press_model->get_top_five_report($id, $author_name);

		//related report by keywords
		$data['relatedpressbykeyword']=array();
		if(!empty($sub_related_catname)&& !empty($sub_related_id))
		{
			$data['relatedpressbykeyword'] = $this->Press_model->get_related_report_by_keyword($id, $author_name, $sub_related_catname,$main_cat,$sub_related_id);
		}
		else if(!empty($sub_related_catname) && empty($sub_related_id))
		{
			$data['relatedpressbykeyword'] = $this->Press_model->get_related_report_by_keyword($id, $author_name, $sub_related_catname,$main_cat,$sub_related_id);
		}

		//related report by keyword end here
		$author_name=str_replace(' ','',strtolower($data['press']['author']));
		$data['author']=$this->Author_model->get_author_details($author_name);
		$reportid=$data['press']['roportid'];
		$data['newsdata'] = $this->Reportmodel->get_top_twenty_one_news(); 
		$data['oldnews'] = $this->Reportmodel->oldnews_10();

		if($data['press']['meta_title']==null)
		{
			$data['title']=$data['press']['name'].' ';
		}
		else{
			$data['title'] = $data['press']['meta_title'].' ';
		}
		$str=$data['title'];
 
		$data['key_words']=$this->removeCommonWords($str);

		if(empty(trim($data['press']['meta_description'])))
		{
			$data['description'] =  strip_tags(substr($data['press']['full_desc'], 0, 170));
		}else{
			$data['description'] = $data['press']['meta_description'];
		}
		if($data['press']['meta_keywords']==null)
		{
			$data['keywords'] =  $data['key_words'];
		}else{
			$data['keywords'] = $data['press']['meta_keywords'].'';
		}
		$d = new DateTime($data['press']['date']);

		$timestamp = $d->getTimestamp(); // Unix timestamp
		$formatted_date = $d->format('Y-m-d');
		$date=$data['press']['date'];
		$data['time_elapsed'] = $this->timeAgo($date,$formatted_date);
		$data['index_status']="index";

		$data['all_cat_pages'] = $this->Reportmodel->all_category();
		$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
		$data['social_pages'] = $this->Reportmodel->get_social_pages();
		$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
		$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
		$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
		$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
		$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;
		$this->load->view('metadata/header_index', $data);
		$this->load->view('metadata/detail', $data);
		$this->load->view('metadata/footer');
	}


public function amp_detail()
{
$data['news_details']="print";
		$id=null;
		$check_urlh= $this->uri->total_segments();
		//var_dump($check_urlh);
		if($check_urlh==5)
		{
			$url1 = $this->uri->segment(1);
			$url2 = $this->uri->segment(2);
			$url3 = $this->uri->segment(3);
			$url4= $this->uri->segment(4);
			$url=$url1."/".$url2."/".$url3."/".$url4;
		}
		else
		{
			//$url = $this->uri->segment($this->uri->total_segments(1));	

			$url = $this->uri->segment(1);
		}
$data['press'] = $this->Press_model->get_rep_detail($url);
$reportid=$data['press']['roportid'];

$author_name=str_replace(' ','',strtolower($data['press']['author']));

$data['author']=$this->Author_model->get_author_details($author_name);

$author_name=$data['press']['author'];

$data['ten_report'] = $this->Press_model->get_top_five_report($reportid, $author_name);

//$data['report_url']=$this->Press_model->get_report_url($reportid);
//$rep_url=$data['report_url']['url'];
if($data['press']['meta_title']==null)
{
$data['title']=$data['press']['name'].' ';
}
else{
$data['title'] = $data['press']['meta_title'].' ';
}

if(!empty($data['press']['meta_description']))
{
$data['description'] =  substr(strip_tags($data['press']['full_desc']), 0, 170).'...';
}else{
$data['description'] = $data['press']['meta_description'];
}

$str=$data['title'];

$data['all_cat_pages'] = $this->Reportmodel->all_category();
$data['all_static_pages'] = $this->Reportmodel->all_static_pages();
$data['social_pages'] = $this->Reportmodel->get_social_pages();
$data['comman_detail'] = $this->Reportmodel->get_comman_detail();//in that we get site name, site logo, home page meta detail
$data['site_name'] = $data['comman_detail'][0]['site_name'] ;
$data['site_logo'] = $data['comman_detail'][0]['site_logo'] ;
$data['site_favicon'] = $data['comman_detail'][0]['site_favicon'] ;
$data['footer_twitter_baner'] = $data['comman_detail'][0]['footer_site_twitter_banner'] ;

 
$data['key_words']=$this->removeCommonWords($str);
$data['keywords'] = $data['press']['meta_keywords'].'';
$this->load->view('metadata/amp_detail', $data);

}  


public function health()
{   
$data['press'] = $this->Press_model->get_report();
$data['title'] = 'Healthcare Industry Updates at Reports GO';
$data['description'] = 'Read latest Healthcare news at Reports GO.';
$data['keywords'] = 'Healthcare Industry, Healthcare News';
$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/all_index');
$this->load->view('metadata/footer');
} 

//business
public function business(){
    
$data['press'] = $this->Press_model->get_business_data(); 
$data['title'] = 'Business News at Reports GO';
$data['description'] = 'Read latest business news at Reports GO.';
$data['keywords'] = 'Business News';	  
$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/all_index');
$this->load->view('metadata/footer');  
}

//headlines
public function headlines()
{
$data['press'] = $this->Press_model->get_headlines_data();
$data['title'] = 'Headline News at Reports GO';
$data['description'] = 'Read latest headlines news at Reports GO';
$data['keywords'] = 'News, Headline';
$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/all_index');
$this->load->view('metadata/footer');
}

public function tech()
{
    
$data['press'] = $this->Press_model->get_tech_data();
$data['title'] = 'Technology Industry Updates at Reports GO';
$data['description'] = 'Read latest technology news at Reports GO.';
$data['keywords'] = 'technology, invention, life with technology, modern technology';
$data['index_status']="index";
$this->load->view('metadata/header_index', $data);
$this->load->view('metadata/all_index');
$this->load->view('metadata/footer');
}
}