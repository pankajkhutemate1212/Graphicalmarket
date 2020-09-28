
<!doctype html>
<html amp lang="en-CA">
<head>
	<meta charset="utf-8">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<title><?php echo $title;?> - theresearchprocess.com" </title>
	<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="<?php echo $description;?>" />
<meta name="twitter:title" content="<?php echo $title;?> - theresearchprocess.com" />
<meta name="twitter:image" content="<?php echo base_url($press['image_url']);?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $title;?>" />
<meta property="og:description" content="<?php echo $description;?>" />
<meta property="og:url" content="<?php echo base_url($press['image_url']);?>/" />
<meta property="og:site_name" content="<?php echo $site_name;?>" />
<meta property="article:section" content="<?php echo ucfirst(str_replace('-',' ',$press['type']));?>" />
<meta property="article:published_time" content="<?php echo str_replace(' ','T',$press['date']);?>+05:30" />
<meta property="og:image" content="<?php echo base_url($press['image_url']);?>" />
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="250" />
		<link rel="canonical" href="<?php echo base_url($press['image_url']);?>/" />
			<script custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js" async></script>
			<script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
		<script src="https://cdn.ampproject.org/v0.js" async></script>
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BlogPosting","mainEntityOfPage":"<?php echo str_replace('/','\/',base_url($press['url']));?>","publisher":{"@type":"Organization","name":"<?php echo $site_name;?>","logo":{"@type":"ImageObject","url":"<?php echo str_replace('/','\/',base_url());?>assets\/images\/theresearchprocess-logo.png","height":"60","width":"600"}},"headline":"<?php echo $press['name'];?>","datePublished":"<?php echo str_replace(' ','T',$press['date']);?>+05:30","dateModified":"<?php echo str_replace(' ','T',$press['date']);?>+05:30","author":{"@type":"Person","name":"<?php echo $press['author'];?>"},"image":{"@type":"ImageObject","url":"<?php echo str_replace('/','\/',base_url($press['image_url']));?>","width":500,"height":250}}</script>
								<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script><link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" />
				<style amp-custom>

