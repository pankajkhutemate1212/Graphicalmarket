<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="row">

<!-- main row -->



<hr>

<div class="container">
<h3>Edit Report</h3>

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/newreport/update'); ?>

<table>

<tr>

     <input  type="hidden" name="id" value="<?php echo $reports['id']; ?>" hidden >



	<td>Report id</td>

	<td><input type="text" value="MSF<?php echo $reports['id']; ?>" name="rid" readonly="readonly" >  </td>

    <td>No. of Pages</td>

	<td><input type="text" name="pages" value="<?php echo $reports['no_of_pages']; ?>" >  </td>

</tr>



<tr>

	<td>Date</td>

	<td><div class="control-group">

				<div class="row-fluid input-append">

						<input type="text" name="date" value="<?php echo $reports['publish_date'];?>" />

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div></div>

    </td>



	<td>Publisher</td>

	<td> <select class="chzn-select" name="publisher" id="publisher" data-placeholder="Choose a Publisher">

															<option value="<?php echo $reports['publisher']; ?>" selected /><?php echo $reports['publisher']; ?>

										<option value="Euromonitor International" />Euromonitor International

															<option value="GBI Research" />GBI Research

															<option value="Gen Consulting Company" />Gen Consulting Company
															<option value="GlobalData" />GlobalData
															<option value="GlobalInfoResearch" />GlobalInfoResearch
															<option value="ICRWorld Research" />ICRWorld Research
															<option value="Prof Research" />Prof Research
															<option value="Technavio" />Technavio
															<option value="The Business Research Company" />The Business Research Company
															<option value="Tuoda Research" />Tuoda Research
															<option value="LP Information" />LP Information
															<option value="Global Market Insights, Inc." />Global Market Insights, Inc.

															

														</select> </td>

</tr>

<tr>

	<td>Sub Category</td>

	<td><input type="text" name="cat" value="<?php echo $reports['cat_name']; ?>">  </td>
	<td>No. of Tables & Figures</td>

	<td><input type="text" name="no_of_tables" value="<?php echo $reports['no_of_tables']; ?>">  </td>

</tr>

<tr>

	<td>Report Name</td>

	<td><input type="text" name="maintitle" style="width: 400%;" value="<?php echo $reports['report_name']; ?>">  </td>

</tr>

    <tr>

	<td>URL</td>

	<td><input type="text" name="url" style="width: 400%;"  value="<?php echo $reports['url']; ?>">  </td>

</tr>

    <tr>

    

    <td>Meta title </td>

        <td><input type="text" name="title" style="width: 400%;" value="<?php echo $reports['meta_title']; ?>">  </td>

	</tr>

    <tr>

    <td>Meta keyword</td>

	   <td><input type="text" name="keyword" style="width: 400%;" value="<?php echo $reports['meta_keyword']; ?>">  </td>

    </tr>

    <tr>

        <td>Meta Description</td>

	<td><input type="text" name="desc" style="width: 400%;" value="<?php echo $reports['meta_description']; ?>"> </td>

       </tr>

 <tr>

    

    <td>Single Price </td>

        <td><input type="text" name="s_price"  value="<?php echo $reports['price_su']; ?>">  </td>

	

    <td>Multi-user Price</td>

	   <td><input type="text" name="m_price"value="<?php echo $reports['price_mu']; ?>">  </td>
	   </tr><tr>

            <td>Enterprise Price</td>

	<td><input type="text" name="e_price" value="<?php echo $reports['price_eu']; ?>" >  </td>
	<td>Corporate Price</td>

	<td><input type="text" name="c_price" value="<?php echo $reports['price_cu']; ?>">  </td>


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

													Summary

												</a>

											</li>



											<li>

												<a data-toggle="tab" href="#toc">

													Table of content

													<span class="badge badge-important"></span>

												</a>

											</li>
											<li>

												<a data-toggle="tab" href="#toc2">

													List of Tables

													<span class="badge badge-important"></span>

												</a>

											</li>				

										</ul>



										<div class="tab-content">

											<div id="summary" class="tab-pane in active">
<style>

pre {font-family:BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
white-space: pre-wrap; background: #fff; border: none; font-size: 16px;line-height: 26px; padding:0px;}
                      </style>
												<p><textarea name="editor" class="ckeditor" ><pre><?php echo $reports['summary']; ?></pre></textarea></p>

											</div>



											<div id="toc" class="tab-pane">

												<p><textarea name="toc_editor" class="ckeditor"><pre><?php echo $reports['table_of_content']; ?></pre>

              

             </textarea></p>

											</div>
											<div id="toc2" class="tab-pane">

												<p><textarea name="toc_editor2" class="ckeditor">

                  <pre><?php echo $reports['list_of_tables']; ?></pre>

          </textarea></p>

											</div>

										</div>

									</div>

								</div>

    </div>		                             

						

</div>

        

       <input type="submit" value="Submit" class="btn-primary" />





</form>



</div>



    <!--/span-->





<?php $this->load->view('admin/components/page_foot'); ?>