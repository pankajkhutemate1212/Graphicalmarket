<div id="page" class="single">
		
		<div id="content_box">
							<div id="post-10" class="g post post-10 page type-page status-publish">
					<div class="single_page">
													<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div><i class="fa fa-home"></i></div> <div typeof="v:Breadcrumb" class="root"><a rel="v:url" property="v:title" href="<?php echo base_url(); ?>">Home</a></div><div><i class="fa fa-caret-right"></i></div><div><span>Our Team</span></div></div>
												<header>
							<h1 class="title entry-title">Our Team</h1>
						</header>
						<div class="post-content box mark-links entry-content">
							 <style>.authorAvatar img{float:left !important;width: 160px;border: 1px solid #f5f5f5;}</style>
<section class="content" role="main">
<?php if(!empty($all_author)){$i=1; foreach($all_author as $row){ ?>
    <div class="author" style="padding: 10px;border: 1px solid #f3f3f3;margin-bottom: 15px;">
	
<div class="authorAvatar">
<?php $filename = 'assets/images/author/'.$row->url.'.png';

					if (file_exists($filename)) { ?>
                    <img src="<?php echo base_url(); echo $filename;?>">      
						<?php } ?>	
					</div>
<div class="authorInfo">
<h2 class="authorName"><a href="<?php echo base_url('author');?>/<?php echo $row->url;echo '/';?>"><?php echo $row->name;?></a> &nbsp;&nbsp;

<span><a href="https://www.twitter.com/<?php echo $row->twitter_account; ?>/"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 112.197 112.197" style="enable-background:new 0 0 112.197 112.197;" xml:space="preserve"><g><circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"></circle><g><path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417
			c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409
			c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742
			c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17
			c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239
			c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188
			c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734
			C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"></path></g></g></svg></a>

<a href="mailto:<?php echo $row->algos_mail_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve" width="25px" height="25px"><g><g><path d="M306,612c-28.152,0-55.284-3.672-81.396-11.016c-26.112-7.347-50.49-17.646-73.134-30.906    s-43.248-29.172-61.812-47.736c-18.564-18.562-34.476-39.168-47.736-61.812c-13.26-22.646-23.562-47.022-30.906-73.135    C3.672,361.284,0,334.152,0,306s3.672-55.284,11.016-81.396s17.646-50.49,30.906-73.134s29.172-43.248,47.736-61.812    s39.168-34.476,61.812-47.736s47.022-23.562,73.134-30.906S277.848,0,306,0c42.024,0,81.702,8.058,119.034,24.174    s69.768,37.944,97.308,65.484s49.368,59.976,65.484,97.308S612,263.976,612,306c0,28.152-3.672,55.284-11.016,81.396    c-7.347,26.109-17.646,50.487-30.906,73.134c-13.26,22.644-29.172,43.248-47.736,61.812    c-18.562,18.564-39.168,34.479-61.812,47.736c-22.646,13.26-47.022,23.562-73.136,30.906C361.284,608.328,334.152,612,306,612z     M453.492,179.928H163.404c-2.856,0-5.304,0.918-7.344,2.754s-3.06,4.386-3.06,7.65v32.436c0,1.632,0.612,2.448,1.836,2.448    l152.388,86.904l1.227,0.612c0.813,0,1.428-0.204,1.836-0.612l147.492-86.904c0.813-0.408,1.428-0.612,1.836-0.612    c0.405,0,1.02-0.204,1.836-0.612c1.632,0,2.448-0.816,2.448-2.448v-31.212c0-3.264-1.021-5.814-3.063-7.65    S456.348,179.928,453.492,179.928z M245.412,310.284c0.408-0.408,0.612-1.021,0.612-1.836c0-1.227-0.408-1.836-1.224-1.836    l-87.516-50.185c-1.224-0.408-2.244-0.408-3.06,0c-0.816,0-1.224,0.612-1.224,1.836v131.58c0,1.227,0.612,2.04,1.836,2.448h1.224    c0.816,0,1.224-0.204,1.224-0.612L245.412,310.284z M351.9,320.076c-0.408-1.227-1.431-1.428-3.063-0.612l-33.66,19.584    c-4.08,2.448-8.361,2.448-12.852,0l-29.376-16.521c-1.224-0.816-2.244-0.816-3.06,0l-111.996,104.04    c-0.408,0.405-0.612,1.224-0.612,2.445c0,0.408,0.408,1.021,1.224,1.836c2.448,0.816,4.08,1.227,4.896,1.227H450.43    c0.816,0,1.635-0.408,2.448-1.227c0-1.632-0.204-2.649-0.612-3.06L351.9,320.076z M462.06,253.98h-2.445l-83.232,49.572    c-0.813,0-1.224,0.612-1.224,1.836c-0.408,0.408-0.204,1.02,0.609,1.833L459,397.188c0.816,0.816,1.428,1.227,1.836,1.227h1.224    c1.227-1.227,1.839-2.04,1.839-2.448V256.429C463.896,255.612,463.284,254.796,462.06,253.98z" fill="#D80027"></path></g></g></svg></a></span></h2>
<p class="authorDescrption" style="text-align:justify"><?php echo $row->description;?></p>


<div style="clear:both"></div>


</div>

</div>
   	<?php }} ?>		        
</div>

            </section>
			
							
						</div><!--.post-content box mark-links-->
					</div>
				</div>
				<!-- You can start editing here. -->

					</div>

<style>
svg{margin-bottom: -4px;}
</style>



								