/* Global Styling */
body{	background: #f1f1f1; font: 16px/1.4 Sans-serif; }
a {	color: #312C7E;	text-decoration: none }
.clearfix, .cb { clear: both }
amp-iframe{ max-width: 100%; margin-bottom : 20px; }
.alignleft{ margin-right: 12px; margin-bottom:5px; float: left; }
.alignright{ float:right; margin-left: 12px; margin-bottom:5px; }
.aligncenter{ text-align:center; margin: 0 auto }
#statcounter{width: 1px;height:1px;}

/* Template Styles */
.amp-wp-content, .amp-wp-title-bar div {
        max-width: 1000px;
    margin: 0 auto;
    }

/* Slide Navigation code */
.nav_container{ padding: 18px 15px; background: #312C7E; color: #fff; text-align: center }
amp-sidebar{ width: 250px; }
.amp-sidebar-image{ line-height: 100px; vertical-align:middle; }
.amp-close-image{ top: 15px; left: 225px; cursor: pointer; }
.toggle-navigationv2 ul{ list-style-type: none; margin: 0; padding: 0; }
.toggle-navigationv2 ul ul li a{ padding-left: 35px; background: #fff; display: inline-block }
.toggle-navigationv2 ul li a{ padding: 15px 25px; width: 100%; display: inline-block; background: #fafafa; font-size: 14px; border-bottom: 1px solid #efefef; }
.close-nav{ font-size: 12px; background: rgba(0, 0, 0, 0.25); letter-spacing: 1px; display: inline-block; padding: 10px; border-radius: 100px; line-height: 8px; margin: 14px; left: 191px; color: #fff; }
.close-nav:hover{ background: rgba(0, 0, 0, 0.45);}
.toggle-navigation ul{ list-style-type: none; margin: 0; padding: 0; display: inline-block; width: 100% }
.menu-all-pages-container:after{ content: ""; clear: both }
.toggle-navigation ul li{ font-size: 13px; border-bottom: 1px solid rgba(0, 0, 0, 0.11); padding: 11px 0px; width: 25%; float: left; text-align: center; margin-top: 6px }
.toggle-navigation ul ul{ display: none }
.toggle-navigation ul li a{ color: #eee; padding: 15px; }
.toggle-navigation{ display: none; background: #444; }
.toggle-text{ color: #fff; font-size: 12px; text-transform: uppercase; letter-spacing: 3px; display: inherit; text-align: center; }
.toggle-text:before{ content: "..."; font-size: 32px; position: ; font-family: georgia; line-height: 0px; margin-left: 0px; letter-spacing: 1px; top: -3px; position: relative; padding-right: 10px; }
.nav_container:hover + .toggle-navigation, .toggle-navigation:hover, .toggle-navigation:active, .toggle-navigation:focus{ display: inline-block; width: 100%; }
/* Category 2 */
.category-widget-wrapper{ padding:30px 15% 10px 15% }
.amp-category-block ul{ list-style-type:none;padding:0 }
.amp-category-block-btn{ display: block; text-align: center; font-size: 13px; margin-top: 15px; border-bottom: 1px solid #f1f1f1; text-decoration: none; padding-bottom: 8px;}
.category-widget-gutter h4{ margin-bottom: 0px;}
.category-widget-gutter ul{ margin-top: 10px; list-style-type:none; padding:0 }
.amp-category-post{ width: 32%; display:inline-table; }
.amp-category-post amp-img{ margin-bottom:5px; }
.amp-category-block li:nth-child(3){ margin: 0 1%;}
.searchmenu{ margin-right: 15px; margin-top: 11px; position: absolute; top: 0; right: 0; }
.searchmenu button{ background:transparent; border:none }
.closebutton{ background: transparent; border: 0; color: rgba(255, 255, 255, 0.7); border: 1px solid rgba(255, 255, 255, 0.7); border-radius: 30px; width: 32px; height: 32px; font-size: 12px; text-align: center; position: absolute; top: 12px; right: 20px; outline:none }
amp-lightbox{ background: rgba(0, 0, 0,0.85); }
/* CSS3 icon */

[class*=icono-]:after, [class*=icono-]:before { content: ''; pointer-events: none; }
.icono-search:before{ position: absolute; left: 50%; -webkit-transform: rotate(270deg); -ms-transform: rotate(270deg); transform: rotate(270deg); width: 2px; height: 9px; box-shadow: inset 0 0 0 32px; top: 0px; border-radius: 0 0 1px 1px; left: 14px; }
[class*=icono-] { display: inline-block; vertical-align: middle; position: relative; font-style: normal; color: #f42; text-align: left; text-indent: -9999px; direction: ltr }
.icono-search { -webkit-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%) }
.icono-search { border: 1px solid; width: 10px; height: 10px; border-radius: 50%; -webkit-transform: rotate(45deg); -ms-transform: rotate(45deg); transform: rotate(45deg); margin: 4px 4px 8px 8px; }
.searchform label{ color: #f7f7f7; display: block; font-size: 10px; letter-spacing: 0.3px; line-height: 0; opacity:0.6 }
.searchform{ background: transparent; left: 20%; position: absolute; top: 35%; width: 60%; max-width: 100%; transition-delay: 0.5s; }
.searchform input{ background: transparent; border: 1px solid #666; color: #f7f7f7; font-size: 14px; font-weight: 400; line-height: 1; letter-spacing: 0.3px; text-transform: capitalize; padding: 20px 0px 20px 30px; margin-top: 15px; width: 100%; }
#searchsubmit{opacity:0}
.hide{display:none}
.headerlogo a, [class*=icono-]{ color: #F42F42 }
/* Pagination */
.amp-wp-content.pagination-holder { background: none; padding: 0; box-shadow: none; height: auto; min-height: auto; }
#pagination{ width: 100%; margin-top: 15px; }
#pagination .next{ float: right; margin-bottom: 10px; }
#pagination .prev{ float: left }
#pagination .next a, #pagination .prev a{ margin-bottom: 12px; background: #fefefe; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05); -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05); box-shadow: 0 2px 3px rgba(0,0,0,.05); padding: 11px 15px; font-size: 12px; color: #666; }
/* Sticky Social bar in Single */
.ampforwp-social-icons-wrapper{ margin: 0.65em 0px 0.65em 0px; height: 28px; }
.sticky_social{ width: 100%; bottom: 0; display: block; left: 0; box-shadow: 0px 4px 7px #000; background: #fff; padding: 7px 0px 0px 0px; position: fixed; margin: 0; z-index: 10; text-align: center; }
.custom-amp-socialsharing-icon{ width: 50px; height: 28px; display: inline-block; background: #5cbe4a;position: relative; top: -8px; padding-top: 0px; }
.custom-amp-socialsharing-icon amp-img{ top: 4px; }
.custom-amp-socialsharing-line{background:#00b900}
/* Header */
#header{ background: #fff; text-align: center; }
#header h3{ text-align: center; font-size: 20px; font-weight: bold; line-height: 1; padding: 15px; margin: 0; }
.amp-logo{ margin: 15px 0px 10px 0px; }
main{ padding: 30px 15% 10px 15%; }
main .amp-wp-content{ margin-bottom: 12px;  padding: 15px; }
.amp-loop-list, .featured-image-content, .the_content, .taxonomy-description{background: #fff; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05); -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05); box-shadow: 0 2px 3px rgba(0,0,0,.05);}
.home-post_image{ float: right; margin-left: 15px; margin-bottom: -6px; }
.amp-wp-title{ margin-top: 0px; }
h2.amp-wp-title{ line-height: 30px; }
h2.amp-wp-title a{ font-weight: 300; color: #000; font-size: 20px; }
h2.amp-wp-title , .amp-wp-post-content p{ margin: 0 0 0 5px; }
.amp-wp-post-content p{ font-size: 12px; color: #999; line-height: 20px; margin: 3px 0 0 5px; }
main .amp-archive-heading{ background : none; box-shadow: none; padding: 5px; }
/* Footer */
#footer{ background : #fff; font-size: 13px; text-align: center; letter-spacing: 0.2px; padding: 20px 0; }
#footer p:first-child{ margin-bottom: 12px; }
#footer p{ margin: 0 }
.footer_menu ul{ list-style-type: none; padding: 0; text-align: center; margin: 0px 20px 25px 20px; line-height: 27px; font-size: 13px }
.footer_menu ul li{ display:inline; margin:0 10px; }
.footer_menu ul li:first-child{ margin-left:0 }
.footer_menu ul li:last-child{ margin-right:0 }
.footer_menu ul ul{ display:none }
/* Single */
.comment-button-wrapper{ margin-bottom: 0px; margin-top: 60px; text-align:center }
.comment-button-wrapper a{ color: #fff; background: #312c7e; font-size: 13px; padding: 10px 20px 10px 20px; box-shadow: 0 0px 3px rgba(0,0,0,.04); border-radius: 80px; }
h1.amp-wp-title{ text-align: center; margin: 0.7em 0px 0.6em 0px; font-size: 1.5em; }
.amp-wp-content.post-title-meta, .amp-wp-content.post-pagination-meta{ background: none; padding:  0; box-shadow:none }
.post-pagination-meta{ min-height:75px }
.single-post .post-pagination-meta{ min-height:auto }
.single-post .ampforwp-social-icons{ display:inline-block }
.post-pagination-meta .amp-wp-tax-category, .post-title-meta .amp-wp-tax-tag{ display : none; }
.amp-meta-wrapper{ border-bottom: 1px solid #DADADA; padding-bottom:10px; display:inline-block; width:100%; margin-bottom:0 }
.amp-wp-meta{ padding-left: 0; }
.amp-wp-tax-category{ float:right }
.amp-wp-tax-tag, .amp-wp-meta li{ list-style: none; display: inline-block; }
li.amp-wp-tax-category{ float: right }
.amp-wp-byline, .amp-wp-posted-on{ float: left }
.amp-wp-content amp-img{ max-width: 100%; }
figure{ margin: 0; }
figcaption{ font-size: 11px; margin-bottom: 11px; background: #eee; padding: 6px 8px; }
.amp-wp-byline amp-img{ display: none; }
.amp-wp-author:before{ content: "By "; color: #555; }
.amp-wp-author{ margin-right: 1px; }
.amp-wp-meta{ font-size: 12px; color: #555; }
.amp-wp-author-name:before{content:'By';}
.amp-ad-wrapper{ text-align: center }
.single-post main{ padding:12px 15% 10px 15% }
.the_content p{ margin-top: 5px; color: #333; font-size: 15px; line-height: 26px; margin-bottom: 15px; }
.amp-wp-tax-tag{ font-size: 13px; border: 0; display: inline-block; margin: 0.5em 0px 0.7em 0px; width: 100%; }
main .amp-wp-content.featured-image-content{ padding: 0px; border: 0; margin-bottom: 0; box-shadow: none }
.amp-wp-article-featured-image amp-img {margin: 0 auto;}
.amp-wp-article-featured-image.wp-caption .wp-caption-text{color: #696969; font-size: 11px; line-height: 15px; background: #eee; margin: 0; padding: .66em .75em; text-align: center;}
.amp-wp-content.post-pagination-meta{ max-width: 1030px; }
.single-post .ampforwp-social-icons.ampforwp-social-icons-wrapper{ display: block; margin: 2em auto 0.9em auto ; max-width: 1030px; }
.amp-wp-article-header.amp-wp-article-category.ampforwp-meta-taxonomy{ margin: 10px auto; max-width: 1030px; } .ampforwp_single_excerpt { margin-bottom:15px; font-size: 15px;}
.single-post .amp_author_area amp-img{ margin: 0; float: left; margin-right: 12px; border-radius: 60px; }
.single-post .amp_author_area .amp_author_area_wrapper{ display: inline-block; width: 100%; line-height: 1.4; margin-top: 22px; font-size: 13px; color:#333; font-family: sans-serif; }
/* Related Posts */
main .amp-wp-content.relatedpost{ background: none; box-shadow: none; max-width: 1030px; padding:0px 0 0 0; margin:1.8em auto 1.5em auto }
 .related_posts .related-title, .comments_list h3{ font-size: 14px; font-weight: bold; letter-spacing: 0.4px; margin: 15px 0 10px 0; color: #333; }
.related_posts .related-title {
	display: block;
}
.related_posts ol{ list-style-type:none; margin:0; padding:0 }
.related_posts ol li{ display:inline-block; width:100%; margin-bottom: 12px; background: #fefefe; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05); -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05); box-shadow: 0 2px 3px rgba(0,0,0,.05); padding: 0px; }
.related_posts .related_link{ margin-top:18px; margin-bottom:10px; margin-right:10px }
.related_posts .related_link a{ font-weight: 300; color: #000; font-size: 18px; }
.related_posts ol li amp-img{ width:100px; float:left; margin-right:15px }
.related_posts ol li p{ font-size: 12px; color: #999; line-height: 1.2; margin: 12px 0 0 0; }
.no_related_thumbnail{ padding: 15px 18px; }
.no_related_thumbnail .related_link{ margin: 16px 18px 20px 19px; }
/* Comments */
.page-numbers{padding: 9px 10px;background: #fff;font-size: 14px}
.ampforwp-comment-wrapper{margin:1.8em 0px 1.5em 0px}
main .amp-wp-content.comments_list {background: none;box-shadow: none;max-width: 1030px;padding:0}
.comments_list div{ display:inline-block;}
.comments_list ul{ margin:0;padding:0}
.comments_list ul.children{ padding-bottom:10px; margin-left: 4%; width: 96%;} 
.comments_list ul li p{ margin:0;font-size:15px;clear:both;padding-top:16px; word-break: break-word;}
.comments_list ul li{ font-size:13px;list-style-type:none; margin-bottom: 12px; background: #fefefe; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05); -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05); box-shadow: 0 2px 3px rgba(0,0,0,.05);padding: 0px;max-width: 1000px;width:100%;}
.comments_list ul li .comment-body{ padding: 25px;width: 91%;}
.comments_list ul li .comment-body .comment-author{ margin-right:5px}
.comment-author{ float:left }
.single-post footer.comment-meta{ padding-bottom: 0;}
.comments_list li li{ margin: 20px 20px 10px 20px;background: #f7f7f7;box-shadow: none;border: 1px solid #eee;}
.comments_list li li li{ margin:20px 20px 10px 20px}
.comment-content amp-img{max-width: 300px;}
.amp-facebook-comments{margin-top:45px}
/* ADS */
.amp_home_body .amp_ad_1{ margin-top: 10px; margin-bottom: -20px; }
.single-post .amp_ad_1{ margin-top: 10px; margin-bottom: -20px; }
html .single-post .ampforwp-incontent-ad-1 { margin-bottom: 10px; }
.amp-ad-4{ margin-top:10px; }
/* Notifications */
#amp-user-notification1 p { display: inline-block; }
amp-user-notification { padding: 5px; text-align: center; background: #fff; border-top: 1px solid; }
amp-user-notification button { padding: 8px 10px; background: #000; color: #fff; margin-left: 5px; border: 0; }
amp-user-notification button:hover { cursor: pointer }
.amp-wp-content blockquote { background-color: #fff; border-left: 3px solid; margin: 0; padding: 15px 20px 8px 24px; background: #f3f3f3; }
pre { white-space: pre-wrap; }
/* Tables */
table { display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; overflow-x: auto; }
table a:link { color: #666; font-weight: bold; text-decoration: none; }
table a:visited { color: #999999; font-weight: bold; text-decoration: none; }
table a:active,
table a:hover { color: #bd5a35; text-decoration: underline; }
table { font-family: Arial, Helvetica, sans-serif; color: #666; font-size: 12px; text-shadow: 1px 1px 0px #fff; background: #eee; margin: 0px; width: 95%; }
table th { padding: 21px 25px 22px 25px; border-top: 1px solid #fafafa; border-bottom: 1px solid #e0e0e0; background: #ededed; background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb)); background: -moz-linear-gradient(top, #ededed, #ebebeb); }
table th:first-child { text-align: left; padding-left: 20px; }
table tr:first-child th:first-child { -moz-border-radius-topleft: 3px; -webkit-border-top-left-radius: 3px; border-top-left-radius: 3px; }
table tr:first-child th:last-child { -moz-border-radius-topright: 3px; -webkit-border-top-right-radius: 3px; border-top-right-radius: 3px; }
table tr { text-align: center; padding-left: 20px; }
table td:first-child { text-align: left; padding-left: 20px; border-left: 0; }
table td { padding: 18px; border-top: 1px solid #ffffff; border-bottom: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; background: #fafafa; background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa)); background: -moz-linear-gradient(top, #fbfbfb, #fafafa); }
table tr.even td { background: #f6f6f6; background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6)); background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6); }
table tr:last-child td {border-bottom: 0;}
table tr:last-child td:first-child { -moz-border-radius-bottomleft: 3px; -webkit-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px; }
table tr:last-child td:last-child { -moz-border-radius-bottomright: 3px; -webkit-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px; }
table tr:hover td { background: #f2f2f2; background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0)); background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0); }
.hide-meta-info{ display: none; }
/* Responsive */
@media screen and (min-width: 650px) { table {display: inline-table;}  }
@media screen and (max-width: 800px) { .single-post main{ padding: 12px 10px 10px 10px } }
@media screen and (max-width: 630px) { .related_posts ol li p{ display:none } .related_link { margin: 16px 18px 20px 19px; } .amp-category-post {line-height: 1.45;font-size: 14px; } .amp-category-block li:nth-child(3) {margin:0 0.6%} }
@media screen and (max-width: 510px) { .ampforwp-tax-category span{ display:none }
.related_posts ol li p{ line-height: 1.6; margin: 7px 0 0 0; }
.related_posts .related_link { margin: 17px 18px 17px 19px; }
.comments_list ul li .comment-body{ width:auto }
}
@media screen and (max-width: 425px) { .related_posts .related_link p{ display:none } .alignright, .alignleft {float: none;} .related_posts .related_link { margin: 13px 18px 14px 19px; } .related_posts .related_link a{ font-size: 18px; line-height: 1.7; } .amp-meta-wrapper{ display: inline-block; margin-bottom: 0px; margin-top: 8px; width:100% } .ampforwp-tax-category{ padding-bottom:0 } h1.amp-wp-title{ margin: 16px 0px 13px 0px; } .amp-wp-byline{ padding:0 } .amp-meta-wrapper .amp-wp-meta-date{ display:none } .related_posts .related_link a { font-size: 17px; line-height: 1.5; } }
@media screen and (max-width: 375px) { #pagination .next a, #pagination .prev a{ padding: 10px 6px; font-size: 11px; color: #666; } .related_posts .related-title, .comments_list h3{ margin-top:15px; } #pagination .next{ margin-bottom:15px;} .related_posts .related_link a { font-size: 15px; line-height: 1.6; } }
@media screen and (max-width: 340px) { .related_posts .related_link a { font-size: 15px; } .single-post main{ padding: 10px 5px 10px 5px } .the_content .amp-ad-wrapper{ text-align: center; margin-left: -13px; } .amp-category-post {line-height: 1.45;font-size: 12px; } .amp-category-block li:nth-child(3) {margin:0%} }
@media screen and (max-width: 320px) { .related_posts .related_link a { font-size: 13px; } h1.amp-wp-title{ font-size:17px; padding:0px 4px	} }
@media screen and (max-width: 400px) { .amp-wp-title{ font-size: 19px; margin: 21px 10px -1px 10px; } }
@media screen and (max-width: 767px) { .amp-wp-post-content p{ display: block } .amp-wp-post-content p{ display: none } main, .amp-category-block, .category-widget-wrapper{ padding: 15px 18px 0px 18px; } .toggle-navigation ul li{ width: 50% } }
@media screen and (max-width: 495px) { h2.amp-wp-title a{ font-size: 17px; line-height: 26px;} }

/* Style Modifer */
.amp-wp-tax-tag a, a, .amp-wp-author, .headerlogo a, [class*=icono-] { color: #0285a8;; }
.amp-wp-content blockquote{ border-color:#0285a8;; }
.nav_container, .comment-button-wrapper a { background:#5b0108; }
.nav_container a{ color:#fff }
amp-user-notification { border-color:  #0285a8;; }
amp-user-notification button { background-color:  #0285a8;; }
.single-post footer { padding-bottom: 40px; }
.amp-ad-2{ margin-bottom: 50px; }
/**/
.amp-wp-author:before{ content: " By  "; }
.ampforwp-tax-category span:first-child:after { content: ' '; }
.ampforwp-tax-category span:after,.ampforwp-tax-tag span:after { content: ', '; }
.ampforwp-tax-category span:last-child:after, .ampforwp-tax-tag span:last-child:after { content: ' '; }
.amp-wp-article-content img { max-width: 100%; }
.design_2_wrapper .amp-loop-list .amp-wp-meta {display: none;}
.breadcrumb{line-height: 1;margin-bottom:6px;}
.breadcrumb ul, .category-single ul{padding:0; margin:0;}
.breadcrumb ul li{display:inline;}
.breadcrumb ul li a{font-size:12px;}
.breadcrumb ul li a::after {content: "►";display: inline-block;font-size: 8px;padding: 0 6px 0 7px;vertical-align: middle;opacity: 0.5;position:relative;top: -0.5px;}
.breadcrumb ul li:hover a::after{color:#c3c3c3;}
.breadcrumb ul li:last-child a::after{display:none;}
/******* Paste your Custom CSS in this Editor *******/    .row{display: inline-flex;width: 100%;}
	.col-2{width:50%;float:left;}
    .amp_blurb{text-align:center}
    .amp_blurb amp-img{margin: 0 auto;}
    .amp_btn{text-align:center}
    .amp_btn a{background: #f92c8b;color: #fff;padding: 9px 20px;border-radius: 3px;display: inline-block;box-shadow: 1px 1px 4px #ccc;}pre{word-break: normal;text-align: justify;display: block;margin: 0;line-height: 24px;word-wrap: break-word;white-space: pre-wrap;-webkit-border-radius: 4px;overflow: visible;background: transparent;padding:0;border:none;font-family: sans-serif;font-size:15px}
	pre p, pre li, pre ul {margin: 0;}
		</style>
</head>
<body class="single-post post-id-6072  design_2_wrapper">
<header class="container">
  <div id="headerwrap">
      <div id="header">
        
                  <a href="<?php echo base_url('amp');?>"  >

            
                <amp-img src="<?php echo base_url('assets/images/theresearchprocess-logo.png');?>" width="130" height="74" alt= "theresearchprocess-logo" class="amp-logo"></amp-img>

            
          </a>
                                  </div>
  </div>
</header>

<div on='tap:sidebar.toggle' role="button" tabindex="0" class="nav_container">
	<a href="#" class="toggle-text">Navigate</a>
</div>

<amp-sidebar id='sidebar'
    layout="nodisplay"
    side="right">
  <div class="toggle-navigationv2">
      <div role="button" tabindex="0" on='tap:sidebar.close' class="close-nav">X</div> <ul>
<?php if(!empty($all_static_pages)){ foreach ($all_static_pages as $row){ if($row->page_name!=='Sitemap' && $row->page_name!=='Our Team'){?>
								<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
									<a href="<?php echo base_url($row->page_url);echo '/'; ?>"><?php echo $row->page_name; ?></a></li>
							<?php }} }?>	
</ul>

  </div>
</amp-sidebar>

	<main>
		<article class="amp-wp-article">
		
									<div class="breadcrumb"> <ul id="breadcrumbs" class="breadcrumbs"><li class="item-home"><a class="bread-link bread-home" href="<?php echo base_url('');echo 'amp';?>" title="Homepage">Homepage</a></li><li class="item-cat item-cat-"><a class="bread-cat bread-cat- bread-cat-Headlines" href="<?php echo base_url('');echo 'category/';?><?php echo str_replace(' ', '-', $press['type']);?>" title="Headlines"><?php echo str_replace('-', ' ', ucfirst($press['type'])) ?></a></li></ul></div><div class="amp-wp-article-header ampforwp-meta-info ">
	<div class="amp-wp-content post-title-meta">

			<ul class="amp-wp-meta amp-meta-wrapper">
		<div class="amp-wp-meta amp-wp-byline">
		<?php 
function timeAgo($date,$formatted_date)
{
    $time_ago = strtotime($date);

	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada)  
	$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
    $cur_time   = strtotime($time);

    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    // Seconds
    if($seconds <= 60){
        return "Published: Just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "Published: One minute ago";
        }
        else{
            return "Published: $minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "Published: An hour ago";
        }else{
            return "Published: $hours hours ago";
        }
    }
    else{
       return 'Date: '.$formatted_date;
    }
} 

$d = new DateTime($press['date']);

					$timestamp = $d->getTimestamp(); // Unix timestamp
					$formatted_date = $d->format("F d, Y");

					$date=$press['date'];
					$time_elapsed = timeAgo($date,$formatted_date);?>
				<?php
$no= substr($press['id'], -1);
switch ($no) {
	case 0:
        $img=1; break;
    case 1:
        $img=2; break;
    case 2:
        $img=3; break;
    case 3:
        $img=4; break;
    case 4:
        $img=5; break;
    case 5:
        $img=6; break;
    case 6:
        $img=7; break;
    case 7:
        $img=8; break;
    case 8:
        $img=9; break;
    case 9:
        $img=10; break;
    default:
        echo " ";
}
?>
<?php if(!empty($press['image_url'])){
    $filename=$press['image_url'];
}
else{
        
    $k= 'news-'.$img.'.jpg';
}
?>

 <?php if(file_exists($filename))
 {
 	$imgfinalschema='./'.$filename; 
 }
 else
 {
 	$imgfinalschema= './assets/imgs/'.$filename;
 }
 

?>

		<?php if (file_exists($filename)) {  ?>
					<amp-img src="<?php echo base_url($filename) ?>" alt="<?php echo $press['name']; ?>" width="500" height="300" layout="fixed"></amp-img>
					  <?php } else{?>
					  <amp-img src="<?php echo base_url('assets/imgs/news-'.$filename.'.jpg');?>" alt="<?php echo $press['name']; ?>" width="500" height="300" layout="fixed"></amp-img>
					  
					 	<?php } ?> 
				<span class="amp-wp-author author vcard"><?php echo $press['author']; ?></span>
		<li class="amp-wp-meta-date"> <?php  echo $time_elapsed; ?></li>
	</div>

  	<div class="amp-wp-meta amp-wp-tax-category ampforwp-tax-category">
  		<span>
				Categories: </span>
      <span><?php echo str_replace('-', ' ', ucfirst($press['type'])) ?></span>  	</div>
  
			</ul>
	</div>
</div>
<header class="amp-wp-article-header ampforwp-title">
	<h1 class="amp-wp-title"><?php echo $press['name']; ?></h1>
	</header>
	<div class="amp-wp-article-featured-image amp-wp-content featured-image-content">
		<figure class="amp-wp-article-featured-image wp-caption">
			<amp-img width="620" height="620" src="<?php echo base_url($filename) ?>" sizes="(min-width: 620px) 620px, 100vw"></amp-img></figure>
	</div> <div class="amp-wp-article-content">
	<!--Post Content here-->
	<div class="amp-wp-content the_content">
		
	<pre><?php echo $press['full_desc']; ?></pre>


	</div>

			<div class="amp-wp-content post-pagination-meta">
				<div id="pagination">

	
					<div class="next">
											</div>


					<div class="prev">
				
	


					<div class="clearfix"></div>
			

				</div>
			</div>
		
</div>
<div class="amp-wp-article-header amp-wp-article-category ampforwp-meta-taxonomy ">
</div>

	<div class="amp-wp-content amp_author_area ampforwp-meta-taxonomy">
	    <div class="amp_author_area_wrapper">
	        	                    <amp-img src="<?php echo base_url('assets/images/author/'.str_replace(' ','',strtolower($author['url'])));?>.png" width="70" height="70" layout="fixed"></amp-img>
	                    	                <strong><?php echo $press['author']; ?></strong>:<?php echo $author['description'];?>
	        	    </div>
	</div> 	<div class="amp-wp-content post-pagination-meta ampforwp-social-icons-wrapper ampforwp-social-icons">
							<amp-social-share type="twitter"
												width="50"
												height="28"
												data-param-url=""
                        						data-param-text="<?php echo $press['name']; echo ' '; echo base_url($press['url']);?> via "></amp-social-share>
							<amp-social-share type="gplus"      width="50" height="28"></amp-social-share>
							<amp-social-share type="email"      width="50" height="28"></amp-social-share>
							<amp-social-share type="pinterest"  width="50" height="28"></amp-social-share>
							<amp-social-share type="linkedin" width="50" height="28"></amp-social-share>
							<a href="whatsapp://send?text=<?php echo base_url($press['url']);?>/">
				<div class="custom-amp-socialsharing-icon">
				    <amp-img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgOTAgOTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDkwIDkwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IldoYXRzQXBwIiBkPSJNOTAsNDMuODQxYzAsMjQuMjEzLTE5Ljc3OSw0My44NDEtNDQuMTgyLDQzLjg0MWMtNy43NDcsMC0xNS4wMjUtMS45OC0yMS4zNTctNS40NTVMMCw5MGw3Ljk3NS0yMy41MjIgICBjLTQuMDIzLTYuNjA2LTYuMzQtMTQuMzU0LTYuMzQtMjIuNjM3QzEuNjM1LDE5LjYyOCwyMS40MTYsMCw0NS44MTgsMEM3MC4yMjMsMCw5MCwxOS42MjgsOTAsNDMuODQxeiBNNDUuODE4LDYuOTgyICAgYy0yMC40ODQsMC0zNy4xNDYsMTYuNTM1LTM3LjE0NiwzNi44NTljMCw4LjA2NSwyLjYyOSwxNS41MzQsNy4wNzYsMjEuNjFMMTEuMTA3LDc5LjE0bDE0LjI3NS00LjUzNyAgIGM1Ljg2NSwzLjg1MSwxMi44OTEsNi4wOTcsMjAuNDM3LDYuMDk3YzIwLjQ4MSwwLDM3LjE0Ni0xNi41MzMsMzcuMTQ2LTM2Ljg1N1M2Ni4zMDEsNi45ODIsNDUuODE4LDYuOTgyeiBNNjguMTI5LDUzLjkzOCAgIGMtMC4yNzMtMC40NDctMC45OTQtMC43MTctMi4wNzYtMS4yNTRjLTEuMDg0LTAuNTM3LTYuNDEtMy4xMzgtNy40LTMuNDk1Yy0wLjk5My0wLjM1OC0xLjcxNy0wLjUzOC0yLjQzOCwwLjUzNyAgIGMtMC43MjEsMS4wNzYtMi43OTcsMy40OTUtMy40Myw0LjIxMmMtMC42MzIsMC43MTktMS4yNjMsMC44MDktMi4zNDcsMC4yNzFjLTEuMDgyLTAuNTM3LTQuNTcxLTEuNjczLTguNzA4LTUuMzMzICAgYy0zLjIxOS0yLjg0OC01LjM5My02LjM2NC02LjAyNS03LjQ0MWMtMC42MzEtMS4wNzUtMC4wNjYtMS42NTYsMC40NzUtMi4xOTFjMC40ODgtMC40ODIsMS4wODQtMS4yNTUsMS42MjUtMS44ODIgICBjMC41NDMtMC42MjgsMC43MjMtMS4wNzUsMS4wODItMS43OTNjMC4zNjMtMC43MTcsMC4xODItMS4zNDQtMC4wOS0xLjg4M2MtMC4yNy0wLjUzNy0yLjQzOC01LjgyNS0zLjM0LTcuOTc3ICAgYy0wLjkwMi0yLjE1LTEuODAzLTEuNzkyLTIuNDM2LTEuNzkyYy0wLjYzMSwwLTEuMzU0LTAuMDktMi4wNzYtMC4wOWMtMC43MjIsMC0xLjg5NiwwLjI2OS0yLjg4OSwxLjM0NCAgIGMtMC45OTIsMS4wNzYtMy43ODksMy42NzYtMy43ODksOC45NjNjMCw1LjI4OCwzLjg3OSwxMC4zOTcsNC40MjIsMTEuMTEzYzAuNTQxLDAuNzE2LDcuNDksMTEuOTIsMTguNSwxNi4yMjMgICBDNTguMiw2NS43NzEsNTguMiw2NC4zMzYsNjAuMTg2LDY0LjE1NmMxLjk4NC0wLjE3OSw2LjQwNi0yLjU5OSw3LjMxMi01LjEwN0M2OC4zOTgsNTYuNTM3LDY4LjM5OCw1NC4zODYsNjguMTI5LDUzLjkzOHoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="50" height="20" />
			    </div>
			</a>
							<a href="http://line.me/R/msg/text/?<?php echo base_url($press['url']);?>/">
				<div class="custom-amp-socialsharing-icon custom-amp-socialsharing-line"> 
					<amp-img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ni41MjggMjk2LjUyOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk2LjUyOCAyOTYuNTI4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnPgoJPHBhdGggZD0iTTI5NS44MzgsMTE1LjM0N2wwLjAwMy0wLjAwMWwtMC4wOTItMC43NmMtMC4wMDEtMC4wMTMtMC4wMDItMC4wMjMtMC4wMDQtMC4wMzZjLTAuMDAxLTAuMDExLTAuMDAyLTAuMDIxLTAuMDA0LTAuMDMyICAgbC0wLjM0NC0yLjg1OGMtMC4wNjktMC41NzQtMC4xNDgtMS4yMjgtMC4yMzgtMS45NzRsLTAuMDcyLTAuNTk0bC0wLjE0NywwLjAxOGMtMy42MTctMjAuNTcxLTEzLjU1My00MC4wOTMtMjguOTQyLTU2Ljc2MiAgIGMtMTUuMzE3LTE2LjU4OS0zNS4yMTctMjkuNjg3LTU3LjU0OC0zNy44NzhjLTE5LjEzMy03LjAxOC0zOS40MzQtMTAuNTc3LTYwLjMzNy0xMC41NzdjLTI4LjIyLDAtNTUuNjI3LDYuNjM3LTc5LjI1NywxOS4xOTMgICBDMjMuMjg5LDQ3LjI5Ny0zLjU4NSw5MS43OTksMC4zODcsMTM2LjQ2MWMyLjA1NiwyMy4xMTEsMTEuMTEsNDUuMTEsMjYuMTg0LDYzLjYyMWMxNC4xODgsMTcuNDIzLDMzLjM4MSwzMS40ODMsNTUuNTAzLDQwLjY2ICAgYzEzLjYwMiw1LjY0MiwyNy4wNTEsOC4zMDEsNDEuMjkxLDExLjExNmwxLjY2NywwLjMzYzMuOTIxLDAuNzc2LDQuOTc1LDEuODQyLDUuMjQ3LDIuMjY0YzAuNTAzLDAuNzg0LDAuMjQsMi4zMjksMC4wMzgsMy4xOCAgIGMtMC4xODYsMC43ODUtMC4zNzgsMS41NjgtMC41NywyLjM1MmMtMS41MjksNi4yMzUtMy4xMSwxMi42ODMtMS44NjgsMTkuNzkyYzEuNDI4LDguMTcyLDYuNTMxLDEyLjg1OSwxNC4wMDEsMTIuODYgICBjMC4wMDEsMCwwLjAwMSwwLDAuMDAyLDBjOC4wMzUsMCwxNy4xOC01LjM5LDIzLjIzMS04Ljk1NmwwLjgwOC0wLjQ3NWMxNC40MzYtOC40NzgsMjguMDM2LTE4LjA0MSwzOC4yNzEtMjUuNDI1ICAgYzIyLjM5Ny0xNi4xNTksNDcuNzgzLTM0LjQ3NSw2Ni44MTUtNTguMTdDMjkwLjE3MiwxNzUuNzQ1LDI5OS4yLDE0NS4wNzgsMjk1LjgzOCwxMTUuMzQ3eiBNOTIuMzQzLDE2MC41NjFINjYuNzYxICAgYy0zLjg2NiwwLTctMy4xMzQtNy03Vjk5Ljg2NWMwLTMuODY2LDMuMTM0LTcsNy03YzMuODY2LDAsNywzLjEzNCw3LDd2NDYuNjk2aDE4LjU4MWMzLjg2NiwwLDcsMy4xMzQsNyw3ICAgQzk5LjM0MywxNTcuNDI3LDk2LjIwOSwxNjAuNTYxLDkyLjM0MywxNjAuNTYxeiBNMTE5LjAzLDE1My4zNzFjMCwzLjg2Ni0zLjEzNCw3LTcsN2MtMy44NjYsMC03LTMuMTM0LTctN1Y5OS42NzUgICBjMC0zLjg2NiwzLjEzNC03LDctN2MzLjg2NiwwLDcsMy4xMzQsNyw3VjE1My4zNzF6IE0xODIuMzA0LDE1My4zNzFjMCwzLjAzMy0xLjk1Myw1LjcyMS00LjgzOCw2LjY1OCAgIGMtMC43MTIsMC4yMzEtMS40NDEsMC4zNDMtMi4xNjEsMC4zNDNjLTIuMTk5LDAtNC4zMjMtMS4wMzktNS42NjYtMi44ODhsLTI1LjIwNy0zNC43MTd2MzAuNjA1YzAsMy44NjYtMy4xMzQsNy03LDcgICBjLTMuODY2LDAtNy0zLjEzNC03LTd2LTUyLjE2YzAtMy4wMzMsMS45NTMtNS43MjEsNC44MzgtNi42NThjMi44ODYtMC45MzYsNi4wNDUsMC4wOSw3LjgyNywyLjU0NWwyNS4yMDcsMzQuNzE3Vjk5LjY3NSAgIGMwLTMuODY2LDMuMTM0LTcsNy03YzMuODY2LDAsNywzLjEzNCw3LDdWMTUzLjM3MXogTTIzMy4zMTEsMTU5LjI2OWgtMzQuNjQ1Yy0zLjg2NiwwLTctMy4xMzQtNy03di0yNi44NDdWOTguNTczICAgYzAtMy44NjYsMy4xMzQtNyw3LTdoMzMuNTdjMy44NjYsMCw3LDMuMTM0LDcsN3MtMy4xMzQsNy03LDdoLTI2LjU3djEyLjg0OWgyMS41NjJjMy44NjYsMCw3LDMuMTM0LDcsN2MwLDMuODY2LTMuMTM0LDctNyw3ICAgaC0yMS41NjJ2MTIuODQ3aDI3LjY0NWMzLjg2NiwwLDcsMy4xMzQsNyw3UzIzNy4xNzcsMTU5LjI2OSwyMzMuMzExLDE1OS4yNjl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" width="50" height="20" />
				</div>
			</a>
			</div>

						<div class="amp-wp-content relatedpost">
						    <div class="related_posts">
							
							
										<ol class="clearfix">
												<span class="related-title">Related Post</span><!--#930-->
												<?php if(!empty($ten_report))

	  {

              foreach($ten_report as $row){
				  if(!empty($row->image_url))
											{
												$filename=$row->image_url;
											}
											else
											{
												$filename = 'img/'.$row->type.'/'.$row->url.'.jpg';
											}
                $no= substr($row->id, -1);
          switch ($no) {
            case 0:
              $img=1; break;
            case 1:
              $img=2; break;
            case 2:
              $img=3; break;
            case 3:
              $img=4; break;
            case 4:
              $img=5; break;
            case 5:
              $img=6; break;
            case 6:
              $img=7; break;
            case 7:
              $img=8; break;
            case 8:
              $img=9; break;
            case 9:
              $img=10; break;
            default:
              echo " ";
          }

                ?>
																			
																												
														<li class="has_related_thumbnail">
                                                            <a href="<?php echo base_url('');?><?php echo $row->url;?>" rel="bookmark" title="<?php echo $row->name;?>">
									            
																								            	<amp-img src="<?php echo base_url($filename);?>" width="150" height="150" layout="responsive"></amp-img>
															                                                              </a>
								                <div class="related_link">
								                    <a href="<?php echo base_url('');?><?php echo $row->url;?>/"><?php echo str_replace("&","&amp;",$row->name); ?></a>
								                    								                    <p><?php echo substr(str_replace("&","&amp;",strip_tags($row->full_desc)),0,100); ?>...</p>
								                </div>
								            </li><?php }} ?>
																							</ol>
						    </div>
						</div> 					</article>
						 
				
						
	</main>

	
  <footer class="container">
      <div id="footer">
                  <div class="footer_menu"> <ul id="menu-home" class="menu">
				    <?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
                 { ?>
              
           <li><a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a></li>       
              <?php }} 
              ?>
</ul>          </div>
         
        <p>
            <a href="#header">
              Top </a>  |   <a class="view-non-amp" href="<?php echo base_url($press['url']);?>" rel="nofollow">View Non-AMP Version </a>         
            All Rights Reserved        </p>
      </div>
  </footer>
		<!--Plugin Version :0.9.62 -->
				<div class="sticky_social">
							  		          <amp-social-share type="twitter"
	                            width="50"
	                            height="28"
	                            data-param-url=""
                        		data-param-text="<?php echo $press['name']; echo ' '; echo base_url($press['url']);?> via "
	          ></amp-social-share>
			  				  				    	<amp-social-share type="gplus"      width="50" height="28"></amp-social-share>
			  				  				    	<amp-social-share type="email"      width="50" height="28"></amp-social-share>
			  				  				    	<amp-social-share type="pinterest"  width="50" height="28"></amp-social-share>
			  				  				    	<amp-social-share type="linkedin" width="50" height="28"></amp-social-share>
			  				  								<a href="whatsapp://send?text=<?php echo base_url($press['url']);?>">
							<div class="custom-amp-socialsharing-icon">
							    <amp-img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgOTAgOTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDkwIDkwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IldoYXRzQXBwIiBkPSJNOTAsNDMuODQxYzAsMjQuMjEzLTE5Ljc3OSw0My44NDEtNDQuMTgyLDQzLjg0MWMtNy43NDcsMC0xNS4wMjUtMS45OC0yMS4zNTctNS40NTVMMCw5MGw3Ljk3NS0yMy41MjIgICBjLTQuMDIzLTYuNjA2LTYuMzQtMTQuMzU0LTYuMzQtMjIuNjM3QzEuNjM1LDE5LjYyOCwyMS40MTYsMCw0NS44MTgsMEM3MC4yMjMsMCw5MCwxOS42MjgsOTAsNDMuODQxeiBNNDUuODE4LDYuOTgyICAgYy0yMC40ODQsMC0zNy4xNDYsMTYuNTM1LTM3LjE0NiwzNi44NTljMCw4LjA2NSwyLjYyOSwxNS41MzQsNy4wNzYsMjEuNjFMMTEuMTA3LDc5LjE0bDE0LjI3NS00LjUzNyAgIGM1Ljg2NSwzLjg1MSwxMi44OTEsNi4wOTcsMjAuNDM3LDYuMDk3YzIwLjQ4MSwwLDM3LjE0Ni0xNi41MzMsMzcuMTQ2LTM2Ljg1N1M2Ni4zMDEsNi45ODIsNDUuODE4LDYuOTgyeiBNNjguMTI5LDUzLjkzOCAgIGMtMC4yNzMtMC40NDctMC45OTQtMC43MTctMi4wNzYtMS4yNTRjLTEuMDg0LTAuNTM3LTYuNDEtMy4xMzgtNy40LTMuNDk1Yy0wLjk5My0wLjM1OC0xLjcxNy0wLjUzOC0yLjQzOCwwLjUzNyAgIGMtMC43MjEsMS4wNzYtMi43OTcsMy40OTUtMy40Myw0LjIxMmMtMC42MzIsMC43MTktMS4yNjMsMC44MDktMi4zNDcsMC4yNzFjLTEuMDgyLTAuNTM3LTQuNTcxLTEuNjczLTguNzA4LTUuMzMzICAgYy0zLjIxOS0yLjg0OC01LjM5My02LjM2NC02LjAyNS03LjQ0MWMtMC42MzEtMS4wNzUtMC4wNjYtMS42NTYsMC40NzUtMi4xOTFjMC40ODgtMC40ODIsMS4wODQtMS4yNTUsMS42MjUtMS44ODIgICBjMC41NDMtMC42MjgsMC43MjMtMS4wNzUsMS4wODItMS43OTNjMC4zNjMtMC43MTcsMC4xODItMS4zNDQtMC4wOS0xLjg4M2MtMC4yNy0wLjUzNy0yLjQzOC01LjgyNS0zLjM0LTcuOTc3ICAgYy0wLjkwMi0yLjE1LTEuODAzLTEuNzkyLTIuNDM2LTEuNzkyYy0wLjYzMSwwLTEuMzU0LTAuMDktMi4wNzYtMC4wOWMtMC43MjIsMC0xLjg5NiwwLjI2OS0yLjg4OSwxLjM0NCAgIGMtMC45OTIsMS4wNzYtMy43ODksMy42NzYtMy43ODksOC45NjNjMCw1LjI4OCwzLjg3OSwxMC4zOTcsNC40MjIsMTEuMTEzYzAuNTQxLDAuNzE2LDcuNDksMTEuOTIsMTguNSwxNi4yMjMgICBDNTguMiw2NS43NzEsNTguMiw2NC4zMzYsNjAuMTg2LDY0LjE1NmMxLjk4NC0wLjE3OSw2LjQwNi0yLjU5OSw3LjMxMi01LjEwN0M2OC4zOTgsNTYuNTM3LDY4LjM5OCw1NC4zODYsNjguMTI5LDUzLjkzOHoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="50" height="20" />
							    </div>
								</a>
	        	        			<a href="http://line.me/R/msg/text/?<?php echo base_url($press['url']);?>/">
				<div class="custom-amp-socialsharing-icon custom-amp-socialsharing-line">
					<amp-img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ni41MjggMjk2LjUyOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk2LjUyOCAyOTYuNTI4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnPgoJPHBhdGggZD0iTTI5NS44MzgsMTE1LjM0N2wwLjAwMy0wLjAwMWwtMC4wOTItMC43NmMtMC4wMDEtMC4wMTMtMC4wMDItMC4wMjMtMC4wMDQtMC4wMzZjLTAuMDAxLTAuMDExLTAuMDAyLTAuMDIxLTAuMDA0LTAuMDMyICAgbC0wLjM0NC0yLjg1OGMtMC4wNjktMC41NzQtMC4xNDgtMS4yMjgtMC4yMzgtMS45NzRsLTAuMDcyLTAuNTk0bC0wLjE0NywwLjAxOGMtMy42MTctMjAuNTcxLTEzLjU1My00MC4wOTMtMjguOTQyLTU2Ljc2MiAgIGMtMTUuMzE3LTE2LjU4OS0zNS4yMTctMjkuNjg3LTU3LjU0OC0zNy44NzhjLTE5LjEzMy03LjAxOC0zOS40MzQtMTAuNTc3LTYwLjMzNy0xMC41NzdjLTI4LjIyLDAtNTUuNjI3LDYuNjM3LTc5LjI1NywxOS4xOTMgICBDMjMuMjg5LDQ3LjI5Ny0zLjU4NSw5MS43OTksMC4zODcsMTM2LjQ2MWMyLjA1NiwyMy4xMTEsMTEuMTEsNDUuMTEsMjYuMTg0LDYzLjYyMWMxNC4xODgsMTcuNDIzLDMzLjM4MSwzMS40ODMsNTUuNTAzLDQwLjY2ICAgYzEzLjYwMiw1LjY0MiwyNy4wNTEsOC4zMDEsNDEuMjkxLDExLjExNmwxLjY2NywwLjMzYzMuOTIxLDAuNzc2LDQuOTc1LDEuODQyLDUuMjQ3LDIuMjY0YzAuNTAzLDAuNzg0LDAuMjQsMi4zMjksMC4wMzgsMy4xOCAgIGMtMC4xODYsMC43ODUtMC4zNzgsMS41NjgtMC41NywyLjM1MmMtMS41MjksNi4yMzUtMy4xMSwxMi42ODMtMS44NjgsMTkuNzkyYzEuNDI4LDguMTcyLDYuNTMxLDEyLjg1OSwxNC4wMDEsMTIuODYgICBjMC4wMDEsMCwwLjAwMSwwLDAuMDAyLDBjOC4wMzUsMCwxNy4xOC01LjM5LDIzLjIzMS04Ljk1NmwwLjgwOC0wLjQ3NWMxNC40MzYtOC40NzgsMjguMDM2LTE4LjA0MSwzOC4yNzEtMjUuNDI1ICAgYzIyLjM5Ny0xNi4xNTksNDcuNzgzLTM0LjQ3NSw2Ni44MTUtNTguMTdDMjkwLjE3MiwxNzUuNzQ1LDI5OS4yLDE0NS4wNzgsMjk1LjgzOCwxMTUuMzQ3eiBNOTIuMzQzLDE2MC41NjFINjYuNzYxICAgYy0zLjg2NiwwLTctMy4xMzQtNy03Vjk5Ljg2NWMwLTMuODY2LDMuMTM0LTcsNy03YzMuODY2LDAsNywzLjEzNCw3LDd2NDYuNjk2aDE4LjU4MWMzLjg2NiwwLDcsMy4xMzQsNyw3ICAgQzk5LjM0MywxNTcuNDI3LDk2LjIwOSwxNjAuNTYxLDkyLjM0MywxNjAuNTYxeiBNMTE5LjAzLDE1My4zNzFjMCwzLjg2Ni0zLjEzNCw3LTcsN2MtMy44NjYsMC03LTMuMTM0LTctN1Y5OS42NzUgICBjMC0zLjg2NiwzLjEzNC03LDctN2MzLjg2NiwwLDcsMy4xMzQsNyw3VjE1My4zNzF6IE0xODIuMzA0LDE1My4zNzFjMCwzLjAzMy0xLjk1Myw1LjcyMS00LjgzOCw2LjY1OCAgIGMtMC43MTIsMC4yMzEtMS40NDEsMC4zNDMtMi4xNjEsMC4zNDNjLTIuMTk5LDAtNC4zMjMtMS4wMzktNS42NjYtMi44ODhsLTI1LjIwNy0zNC43MTd2MzAuNjA1YzAsMy44NjYtMy4xMzQsNy03LDcgICBjLTMuODY2LDAtNy0zLjEzNC03LTd2LTUyLjE2YzAtMy4wMzMsMS45NTMtNS43MjEsNC44MzgtNi42NThjMi44ODYtMC45MzYsNi4wNDUsMC4wOSw3LjgyNywyLjU0NWwyNS4yMDcsMzQuNzE3Vjk5LjY3NSAgIGMwLTMuODY2LDMuMTM0LTcsNy03YzMuODY2LDAsNywzLjEzNCw3LDdWMTUzLjM3MXogTTIzMy4zMTEsMTU5LjI2OWgtMzQuNjQ1Yy0zLjg2NiwwLTctMy4xMzQtNy03di0yNi44NDdWOTguNTczICAgYzAtMy44NjYsMy4xMzQtNyw3LTdoMzMuNTdjMy44NjYsMCw3LDMuMTM0LDcsN3MtMy4xMzQsNy03LDdoLTI2LjU3djEyLjg0OWgyMS41NjJjMy44NjYsMCw3LDMuMTM0LDcsN2MwLDMuODY2LTMuMTM0LDctNyw3ICAgaC0yMS41NjJ2MTIuODQ3aDI3LjY0NWMzLjg2NiwwLDcsMy4xMzQsNyw3UzIzNy4xNzcsMTU5LjI2OSwyMzMuMzExLDE1OS4yNjl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" width="50" height="20" />
				</div>
			</a>
					</div>
							<amp-analytics type="googleanalytics" id="analytics1">
							<script type="application/json">
							{
							  "vars": {
							    "account": "UA-131263900-1"
							  },
							  "triggers": {
							    "trackPageview": {
							      "on": "visible",
							      "request": "pageview"
							    }
							  }
							}
							</script>
						</amp-analytics>
						</body>
</html>