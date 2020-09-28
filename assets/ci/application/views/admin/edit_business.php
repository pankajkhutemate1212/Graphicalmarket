<div class="row">
	<!-- main row -->
	<div class="span9">
</div>

<div class="span3">

<section>

<a href="<?=site_url('')?>" ><i class="icon-desktop"></i>&nbsp; Live Website</a><br/>

<a href=""> <i class="icon-user"> </i>&nbsp;<?php echo " ".$this->session->userdata('username');?> <br/>    </a>

<a href="<?=site_url('user/logout')?>" ><i class="icon-off"></i>&nbsp;logout</a>

</div>

    <div>

<div>

</div>

</section>

  </div>

</div>

</div>



<hr>

<div class="container">

<h3> Edit Business</h3>

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/newbusiness/edit_business'); ?>

<table>




<tr>

	<td>Date</td>

	<td><div class="control-group">

				<div class="row-fluid input-append">
<input  type="hidden" name="pid" value="<?php echo $press['id']; ?>"/>
						
						<input type="text" name="date" placeholder="mm/dd/yyyyy" value="<?php echo $press['publish_date']; ?>">

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div>

    </td>



	



<tr>

	<td>Title</td>

	<td><input type="text" name="maintitle" style="width: 400%; " value="<?php echo $press['name']; ?>">  </td>

</tr>

    <tr>

	<td>URL Name</td>

	<td><input type="text" name="url" style="width: 400%;" placeholder="url-name-keyword-name" value="<?php echo $press['url']; ?>">  </td>

</tr>

    <tr>

    

    <td>Meta title </td>

        <td><input type="text" name="title" style="width: 400%;" placeholder="70 charcaters" value="<?php echo $press['meta_title']; ?>">  </td>

	</tr>
    <tr>

    <td>Meta keyword</td>

	   <td><input type="text" name="keyword" style="width: 400%;" value="<?php echo $press['meta_keywords']; ?>">  </td>

    </tr>

    <tr>

        <td>Meta Description</td>

	<td><input type="text" name="desc" style="width: 400%;" placeholder="150 charatcters" value="<?php echo $press['meta_description']; ?>">  </td>

</tr>

        <tr>

    

   

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
									

                      <p><textarea name="editor" class="ckeditor"><?php echo $press['full_desc']; ?></textarea></p>

												

											</div>



											

										</div>

									</div>

								</div>

    </div>		

                            

           

            



            

							<!-- <textarea class="wysiwyg-editor" name="editor1" id="editor1"> </textarea> -->

                              

						

</div>

        

       <input type="submit" value="Update" class="btn-primary" />





</form>



</div>



    <!--/span-->





<?php $this->load->view('admin/components/page_foot'); ?>