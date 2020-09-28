<div id="content" class="herald-site-content herald-slide">

	

<div class="herald-section container ">
	
			<article id="post-49" class="herald-page post-49 page type-page status-publish hentry">
			<div class="row">
								
			
<div class="col-lg-9 col-mod-single col-mod-main">
	<header class="entry-header">
	<h1 class="entry-title h1">Editorial Policy</h1></header>	<div class="entry-content herald-entry-content">
<?php if(!empty($editorial_data)){ echo $editorial_data;}
?>	

</div>	</div>

	

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