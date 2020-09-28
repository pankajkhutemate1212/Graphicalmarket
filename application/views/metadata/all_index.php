<style>
.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
}
nav.navigation {
    margin-top: 30px;
}
.pagination {
    clear: both;
    overflow: hidden;
    float: left;
    width: 100%;
    margin-top: 5px;
    margin-bottom: 25px;
    text-align: center;
}
nav.pagination .nav-links a {
   
}
.currenttext, .pagination a:hover, .single .pagination a:hover .currenttext, .page-numbers.current {
    color: #fff;
    margin: 0 3px 5px 0;
    display: inline-block;
    line-height: 1;
    text-decoration: none;
    padding: 10px 13px;
    font-weight: bold;
    background: #2A2A2A;
  
}
a#pull, #commentform input#submit, .contact-form #mtscontact_submit, #move-to-top:hover, #searchform .fa-search, .pagination a, li.page-numbers, .page-numbers.dots, #tabber ul.tabs li a.selected, .tagcloud a:hover, .latestPost-review-wrapper, .latestPost .review-type-circle.wp-review-show-total, .tagcloud a, .widget .owl-prev:hover, .widget .owl-next:hover, .widget .review-total-only, .widget .tab-content .review-type-star.review-total-only, .widget .wpt_widget_content #tags-tab-content ul li a, .feature-icon, .btn-archive-link.project-categories .btn.active, .btn-archive-link.project-categories a:hover, #wpmm-megamenu .review-total-only, #load-posts a, a.header-button, #features .feature-icon, #team .social-list a, .thecategory, .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce-page nav.woocommerce-pagination ul li a, .woocommerce #content nav.woocommerce-pagination ul li a, .woocommerce-page #content nav.woocommerce-pagination ul li a, .woocommerce .bypostauthor:after, #searchsubmit, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li .page-numbers.dots, .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-product-search input[type='submit'] {
    background-color: #f27649;
    color: #fff!important;
}
.pagination a, li.page-numbers, .page-numbers.dots {
    background: #38B7EE;
    margin: 0 3px 5px 0;
    display: inline-block;
    line-height: 1;
    text-decoration: none;
    color: #fff;
    padding: 10px 13px;
    font-weight: bold;
    transition: all 0.25s linear;
}
a:link, a:visited, a:active {
    text-decoration: none;
}

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
} ?>

<div id="content" class="herald-site-content herald-slide">

	


<div class="herald-section container ">

	<div class="row">

		
		
		<div class="herald-module col-mod-main herald-main-content col-lg-9 col-md-9">
			
								<div class="herald-mod-wrap"><div class="herald-mod-head herald-cat-3"><div class="herald-mod-title"><h1 class="h6 herald-mod-h herald-color">Category - <?php echo $cat;?></h1></div></div></div>						
			
			<div class="row row-eq-height herald-posts">
<?php if(!empty($press)){ foreach($press as $row){ ?>
			<?php
					$d = new DateTime($row->date);

					$timestamp = $d->getTimestamp(); // Unix timestamp
					$formatted_date = $d->format("F d, Y");

					$date=$row->date;
					$time_elapsed = timeAgo($date,$formatted_date);
					if(!empty($row->image_url))
											{
												$filename=$row->image_url;
											}
											else
											{
												$filename = 'img/'.$row->type.'/'.$row->url.'.jpg';
											}
											
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

														<article class="herald-lay-b post-104 post type-post status-publish format-standard hentry category-finance-news">
<div class="row">
	
			<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="herald-post-thumbnail herald-format-icon-middle">
				<a href="<?php echo base_url(); ?><?php echo $row->url;echo '/'; ?>" title="<?php echo $row->name;?>" title="<?php echo $row->name;?>">

  <?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$filename)) {?>
			<img src="<?php echo base_url($filename);?>" alt="<?php echo str_replace("&","&amp;",$row->name); ?>" title="">
			<?php } else {?>
			<img src="<?php echo base_url('assets/imgs/news-'.$img.'.jpg');?>"  alt="<?php echo str_replace("&","&amp;",$row->name); ?>" title="">
			<?php } ?>
											</a>
			</div>
		</div>
	

	<div class="col-lg-8 col-md-8 col-sm-8">
		<div class="entry-header">
							<span class="meta-category"><a href="<?php echo base_url('category/'.$row->type);echo '/';?>" class="herald-cat-3"><?php echo $cat;?></a></span>
			
			<h2 class="entry-title h3"><a href="https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/"><a href="<?php echo base_url(); echo $row->url;echo '/'; ?>" title="<?php echo $row->name;?>"><?php echo substr($row->name,0); ?></a></h2>
							<div class="entry-meta"><div class="meta-item herald-date"><span class="updated"><?php  echo $time_elapsed; ?></span></div><!--<div class="meta-item herald-comments"><a href="https://theresearchprocess.com/2020/02/03/turbine-installation-completed-at-taiwans-formosa-1-offshore-wind-farm/#respond">Add Comment</a></div></div>--></div>
					</div>

					<div class="entry-content">
				<p><?php echo strip_tags(substr($row->full_desc,0, 250));?></p>
			</div>
		
			</div>
</div>
</article>	
			<?php }
					}
				?>
																																														</div>
				<nav class="navigation pagination" role="navigation">
					<h2 class="screen-reader-text">Posts navigation</h2>
					<div class="nav-links">
						<p><?php echo $links; ?></p>
					</div>
				</nav> 																																										
																																														
		
							
		</div>


					

	<div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">

					<div id="search-2" class="widget widget_search">
<form id="searchform"  class="herald-search-form" action="<?php echo base_url(); ?>search" method="get">
	<input name="q" id="s" class="herald-search-input" type="text" value="" placeholder="Type here to search...">
<button type="submit" class="herald-search-submit"></button>
</form>
</div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<h4 class="widget-title h6"><span>Recent Posts</span></h4>	
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
	