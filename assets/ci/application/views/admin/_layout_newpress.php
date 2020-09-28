<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="navbar navbar-static-top navbar-inverse">

	    <div class="navbar-inner">

	<style>
.navbar .nav>li>a{padding:10px 10px 10px !important;}</style>	   

		     
<a href="<?=site_url('user/logout')?>" style="float: right;margin-right: 60px;margin-top: 10px;color: #fff;"><i class="icon-off"></i>&nbsp;logout</a>
	    </div>

    </div>
<div class="row">
<!-- main row -->

<!-- Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="memberModalLabel">Image Upload </h4>

            </div>
            <div class="modal-body">
                 
<div id="image_preview1"></div>
<div id="image_preview"> </div>

<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
 
<!-- <input type="hidden" name="news_type" id="newstype" value="reports">-->
<input type="file" name="userfile" id="fileimg"  />
<button id="btnSaveComments">Upload Image</button>
 
</div>

				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
				<script>

                $("#btnSaveComments").click((function(e) {
					 
				 e.preventDefault();
					
				 var imgf= $("#fileimg").val();
				 var newst= $("#type").val();
				 
					 
				 /*var file_data = $("#fileimg").prop("files")[0];
				 var form_data = new FormData(); 
				 form_data.append("userfile", file_data);
				 form_data.append("news_type", newst) ;*/
					
                                 //check category is selected or not
                                // var check_cat_value=$("input[name='radioGroup']:checked").val()
                                 var isChecked = $('#type:checked').val()?true:false;

                                 if(!isChecked ){
                                     
                                      alert("Please select category");
                                 }else{
                                     
                                 var file_data = $("#fileimg").prop("files")[0];
				 var form_data = new FormData(); 
				 form_data.append("userfile", file_data);
				 form_data.append("news_type", $('#type:checked').val()) ;
				
                                         
                                          $("#image_preview").html('<span style="color:green; font-size:30px">Please wait image is uploading...</span>');
				
				$.ajax({
				url: "<?php echo base_url('admin/upload/do_upload') ?>", // Url to which the request is send
type: "POST",      
cache: false,
contentType: false,
processData: false,
data: form_data,

success: function(data)  
{
	
	alert(data);
 
	if(data=='Error'){
		 $("#image_preview").html('<span style="color:red; font-size:30px">Something wrong please upload image again</span>');
		 $("#image_preview").show().delay(5000).fadeOut();
	}else{
		
		$("#imageBox").html('<img style="height:100px" src="<?php echo 'https://www.theresearchprocess.com/img/'; ?>'+ data +'" />');
		$("#imgurl").val(data);
		 $('#memberModal').modal('toggle');
		 $("#image_preview").show().delay(5).fadeOut();
		 
		 //clear image choose file 
		  $('#fileimg').val('');;
		
	}
	

 
}
});  }
				   
			   })); 

                
				</script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Model End here -->
<hr>
<div class="container">
<h3> Add Single News</h3>

<div style="width: 70%;float: left;">
    <span class="madnatory">* fields are mandatory.</span>
<div>
<?php echo validation_errors(); ?>
<?php echo form_open('admin/newpress/insert_press'); ?>
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
$("form").attr("action", "https://www.theresearchprocess.com/assets/ci/admin/schedule/schedule_press");
		}
		if($('input.rbt_schedule:radio:checked').val()=='No')
		{
			$('p.scheduler_para').removeClass('schedule-yes');
$("form").attr("action", "https://www.theresearchprocess.com/assets/ci/admin/newpress/insert_press");
			$('input.sub-button').val('Submit');
			$(".schedule_minute")[0].selectedIndex=0;
			$(".schedule_hour")[0].selectedIndex=0;
		}
    });
});
function myFunction() {
   $('#memberModal').modal('show');
}
</script>


<p>Schedule : <input type="radio" name="schedule_radio" class="rbt_schedule" value="Yes"><span class="lbl">Yes</span>

<input type="radio" name="schedule_radio" class="rbt_schedule" value="No"  checked="checked"><span class="lbl">No</span>

</p> 


<p class="scheduler_para"><b>Schedule News:  <input type="text" name="schedule_date" placeholder="mm/dd/yyyyy" value="<?php echo date("m/d/Y");?>" style="width:100px"><span class="add-on" style="margin-left: -23px;"><i class="icon-calendar" style="font-size: 23px;"></i></span>&nbsp; hours: <select style="width:55px;" class="schedule_hour" name="schedule_hour" required>
	   <?php for($hr=0;$hr<24;$hr++) {$hr=sprintf("%02d", $hr);?>
	   <option value="<?php echo $hr;?>"><?php echo $hr;?></option>
	   <?php }?>
	   </select> minute: <select style="width:55px;" class="schedule_minute" name="schedule_minute" required>
	   <?php for($mn=0;$mn<60;$mn++) {$mn=sprintf("%02d", $mn);?>
	   <option value="<?php echo $mn;?>"><?php echo $mn;?></option>
<?php }?>
	   </select></b></p>

