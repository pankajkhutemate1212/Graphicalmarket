<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">

<!-- main row -->

<div class="span9">

</div>




<hr>

<div class="container">
<h2>News Uploaded Details.</h2>
<div style="margin-bottom:20px;padding: 10px;background: #9dff9d;border: 1px solid #4ce64c;">
<h1>Data uploaded Successfully.</h1>

<p><b>Total News</b> = <?php echo $ii;?></p>
<p>Uploaded In Database = <?php echo $jj;?></p>
<p>Duplicates = <?php echo $kk;?></p></div>
<div style="margin-bottom:20px;padding: 10px;background: #ffc6c6;border: 1px solid #ef5f5f">
<h1>Duplicate News : </h1>

<?php $count=1; foreach((array)$not_inserted as $row){ ?>
<p><?php echo $count;?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row; $count=$count+1;?></p>
<?php } ?>
</div></div>
</div>
<?php $this->load->view('admin/components/page_foot'); ?>
