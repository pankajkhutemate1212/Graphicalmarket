<?php $this->load->view('admin/components/page_head'); ?>

<div class="navbar navbar-static-top navbar-inverse">

	    <div class="navbar-inner">

	<style>
.navbar .nav>li>a{padding:10px 10px 10px !important;}</style>	   

		     
<a href="<?=site_url('nonadminuser/logout')?>" style="float: right;margin-right: 60px;margin-top: 10px;color: #fff;"><i class="icon-off"></i>&nbsp;logout</a>
<a href="<?=site_url('nonadminuser/uploadcsvschedular')?>" >Upload CSV</a>
	    </div>

    </div>
	
	<div style="    text-align: center;">

	<form method="post" action="<?php echo base_url() ?>nonadminuser/uploadcsvinschedular" enctype="multipart/form-data">

                    	Select a file: <input type="file" name="userfile" ><br><br>
	
	<input type='submit'>
	</form>
	</div>