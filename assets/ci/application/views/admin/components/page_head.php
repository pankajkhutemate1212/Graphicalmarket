<!doctype html>
<html lang="en" class="no-js">
    <head>
        <title>Admin Dashboard</title>
            <meta name="robots" value="noindex" />
                <meta name="robots" value="nofollow" />
                    <meta charset="utf-8">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                         <meta name="description" content="<?php echo isset($description)? "$description": NULL; ?>">
                    <meta name="keywords" content="<?php echo isset($keywords)? "$keywords": NULL; ?>">
                 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	<!--basic styles-->

		<link href="<?php echo base_url('admin_assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('admin_assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/font-awesome.min.css'); ?>" />



    <!-- ckedito scrips-->
    <script src="<?php echo base_url('assets/editor/ckeditor.js'); ?>"></script>
	<script src="<?php echo base_url('assets/editor/main/js/sample.js'); ?>"></script>
    <!-- ckeditor scripts-->
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->
    <?php $this->load->view('admin/components/specific_css'); ?>
		<!--fonts-->

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/ace.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/ace-responsive.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/ace-skins.min.css'); ?>" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
