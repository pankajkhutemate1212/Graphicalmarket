
<div class="container">
<div id="content">
  <div class="inner-content">

<div id="page-banner">
  <h1>All Ongoing Reports</h1>
  <p><?php if(isset($category)){echo $category['name'];} else { echo "<br/>";} ?></p>
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
        	<?php if(!empty($reports)){
             foreach($reports as $row){ ?>
			   <div class="item news-item">
				<p><?php echo str_replace("&","&amp;",$row->name); ?></p><a href="<?php echo base_url('admin/allreports/up_reportsedit/'.$row->url); ?>"><button class="btn btn-mini btn-pink">Edit Report</button></a><a href="<?php echo base_url('admin/allreports/finaldelete/'.$row->url); ?>">&nbsp;&nbsp;<button class="btn btn-mini">Delete Report</button></a>
                   <a href="" ><button class="btn btn-mini btn-success">Publish Now </button> </a>
                   <p style="color: #808080"><i class="fa fa-clock-o" ></i>&nbsp;<?php echo date('M , Y',$row->publish_date);?>&nbsp;&nbsp;ID:<?php echo strip_tags($row->id); ?></p>
                   
             
					<hr>
			   </div>
			   <?php }}?>
			</div>
      </div>
    </div>
  </div>
</div>
</div>