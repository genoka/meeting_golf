<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
$config['dsn']='mysql://root:null@localhost/meetinggolf';

/*
* determines whether or not to display the map and associated JS on the page
* this is used if you just want to display a streetview with no map
*/
$config['display_map'] = true;

$config['api_options']=null;

$config['mobile']=true;
    /**
     * The viewport meta tag allows more values than these defaults; you can get more info here: http://www.html-5.com/metatags/index.html#viewport-meta-tag
     *
     * @var string
     */
    $config['meta_viewport'] = "initial-scale=1.0, user-scalable=no";
    
    /**
     * DEPRECATED: Google now has geocoding service.  
     * NOTE: Note even sure if this still works
     * GoogleMapAPI used to use the Yahoo geocode lookup API.
     * This is the application ID for YOUR application.
     * This is set upon instantiating the GoogleMapAPI object.
     * (http://developer.yahoo.net/faq/index.html#appid)
     *
     * @var string
     */
    $config['app_id'] = null;

    /**
     * use onLoad() to load the map javascript.
     * if enabled, be sure to include on your webpage:
     * <?=$mapobj->printOnLoad?> or manually create an onload function 
     * that calls the map's onload function using $this->printOnLoadFunction
     *
     * @var bool
     * @default true
     */
    $config['onload'] = true;
    
    /**
     * map center latitude (horizontal)
     * calculated automatically as markers
     * are added to the map.
     *
     * @var float
     */
    $config['center_lat'] = null;

    /**
     * map center longitude (vertical)
     * calculated automatically as markers
     * are added to the map.
     *
     * @var float
     */
    $config['center_lon'] = null;
    
    /**
     * enables map controls (zoom/move/center)
     *
     * @var bool
     */
    $config['map_controls'] = true;

    /**
     * determines the map control type
     * small -> show move/center controls
     * large -> show move/center/zoom controls
     *
     * @var string
     */
    $config['control_size']='large';
    
    /**
     * enables map type controls (map/satellite/hybrid/terrain)
     *
     * @var bool
     */
    $config['type_controls'] = true;
    
    /**
     * determines unit system to use for directions, blank = default
     * @var string (METRIC, IMPERIAL)
     */
    $config['directions_unit_system']='';
	
	/**
	 * sets default option for type controls(DEFAULT, HORIZONTAL_BAR, DROPDOWN_MENU)
	 *
	 * @var string
	 */
	 $config['type_controls_style'] = "DEFAULT";

    /**
     * default map type google.maps.MapTypeId.(ROADMAP, SATELLITE, HYBRID, TERRAIN)
     *
     * @var string
     */
    $config['map_type']='HYBRID';
    
    /**
     * enables scale map control
     *
     * @var bool
     */
    $config['scale_control']= true;
    /**
	  * class variable to control scrollwheel
	  * @var bool
	  */
    $config['scrollwheel'] = true; 
    
    /**
     * enables overview map control
     *
     * @var bool
     */
    $config['overview_control'] = false;
    
    /**
     * enables Google Adsense Adsmanager on page, not currently supported in beta
     *
     * @var bool
     */
    $config['ads_manager'] = false;
    
    /**
     * Google Adsense Publisher ID
     *
     * @var string
     */
    $config['ads_pub_id'] = "";  
    
    /**
     * Google Adsense Channel ID
     *
     * @var string
     */
    $config['ads_channel'] = "";
    
    /**
     * The Max number of Adsmanager ads to show on a map
     *
     * @var int
     */
    $config['ads_max']= 10;
    
    /**
     * enables/disables local search on page
     *
     * @var bool
     */
    $config['local_search'] = false;
    
    /**
     * enables local search ads on page NOTE: will only display ads if local_search == true, otherwise just use ad_manager and settings.
     *
     * @var bool
     */
    $config['local_search_ads'] = false;
    
    /**
     * enables/disables walking directions option
     *
     * @var bool
     */
    $config['walking_directions'] = false;
    
    /**
     * enables/disables biking directions on directions
     *
     * @var bool
     */
    $config['biking_directions'] = false;
    
    /**
     * enables/disables avoid highways on directions
     *
     * @var bool
     */
    $config['avoid_highways'] = false;
    
    /**
     * determines if avoid tollways is used in directions
     *
     * @var bool
     */
    $config['avoid_tollways'] = false;    
     
    /**
     * determines the default zoom level
     *
     * @var int
     */
    $config['zoom ']= 16;

    /**
     * determines the map width
     *
     * @var string
     */
    $config['width']='500px';
    
    /**
     * determines the map height
     *
     * @var string
     */
    $config['height']='500px';

