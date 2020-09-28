

<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="row">

<!-- main row -->

<div class="span9">

</div>

<div class="span3">


  </div>

</div>

</div>



<hr>

<div class="container">

<h3> Add New Report</h3>

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/newreport'); ?>

<table>
<tr>	

    <td>No. of Pages</td>

	<td><input type="text" name="pages" value="">  </td>
	<td>No. of Tables & Figures</td>

	<td><input type="text" name="no_of_tables" value="">  </td>

</tr>



<tr>

	<td>Date</td>

	<td>
	<div class="control-group">

				<div class="row-fluid input-append">

						
						<input type="text" name="date" placeholder="mm/dd/yyyyy">

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div></div>

    </td>
	<td>Category</td>

	<td> <select class="chzn-select" name="publisher" id="publisher" data-placeholder="Choose a Publisher">

															<option value="" />

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
</tr/>

<tr>
	<td>Sub-Category</td>
	

	<td> <input type="text" name="cat" placeholder="Subcategory" style="width: 400%;"> </td>

</tr>



<tr>

	<td>Report Name</td>

	<td><input type="text" name="maintitle" style="width: 400%;">  </td>

</tr>

    <tr>

	<td>URL</td>

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

    

    <td>Single Price </td>

        <td><input type="text" name="s_price"  placeholder="US $">  </td>

	

    <td>Multi-user Price</td>

	   <td><input type="text" name="m_price" placeholder="US $">  </td>
	   </tr><tr>

            <td>Enterprise Price</td>

	<td><input type="text" name="e_price" placeholder="US $" >  </td>
	<td>Corporate Price</td>

	<td><input type="text" name="c_price" placeholder="US $" >  </td>


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

												<p><?php $this->load->view('editor/main/index.html'); ?></p>

											</div>



											<div id="toc" class="tab-pane">

												<p><textarea name="toc_editor" class="ckeditor"></textarea></p>

											</div>

											<div id="toc2" class="tab-pane">

												<p><textarea name="toc_editor2" class="ckeditor"> </textarea></p>

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