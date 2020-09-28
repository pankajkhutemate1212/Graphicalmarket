<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<div class="container">



<h3 style="color:green;">Your file was successfully uploaded!</h3>
<hr><br/>
<h4>Image URL: <?php echo str_replace('assets/ci/','img/',base_url());?><?php echo $news_type;?>/<?php echo $upload_data['file_name'];?></h4>

<br/><br/>
<p><?php echo anchor('admin/upload', 'Upload Another File!'); ?></p>

</div>
</div>	