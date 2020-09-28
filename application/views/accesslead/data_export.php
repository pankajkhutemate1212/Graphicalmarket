<html>
	<head>
	<meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />
	</head>
	<body>
<div class="container" style="width: 1170px;margin: 0 auto;">
  <div style="display:inline-block;width:49%">
  <img src="https://www.gminsights.com/assets/logo/gmi.png" style="background: #0f3971;">
  </div>
  
  <div style="display:inline-block;width:50%;vertical-align:top;text-align:right;">

   <a style="background: #E91E63;border: 1px solid #E91E63;padding: 5px;float: right;margin-top: 40px;color: #fff;margin-right: 30px;" href='<?php echo site_url('accesslead/logout')?>'>logout</a>
   
    <a style="background: #E91E63;border: 1px solid #E91E63;padding: 5px;float: right;margin-top: 40px;color: #fff;margin-right: 30px;" href='<?php echo site_url('accesslead/home_page')?>'>Add Report on home page</a>
  </div> 
<div>

          <div>
            <div class="blog-post">
<div class="callout mobileuifont">
                <h2 style="color: #0F3971;background: rgba(66, 88, 240, 0.29);padding: 10px;">Export Report Data</h2>

                <hr>

             <form id="myform" action="<?php echo base_url(); ?>accesslead/exports_data_csv" class="" method="post" accept-charset="utf-8">
  <table>
    <tbody><tr>
      <td>From Date*</td>
      <td><input id="date_from" type="date" class="req-field" placeholder="dd/mm/yyyy" name="date_from"></td>
	  <td>Sort By*</td>
	  <td><select id="dropdownlist" name="filterlist" required="" style="padding: 8px;height:33px;  background-color: #FFF;  border: solid 1px #c6c6c6;">
				<option value="Date">Date</option>
				<option value="Published">Published</option>
				<option value="Upcoming">Upcoming</option>	
				<option value="Both">All Published-Upcoming</option>				
    </select></td>
	  </tr>

                
<tr>
      <td>To Date</td><td>
                    <input type="date" class="req-field" id="date_to" placeholder="dd/mm/yyyy" name="date_to">
  </td></tr>
                
                
                

                 
                    

              <tr><td></td><td>

			  
                    <input class="button expanded"  type="button" value="Submit" style="background: #6370c5;border: 1px solid #373e6a;color: #fff;">
</td></tr></tbody></table>
        <!--<input class="" type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>"> -->       
</form>

                </div></div></div>
				
             </div>
			 
  </div>
			 
			
<style>
.incomplete{border:1px solid #ff0000;}
.fieldarea label{color:#ff0000;}
td{padding:20px;}
input{padding:8px;}
form{background: #e8e7e7;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.must{border:1px solid red;}
</style>
<script>
$('#dropdownlist').change(function() {
  $('#date_from').removeClass('must');
});
//$('#date_from').removeClass('must');
$(".button").click(function(){
  
  if($('#dropdownlist option:selected').text()=='Date')
  {
   // alert($('#date_from').val());
    if($('#date_from').val()!='')
    {
    $('#myform').submit();
    }
    else{
        $('#date_from').addClass('must');
    }}
    else{
      $('#myform').submit();
    }
	
});
	</script>

</body>
</html>