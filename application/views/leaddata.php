<!DOCTYPE html>
<html>
<head>
 <meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div style="text-align: right;margin-top:20px">
	
	<!--<a style="background: #0F3971;border: 1px solid #0F3971;padding: 5px;color: #fff;margin-right: 10px;" href='<?php echo site_url('accesslead/exports_data')?>'>Export Report Data</a> -->
		<a style="background: #E91E63;border: 1px solid #E91E63;padding: 5px;color: #fff;margin-right: 30px;" href='<?php echo site_url('accesslead/logout')?>'>logout</a> 
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
