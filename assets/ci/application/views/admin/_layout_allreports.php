<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="row">

<hr>

<div class="container"> 
 <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($msg=="Please Confirm Report Title."){?>
<h2 style="color:#2444a5;">Confirm Report Title</h2>
   <!-- <form action="<?php echo base_url('');?>admin/allreports/edit_report/" class="jsform" method="post" accept-charset="utf-8" style="margin-bottom:20px;">-->
<input type="hidden" name="id" value="<?php echo $IDMATCH['id']?>"><br/>
<div style="background: #b1ffb1;padding: 10px;border: 1px solid #5bb35b;">
<p style="line-height: 32px;"><?php echo $IDMATCH['report_name']; ?></p></div><br/><br/>
                  
                 
              
					<!--</form>-->
                     
                  <a href="<?php echo base_url('');?>admin/allreports/edit_report/<?php echo $IDMATCH['id']?>">  <input type="submit" value="Confirm"></a>&nbsp;&nbsp;&nbsp;
                  
                  <a href="<?php echo base_url(''); ?>admin/allreports"><input type="button" value="Cancel"></a>
                   
 <?php }else{?>
<h2 style="color:red;"><?php echo $msg;?></h2>
<br/>
<a href="<?php echo base_url(''); ?>admin/allreports" style="background:#cac6c6; padding:5px;"><b><u>Try Again</u></b></a>
 <?php }}else{?>
   <form action="<?php echo base_url('');?>admin/allreports/confirm_report" class="jsform" method="post" accept-charset="utf-8">
    

                   <h3>Enter the Report ID</h3> 
                    <input type="number" name="id" placeholder="Enter Number Only" required="">
<br/>
                    <input type="submit" value="Submit">
					</form>
 <?php }?>
 </div></div>
 <?php $this->load->view('admin/components/page_foot'); ?>