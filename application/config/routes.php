<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// user
$route['default_controller']      = 'UserController';
$route['home']                    = 'UserController/index';
$route['about']                   = 'UserController/about';
$route['contact']                 = 'UserController/contact';
$route['gallery']                 = 'UserController/gallery';
$route['service']                 = 'UserController/service';


// admin
$route['a_dashboard']             = 'AdminController/index';
$route['a_login']                 = 'AdminController/login';
$route['a_login_act']             = 'AdminController/login_act';
$route['a_logout']                = 'AdminController/logout';
$route['a_chatrs']                =  'AdminController/charts';
$route['a_blank']                 =  'AdminController/blank';
$route['a_buttons']               =  'AdminController/buttons';
$route['a_card']                  =  'AdminController/cards';
$route['a_register']              =  'AdminController/register';
$route['a_tables']                =  'AdminController/tables';


// staff
$route['c_create']                =  'AdminController/create';
$route['c_list']                  =  'AdminController/list';
$route['c_update']                =  'AdminController/update';
$route['c_creat_act']             =  'AdminController/c_creat_act';
$route['c_detail_staff/(.*)']     =  'AdminController/detail_staff/$1';
$route['c_delete_staff/(.*)']     =  'AdminController/delete_staff/$1';
$route['c_edit_staff/(.*)']       =  'AdminController/edit_staff/$1';
$route['c_edit_staff_act/(.*)']   =  'AdminController/edit_staff_act/$1';

// service
$route['Cservice']                =  'AdminController/Cservice';
$route['c_service_act']           =  'AdminController/c_service_act';
$route["serviceList"]             = "AdminController/serviceList";
$route["serviceEdit/(.*)"]        = "AdminController/serviceEdit/$1";
$route["serviceDelete/(.*)"]      = "AdminController/serviceDelete/$1";
$route["service_edit_act/(.*)"]   = "AdminController/service_edit_act/$1";

// price
$route['Cprice']                  =  'AdminController/Cprice';
$route['c_price_act']             =  'AdminController/c_price_act';
$route['priceList']               =  'AdminController/priceList';
$route['priceEdit/(.*)']          =  'AdminController/priceEdit/$1';
$route['priceDelete/(.*)']          =  'AdminController/priceDelete/$1';
$route['price_edit_act/(.*)']     =  'AdminController/price_edit_act/$1';

// about
$route['Cabout']                  =  'AdminController/Cabout';
$route['c_about_act']                  =  'AdminController/c_about_act';
$route['aboutList']                  =  'AdminController/aboutList';
$route['aboutEdit/(.*)']                  =  'AdminController/aboutEdit/$1';
$route['aboutDelete/(.*)']                  =  'AdminController/aboutDelete/$1';
$route['about_edit_act/(.*)']                  =  'AdminController/about_edit_act/$1';



















$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;












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
|	https://codeigniter.com/userguide3/general/routing.html
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