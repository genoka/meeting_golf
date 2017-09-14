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
$route['default_controller'] = 'front_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/*
| nommenclature du systeme de routage de l'application
|  MOT1MOT2 -> 3 ou 5 premieres lettres et le mot -golf-meeting-1
|
*/


$route['webapp-golf-meeting-1']='front_controller/webapp';
$route['webapp-golf-meeting-contacts']='front_controller/contacts';
$route['webapp-golf-meeting-langs']='front_controller/switch_lang';

$route['member-meeting-golf']='member';


$route['signin-golf-meeting-1']='member/signin';
$route['signup-golf-meeting-1']='member/signup';
$route['validate-signup-golf-meeting-1']='member/validate_signup';
$route['forget-pass-golf-meeting-1']='member/get_password';
$route['find-guest-golf-meeting-1']='member/find_guest';
$route['add-guest-golf-meeting-1']='member/invite_guest';
$route['invite-guest-golf-meeting-1']='member/invite_guest';
$route['block-guest-golf-meeting-1']='member/block_guest';
$route['gmap-golf-meeting-1']='member/locate_guest';
$route['send-ticket-golf-meeting-1']='member/send_ticket_playing_golf';
$route['view-ticket-golf-meeting-1']='member/view_ticket_playing_golf';
$route['delete-ticket-golf-meeting-1']='member/delete_ticket_playing_golf';
$route['terms-services-golf-meeting-1']='terms_services';
$route['play-golf-meeting-1']='member/invite_ticket_playing_golf';
$route['facebook-golf-meeting-1']='member/facebook_ticket_playing_golf';
$route['twitter-golf-meeting-1']='member/twitter_ticket_playing_golf';
$route['plus-golf-meeting-1']='member/plus_ticket_playing_golf';
$route['android-golf-meeting-1']='member/android_ticket_playing_golf';
$route['ios-golf-meeting-1']='member/ios_ticket_playing_golf';
$route['contact-golf-meeting-1']='member/contact_informations';

$route['geolocalisation-golf-gmap']='geolocalisation';
$route['geolocalisation-golf-add']='geolocalisation/add';
$route['geolocalisation-golf-search']='geolocalisation/search';
$route['geolocalisation-golf-locate']='geolocalisation/locate';

$route['tchat-meeting-golf']='messagerie_tchat';


$route['product/:num'] = 'catalog/product_lookup';
$route['product/(:any)'] = 'catalog/product_lookup';
