<?php

class Url_checker extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('urlchecker_model');

    }
    
    function preview_insert()
    {
        $pre_title = $_POST['pre_title1'];
        $pre_url = $_POST['pre_url1'];
        $pre_meta_title = $_POST['pre_meta_title1'];
        $pre_key = $_POST['pre_key1'];
        $pre_desc = $_POST['pre_desc1'];
        $pre_author = $_POST['pre_author1'];
        $pre_summary = $_POST['pre_summary1'];
        $pre_date = $_POST['pre_date1'];
        $pre_img_url = $_POST['pre_img_url1'];
        $pre_news_type = $_POST['pre_news_type1'];
         $sum= $this->db->escape_str($pre_summary);
         $url= $this->db->escape_str($pre_url);
         $meta_title= $this->db->escape_str($pre_meta_title);
         $title= $this->db->escape_str($pre_title);
         $key= $this->db->escape_str($pre_key);
         $desc= $this->db->escape_str($pre_desc);
         $author= $this->db->escape_str($pre_author);
         $date= $this->db->escape_str($pre_date);
         $img= $this->db->escape_str($pre_img_url);
         $type= $this->db->escape_str($pre_news_type);

        
        $data['result']= $this->urlchecker_model->insert_press_preview($title,$url,$eta_title,$key,$desc,$author,$sum,$date,$img,$type);
    }

    public function news() {

         
        $search_data = $_POST['url_search'];
		$this->load->model('urlchecker_model');
 
        $query = $this->urlchecker_model->get_live_url_search_news($search_data);
        
        if($query==1)
        {
			echo "<p>URL already exist.</p>";
		}
    }
    function market() {
        $search_data = $_POST['url_search'];

        $query = $this->urlchecker_model->get_live_url_search_market($search_data);
        
       /* $img_exist=$_SERVER['DOCUMENT_ROOT'].'/img/market/'.$search_data.'.jpg';
        
        if(!file_exists($img_exist))
        {
            echo "<p>Upload Image First.     <a href='http://algosonline.com/assets/ci/admin/upload'>Upload Image</a></p>";
        }*/
        
        if($query==1)
        {
			echo "<p>URL allready exist.</p>";
		}
    }
    function industry() {
        $search_data = $_POST['url_search'];

        $query = $this->urlchecker_model->get_live_url_search_industry($search_data);
        
        /*$img_exist=$_SERVER['DOCUMENT_ROOT'].'/img/industry/'.$search_data.'.jpg';
        
        if(!file_exists($img_exist))
        {
            echo "<p>Upload Image First.     <a href='http://algosonline.com/assets/ci/admin/upload'>Upload Image</a></p>";
        }*/

        if($query==1)
        {
			echo "<p>URL allready exist.</p>";
		}
    }
    function technology() {
        $search_data = $_POST['url_search'];

        $query = $this->urlchecker_model->get_live_url_search_technology($search_data);
        
        /*$img_exist=$_SERVER['DOCUMENT_ROOT'].'/img/technology/'.$search_data.'.jpg';
        if(!file_exists($img_exist))
        {
            echo "<p>Upload Image First.     <a href='http://algosonline.com/assets/ci/admin/upload'>Upload Image</a></p>";
        }*/
        
        if($query==1)
        {
			echo "<p>URL allready exist.</p>";
		}
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
}