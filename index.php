<?php
define("ABSPATH",dirname(__FILE__));
define("IN_CMS","true");
//Constants loaded

require_once(ABSPATH . '/conf.php');
require_once(ABSPATH . '/includes/db.php');//Load database class
require_once(ABSPATH . '/includes/ua_engine.php');//Load the engine
require_once(ABSPATH . '/includes/ua_router.php');
require_once(ABSPATH . '/includes/functions.php');//Load necessary functions

global $db,$engine,$router;
$db = new stdDb(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$db->prefix = TBL_PREFIX;
$engine = new UAEngine($db);
$router = UARouter::newInstance($engine);
//Loaded database
UAEngine::load('theme');
UAEngine::load('user');
//The system needs you to be logged in to use
global $user;
$user = new UAUser($db);
global $theme;
$theme = new UATheme($db,$engine);

if($user->is_logged_in() || $theme->get_view_name($router) == 'login'){
	$theme->load_view($theme->get_view_name($router));
}else{
	$theme->jump_to_view('login');
}