

<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>

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

<h3> Add New Upcoming Report</h3>

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/newreport/upcoming'); ?>

<table>

<tr>

	<td>Report id</td>

	<td><input type="text" value="GMI101" name="rid" readonly="readonly" >  </td>

    <td>Total Pages</td>

	<td><input type="text" name="pages" value="100" >  </td>

</tr>



<tr>

	



	<td>Category</td>

	<td> <select class="chzn-select" name="cat" id="cat" data-placeholder="Choose a Category">

															<option value="" />

															<option value="73" />Automotive & Transportation

															<option value="74" />Biomass , Bioenergy & Renewable Chemistry

															<option value="75" />Bulk & Specialty Chemicals

															<option value="76" />Electronics and Media

        													<option value="77" />Energy, Mining, Oil and Gas

															<option value="78" />Food, Nutrition and Animal Feed
																<option value="82" />Healthcare and Mediacal Devices
															<option value="79" />HVAC and Construction

															<option value="80" />Polymers and Advanced Materials

															<option value="81" />Sustainable and Smart Technologies

															

														</select> </td>

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

        <td>Short Description</td>

	<td><input type="text" name="brief_desc" style="width: 400%;" placeholder="150 charatcters">  </td>

</tr>

        <tr>

    

    <td>Single Price </td>

        <td><input type="text" name="s_price" value="4500"  placeholder="US $">  </td>

	

    <td>Multi-user Price</td>

	   <td><input type="text" name="m_price" value="6500" placeholder="US $">  </td>

            <td>Enterprise Price</td>

	<td><input type="text" name="e_price" value="8500" placeholder="US $" >  </td>

</tr>

<tr>
	<td>Select Year</td><td> <input name="yearrb" id="yearrb"  type="radio" value='2022' required=""><span class="lbl"> 2022</span>
	<input name="yearrb" id="yearrb" type="radio" value="2023" required="""><span class="lbl"> 2023</span>
	<input name="yearrb" id="yearrb" type="radio" value="2024" required=""><span class="lbl"> 2024</span>
	</td>
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

												<a data-toggle="tab" href="#method">

													Methodology

													<span class="badge badge-important"></span>

												</a>

											</li>



										

										</ul>



										<div class="tab-content">

											<div id="summary" class="tab-pane in active">

												<p><?php $this->load->view('editor/main/index.html'); ?></p>

											</div>



											



											<div id="method" class="tab-pane">

												<p><textarea name="mix_editor" class="ckeditor"><p style="text-align:justify"><strong><u>Methodology</u></strong></p>



<p style="text-align:justify">At Global Market Insights, our researchers and domain experts use a unique blend of primary and secondary research, with validation and iterations at every stage, in order to minimize deviation and present the most accurate analysis of the industry. The research process begins with extensive data mining, using authentic sources such as trade magazines, technical publications, independent studies along with paid avenues such as ICIS, Hoovers, etc.&nbsp; Primary objectives of data mining include:</p>



<ul>

	<li style="text-align:justify">Definition and scope of research</li>

	<li style="text-align:justify">Market dynamics, growth drivers and industry pitfalls</li>

	<li style="text-align:justify">Regulatory and political guidelines for the industry</li>

	<li style="text-align:justify">Demographics and statistical data</li>

</ul>



<p style="text-align:justify">All the above factors are identified and analyzed in detail, with their present and expected market impact, which is quantified and used to derive market growth expectation. Market forecast is built using statistical analysis with models built around time-variance, regression and correlation analytics.</p>



<p style="text-align:justify">Significant emphasis is put on primary research, which serves the dual role or not only validating our findings but also obtaining penetrating market insights, which help us gain more clarity regarding business environment and competitive leverage. Notable participants in our primary research process include:</p>



<ul>

	<li style="text-align:justify">Leadership figures such as CEOs, CSOs, VPs etc. in key companies</li>

	<li style="text-align:justify">Supply-chain participants, distributors and domain experts</li>

	<li style="text-align:justify">Key customers and B2B clients</li>

</ul>



<p style="text-align:center"><strong>Market research reports: Key analytical components</strong></p>



<p style="text-align:center">&nbsp;</p>



<p style="text-align:center"><img alt="" src="https://www.gminsights.com/assets/img/method_a.jpg" /></p>



<p style="text-align:center"><strong>Market Insight Coverage</strong></p>



<p style="text-align:center"><img alt="" src="https://www.gminsights.com/assets/img/method_b.jpg" /></p>

</textarea></p>

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