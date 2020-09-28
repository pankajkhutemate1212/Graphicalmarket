<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<!-- main row -->


<hr>
<div class="container">
<h3> Add Single Industry Data & Trends</h3>
<div>
<?php echo validation_errors(); ?>
<?php echo form_open('admin/newindustry/insert_industry'); ?>
<style>
.scheduler_para{display:none}
.schedule-yes{display:block;background: #c9ffcb;
    border: 1px solid #4CAF50;
    padding: 10px;
    padding-bottom: 0;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
    $('input.rbt_schedule:radio').change(function() {
		if($('input.rbt_schedule:radio:checked').val()=='Yes')
		{
       		$('p.scheduler_para').addClass('schedule-yes');
			$('input.sub-button').val('Schedule');
$("form").attr("action", "//algosonline.com/assets/ci/admin/schedule/schedule_industry");
		}
		if($('input.rbt_schedule:radio:checked').val()=='No')
		{
			$('p.scheduler_para').removeClass('schedule-yes');
$("form").attr("action", "//algosonline.com/assets/ci/admin/newindustry/insert_industry");
			$('input.sub-button').val('Submit');
			$(".schedule_minute")[0].selectedIndex=0;
			$(".schedule_hour")[0].selectedIndex=0;
		}
    });
});
</script>


<p>Schedule : <input type="radio" name="schedule_radio" class="rbt_schedule" value="Yes"><span class="lbl">Yes</span>

<input type="radio" name="schedule_radio" class="rbt_schedule" value="No"><span class="lbl">No</span>

</p>
<p class="scheduler_para"><b>Schedule Industry News:  <input type="text" name="schedule_date" placeholder="mm/dd/yyyyy" value="<?php echo date("m/d/Y");?>" style="width:100px"><span class="add-on" style="margin-left: -23px;"><i class="icon-calendar" style="font-size: 23px;"></i></span>&nbsp; hours: <select style="width:55px;" class="schedule_hour" name="schedule_hour" required>
	   <?php for($hr=0;$hr<24;$hr++) {$hr=sprintf("%02d", $hr);?>
	   <option value="<?php echo $hr;?>"><?php echo $hr;?></option>
	   <?php }?>
	   </select> minute: <select style="width:55px;" class="schedule_minute" name="schedule_minute" required>
	   <?php for($mn=0;$mn<60;$mn++) {$mn=sprintf("%02d", $mn);?>
	   <option value="<?php echo $mn;?>"><?php echo $mn;?></option>
<?php }?>
	   </select></b></p>
<table>

<tr>
	<td>Date</td>

	<td>
	<div class="control-group">

				<div class="row-fluid input-append">

						
						<input type="text" name="date" placeholder="mm/dd/yyyyy" value="<?php echo date("m/d/Y");?>">

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div></div>

    </td>

</tr>	

<tr>
	<td>Title</td>
	<td><input type="text" name="maintitle" style="width: 400%;">  </td>
</tr>
    <tr>
	<td>URL Name</td>
	<td><input type="text" name="url" style="width: 400%;" placeholder="url-name-keyword-name">  </td>
</tr>
    <tr>
    
    <td>Meta title </td>
        <td><input type="text" name="title" style="width: 400%;" placeholder="70 charcaters">  </td>
	</tr>
    <tr>
    <td>Meta keyword</td>
	   <td><input type="text" name="keyword" style="width: 400%;">  </td>
    </tr>
    <tr>
        <td>Meta Description</td>
	<td><input type="text" name="desc" style="width: 400%;" placeholder="150 charatcters">  </td>
</tr>
        <tr>
        <tr>
	<td>Select Author</td><td colspan=3> <input name="author" id="author"  type="radio" value="Shikha Sinha" required=""><span class="lbl"> Shikha</span>
	<input name="author" id="author" type="radio" value="Dhananjay Punekar" required=""><span class="lbl"> Dhananjay</span>
	<input name="author" id="author" type="radio" value="Ojaswita Kutepatil" required=""><span class="lbl"> Ojaswita</span>
	<input name="author" id="author" type="radio" value="Sunil Hebbalkar" required=""><span class="lbl"> Sunil</span>
	<input name="author" id="author" type="radio" value="Saipriya Iyer" required=""><span class="lbl"> Saipriya</span>
	<input name="author" id="author" type="radio" value="Satarupa De" required=""><span class="lbl"> Satarupa</span>
        <input name="author" id="author" type="radio" value="Saif Ali Bepari" required=""><span class="lbl"> Saif</span>
        <input name="author" id="author" type="radio" value="Paroma Bhattacharya" required=""><span class="lbl"> Paroma</span>
	</td>
</tr>
    
   
</tr>

	</table>
	
        
        <div class="editor_live"> 
								
					<div class="row-fluid">
								<div class="">
									<div class="tabbable">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#summary">
													Body
												</a>
											</li>

											
										
										</ul>

										<div class="tab-content">
											<div id="summary" class="tab-pane in active">
												<p><textarea name="editor" class="ckeditor"></textarea></p>
											</div>

											
										</div>
									</div>
								</div>
    </div>		
                            
           
            

            
							<!-- <textarea class="wysiwyg-editor" name="editor1" id="editor1"> </textarea> -->
                              
						
</div>
        
       <input type="submit" value="Submit" class="btn-primary" />


</form>

</div>

    <!--/span-->


<?php $this->load->view('admin/components/page_foot'); ?>