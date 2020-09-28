
<div class="container">
<div id="content">
  <div class="inner-content">

<div id="page-banner">
  <h1>All blogs</h1>
    <br/><br/>
</div>
<!-- End slider -->
<!-- Content sections 
================================================== -->
<div class="content-sections">
<!-- staff-box -->
  <div class="staff-box">
    <div class="row">
      <div class="col-md-9">
        <div class="company-mission">
        	<?php if(!empty($blogs)){
             foreach($blogs as $row){ ?>
			   <div class="item news-item">
				<p><?php echo str_replace("&","&amp;",$row->name); ?></p><a href="<?php echo base_url('admin/allblogs/blogsedit/'.$row->url); ?>"><button class="btn btn-mini btn-pink">Edit Blog</button></a>
                   <p style="color: #808080"><i class="fa fa-clock-o" ></i>&nbsp;<?php echo $row->url; ?>&nbsp;&nbsp;ID:<?php echo strip_tags($row->id); ?></p>
                   
             
					<hr>
			   </div>
			   <?php }}?>
			</div>
      </div>
    </div>
  </div>
</div>
</div>