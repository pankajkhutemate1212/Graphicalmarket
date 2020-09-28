
<div class="container">
<div id="content">
  <div class="inner-content">

<div id="page-banner">
  <h1>All News</h1>
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

  <?php if(!empty($press))
		    {
              foreach($press as $row){ ?>
			   
			<b>	  <a href="" ><?php echo str_replace("&","&amp;",$row->name); ?></a></b><br>
                   <p style="color: #808080">Published Date:&nbsp;<?php echo str_replace("&","&amp;",$row->publish_date);?></p>   
                  
				  <p style="text-align: justify;"><?php echo substr($row->full_desc, 0,300); ?></p>
                      <p><?php echo str_replace("&","&amp;",$row->name); ?></p>
                      <a href="<?php echo base_url('admin/allpress/editpress/'.$row->url); ?>"><button class="btn btn-mini btn-pink">Edit Report</button></a>&nbsp;&nbsp;
                      
                   <br>
                  </p>
				  <hr>
				
			<?php }} ?>