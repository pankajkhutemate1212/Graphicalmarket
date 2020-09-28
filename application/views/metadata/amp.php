<!doctype html>

<html amp>
<head>
<title><?php echo $press['name']; ?></title>
    <meta charset="utf-8">
    <link rel="canonical" href="<?php echo base_url();?><?php echo $this->uri->segment(1); ?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <meta name="news_keywords" content="<?php echo  $key_words; ?>"/>
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/<?php echo $site_favicon; ?>">

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>


<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
        .meta,.title,nav.title-bar{text-align:center}.byline amp-img,.wp-caption,amp-img.alignright{float:right;margin:0 0 1em 1em}amp-img.alignleft{float:left;margin:0 1em 1em 0}.aligncenter,amp-img.aligncenter{display:block;margin-left:auto;margin-right:auto}.alignright{float:right}.alignleft{float:left}.wp-caption.alignleft{float:none}.content,.title-bar div{max-width:100%;margin:0 auto}body{font-family:"Frank Ruhl Libre",Georgia,arial;font-size:16px;line-height:1.5;background:#f3f3f3;color:#333;-webkit-font-smoothing:subpixel-antialiased}.menu-btn.close,.meta,.wp-caption-text,footer,nav.title-bar{font-family:"Open Sans","Segoe UI",Arial,sans-serif}.content{padding:5px 16px;overflow-wrap:break-word;word-wrap:break-word;font-weight:400;color:#333}.title{color:#111;font-size:1.35em;line-height:1.3;font-weight:700;padding:5px 8% 10px;margin:0;word-spacing:-1px;border-bottom:1px solid #999}figure,ol,p,ul{text-align: justify;font-size:1.18em;line-height:1.45;margin:0 0 24px}a,a:visited{color:#0087be}a:active,a:focus,a:hover{color:#33bbe3}.meta,.wp-caption-text,nav.title-bar{font-size:15px}.meta{list-style:none;padding-top:10px;margin-bottom:10px}.meta p{text-align: center;margin-bottom:0}.meta,.meta a{color:#999;font-size:12px;text-decoration:none;}.byline amp-img{border-radius:50%;border:0;background:#f3f6f8;top:6px;margin-right:6px;display:none}.logo{margin:15px auto;display:block}nav.title-bar{border-bottom:1px solid #ccc;padding:0 10px;background:#FFF;height:50px}nav.title-bar a{display:inline-block;color:#000}nav.title-bar svg{fill:#fff;float:left;margin:11px 8px 0 0}.wp-caption-text{background:rgba(0,0,0,.1);padding:8px 10px;color:#333}blockquote{font-size:1.18em;padding:16px;margin:8px 0 24px;border-left:2px solid #87a6bc;color:#4f748e;background:#e9eff3}.copyrights,.footer-links a{font-size:13px;color:#999}.copyrights,.footer-links{text-align:center;padding:20px 0}blockquote p:last-child{margin-bottom:0}.ad-section{text-align:center}footer{margin:10px auto 0;align-items:center;justify-content:center;background:#000}.footer-links{border-top:1px solid #999}.footer-links a{text-decoration:none;display:block}.menu-btn{display:block;background:#FFF;border:none;float:left;padding:10px 5px;margin-top:5px}.menu-btn span{display:block;height:4px;background:#ed2824;width:22px;margin-bottom:3px;border-radius:1px}#sidebar1{position:relative;width:200px;color:#DDD;background:#000}.menu-btn.close{padding:10px 0;font-size:20px;color:#999;background:#222;float:right;width:100%;margin-top:0}.menu-btn.close span{display:inline-block;background:0 0;width:auto;padding-right:10px}.sidemenu ul{display:table;width:100%;list-style:none;margin:0;padding:5px 0 0}.sidemenu a{display:block;padding:10px 15px;color:#EEE;font-size:13px;line-height:1.2;border-bottom:1px dashed #222;text-decoration:none;font-family:'Open Sans','Segoe UI',Avenir,Arial,sans-serif;font-weight:400}.sidemenu a:active{background:#333}
        .switch-link{float: right; padding-top: 15px; text-decoration: none;}
    
    #contentimg amp-img {

    max-width: 380px;
    max-height: 250px;
}
.abt_auth{font-size: 1.1em;}.auth_name_amp{font-size: 1.1em;} .svg_img{position: absolute; margin-left:4px;}pre{    text-align: justify;
    display: block;
    font-family: "Frank Ruhl Libre",Georgia,arial;
    margin: 0 0 10px;
    font-size: 16px;
    line-height: 24px;
    word-break: break-all;
    word-wrap: break-word;
    white-space: pre;
    white-space: pre-wrap;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;}
	  .dymicbttnp{
padding-top: 10px;padding-bottom: 10px;text-align:center;margin:15px 0;
}
.requestcustbtna{
padding-left: 2em;    padding-right: 2em;    padding-left: 1em; padding-right: 1em; background: #03293d ;border: 2px solid #0a7eaf; background-image: -webkit-linear-gradient(top,rgb(6, 133, 187) 50%, rgb(5, 72, 101)) ;color: #fff;padding: 0.50em 1em; /* margin-top: 14px; */ cursor: pointer;font-size: 15px;
}
.ibbbtna{
margin-left: 2em;padding-left: 1em;padding-right: 1em;background: #03293d ;  border: 2px solid #0a7eaf; background-image: -webkit-linear-gradient(top, rgb(6, 133, 187) 50%, rgb(5, 72, 101)) ;color: #fff;padding: 0.50em 1em; /*margin-top: 14px; */cursor: pointer;font-size: 15px;
}
	.full-desc ul{margin-left:30px;margin-bottom:15px}.full-desc ul li{margin:10px 0;font-size: 14px;}.ibbbtna:hover,.requestcustbtna:hover,.ibbbtna:focus,.requestcustbtna:focus{    background-image: -webkit-linear-gradient(top,rgb(22, 175, 241) 50%, rgb(12, 137, 191)) ;color: #fff;border: 2px solid #16aff1;text-decoration:none}@media only screen and (max-width:600px){.requestcustbtna,.ibbbtna{display:block}.requestcustbtna{margin-bottom:20px}.ibbbtna{margin:0}}
    </style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,700" />
</head>
<body>
<?php
$no= substr($press['id'], -1);
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
<?php if(!empty($press['image_url'])){
    $filename='img/'.$press['image_url'];
}
else{
        
    $k= 'news-'.$img.'.jpg';
}
?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "<?php echo base_url(); ?>",
  "name": "<?php echo $site_name; ?>"
  
}
</script>
<script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type" : "WebSite",
"name" : "<?php echo $site_name; ?>",
"alternateName" : "<?php echo $site_name; ?>",
"url" : "<?php echo base_url(); ?>"
}
</script>


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<?php echo current_url(); ?>"
  },
  "headline": "<?php echo substr($press['name'], 0, 80); ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php if(file_exists($filename)){echo base_url(); echo $filename;}else{echo base_url('assets/imgs');?>/<?php echo $k;}?>",
    "height": 800,
    "width": 800
  },
  "datePublished": "<?php echo $press['date']; ?>",
  "dateModified": "<?php echo $press['date']; ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo $press['author']; ?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "<?php echo $site_name; ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo base_url(); ?>assets/images/<?php echo $site_logo?>",
      "width": 600,
      "height": 60
    }
  },
  "description": "<?php $str=$press['full_desc'] ; echo substr(strip_tags($str), 0, 160); ?>"
}
</script> 


