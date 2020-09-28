<?php $this->load->view('admin/components/page_head'); ?>

<div class="">
    <div class=" container" style="text-align: center">
	<h3>Log in</h3>
	<p>Please log in using your credentials</p>
</div>
<div class="inner-content">
    <div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
<div id="login_form">
<form action="<?=site_url('nonadminuser/login')?>" method="post" style="text-align: center">
<label for="email" style="color:#fff">Email</label>
<input type="text" name="l_email" value="<?=set_value('l_email') ?>" />
<label for="password" style="color:#fff">Password</label>
<input type="password" name="l_pass"/><br>
<input type="submit" value="Sign in" name="signin"/>
</form>
    <?php echo validation_errors(); ?>

</div></div></div></div></div>

    
<br/> 
<label style="margin-left: 10px;float: left; "> <b>Aeresearch.net</b> © 2019. All Rights Reserved.</label>