
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
			
								<div class="herald-mod-wrap"><div class="herald-mod-head "><div class="herald-mod-title"><h1 class="h6 herald-mod-h herald-color">Author - <?php echo $author['name'];?></h1></div></div><div class="herald-mod-desc"><p><img alt="" src="<?php echo base_url('assets/images/author/'.$author['url']);?>.png" alt="<?php echo $author['name'];?>" class="avatar avatar-80 photo" height="80" width="80"></p>
</div></div>						
			
			<div class="row row-eq-height herald-posts">


<?php if(!empty($news_written_by_author)){   

              foreach($news_written_by_author as $row){

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
					}			  ?>

														<article class="herald-lay-b post-109 post type-post status-publish format-standard has-post-thumbnail hentry category-general-news">
<div class="row">
	
			<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="herald-post-thumbnail herald-format-icon-middle">
				<a href="<?php echo base_url();echo $row->url;echo '/'; ?>" title="<?php echo $row->name; ?>">


<?php if (file_exists($filename)) {?>
			<img width="300" height="200" src="<?php echo base_url($filename);?>" class="attachment-pointpro-original size-pointpro-original wp-post-image" alt="<?php echo str_replace("&","&amp;",$row->name); ?>" title="<?php echo $row->name; ?>">
			<?php } else {?>
			<img width="300" height="200" src="<?php echo base_url('assets/imgs/news-'.$img.'.jpg');?>" class="attachment-pointpro-original size-pointpro-original wp-post-image" alt="<?php echo str_replace("&","&amp;",$row->name); ?>" title="<?php echo $row->name; ?>">
			<?php } ?>
			
				</a>
			</div>
		</div>
	

	<div class="col-lg-8 col-md-8 col-sm-8">
		<div class="entry-header">
							<span class="meta-category"><a href="<?php echo base_url('category/'.$row->type);echo '/';?>" class="herald-cat-1"><?php echo $row->type; ?></a></span>
			
			<h2 class="entry-title h3"><a href="<?php echo base_url();echo $row->url;echo '/'; ?>" title="<?php echo $row->name; ?>"><?php echo substr($row->name,0); ?></a></h2>
<?php 
					$d = new DateTime($row->date);

					$timestamp = $d->getTimestamp(); // Unix timestamp
					$formatted_date = $d->format("F d, Y");

					$date=$row->date;
					$time_elapsed = timeAgo($date,$formatted_date);?>
							<div class="entry-meta"><div class="meta-item herald-date"><span class="updated"><?php  echo $time_elapsed; ?></span></div>

<!--<div class="meta-item herald-comments"><a href="https://www.theresearchprocess.com/2020/02/11/moderna-enrolls-its-first-patient-in-phase-1-2-trial-for-mrna-3704/#respond">Add Comment</a></div>--></div>
					</div>

					<div class="entry-content">
				<p><?php echo substr(strip_tags($row->full_desc),0, 250);?></p>
			</div>
		
			</div>
</div>
</article>		<?php }} ?>																																																																			</div>
		
							

							
		</div>

					

	<div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">

					<div id="search-2" class="widget widget_search"><form class="herald-search-form" action="https://theresearchprocess.com/" method="get">
	<input name="s" class="herald-search-input" type="text" value="" placeholder="Type here to search..."><button type="submit" class="herald-search-submit"></button>
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