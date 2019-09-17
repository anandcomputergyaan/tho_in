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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home'; //Home

/*
$route['admin/category'] = 'admin/category';
$route['admin/(:any)'] = 'admin/$1';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'Home/about_us';
$route['booking-conditions'] = 'Home/booking_conditions';
$route['newsletter']='quotes/rec';
$route['quotes']='quotes/save_quotes_data';

$route['contact-us']='Home/contact_us';
$route['contact']='contact/save_contact_details';

$route['enquiry/enquiry_list']='enquiry/enquiry_list';
$route['enquiry/price_request']='enquiry/price_request';

$route['quotes/quotes_list']='quotes/quotes_list';
$route['contact/contact_list']='contact/contact_list';

$route['explore-all']='home/all_toures';
$route['login/sign_in']='login/sign_in';
$route['enquiry/(:any)']='enquiry/(:any)';

$route['search'] = 'Home/search_page';
$route['(:any)/(:any)'] = 'Home/page/$1/$2';


$route['admin/(:any)/(:any)'] = 'admin/$1/$2';
$route['admin/(:any)/(:any)/(:any)'] = 'admin/$1/$2/$3';*/