<table style="width:100%">

<tr>
	<td style="width:15%">Date <span class="madnatory">*</span></td>

	<td>
	    <?php date_default_timezone_set('Asia/Kolkata');
$timestampdsf = date("m/d/Y");?>
	<div class="control-group" style="margin-bottom:0">

				<div class="row-fluid input-append">

						
						<input class="span10 date-picker" autocomplete="off" name="date" id="date" type="text" data-date-format="mm/dd/yyyy" style="width: 120px;" value="<?php echo $timestampdsf;?>" required="">
						
						<!--<input type="text" name="date" placeholder="mm/dd/yyyyy" value="<?php echo date("m/d/Y");?>">-->

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div></div>

    </td>
    </tr>
    <tr>
    <td style="padding-bottom: 15px;">Select Type</td><td colspan=3  style="padding-bottom: 15px;">
	<input name="news_type" id="type" type="radio" value="business-news" required=""><span class="lbl">Business News</span>
	<input name="news_type" id="type" type="radio" value="general-news" required=""><span class="lbl">General News</span>
	<input name="news_type" id="type" type="radio" value="automobile-news" required=""><span class="lbl">Automobile News</span>
	<input name="news_type" id="type" type="radio" value="finance-news" required=""><span class="lbl">Finance News</span>
		<input name="news_type" id="type" type="radio" value="technology-news" required=""><span class="lbl">Technology News</span>

	</td>
</tr>
	

<tr>
	<td style="width:15%">Title <span class="madnatory">*</span></td>
	<td><input type="text" name="maintitle" id="maintitle" style="width: 99%;"  required="">  </td>
</tr>
    <tr>
	<td style="width:15%">URL Name <span class="madnatory">*</span></td>
	<td><input type="text" id="url_search" name="url" style="width: 99%;" placeholder="url-name-keyword-name" onfocusout="liveSearch()" autocomplete="off"  required=""> <div id="suggestions">
                                        <div id="autoSuggestionsList">
                                        
                                        </div>
                                        
                                    </div> </td>
</tr>

    <tr>
    
    <td style="width:15%">Meta title </td>
        <td><input type="text" name="title" id="meta_title" style="width: 99%;" placeholder="70 charcaters">  </td>
	</tr>
    <tr>
    <td style="width:15%">Meta keyword</td>
	   <td><input type="text" name="keyword" id="keyword" style="width: 99%;">  </td>
    </tr>
    <tr>
        <td style="width:15%">Meta Description <span class="madnatory">*</span></span></td>
	<td><input type="text" name="desc" id="desc" style="width: 99%;" placeholder="150 charatcters" required="">  </td>
</tr> 


<tr>
	<td style="width:15%">Select Author <span class="madnatory">*</span></td><td colspan=3>
	<input name="author" id="author"  type="radio" value="Sharp-Elbakyan" required=""><span class="lbl">Sharp-Elbakyan</span>
<input name="author" id="author"  type="radio" value="Omkar Patwardhan" required=""><span class="lbl">Omkar Patwardhan</span>
<input name="author" id="author" type="radio" value="Saloni Walimbe" required=""><span class="lbl"> Saloni Walimbe</span>
	</td>
</tr>



        <tr>
    
   
</tr>

	</table>
	
	<br/>
	
        
        <div class="editor_live"> 
								
					<div class="row-fluid">
								<div class="">
									<div class="tabbable">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#summary">
													Body <span class="madnatory">*</span> 
												</a>
											</li>

											
										
										</ul>

										<div class="tab-content">
											<div id="summary" class="tab-pane in active">
												<p><textarea name="editor" onfocusin="liveSearch()" autocomplete="off" class="ckeditor"></textarea></p>
											</div>

											
										</div>
									</div>
								</div>
    </div>		
                            
           
            

            
							
                              
						
</div>
        <input type="hidden" id="imgurl" name="imgu">
        <input type="hidden" id="author_name" name="author_name" value="<?php echo $this->session->userdata('authorname') ?>">
        <!--<input type="hidden" name="news_type" id="newstype" value="reports">-->
      

