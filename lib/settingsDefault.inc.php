<?php
/**
 * This script contains configurable variables. Keys of array can be overriden if neccessary in file settings.inc.php
 *
 */

$config = array (
    
    /* url where xml witch most recent blog enterie are placed */
    'blogMostRecentRecordsUrl' => 'http://blog.opencaching.pl/feed/', 
    
    /* to switch cache map v2 on set true otherwise false */
    'map2SwithedOn' => true, 
    
    /* *******************************************************************
       * Node personalizations
       ******************************************************************* */
    /* main logo picture (to be placed in /images/) */
    'headerLogo' => 'oc_logo.png', 
    /* main logo; winter version, displayed during december and january. */
    'headerLogoWinter' => 'oc_logo_winter.png', 
    /* main logo; prima aprilis version (april fools), displayed only on april 1st. */
    'headerLogo1stApril' => 'oc_logo_1A.png', 
    
    /* website icon (favicon); (to be placed in /images/) 
        Format: 16x16 pixels; PNG 8bit indexed or 24bit true color, transparency supported
        A file /favicon.ico (windows icon ICO format, 16x16) should also exist as fallback 
        mainly for MSIE */
    'headerFavicon' => 'oc_icon.png', 
	/* Language list for new caches */
    'defaultLanguageList' => array (
        'PL', 'EN', 'FR', 'DE', 'NL', 'RO'
    ),
	/* default country in user registration form */
	'defaultCountry' => 'PL',
	
	/* Enable referencing waypoints from other sites */
	'otherSites_geocaching_com' => 1,
	'otherSites_opencaching_com' => 1,
	'otherSites_navicache_com' => 1,
	'otherSites_gpsgames_org' => 1,
	/* Minimum number of finds a user must have to see a cache's waypoint on another site */
    'otherSites_minfinds' => 100
 );

