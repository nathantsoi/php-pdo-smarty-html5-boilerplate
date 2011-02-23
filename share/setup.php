<?php
require_once('config.php');
require_once('libs/Smarty-3.0.6/libs/Smarty.class.php');

// Configure Timezone $$$ You may want to change this otherwise php will complain
//date_default_timezone_set('America/Los_Angeles');

// Setup Session ... $$$ Uncomment for auth
//session_set_cookie_params(0 , '/', $cfg['SESSION-URL']);
//session_start();

// Load classes $$$ You may want to load some classes by hand
include_once('classes/DB.php');
function __autoload($className)
{
	include_once('classes/'.$className.'.class.php');
}

// configure error reporting and PHP stuff
ini_set('error_reporting', ($config['debug'] ? E_ALL : 0));
ini_set('display_errors', ($config['debug'] ? '1' : '1'));
ini_set('log_errors', ($config['debug'] ? '1' : '1'));
ini_set('error_log', $config['logfile']);

// use W3C-conforming URLS when parameters are appended
ini_set('arg_separator.output', '&amp');

// fall back to using URL for session ID when cookies disabled
ini_set('session.use_trans_sid', '1');

// set up smarty template engine
$template = new Smarty();
$template->template_dir = $config['smarty']['template_dir'];
$template->compile_dir = $config['smarty']['template_compile_dir'];
$template->cache_dir = $config['smarty']['template_cache_dir'];

// assign server variables to base template
$template->assign('request_url', $config['request_url']);
$template->assign('media_url', $config['media_url']);

// assign app variables to base template
$template->assign('debug', $config['debug']);
$template->assign('app_name', $config['app_name']);
$template->assign('app_title', $config['app_title']);
?>
