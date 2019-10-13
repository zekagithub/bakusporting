<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Front';

$route['home']="front";
$route['blog/(:any)']='Front/blog_single/$1';
$route['about']="Front/about";
$route['managment']="Front/managment";
$route['marketing']="Front/marketing";
$route['infrastructure']="Front/infrastructure";
$route['trainers']="Front/trainers";
$route['players']="Front/players";
$route['academy']="Front/academy";
$route['photos']="Front/photos";
$route['video']="Front/video";
$route['contact']="Front/contact";
$route['message']="Front/message";
$route['games']="Front/games";
$route['tables']="Front/tables";
$route['technical']="Front/tech";
$route['images/(:any)']="Front/fotolar/$1";
//$route['services']="front/services";
//$route['blog']="front/blog";
//$route['carier']="front/carier";
//$route['contact']="front/contact";
//$route['blog/(:any)']="Front/blog_single/$1";
//$route['home/az']="Front/blog_single/$1";
//$route['home/en']="Front/blog_single/$1";
//
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;