<amp-sidebar id='sidebar1' layout='nodisplay'>
<button class="menu-btn close" on="tap:sidebar1.close">&times; close</button>
<div class="sidemenu"><ul>


            <li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php if(!empty($all_cat_pages)){foreach($all_cat_pages as $row){?>
            <li class=""><a href="<?php echo base_url($row->cat_url); ?>"><?php echo $row->cat_name; ?></a></li>
            <?php }} ?>
            
             <?php if(!empty($all_static_pages)){foreach($all_static_pages as $row){?>
            <li class=""><a href="<?php echo base_url($row->page_url); ?>"><?php echo $row->page_name; ?></a></li>
            <?php }} ?>
            
  </ul></div>
</amp-sidebar>

<nav class="title-bar">
    <button class="menu-btn" on="tap:sidebar1.open"><span></span><span></span><span></span></button>
    <a href="<?php echo base_url();?>" >
       <h3><?php echo $site_name; ?></h3> 
    </a>
   
</nav>

<div class="cover">

    
    
    <?php  if (file_exists($filename)) {?>
   <amp-img src="<?php echo base_url(); echo $filename;?>" width="380" height="285" class="size-full wp-image-2291392" layout="responsive"></amp-img>
<?php } else {?>
<amp-img src="<?php echo base_url('assets/imgs/'.$k); ?>" width="380" height="285" class="size-full wp-image-2291392" layout="responsive"></amp-img>
<?php }?>
</div>
<div class="content">
    <h1 class="title"><?php echo $press['name']; ?></h1>


    <div class="meta">
        <div class="byline">
            
            
            <?php $d = new DateTime($press['publish_date']);

$timestamp = $d->getTimestamp(); // Unix timestamp
$formatted_date = $d->format('d-m-Y');

?>
            <span><time datetime="<?php echo $formatted_date; ?>"><?php echo $formatted_date; ?></time></span>
            
        </div>
        <p>By <?php echo $press['author'];?></p>
    </div>
        
                                                                                                                
            <pre><?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1',$press['full_desc']);//echo strip_tags($press['full_desc']); ?>
			</pre>
    
 <div class="card base-back">
 


	     	<span><h4 class="about-auth abt_auth">About Author</h4><hr></span>
	     	
		<h1 class="auth-name auth_name_amp"><?php echo $press['author']; ?>      <a title="Twitter" target="_blank" href="https://www.twitter.com/<?php echo $author['twitter_account'] ?>/"><amp-img src="<?php echo base_url('assets/images/social/twitter.png') ?>" width="19" height="17"></a> </amp-img>          <a title="Author Mail ID" href="mailto:<?php echo $author['algos_mail_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="#0077B5" width="20" height="20" viewBox="0 0 8 8" class="svg_img">
  <path d="M0 0v1l4 2 4-2v-1h-8zm0 2v4h8v-4l-4 2-4-2z" transform="translate(0 1)"></path>
</svg></a></h1>

	     	
				 <div class="col c2 cust-c2 c2-custom">
				     
				    <amp-img src="<?php echo base_url('assets/images/author/'.$author['url']);?>.png" alt="<?php echo $author['name'];?>" width="85" height="85"></amp-img>
				    
				 </div>	
				 <div class="col c8 c8-custom"><p><?php echo substr(strip_tags($author['description']), 0, 300);?>...</p><p><u><a href="<?php echo base_url() ?>author/<?php echo $author['url']  ?>">Read More</a></u></p></div>
	     	
	     	
	     </div>
     

        
</div>


<footer>
    <div class="brand-logo"></div>
    <div class="copyrights"><?php echo date("Y"); ?> <?php echo $site_name; ?> | All Rights Reserved</div>
</footer>

<amp-analytics type="googleanalytics" id="analytics1">
    <script type="application/json">
        {
            "vars": {
                "account": "UA-101345635-1"
            },
            "triggers": {
                "trackPageview": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>
</amp-analytics>
</body>
</html>