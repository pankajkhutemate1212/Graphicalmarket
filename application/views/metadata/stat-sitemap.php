<br>
<div class="container"> 
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="padding:0">
				<li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><span>Home</span></a></li>
               	<li class="active"><span>Site Map</span></li>
			</ol>
		</nav>   
		<h3>Site Map</h3>
		<hr />
		<div class="col-sm-4" style="margin-bottom:15px;background:#d8d8d8;padding-top:20px; padding-bottom:20px;margin-right: 10px;">
		<p style="font-weight:bold;font-size:16px;border-bottom:2px solid #a2a2a2;padding-bottom:7px; margin-bottom:10px">Categories</p>
		<ul style="margin-left: 30px;">
		
			<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
                 { ?>
              
           <li style="padding: 5px 0;"><a href="<?php echo base_url($row->cat_url); ?>"><?php echo $row->cat_name; ?></a></li>       
              <?php }} 
              ?>
			  </ul>
		</div>
		<div class="col-sm-4" style="margin-bottom:15px;background:#d8d8d8;padding-top:20px; padding-bottom:20px;">
		<p style="font-weight:bold;font-size:16px;border-bottom:2px solid #a2a2a2;padding-bottom:7px; margin-bottom:10px">Pages</p>
		<ul style="margin-left: 30px;">
			  <?php if(!empty($all_static_pages)){ foreach ($all_static_pages as $row){ ?>
				<li style="padding: 5px 0;"><a href="<?php echo base_url($row->page_url); ?>"><?php echo $row->page_name ?></a></li>
                                 <?php } }?>
			  </ul>
		</div>
	</div>
</div>
    
  