</div>
</div>
	<div style="float:right;background:#f6fbff;width:25%;text-align:center;box-shadow:0 0.1rem 0.2rem rgb(56, 72, 83);padding:10px;margin-bottom:20px">
	    <p style="font-weight:600;color:#009688;font-size:16px;">Upload Article Image Here. <span class="madnatory">*</span></p>
        <!--Image Display-->
        <div id="imageBox"></div>
        <a style="margin-top:20px;text-decoration:none;display:block;width: 97%;padding:5px;font-size:14px;background: #607D8B !important;border-color: #607D8B;" onclick="myFunction()" class="btn-primary">Upload Image</a>
        <!--End Image Display-->
    </div>
    <!--<div style="float:right;width:25%;text-align:center;box-shadow:0 0.1rem 0.2rem rgb(56, 72, 83);padding:10px;margin-bottom: 20px;">
        <p style="font-weight:bold;font-size: 16px;color:#2196F3;border-bottom:1px solid #ccc;">Take Preview of Article</p>
	    <a id="preview_btn" style="text-decoration:none;display:block;width: 97%;padding:5px;font-size:14px;background: #8BC34A !important;border-color: #76a73e;" class="btn-primary">Preview</a>
	    </div> -->
	     <div style="float:right;width:25%;text-align:center;box-shadow:0 0.1rem 0.2rem rgb(56, 72, 83);padding:10px;margin-bottom: 20px;">
	    
	     <input style="width:100%;padding:5px;font-size:14px;" type="submit" value="Submit" class="btn-primary" />
 
    </div>  
    <div style="clear:both"></div>
</form>
<style>span.madnatory{color:red;font-weight:bold}</style>
    <!--/span-->
<script>
$(document).ready(function(){ 
    $("#preview_btn").click(function(){
    pre_title=$('#maintitle').val();
    pre_url=$('#url_search').val();
    pre_meta_title=$('#meta_title').val();
    pre_key=$('#keyword').val();
    pre_desc=$('#desc').val();
    pre_author=$('input[name=author]:checked').val();
    pre_summary=$(".cke_wysiwyg_frame").contents().find("body").html();
    pre_date=$('#date').val();
    pre_img_url=$('#imgurl').val();
    pre_news_type=$('#newstype').val();
if(pre_title!='' && pre_url !='' && pre_date != '' && pre_img_url != '' && pre_author!='' && pre_summary !='<p></p>'){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>url_checker/preview_insert",
                        data: {pre_title1: pre_title, pre_url1: pre_url, pre_meta_title1: pre_meta_title,pre_key1: pre_key,pre_desc1: pre_desc,pre_author1: pre_author,pre_summary1:pre_summary, pre_date1:pre_date,pre_img_url1:pre_img_url,pre_news_type1:pre_news_type},
                        success: function (data) {
                            //alert('done');

                            window.open('preview/page_preview?url='+pre_url, '_blank');
    
                        },
                        error: function(data) {
                         alert('nope');   
                        }
                        
                    });
}
else
{
    alert('Fill required fields.')
}
    });
});
</script>
<style type="text/css">


            #suggestions{
 	        
                 position: relative;
                z-index: 9999;
            }
            #autoSuggestionsList{
				color: #ff0000;
				font-weight: bold;
            }
        </style>
<script>
$(document).ready(function(){ 
   $("#url_search").keyup(function(event)
            {
			
                name = $("#url_search").val();
                name = name.replace(/[^a-zA-Z 0-9.]+/g,'-');
                name = name.replace(/--/g,'-');
				name=name.replace(/ /g,'-');
				name=name.toLowerCase();
                $("#url_search").val(name);
			
				
            });
  });

            function liveSearch() {
				//var input_data = $('#url_search').val();
				
                var input_data = name;
                if (input_data.length === 0) {
                    $('#suggestions').hide();
					
                } else {

          $.ajax({
						
					 type: "POST",
	          url: "<?php echo base_url(); ?>Url_checker/news",
                        data: {url_search: input_data},
                        success: function (data) {
                            // return success
                           if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                
                                if($('#autoSuggestionsList li').length==10)
                                {
			 	  $('#autoSuggestionsList').html(data + "<button class='button alert expanded' style='width:20%; margin:0 auto; margin-top:20px; background:#fff; color:#0F3971; border:1px solid #fff; font-weight:bold;'>More Results</button>");
			 }
			 else
			 {
				$('#autoSuggestionsList').html(data);
			}
                            }
                            else{
				$('#suggestions').hide();
			}
                        }
						
						
                    });
                }
            }
	
        </script>
<?php $this->load->view('admin/components/page_foot'); ?>