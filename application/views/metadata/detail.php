
<style>
.pre{
word-break: normal;    text-align: justify;
	    display: block;
	    margin: 0;
	    line-height: 20px;
	    word-wrap: break-word;
	    white-space: pre-wrap;
	    -webkit-border-radius: 4px;
	    overflow: visible;
	    background: transparent;
	    padding: 0;
	    border: none;
       font: inherit;

}.pre p,.pre li,.pre ul{margin:0 !important}
</style>
<?php 
function timeAgo($date,$formatted_date)
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
    if($seconds <= 60)
	{
        return "Published: Just now";
    }
    //Minutes
    else if($minutes <=60)
	{
        if($minutes==1)
		{
            return "Published: One minute ago";
        }
        else
		{
            return "Published: $minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24)
	{
        if($hours==1)
		{
            return "Published: An hour ago";
        }else
		{
            return "Published: $hours hours ago";
        }
    }
    else
	{
		
						
       return 'Date: '.$formatted_date;
    }
} ?>
<?php
$no= substr($press['id'], -1);
$d = new DateTime($press['date']);

					$timestamp = $d->getTimestamp(); // Unix timestamp
					$formatted_date = $d->format("F d, Y");

					$date=$press['date'];
					$time_elapsed = timeAgo($date,$formatted_date);
					
$filename="";
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


if(stripos($press['image_url'], "wp-content") !== false){

    $filename=$press['image_url'];



} else{
    $filename=$press['image_url'];

}

   
}
else{
        
    $k= 'news-'.$img.'.jpg';
}
?>

 <?php if(file_exists($filename))
 {
 	$imgfinalschema='./'.$filename; 
 }
 else
 {
 	$imgfinalschema= './assets/imgs/'.$k;
 }
 
 $data = getimagesize(trim($imgfinalschema));

$width11 = $data[0];
$height11 = $data[1];
$imgfinalschema=str_replace('./',base_url(),$imgfinalschema);
?>
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
    "url": "<?php echo $imgfinalschema;?>",
    "height": <?php echo $height11 ;?>,
    "width": <?php echo $width11 ;?>
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
      "url": "<?php echo base_url(); ?>wp-content/uploads/2020/02/theresearchprocess-logo.png",
      "width": 250,
      "height": 97
    }
  },
  "description": "<?php $str=$press['full_desc'] ; echo substr(strip_tags($str), 0, 160); ?>"
}
</script> 

<script type="application/ld+json">{
"@context": "http://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": 1,
"item": {
"@type": "WebPage",
"@id": "<?php echo base_url(); ?>",
"name": "Home"
}
},
{
"@type": "ListItem",
"position": 2,
"item": {
"@type": "WebPage",
"@id": "<?php echo current_url(); ?>",
"name": "<?php echo $press['name']; ?>"
}
}]
}</script>
<div id="content" class="herald-site-content herald-slide">
 
<div class="herald-section container ">

			<article id="post-104" class="herald-single post-104 post type-post status-publish format-standard hentry category-finance-news">
			<div class="row">
								
			
<div class="col-lg-9 col-md-9 col-mod-single col-mod-main">
	
	<header class="entry-header">
			<span class="meta-category"><a href="" class="herald-cat-3"><?php echo str_replace('-',' ',$press['type']);?></a></span>
		<h1 class="entry-title h1"><?php echo $press['name']; ?></h1><div class="entry-meta entry-meta-single"><div class="meta-item herald-date"><span class="updated"><?php echo $time_elapsed; ?></span></div><!--<div class="meta-item herald-rtime">2 Min Read</div>--></div>
	</header>	
<div class="herald-post-thumbnail herald-post-thumbnail-single">
		<span>
  <?php
	if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$filename)) {  ?><img width="611" height="307" src="<?php echo base_url($filename) ?>" class="attachment-herald-lay-single size-herald-lay-single wp-post-image" alt="<?php echo str_replace("&","&amp;",$press['name']); ?>"/>
       <?php } else{?>
						
                <img  width="611" height="307" src="<?php echo base_url('assets/imgs/news-'.$img.'.jpg');?>" class="attachment-herald-lay-single size-herald-lay-single wp-post-image" alt="<?php echo str_replace("&","&amp;",$press['name']); ?>"/>
              
	<?php } ?>

