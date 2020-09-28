	
<!DOCTYPE html>
<html>
<head>
 <meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />

	
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
.column{
	max-width:1200px;
	margin:0 auto;
}
</style>
</head>
<body>
	<div style="text-align: right;margin-top:20px;">
	<?php if($this->session->userdata('identity')=='admin@gminsights.com' && $this->session->userdata('user_id')=='2')// remove this elseif if you want to enable this for non-admins
		{ ?>
		<a style="    background: #2834d2;padding: 10px;color: #fff;" href='<?php echo site_url('getleaddata/maildb_management')?>'><b>Lead Data</b></a> <?php } ?>
		<a style="margin:0 60px;" href='<?php echo site_url('accesslead/logout')?>'><b>logout<b></a> 
		
	</div>
	<div style='height:20px;'></div>  
    <div class="container">
		<h1>Add Reports On GMI Home Page</h1>
        <hr/>
        <br/>
        <div class="column">
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        	 if($msg=="Please Confirm Report Title."){?>
        <h2 style="color:#2444a5;"><?php echo $msg;?></h2>
        	<form action="<?php echo base_url('');?>accesslead/confirmed" class="jsform" method="post" accept-charset="utf-8" style="margin-bottom:20px;">
<input type="hidden" name="id" value="<?php echo $reports['id']?>"><br/>
<div style="    background: #b1ffb1;padding: 10px;border: 1px solid #5bb35b;">
<p style="line-height: 32px;"><?php echo $reports['name']; ?></p></div><br/><br/>
                    <input type="submit" value="Confirm">&nbsp;&nbsp;&nbsp;<a href="home_page"><input type="button" value="Cancel"></a>
              
					</form>
        
        <?php }elseif($msg=="Report added on Home Page."){ ?>
        <h2 style="color:green;"><?php echo $msg;?></h2>
        <br/><br/>
        <a href="home_page"><input type="button" value="Add New Report"></a>
        <?php }else{?>
        <h2 style="color:red;"><?php echo $msg;?></h2>
        <br/><br/>
        <a href="home_page"><input type="button" value="Try Again"></a>
        <?php }}else{ ?>


        <form action="<?php echo base_url('');?>accesslead/addtohome" class="jsform" method="post" accept-charset="utf-8">

                  
                  
                             

                   Enter the Report ID : 
                    <input type="number" name="id" placeholder="Enter Number Only" required="">

                    <input type="submit" value="Submit">
					</form>
					<?php }?>
					</div>
    </div>
</body>
</html>
