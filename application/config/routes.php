<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'user';

$route['default_controller'] = 'Landing_ctlr';
$route['amp'] = 'Landing_ctlr/amp_index';
$route['page/(:any)'] = 'Landing_ctlr';
$route['404_override'] = '';
$route['search'] = 'Filters/index';
$route['editorial-policy'] = 'Pages_ctlr/editorial';
//health
$route['category/(:any)'] = 'Landing_ctlr/show_category_detail_page';
$route['category/(:any)/page/(:any)'] = 'Landing_ctlr/show_category_detail_page';
$route['category/(:any)/rss'] = 'Landing_ctlr/show_category_detail_page';
//tech
//$route['headlines'] = 'Landing_ctlr/show_category_detail_page';
//headlines
//$route['science-and-environment'] = 'Landing_ctlr/show_category_detail_page';
//business
//$route['technology'] = 'Landing_ctlr/show_category_detail_page';


$route['site-map'] = 'Pages_ctlr/site_map';
$route['request-for-customization/(:num)'] = 'Pages_ctlr/customization';
$route['request-sample/(:num)'] = 'Pages_ctlr/inquiry';


$route['about-us'] = 'Pages_ctlr/aboutpage';
$route['contact-us'] = 'Pages_ctlr/contact';
$route['sitemap\.xml'] = "seo/sitemap";            /* SITEMAP STUFF */
$route['sitemap-news\.xml'] = "seo/newssitemap";

$route['privacy-policy'] = 'Pages_ctlr/privacy';
//$route['author'] = 'pages_ctlr/all_author';
$route['author/(:any)'] = 'pages_ctlr/author_details/$1';
$route['author/(:any)/page/(:any)'] = 'pages_ctlr/author_details/$1';
//$route['author/(:any)/amp'] = 'pages_ctlr/amp_author_details/$1';
$route['(:any)/amp'] = 'Landing_ctlr/amp_detail';
$route['(:any)'] = 'Landing_ctlr/page_detail';
$route['(:any)/(:any)/(:any)/(:any)'] = 'Landing_ctlr/page_detail';

$route['(:any)/(:any)/(:any)/(:any)/amp'] = 'Landing_ctlr/amp_detail';
$route['thanks/contact-us'] = 'thanks/index';
//$route['thanks/request-sample/(:any)'] = 'thanks/index';
//$route['thanks/request-for-customization/(:any)'] = 'thanks/index';
$route['thanks/request-sample/(:any)'] = 'thanks/index';

$route['thanks/request-for-customization/(:any)'] = 'thanks/index';
 

