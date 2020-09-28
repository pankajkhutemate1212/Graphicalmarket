 <head>
 	
<meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />
 </head>

<div style="margin-top: 20%; background: lightgrey;   padding: 30px;">
	<div id="infoMessage" style="color:red; text-align:center"><?php echo $message;?></div>


<?php echo form_open("accesslead/login");?>
<div style="width: 24%; margin: auto;">
  <table>
  	<tr>
  		<td>
  			 <?php echo lang('login_identity_label', 'identity');?>
  		</td>
  		<td>
  			<?php echo form_input($identity);?>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			<?php echo lang('login_password_label', 'password');?>
  		</td>
  		<td>
  			<?php echo form_input($password);?>
  		</td>
  	</tr>
  	<tr>
  		<td colspan='2'>
  			<?php echo form_submit('submit', lang('login_submit_btn'));?></p>
  		</td>
  	</tr>
  </table>  </div>
    <p style="float: left;"> All right reservered &copy;  2019 | AEResearch.Developers</p>

<?php echo form_close();?>

</div>
