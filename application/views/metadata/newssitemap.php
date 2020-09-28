<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?><?= '<?xml-stylesheet type="text/xsl" href="https://www.theresearchprocess.com/assets/xml/xml-news-sitemap.xsl"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php $commonWords = array('a','able','about','above','abroad','according','accordingly','across','actually','adj','after','afterwards','again','against','ago','ahead','ain\'t','all','allow','allows','almost','alone','along','alongside','already','also','although','always','am','amid','amidst','among','amongst','an','and','another','any','anybody','anyhow','anyone','anything','anyway','anyways','anywhere','apart','appear','appreciate','appropriate','are','aren\'t','around','as','a\'s','aside','ask','asking','associated','at','available','away','awfully','b','back','backward','backwards','be','became','because','become','becomes','becoming','been','before','beforehand','begin','behind','being','believe','below','beside','besides','best','better','between','beyond','both','brief','but','by','c','came','can','cannot','cant','can\'t','caption','cause','causes','certain','certainly','changes','clearly','c\'mon','co','co.','com','come','comes','concerning','consequently','consider','considering','contain','containing','contains','corresponding','could','couldn\'t','course','c\'s','currently','d','dare','daren\'t','definitely','described','despite','did','didn\'t','different','directly','do','does','doesn\'t','doing','done','don\'t','down','downwards','during','e','each','edu','eg','eight','eighty','either','else','elsewhere','end','ending','enough','entirely','especially','et','etc','even','ever','evermore','every','everybody','everyone','everything','everywhere','ex','exactly','example','except','f','fairly','far','farther','few','fewer','fifth','first','five','followed','following','follows','for','forever','former','formerly','forth','forward','found','four','from','further','furthermore','g','get','gets','getting','given','gives','go','goes','going','gone','got','gotten','greetings','h','had','hadn\'t','half','happens','hardly','has','hasn\'t','have','haven\'t','having','he','he\'d','he\'ll','hello','help','hence','her','here','hereafter','hereby','herein','here\'s','hereupon','hers','herself','he\'s','hi','him','himself','his','hither','hopefully','how','howbeit','however','hundred','i','i\'d','ie','if','ignored','i\'ll','i\'m','immediate','in','inasmuch','inc','inc.','indeed','indicate','indicated','indicates','inner','inside','insofar','instead','into','inward','is','isn\'t','it','it\'d','it\'ll','its','it\'s','itself','i\'ve','j','just','k','keep','keeps','kept','know','known','knows','l','last','lately','later','latter','latterly','least','less','lest','let','let\'s','like','liked','likely','likewise','little','look','looking','looks','low','lower','ltd','m','made','mainly','make','makes','many','may','maybe','mayn\'t','me','mean','meantime','meanwhile','merely','might','mightn\'t','mine','minus','miss','more','moreover','most','mostly','mr','mrs','much','must','mustn\'t','my','myself','n','name','namely','nd','near','nearly','necessary','need','needn\'t','needs','neither','never','neverf','neverless','nevertheless','new','next','nine','ninety','no','nobody','non','none','nonetheless','noone','no-one','nor','normally','not','nothing','notwithstanding','novel','now','nowhere','o','obviously','of','off','often','oh','ok','okay','old','on','once','one','ones','one\'s','only','onto','opposite','or','other','others','otherwise','ought','oughtn\'t','our','ours','ourselves','out','outside','over','overall','own','p','particular','particularly','past','per','perhaps','placed','please','plus','possible','presumably','probably','provided','provides','q','que','quite','qv','r','rather','rd','re','really','reasonably','recent','recently','regarding','regardless','regards','relatively','respectively','right','round','s','said','same','saw','say','saying','says','second','secondly','see','seeing','seem','seemed','seeming','seems','seen','self','selves','sensible','sent','serious','seriously','seven','several','shall','shan\'t','she','she\'d','she\'ll','she\'s','should','shouldn\'t','since','six','so','some','somebody','someday','somehow','someone','something','sometime','sometimes','somewhat','somewhere','soon','sorry','specified','specify','specifying','still','sub','such','sup','sure','t','take','taken','taking','tell','tends','th','than','thank','thanks','thanx','that','that\'ll','thats','that\'s','that\'ve','the','their','theirs','them','themselves','then','thence','there','thereafter','thereby','there\'d','therefore','therein','there\'ll','there\'re','theres','there\'s','thereupon','there\'ve','these','they','they\'d','they\'ll','they\'re','they\'ve','thing','things','think','third','thirty','this','thorough','thoroughly','those','though','three','through','throughout','thru','thus','till','to','together','too','took','toward','towards','tried','tries','truly','try','trying','t\'s','twice','two','u','un','under','underneath','undoing','unfortunately','unless','unlike','unlikely','until','unto','up','upon','upwards','us','use','used','useful','uses','using','usually','v','value','various','versus','very','via','viz','vs','w','want','wants','was','wasn\'t','way','we','we\'d','welcome','well','we\'ll','went','were','we\'re','weren\'t','we\'ve','what','whatever','what\'ll','what\'s','what\'ve','when','whence','whenever','where','whereafter','whereas','whereby','wherein','where\'s','whereupon','wherever','whether','which','whichever','while','whilst','whither','who','who\'d','whoever','whole','who\'ll','whom','whomever','who\'s','whose','why','will','willing','wish','with','within','without','wonder','won\'t','would','wouldn\'t','x','y','yes','yet','you','you\'d','you\'ll','your','you\'re','yours','yourself','yourselves','you\'ve','z','zero'); ?>
	
 <?php if(!empty($health)){
             foreach($health as $row){ ?>
			 
    <url>
        <loc><?php echo base_url($row->url); ?></loc>
        <news:news>
            <news:publication>
                <news:name>The Research Process</news:name>
                <news:language>en</news:language>
            </news:publication>
            <news:publication_date><?php echo str_replace(' ','T',$row->date);?>+05:30</news:publication_date>
            <news:title><![CDATA[<?php echo $row->name; ?>]]></news:title>
	<?php 
	if($row->meta_keywords !='')
	{?>
	   <news:keywords><![CDATA[<?php echo $row->meta_keywords; ?>]]></news:keywords>
	<?php }
	else
	{
	    $news_name=preg_replace("/[^a-zA-Z 0-9]+/", "", $row->name);
    	$out_put=preg_replace('/\b('.implode('|',$commonWords).')\b/','',$news_name);
        $result = preg_replace('/[ ]+/', ', ', $out_put); ?>
        <news:keywords><?php echo trim(trim($result,","),' '); ?></news:keywords>
    <?php } ?>
    </news:news>
    
     <?php
$no= substr($row->id, -1);
switch ($no) {
	case 0:
        $img=1; break;
    case 1:
        $img=2; break;
    case 2:
        $img=3; break;
    case 3:
        $img=4; break;
    case 4:
        $img=5; break;
    case 5:
        $img=6; break;
    case 6:
        $img=7; break;
    case 7:
        $img=8; break;
    case 8:
        $img=9; break;
    case 9:
        $img=10; break;
    default:
        echo " ";
}
?>
<?php if(!empty($row->image_url)){
    $filename=$row->image_url;
}
else{
        
    $k= 'news-'.$img.'.jpg';
}
 if(file_exists($filename))
 {
 	$imgfinalschema=$filename; 
 }
 else
 {
 	$imgfinalschema= 'img/img-'.$img.'.png';
 }?>
 <image:image>
			<image:loc><?php echo base_url();echo $imgfinalschema;?></image:loc>
		</image:image>
  </url>
<?php }}?>		    

</urlset>