</span>
					<figure class="wp-caption-text"><?php echo str_replace("&","&amp;",$press['name']); ?></figure>
			</div>	
		<div class="row">

			

	<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs herald-left">

		<div class="entry-meta-wrapper">

					<div class="entry-meta-author">	
				<img alt="" src="<?php echo base_url('assets/images/author/'.$author['url']);?>.png" alt="<?php echo $author['name'];?>" srcset="https://secure.gravatar.com/avatar/c276bd260fe47d07e34d08fd5adcbce5?s=224&amp;d=mm&amp;r=g 2x" class="avatar avatar-112 photo" height="112" width="112">				
				<a class="herald-author-name" href="<?php echo base_url('author/'.str_replace(' ','',strtolower($press['author'])));?>"><?php echo $press['author']; ?></a>

							</div>
		
					<!--<div class="entry-meta entry-meta-single"><div class="meta-item herald-comments"><a href="https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/#respond">Add Comment</a></div></div>-->
		
					

	<ul class="herald-share">
		<span class="herald-share-meta"><i class="fa fa-share-alt"></i>Share This!</span>
		<div class="meta-share-wrapper">
							
			     <li class="facebook"> <a href="javascript:void(0);" data-url="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url());?>"><i class="fa fa-facebook"></i><span>Facebook</span></a> </li>
			    
							

			    <li class="twitter"> <a href="javascript:void(0);" data-url=" https://twitter.com/intent/tweet?original_referer=<?php echo urlencode(current_url());?>&ref_src=twsrc%5Etfw&text=<?php echo urlencode($press['name']);?>&tw_p=tweetbutton&url=<?php echo urlencode(current_url());?>"><i class="fa fa-twitter"></i><span>Twitter</span></a> </li>
			    
							
			    <li class="linkedin"> <a href="javascript:void(0);" data-url="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(current_url());?>"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a> </li>
			    
			 
	 	</div>
	</ul>

		
		</div>

	</div>


			<div class="col-lg-10 col-md-10 col-sm-10">
				<div class="entry-content herald-entry-content">

	
	
		
	<pre class="pre"><?php echo $press['full_desc']; ?></pre>

	
	
	
</div>			</div>

<!--SATRT EXTRA NEWS-->

<div id="extras" class="col-lg-12 col-md-12 col-sm-12">
						<div id="related" class="herald-related-wrapper">	
				<?php if(!empty($ten_report)){ ?>
		<div class="herald-mod-wrap"><div class="herald-mod-head ">
				<div class="herald-mod-title"><h4 class="h6 herald-mod-h herald-color">You may also like</h4></div></div></div><?php }?>
		<div class="herald-related row row-eq-height">
<?php 
             foreach($ten_report as $row){
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
													<article class="herald-lay-f herald-lay-f1 post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-general-news category-technology-news tag-android tag-european-commission tag-google tag-google-anittrust">
<div class="herald-ovrld">		
			<div class="herald-post-thumbnail">
			
			

 <?php
                
                if(!empty($row->image_url)){

                	if(stripos($row->image_url, "wp-content") !== false){

    $filename=$row->image_url;}else{

  $filename='img/'.$row->image_url;
    }
  
}
else
{
$filename = 'img/'.$row->type.'/'.$row->url.'.jpg';
}
              if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$filename)) {?>
                 <a  href="<?php echo base_url('');?><?php echo $row->url;?>" title="<?php echo str_replace("&","&amp;",$row->name); ?>"><img style="width: 300; height=200" src="<?php echo base_url(); echo $filename;?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="<?php echo str_replace("&","&amp;",$row->name); ?>"/></a>
              <?php }else{?>
            
              <a  href="<?php echo base_url('');?><?php echo $row->url;?>"><img style="width: 300; height=200;" src="<?php echo base_url('assets/imgs/news-'.$img.'.jpg');?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="<?php echo str_replace("&","&amp;",$row->name); ?>"/></a>
            <?php } ?>
			 
		</div>
	
	<div class="entry-header">
					<span class="meta-category"><a href="<?php echo base_url('category/'.$row->type); ?>" class="herald-cat-1"><?php echo $row->type ;?></a> <span>•</span> </span>
		
		<h2 class="entry-title h6"><a href="<?php echo base_url('');?><?php echo $row->url;?>/" title="<?php echo str_replace("&","&amp;",$row->name); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></h2>
	
					<div class="entry-meta"><div class="meta-item herald-date"><span class="updated"><?php  echo $time_elapsed; ?></span></div></div>
	</div>
	 
	
	
	
</div>
	
	
</article>		
<?php } ?>	
</div>
</div>

	
	<div id="single-sticky" class="herald-single-sticky herald-single-wraper hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
				 
			</div>
		</div>
	</div>					
</div>			</div>

