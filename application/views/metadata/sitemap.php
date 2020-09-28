<?php header('Content-type: text/xml'); ?><?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="https://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="https://www.google.com/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
  
  <url>
<loc>
<?php echo base_url();  ?></loc>

</url>
 
<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
   { ?>
<url>
<loc><?php echo base_url($row->cat_url); ?></loc>
</url>
<?php }} ?>  

<url>
<loc><?php echo base_url('about-us'); ?></loc>
</url>
<url>
<loc><?php echo base_url('contact-us'); ?></loc>
</url>
<url>
<loc><?php echo base_url('privacy-policy'); ?></loc>
</url>
<url>
<loc><?php echo base_url('editorial-policy'); ?></loc>
</url>	     
<?php if(!empty($press)){
					 
    foreach($press as $row){ ?>
			 
	<url>
	<loc>	<?php echo base_url($row->url); ?>  </loc>            
         </url>
  
<?php }}?>
			   
			  
		 
			       

</urlset>