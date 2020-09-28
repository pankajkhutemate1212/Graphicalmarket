<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<div class="container">
<h3> Upload Image</h3>
<hr>
<div style="color:red; font-size:18px; font-weight:bold;">
<?php echo $error;?></div>

<?php echo form_open_multipart('admin/upload/do_upload');?>

<p><strong>Select News Type:</strong></p>
<div style="background:#c4dbed;padding:10px;border:1px solid #2196f3;">
    
    
    <input name="news_type" id="news_type"  type="radio" value="science-and-environment" required=""><span class="lbl">Science and Environment</span>

	<input name="news_type" id="news_type" type="radio" value="tech" required=""><span class="lbl">Tech</span>
	
	<input name="news_type" id="news_type" type="radio" value="headlines" required=""><span class="lbl">Headlines</span>
	
	<input name="news_type" id="news_type" type="radio" value="business" required=""><span class="lbl">Business</span>
	
<input name="news_type" id="news_type" type="radio" value="research" required=""><span class="lbl">Research</span>
</div>
	
<br /><br />
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />
</div></div>	
<?php $this->load->view('admin/components/page_foot'); ?>