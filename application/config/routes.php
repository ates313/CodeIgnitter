<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'UserController';
$route['home']    = 'UserController/index';
$route['about']   = 'UserController/about';
$route['contact'] = 'UserController/contact';
$route['gallery'] = 'UserController/gallery';
$route['service'] = 'UserController/service';


$route['a_dashboard']                 = 'AdminController/index';
$route['a_login']                 = 'AdminController/login';
$route['a_chatrs']                =  'AdminController/charts';
$route['a_blank']                 =  'AdminController/blank';
$route['a_buttons']               =  'AdminController/buttons';
$route['a_card']                  =  'AdminController/cards';
$route['a_register']              =  'AdminController/register';
$route['a_tables']                =  'AdminController/tables';


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