<!--END EATRA NEWS-->

			<div id="extras" class="col-lg-12 col-md-12 col-sm-12">

		

	<div id="author" class="herald-vertical-padding">
<div class="herald-mod-wrap"><div class="herald-mod-head "><div class="herald-mod-title"><h4 class="h6 herald-mod-h herald-color">About the author</h4></div><div class="herald-mod-actions"><a href="<?php echo base_url('author/'.str_replace(' ','',strtolower($press['author'])));echo '/';?>">View All Posts</a></div></div></div>
<div class="herald-author row">

	<div class="herald-author-data col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<img alt="" src="<?php echo base_url('assets/images/author/'.$author['url']);?>.png" alt="<?php echo $author['name'];?>" class="avatar avatar-140 photo" height="140" width="140">	</div>
	
	<div class="herald-data-content col-lg-10 col-md-10 col-sm-10 col-xs-10">
		<h4 class="author-title"> <?php echo $press['author']; ?></h4>
<p style="text-align:justify"><?php echo $author['description'];?></p>
			</div>

</div>

</div>
	

	


	<div id="single-sticky" class="herald-single-sticky herald-single-wraper hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
									
					
										
											<div class="herald-sticky-prev h6">
							<a href="https://theresearchprocess.com/2019/11/23/softbank-along-with-constellation-asset-management-and-gavea-investimentos-invest-140-million-in-brazil-e-commerce-start-up/" rel="prev">Softbank along with Constellation Asset Management and&nbsp;Gavea Investimentos&nbsp;invest $140 million in Brazil e-commerce start-up&nbsp;</a>						</div>
					
					
				
					<div class="herald-sticky-share">
						
						
						<a href="https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/#respond" class="herald-comment-action">Comment</a>						
						
													

	<ul class="herald-share">
		<span class="herald-share-meta"><i class="fa fa-share-alt"></i>Share This!</span>
		<div class="meta-share-wrapper">
							
			     <li class="facebook"> <a href="javascript:void(0);" data-url="http://www.facebook.com/sharer/sharer.php?u=https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/&amp;t=Turbine installation completed at Taiwan’s Formosa 1 offshore wind farm"><i class="fa fa-facebook"></i><span>Facebook</span></a> </li>
			    
							
			     <li class="twitter"> <a href="javascript:void(0);" data-url="http://twitter.com/intent/tweet?url=https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/&amp;text=Turbine installation completed at Taiwan’s Formosa 1 offshore wind farm"><i class="fa fa-twitter"></i><span>Twitter</span></a> </li>
			    
							
			     <li class="gplus"> <a href="javascript:void(0);" data-url="https://plus.google.com/share?url=https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/"><i class="fa fa-google-plus"></i><span>Google Plus</span></a> </li>
			    
							
			     <li class="pinterest"> <a href="javascript:void(0);" data-url="http://pinterest.com/pin/create/button/?url=https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/&amp;media=&amp;description=Turbine installation completed at Taiwan’s Formosa 1 offshore wind farm"><i class="fa fa-pinterest"></i><span>Pinterest</span></a> </li>
			    
							
			     <li class="linkedin"> <a href="javascript:void(0);" data-url="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/&amp;title=Turbine installation completed at Taiwan’s Formosa 1 offshore wind farm"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a> </li>
			    
			 
	 	</div>
	</ul>

						
					</div>

			</div>
		</div>
	</div>					
</div>			</div>




		</div>

</div>

	

	<div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">

					<div id="search-2" class="widget widget_search">
<form id="searchform"  class="herald-search-form" action="<?php echo base_url(); ?>search" method="get">
	<input name="q" id="s" class="herald-search-input" type="text" value="" placeholder="Type here to search...">
<button type="submit" class="herald-search-submit"></button>
</form></div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<h4 class="widget-title h6"><span>Recent Posts</span></h4>	
  <?php foreach($oldnews as $row2){?>	
<ul>
											<li>
					<a href="<?php echo base_url('');echo $row2->url;echo '/';?>" title="<?php echo str_replace("&","&amp;",$row2->name); ?>" rel="bookmark"><?php echo str_replace("&","&amp;",$row2->name); ?></a>
									</li>
						<?php } ?>	  	
					</ul>
		</div><div id="categories-2" class="widget widget_categories"><h4 class="widget-title h6"><span>Categories</span></h4>		<ul>
		
<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
                 { ?>
              
           <li><a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a></li>       
              <?php }} 
              ?>

		</ul>
			</div>		
		
	</div>

		
	</div>

</div>



	</div>