<div class="navbar navbar-static-top navbar-inverse">

	    <div class="navbar-inner">

	<style>
.navbar .nav>li>a{padding:10px 10px 10px !important;}</style>	   

		    <ul class="nav">
          

                <li><?php echo anchor('admin/allpress', 'All News'); ?></li>
               <!-- <li><?php //echo anchor('admin/allbusiness', 'All Business Updates'); ?></li>
                <li><?php //echo anchor('admin/allindustry', 'All Industry Data & Trends'); ?></li>
                <li><?php //echo anchor('admin/alltechnology', 'All Technology'); ?></li> -->
                
<li><?php echo anchor('admin/newpress', 'Add Single News'); ?></li> <!-- ADD SINGLE NEWS- WORLD, HEALTH, RETAIL -->
<!--<li><?php //echo anchor('admin/newbusiness', 'Add Single Business'); ?></li>
<li><?php //echo anchor('admin/newindustry', 'Add Single Industry Data'); ?></li>
             <li><?php //echo anchor('admin/newtechnology', 'Add Single Technology'); ?></li> -->
<li style="background:#2196F3;"><?php echo anchor('admin/upload', 'Upload Image'); ?></li>
             

               

		    </ul>
<a href="<?=site_url('user/logout')?>" style="float: right;margin-right: 60px;margin-top: 10px;color: #fff;"><i class="icon-off"></i>&nbsp;logout</a>
	    </div>

    </div>



