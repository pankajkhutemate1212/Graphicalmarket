<footer id="footer" class="herald-site-footer herald-slide">

					
<div class="footer-widgets container">
	<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
				<div id="text-2" class="widget widget_text">			<div class="textwidget"><p><strong>Office Address</strong></p>
<p>The Research Process Inc.<br>
655 Montgomery Street,<br>
San Francisco, CA 94111.</p>
<p><strong>Contact Details</strong></p>
<p>Email – <a href="mailto:info@theresearchprocess.com">info@theresearchprocess.com</a></p>
</div>
		</div>			</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
				<div id="categories-3" class="widget widget_categories"><h4 class="widget-title h6"><span>Categories</span></h4>		<ul>
				<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
                 { ?>
              
           <li><a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a></li>       
              <?php }} 
              ?>
		</ul>
			</div>			</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
				<div id="pages-2" class="widget widget_pages"><h4 class="widget-title h6"><span>Pages</span></h4>		<ul>
<li class="page_item page-item-49"><a href="<?php echo base_url('about-us');echo '/'; ?>">About Us</a></li>
<li class="page_item page-item-47"><a href="<?php echo base_url('contact-us');echo '/'; ?>">Contact Us</a></li>
			<li class="page_item page-item-49"><a href="<?php echo base_url('editorial-policy');echo '/'; ?>">Editorial Policy</a></li>
<li class="page_item page-item-47"><a href="<?php echo base_url('privacy-policy');echo '/'; ?>">Privacy Policy</a></li>
		</ul>
			</div>			</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
							</div>
			</div>
</div>		
					<div class="footer-bottom">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			
									<div class="hel-l herald-go-hor">
									<div class="herald-copyright">Copyright © 2020.</div>							</div>
			
									<div class="hel-r herald-go-hor">
																</div>
			
						
		</div>
	</div>
</div>
</div>	    
	</footer>