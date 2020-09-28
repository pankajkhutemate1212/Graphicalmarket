<script src='https://www.google.com/recaptcha/api.js'></script>


<style id="antiClickjack">body{display:none !important;}</style>
<script type="text/javascript">
    if(self ===top){
     var antiClickjack =document.getElementById("antiClickjack");
     antiClickjack.parentNode.removeChild(antiClickjack);
                  }
           else{
        top.location= self.location

 

            }

 

          </script>
<div id="content" class="herald-site-content herald-slide">

	

<div class="herald-section container ">
	
			<article id="post-130" class="herald-page post-130 page type-page status-publish hentry">
			<div class="row">
								
			
<div class="col-lg-9 col-mod-single col-mod-main">
	<header class="entry-header">
	<h1 class="entry-title h1">Contact Us</h1></header>	<div class="entry-content herald-entry-content">
	<div role="form" class="wpcf7" id="wpcf7-f6-p130-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="<?php echo base_url('');?>smail/contact_us" method="post">
<input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
<p><label> Your Name (required)<br>
    <span><input type="text" name="name" value="" style="width:70%"></span> </label></p>
<p><label> Your Email (required)<br>
    <span><input type="email" name="email" value="" style="width:70%"></span> </label></p>
<p><label> Phone<br>
    <span><input type="text" name="phone" value="" style="width:70%"></span> </label></p>
<p><label> Message<br>
    <span><textarea name="message" rows="4" style="width:70%"></textarea></span> </label></p>
 <!--google captcha here -->

<div class="ccfield-prepend" style="<?php echo $this->session->flashdata('error-msg'); ?>">
<div class="g-recaptcha" data-sitekey="6LeNOPMUAAAAAN2cIT5k6WojrKYta9sXAR7QRumw"></div>

<div style="color:red;"><?php echo $this->session->flashdata('flashSuccess'); ?></div>

</div>
                <!--end google captcha here -->
	
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div>	</div>

	

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
		</article>
	</div>



	</div>